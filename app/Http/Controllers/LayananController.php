<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('member.layanan.service');
    }

    private function getProductsByCategory(Request $request, $categoryId)
    {
        $search = $request->input('search');
        return Product::where('category_id', $categoryId)
            ->where('is_active', '1')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->get();
    }

    public function anak(Request $request)
    {
        $products = $this->getProductsByCategory($request, 1);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-anak", compact('products'));
    }
    public function bayi(Request $request)
    {
        $babyProducts = $this->getProductsByCategory($request, 2);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-bayi", compact('babyProducts'));
    }
    public function ibu(Request $request)
    {
        $momProducts = $this->getProductsByCategory($request, 5);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-ibu", compact('momProducts'));
    }
    public function imunisasi(Request $request)
    {
        $imunProducts = $this->getProductsByCategory($request, 17);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-imunisasi", compact('imunProducts'));
    }
    public function kelas(Request $request)
    {
        $classProducts = $this->getProductsByCategory($request, 6);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-kelas", compact('classProducts'));
    }
    public function konsultasi(Request $request)
    {
        $konsulProducts = $this->getProductsByCategory($request, 18);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-konsultasi", compact('konsulProducts'));
    }
    public function paket(Request $request)
    {
        $packageProducts = $this->getProductsByCategory($request, 8);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-paket", compact('packageProducts'));
    }
    public function toddler(Request $request)
    {
        $todlerProducts = $this->getProductsByCategory($request, 9);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-toddler", compact('todlerProducts'));
    }
    public function lainnya(Request $request)
    {
        $otherProducts = $this->getProductsByCategory($request, 7);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-lainnya", compact('otherProducts'));
    }
    public function umum(Request $request)
    {
        $umumProducts = $this->getProductsByCategory($request, 10);
        $viewPrefix = request()->is('member/*') ? 'member' : 'guest';
        return view("{$viewPrefix}.layanan.layanan-umum", compact('umumProducts'));
    }


    public function anakm(Request $request)
    {
        $products = $this->getProductsByCategory($request, 1);
        return view("main.layanan.detail-layanan-anak", compact('products'));
    }
    public function bayim(Request $request)
    {
        $babyProducts = $this->getProductsByCategory($request, 2);
        return view("main.layanan.detail-layanan-bayi", compact('babyProducts'));
    }
    public function ibum(Request $request)
    {
        $momProducts = $this->getProductsByCategory($request, 5);
        return view("main.layanan.detail-layanan-ibu", compact('momProducts'));
    }
    public function imunisasim(Request $request)
    {
        $imunProducts = $this->getProductsByCategory($request, 17);
        return view("main.layanan.detail-layanan-imunisasi", compact('imunProducts'));
    }
    public function kelasm(Request $request)
    {
        $classProducts = $this->getProductsByCategory($request, 6);
        return view("main.layanan.detail-layanan-kelas", compact('classProducts'));
    }
    public function konsultasim(Request $request)
    {
        $konsulProducts = $this->getProductsByCategory($request, 18);
        return view("main.layanan.detail-layanan-konsultasi", compact('konsulProducts'));
    }
    public function paketm(Request $request)
    {
        $packageProducts = $this->getProductsByCategory($request, 8);
        return view("main.layanan.detail-layanan-paket", compact('packageProducts'));
    }
    public function toddlerm(Request $request)
    {
        $todlerProducts = $this->getProductsByCategory($request, 9);
        return view("main.layanan.detail-layanan-toddler", compact('todlerProducts'));
    }
    public function lainnyam(Request $request)
    {
        $otherProducts = $this->getProductsByCategory($request, 7);
        return view("main.layanan.detail-layanan-lainnya", compact('otherProducts'));
    }
    public function umumm(Request $request)
    {
        $umumProducts = $this->getProductsByCategory($request, 10);
        return view("main.layanan.detail-layanan-umum", compact('umumProducts'));
    }
}
