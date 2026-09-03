<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaminaGoController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'profesi' => 'required|string|max:255',
            'kota_operasi' => 'required|string|max:255',
            'cv' => 'required|string',
        ]);

        // Ambil data
        $nama = $request->input('nama_lengkap');
        $profesi = $request->input('profesi');
        $kota = $request->input('kota_operasi');
        $cv = $request->input('cv');

        // Susun pesan WhatsApp
        $pesan = "Halo saya {$nama} berprofesi di bidang {$profesi} di daerah {$kota} tertarik untuk menjadi mitra maminago. berikut link drive cv dan str saya {$cv},terima kasih.";

        // Encode pesan ke format URL (mengubah spasi jadi %20, dll)
        $encodedPesan = urlencode($pesan);

        // Nomor WA tujuan
        $waNumber = "6281357046700";

        // Redirect ke link WhatsApp
        return redirect()->away("https://wa.me/{$waNumber}?text={$encodedPesan}");
    }
}
