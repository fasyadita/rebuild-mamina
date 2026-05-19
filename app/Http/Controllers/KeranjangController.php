<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class KeranjangController extends Controller
{
    // HALAMAN KERANJANG
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('main.keranjang.keranjang', compact('cart'));
    }

    // TAMBAH KE KERANJANG
    public function add($id)
    {
        $product = Product::findOrFail($id);

        // Ambil cart dari session
        $cart = session()->get('cart', []);

        // Kalau produk sudah ada di cart
        if (isset($cart[$id])) {

            $cart[$id]['qty']++;

        } else {

            // Kalau produk belum ada
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->sale_price,
                'image' => $product->image,
                'qty' => 1
            ];
        }

        // Simpan kembali ke session
        session()->put('cart', $cart);

        return back()->with('success', 'Layanan berhasil ditambahkan ke keranjang ✨');
    }

    // HAPUS ITEM
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Item berhasil dihapus');
    }

    public function decrease($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            if ($cart[$id]['qty'] > 1) {

                $cart[$id]['qty']--;

            } else {

                unset($cart[$id]);
            }

            session()->put('cart', $cart);
        }

        return back();
    }
}
