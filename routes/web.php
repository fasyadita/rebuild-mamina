<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimMaminaController;

// MAIN
// landing page 
Route::get('/', fn() => view('welcome'))->name('beranda');
Route::get('/event', fn() => view('main.event.event'))->name('event');
Route::get('/guest', fn() => view('welcome-guest'))->name('guest');
Route::get('/keranjang', fn() => view('main.keranjang.keranjang'))->name('keranjang');
Route::get('/reservasi', fn() => view('main.reservasi.reservasi'));
Route::get('/reservasi/outlet', fn() => view('main.reservasi.form-reservasi-outlet'));
Route::get('/pricelist', fn() => view('main.pricelist.pricelist'));
Route::get('/tim-mamina', [TimMaminaController::class, 'index']);
Route::get('/event/detail-event', fn() => view('main.event.detail-event'))->name('event.detail');
Route::get('/layanan/anak', fn() => view('main.layanan.detail-layanan-anak'))->name('layanan.anak');
Route::get('/layanan/bayi', fn() => view('main.layanan.detail-layanan-bayi'))->name('layanan.bayi');
Route::get('/layanan/toddler', fn() => view('main.layanan.detail-layanan-toddler'))->name('layanan.toddler');
Route::get('/layanan/ibu', fn() => view('main.layanan.detail-layanan-ibu'))->name('layanan.ibu');
Route::get('/layanan/imunisasi', fn() => view('main.layanan.detail-layanan-imunisasi'))->name('layanan.imunisasi');
Route::get('/layanan/kelas', fn() => view('main.layanan.detail-layanan-kelas'))->name('layanan.kelas');
Route::get('/layanan/konsultasi', fn() => view('main.layanan.detail-layanan-konsultasi'))->name('layanan.konsultasi');
Route::get('/layanan/lainnya', fn() => view('main.layanan.detail-layanan-lainnya'))->name('layanan.lainnya');
Route::get('/layanan/paket', fn() => view('main.layanan.detail-layanan-paket'))->name('layanan.paket');
Route::get('/layanan/umum', fn() => view('main.layanan.detail-layanan-umum'))->name('layanan.umum');


// GUEST
Route::prefix('guest')->name('guest.')->group(function () {

    Route::get('/', fn() => view('welcome-guest'))->name('home');
    Route::get('/terapis', fn() => view('guest.terapis.terapis'))->name('terapis');
    Route::get('/cabang', fn() => view('guest.cabang.cabang'))->name('cabang');
    Route::get('/login', fn() => view('guest.login-regist.login'))->name('login');
    Route::get('/regist', fn() => view('guest.login-regist.regist'))->name('regist');

    Route::get('/layanan-anak', fn() => view('guest.layanan.layanan-anak'))->name('layanan.anak');
    Route::get('/layanan-bayi', fn() => view('guest.layanan.layanan-bayi'))->name('layanan.bayi');
    Route::get('/layanan-ibu', fn() => view('guest.layanan.layanan-ibu'))->name('layanan.ibu');
    Route::get('/layanan-imunisasi', fn() => view('guest.layanan.layanan-imunisasi'))->name('layanan.imunisasi');
    Route::get('/layanan-kelas', fn() => view('guest.layanan.layanan-kelas'))->name('layanan.kelas');
    Route::get('/layanan-konsultasi', fn() => view('guest.layanan.layanan-konsultasi'))->name('layanan.konsultasi');
    Route::get('/layanan-paket', fn() => view('guest.layanan.layanan-paket'))->name('layanan.paket');
    Route::get('/layanan-toddler', fn() => view('guest.layanan.layanan-toddler'))->name('layanan.toddler');
    Route::get('/layanan-umum', fn() => view('guest.layanan.layanan-umum'))->name('layanan.umum');
    Route::get('/layanan-lainnya', fn() => view('guest.layanan.layanan-lainnya'))->name('layanan.lainnya');

});


// MEMBER
Route::prefix('member')->name('member.')->group(function () {

    Route::get('/', fn() => view('welcome-member'))->name('home');

    Route::get('/terapis', fn() => view('member.terapis.terapis'))->name('terapis');
    Route::get('/cabang', fn() => view('member.cabang.cabang'))->name('cabang');

    Route::get('/riwayat-reservasi', fn() => view('member.reservasi.reservasi'))->name('reservasi');
    Route::get('/anak', fn() => view('member.anak.anak'))->name('anak');

    Route::get('/profile', fn() => view('member.profile.profile'))->name('profile');
    Route::get('/edit-profile', fn() => view('member.profile.edit-profile'))->name('edit-profile');
    Route::get('/change-password', fn() => view('member.profile.change-password'))->name('change-password');
    Route::get('/reset-password', fn() => view('member.profile.reset-password'))->name('reset-password');

    Route::get('/layanan-anak', fn() => view('member.layanan.layanan-anak'))->name('layanan.anak');
    Route::get('/layanan-bayi', fn() => view('member.layanan.layanan-bayi'))->name('layanan.bayi');
    Route::get('/layanan-ibu', fn() => view('member.layanan.layanan-ibu'))->name('layanan.ibu');
    Route::get('/layanan-imunisasi', fn() => view('member.layanan.layanan-imunisasi'))->name('layanan.imunisasi');
    Route::get('/layanan-kelas', fn() => view('member.layanan.layanan-kelas'))->name('layanan.kelas');
    Route::get('/layanan-konsultasi', fn() => view('member.layanan.layanan-konsultasi'))->name('layanan.konsultasi');
    Route::get('/layanan-paket', fn() => view('member.layanan.layanan-paket'))->name('layanan.paket');
    Route::get('/layanan-toddler', fn() => view('member.layanan.layanan-toddler'))->name('layanan.toddler');
    Route::get('/layanan-umum', fn() => view('member.layanan.layanan-umum'))->name('layanan.umum');
    Route::get('/layanan-lainnya', fn() => view('member.layanan.layanan-lainnya'))->name('layanan.lainnya');

});