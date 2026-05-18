<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function anak()
    {
        // category_id = 1 for Layanan Anak
        $products = Product::where('category_id', 1)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-anak', compact('products'));
    }
    public function bayi()
    {
        $babyProducts = Product::where('category_id', 2)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-bayi', compact('babyProducts'));
    }
    public function ibu()
    {
        $momProducts = Product::where('category_id', 5)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-ibu', compact('momProducts'));
    }
    public function imunisasi()
    {
        $imunProducts = Product::where('category_id', 17)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-imunisasi', compact('imunProducts'));
    }
    public function kelas()
    {
        $classProducts = Product::where('category_id', 6)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-kelas', compact('classProducts'));
    }
    public function konsultasi()
    {
        $konsulProducts = Product::where('category_id', 18)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-konsultasi', compact('konsulProducts'));
    }
    public function paket()
    {
        $packageProducts = Product::where('category_id', 8)
        ->where('is_active', '1')
        ->get();
        
        return view('guest.layanan.layanan-paket', compact('packageProducts'));
    }
    public function toddler()
    {
        $todlerProducts = Product::where('category_id', 9)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-toddler', compact('todlerProducts'));
    }
    public function lainnya()
    {
        $otherProducts = Product::where('category_id', 7)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-lainnya', compact('otherProducts'));
    }


    public function umum()
    {
        $umumProducts = Product::where('category_id', 10)
            ->where('is_active', '1')
            ->get();

        return view('guest.layanan.layanan-umum', compact('umumProducts'));
    }
}

