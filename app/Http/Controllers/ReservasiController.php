<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ReservasiController extends Controller
{
    private array $branches = [
        'malang' => 'Malang',
        'kediri' => 'Kediri',
    ];

    private array $adminPhones = [
        'malang' => '6287782169276',
        'kediri' => '6287782169276',
    ];

    public function index()
    {
        return view('main.reservasi.reservasi', [
            'branches' => $this->branches,
        ]);
    }

    public function select(Request $request)
    {
        $data = $request->validate([
            'branch' => ['required', 'in:malang,kediri'],
            'service' => ['required', 'in:outlet,homecare'],
        ]);

        return redirect()->route('reservasi.form', ['service' => $data['service'], 'branch' => $data['branch']]);
    }

    public function form(string $service, Request $request)
    {
        if (!in_array($service, ['outlet', 'homecare'])) {
            abort(404);
        }

        $branch = $request->query('branch', 'malang');

        if (!array_key_exists($branch, $this->branches)) {
            abort(404);
        }

        $cart = $request->session()->get('cart', []);
        $cartTotal = 0;

        foreach ($cart as $item) {
            $cartTotal += ($item['price'] ?? 0) * ($item['qty'] ?? 1);
        }

        $view = $service === 'homecare'
            ? 'main.reservasi.form-reservasi-homecare'
            : 'main.reservasi.form-reservasi-outlet';

        return view($view, [
            'branch' => $branch,
            'service' => $service,
            'branches' => $this->branches,
            'cart' => $cart,
            'cartTotal' => $cartTotal,
        ]);
    }

    public function submit(Request $request)
    {
        $service = $request->input('service');
        $branch = $request->input('branch');
        $cart = $request->session()->get('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Keranjang masih kosong. Tambahkan layanan terlebih dahulu.');
        }

        $rules = [
            'service' => ['required', 'in:outlet,homecare'],
            'branch' => ['required', 'in:malang,kediri'],
            'name' => ['required', 'string', 'max:255'],
            'pregnancy_age' => ['nullable', 'string', 'max:100'],
            'child_name' => ['nullable', 'string', 'max:255'],
            'baby_age' => ['nullable', 'string', 'max:50'],
            'complaint' => ['nullable', 'string', 'max:500'],
            'previous_treatment' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:500'],
            'referral' => ['nullable', 'string', 'max:255'],
            'is_member' => ['nullable', 'in:Sudah,Belum'],
            'payment_method' => ['required', 'in:Tunai,Transfer'],
            'date' => ['required', 'date'],
        ];

        if ($service === 'homecare') {
            $rules['address'] = ['required', 'string', 'max:500'];
        }

        // additional rules for OUTLET specific fields
        if ($service === 'outlet') {
            $rules['outlet_choice'] = ['required', 'in:Sawojajar,Suhat'];
            $rules['time'] = ['required', 'string', 'max:50'];
            $rules['baby_nickname'] = ['nullable', 'string', 'max:255'];
            $rules['baby_age'] = ['nullable', 'string', 'max:50'];
            $rules['complaint'] = ['nullable', 'string', 'max:500'];
        }

        $validated = $request->validate($rules);

        if (!array_key_exists($branch, $this->branches)) {
            abort(404);
        }

        $cart = session()->get('cart', []);
        $cartText = '';
        $total = 0;

        if (!empty($cart)) {
            foreach ($cart as $item) {
                $subtotal = ($item['price'] ?? 0) * ($item['qty'] ?? 1);
                $total += $subtotal;
                $cartText .= sprintf("- %s x%s: Rp %s\n", $item['name'] ?? 'Layanan', $item['qty'] ?? 1, number_format($subtotal, 0, ',', '.'));
            }

            $cartText .= "\nTotal Keranjang: Rp " . number_format($total, 0, ',', '.') . "\n";
        } else {
            $cartText = "- Tidak ada layanan di keranjang saat ini.\n";
        }

        // Build message specifically formatted for OUTLET, otherwise keep generic
        if ($service === 'outlet') {
            $dayEng = Carbon::parse($validated['date'])->format('l');
            $dayMap = [
                'Monday' => 'Senin',
                'Tuesday' => 'Selasa',
                'Wednesday' => 'Rabu',
                'Thursday' => 'Kamis',
                'Friday' => 'Jumat',
                'Saturday' => 'Sabtu',
                'Sunday' => 'Minggu',
            ];

            $dayIndo = $dayMap[$dayEng] ?? $dayEng;

            $message = "Mohon Diisi Dengan Lengkap Bunda dan Memakai Format yang Kami Kirimkan\n\n";
            $message .= "🥦 *Reservasi OUTLET Mamina " . $this->branches[$branch] . "* 🥦 \n\n";
            $message .= "*Pilihan Outlet* :";
            $message .= "(" . ($validated['outlet_choice'] ?? '-') . ")\n\n";
            $message .= "*Nama Bunda* : " . ($validated['name'] ?? '-') . "\n";
            $message .= "*Usia Kehamilan* : " . ($validated['pregnancy_age'] ?: '-') . "\n";
            $message .= "(Jika treatment bumil) \n";
            $message .= "*Nama Panggilan Bayi* : " . ($validated['baby_nickname'] ?: '-') . "\n";
            $message .= "*Usia Bayi* : " . ($validated['baby_age'] ?: '-') . "\n";
            $message .= "*Keluhan* : " . ($validated['complaint'] ?: '-') . "\n";
            $message .= "*Tanggal Treatment* : " . ($validated['date'] ?? '-') . "\n";
            $message .= "*Hari Treatment* : " . $dayIndo . "\n";
            $message .= "*Jam Treatment* : " . ($validated['time'] ?? '-') . "\n";
            $message .= "*Jenis Pembayaran* : " . ($validated['payment_method'] ?? '-') . "\n";
            $message .= "(Tunai/Transfer) \n";
            $message .= "*Tau Mamina dari* : " . ($validated['referral'] ?: '-') . "\n";
            $message .= "*Pernah Treatment atau Baru Pertama Kali* : " . ($validated['previous_treatment'] ?: '-') . "\n";
            $message .= "*Sudah Mendaftar Member*: " . ($validated['is_member'] ?: '-') . "\n\n";
            $message .= "*MOHON DI ISI DENGAN LENGKAP NGGIH*🙏\n\n";
            $message .= "🌸 *Jika form tidak diisi dalam waktu 10 menit maka akan kami berikan slotnya ke bunda lain jika ada yang reservasi lebih dahulu*🌸\n\n";
            $message .= "🌸 *Harap Datang Tepat Waktu Sesuai Dengan Jam Reservasi Nggih Bunda, Konfirmasi Telat Maksimal 2 Jam Sebelum Jadwal Treatment, Apabila Telat Tanpa Konfirmasi Lebih Dari 10 Menit Akan Kami Anggap Cancel*🌸\n\n";
            $message .= "🌸 *TERIMAKASIH* 🌸\n";
            $message .= "🌸 *MAMINA " . $this->branches[$branch] . "* 🌸\n\n";

            $message .= "*Detail Keranjang*\n" . $cartText;
        } else {
            
            $message = "Mohon Diisi Dengan Lengkap Bunda dan Memakai Format yang Kami Kirimkan\n\n";
            $message .= "🥦 *Reservasi HOMECARE Mamina " . $this->branches[$branch] . "* 🥦 \n\n";
            $message .= "*Nama Bunda* : " . ($validated['name'] ?? '-') . "\n";
            $message .= "*Usia Kehamilan* : " . ($validated['pregnancy_age'] ?: '-') . "\n";
            $message .= "(Jika treatment bumil) \n";
            $message .= "*Usia Bayi* : " . ($validated['baby_age'] ?: '-') . "\n";
            $message .= "*Keluhan* : " . ($validated['complaint'] ?: '-') . "\n";
            $message .= "*Tanggal Treatment* : " . ($validated['date'] ?? '-') . "\n";
            $message .= "*Jenis Pembayaran* : " . ($validated['payment_method'] ?? '-') . "\n";
            $message .= "(Tunai/Transfer) \n";
            $message .= "*Tau Mamina dari* : " . ($validated['referral'] ?: '-') . "\n";
            $message .= "*Pernah Treatment atau Baru Pertama Kali* : " . ($validated['previous_treatment'] ?: '-') . "\n";
            $message .= "*Sudah Mendaftar Member*: " . ($validated['is_member'] ?: '-') . "\n\n";
            $message .= "*MOHON DI ISI DENGAN LENGKAP NGGIH*🙏\n\n";
            $message .= "🌸 *Jika form tidak diisi dalam waktu 10 menit maka akan kami berikan slotnya ke bunda lain jika ada yang reservasi lebih dahulu*🌸\n\n";
            $message .= "🌸 *Harap Datang Tepat Waktu Sesuai Dengan Jam Reservasi Nggih Bunda, Konfirmasi Telat Maksimal 2 Jam Sebelum Jadwal Treatment, Apabila Telat Tanpa Konfirmasi Lebih Dari 10 Menit Akan Kami Anggap Cancel*🌸\n\n";
            $message .= "🌸 *TERIMAKASIH* 🌸\n";
            $message .= "🌸 *MAMINA " . $this->branches[$branch] . "* 🌸\n\n";

            $message .= "*Detail Keranjang*\n" . $cartText;
        }
        $phone = $this->adminPhones[$branch] ?? reset($this->adminPhones);
        $whatsappUrl = 'https://wa.me/' . $phone . '?text=' . urlencode($message);

        return redirect()->away($whatsappUrl);
    }
}
