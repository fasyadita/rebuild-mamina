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

    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        $cartTotal = 0;
        foreach ($cart as $item) {
            $cartTotal += ($item['price'] ?? 0) * ($item['qty'] ?? 1);
        }

        return view('main.reservasi.reservasi', [
            'branches'  => $this->branches,
            'cart'      => $cart,
            'cartTotal' => $cartTotal,
        ]);
    }

    public function select(Request $request)
    {
        $data = $request->validate([
            'branch'  => ['required', 'in:malang,kediri'],
            'service' => ['required', 'in:outlet,homecare'],
            'date'    => ['required', 'date'],
            'time'    => ['nullable', 'string', 'max:50'],
        ]);

        // Simpan pilihan ke session agar bisa dipakai di halaman form-input
        session([
            'reservasi.branch'  => $data['branch'],
            'reservasi.service' => $data['service'],
            'reservasi.date'    => $data['date'],
            'reservasi.time'    => $data['time'] ?? '',
        ]);

        return redirect()->route('reservasi.form-input');
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
            'branch'    => $branch,
            'service'   => $service,
            'branches'  => $this->branches,
            'cart'      => $cart,
            'cartTotal' => $cartTotal,
        ]);
    }

    public function submit(Request $request)
    {
        $service = $request->input('service');
        $branch  = $request->input('branch');

        // Fallback to session if hidden inputs are empty
        if (empty($service)) $service = session('reservasi.service', 'outlet');
        if (empty($branch))  $branch  = session('reservasi.branch', 'malang');

        $cart = $request->session()->get('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Keranjang masih kosong. Tambahkan layanan terlebih dahulu.');
        }

        // Validate branch
        if (!array_key_exists($branch, $this->branches)) {
            return back()->with('error', 'Cabang tidak valid.')->withInput();
        }

        $rules = [
            'name'               => ['required', 'string', 'max:255'],
            'no_tlp'             => ['required', 'string', 'max:20'],
            'pregnancy_age'      => ['nullable', 'string', 'max:100'],
            'baby_nickname'      => ['nullable', 'string', 'max:255'],
            'baby_age'           => ['nullable', 'string', 'max:50'],
            'complaint'          => ['nullable', 'string', 'max:500'],
            'address'            => ['nullable', 'string', 'max:1000'],
            'referral'           => ['nullable', 'string', 'max:255'],
            'is_member'          => ['nullable', 'string', 'max:10'],
        ];

        $validated = $request->validate($rules);

        // Get date & time — prefer form input, fallback to session
        $date = $request->input('date') ?: session('reservasi.date', date('Y-m-d'));
        $time = $request->input('time') ?: session('reservasi.time', '');

        // Save to Database
        try {
            $branchId = ($branch === 'kediri') ? 2 : 1;

            $reservasi = \App\Models\Reservasi::create([
                'id_number'      => 'RES-' . date('YmdHis') . rand(100, 999),
                'branch_id'      => $branchId,
                'sale_type'      => $service,
                'nama_cust'      => $validated['name'] ?? '',
                'nama_anak'      => $validated['baby_nickname'] ?? '',
                'usia_kehamilan' => $validated['pregnancy_age'] ?? '',
                'usia_anak'      => $validated['baby_age'] ?? '',
                'no_tlp'         => $validated['no_tlp'] ?? '-',
                'tanggal'        => $date,
                'sesi'           => $time,
                'status'         => 'Pending',
                'note'           => $validated['complaint'] ?? '',
                'user_id'        => auth()->id(),
            ]);

            foreach ($cart as $item) {
                \App\Models\Detail::create([
                    'reservation_id' => $reservasi->id,
                    'product_id'     => $item['id'] ?? null,
                    'service_name'   => $item['name'] ?? 'Layanan',
                    'therapist_id'   => null,
                    'qty'            => $item['qty'] ?? 1,
                    'note'           => '',
                ]);
            }

            // Clear session setelah berhasil
            $request->session()->forget(['cart', 'reservasi']);

            return redirect()->route('beranda')->with('success', 'Pengajuan reservasi berhasil dikirim! ✅');

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Error saving reservasi: ' . $e->getMessage());
            return back()
                ->with('error', 'Gagal menyimpan reservasi: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function formInput(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        $cartTotal = 0;
        foreach ($cart as $item) {
            $cartTotal += ($item['price'] ?? 0) * ($item['qty'] ?? 1);
        }

        $branch  = session('reservasi.branch', 'malang');
        $service = session('reservasi.service', 'outlet');
        $date    = session('reservasi.date', date('Y-m-d'));
        $time    = session('reservasi.time', '');

        return view('main.reservasi.form-input', [
            'cart'      => $cart,
            'cartTotal' => $cartTotal,
            'branch'    => $branch,
            'service'   => $service,
            'date'      => $date,
            'time'      => $time,
            'branches'  => $this->branches,
        ]);
    }
}
