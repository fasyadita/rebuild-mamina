<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimMaminaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JadwalTerapisController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\RiwayatReservasiController;

// MAIN
// landing page 
Route::get('/', fn() => view('welcome'))->name('beranda');
Route::get('/event', fn() => view('main.event.event'))->name('event');
Route::get('/artikel', fn() => view('main.artikel.artikel-page'))->name('artikel');
Route::get('/artikel/detail', fn() => view('main.artikel.content-artikel'))->name('artikel.detail');
Route::get('/guest', fn() => view('welcome-guest'))->name('guest');
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');
Route::get('/reservasi/form-input', [ReservasiController::class, 'formInput'])->name('reservasi.form-input');
Route::post('/cart/add/{id}', [KeranjangController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [KeranjangController::class, 'remove'])->name('cart.remove');
Route::post('/cart/decrease/{id}', [KeranjangController::class, 'decrease'])->name('cart.decrease');
Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi');
Route::post('/reservasi/select', [ReservasiController::class, 'select'])->name('reservasi.select');
Route::get('/reservasi/{service}', [ReservasiController::class, 'form'])->name('reservasi.form');
Route::post('/reservasi/submit', [ReservasiController::class, 'submit'])->name('reservasi.submit');
Route::get('/pricelist', fn() => view('main.pricelist.pricelist'));
Route::get('/maminago', fn() => view('main.maminago.form'))->name('maminago');
Route::post('/maminago/submit', [\App\Http\Controllers\MaminaGoController::class, 'submit'])->name('maminago.submit');
Route::get('/tim-mamina', [TimMaminaController::class, 'index'])->name('tim-mamina');
Route::get('/event/detail-event', fn() => view('main.event.detail-event'))->name('event.detail');
Route::get('/layanan', fn() => view('main.layanan.index'))->name('layanan.index');
Route::get('/layanan-anak', [LayananController::class, 'anak'])->name('layanan.anak');
Route::get('/layanan-bayi', [LayananController::class, 'bayi'])->name('layanan.bayi');
Route::get('/layanan-ibu', [LayananController::class, 'ibu'])->name('layanan.ibu');
Route::get('/layanan-toddler', [LayananController::class, 'toddler'])->name('layanan.toddler');
Route::get('/layanan-imunisasi', [LayananController::class, 'imunisasi'])->name('layanan.imunisasi');
Route::get('/layanan-kelas', [LayananController::class, 'kelas'])->name('layanan.kelas');
Route::get('/layanan-konsultasi', [LayananController::class, 'konsultasi'])->name('layanan.konsultasi');
Route::get('/layanan-lainnya', [LayananController::class, 'lainnya'])->name('layanan.lainnya');
Route::get('/layanan-paket', [LayananController::class, 'paket'])->name('layanan.paket');
Route::get('/layanan-umum', [LayananController::class, 'umum'])->name('layanan.umum');
Route::get('/jadwal-terapis', [JadwalTerapisController::class, 'index'])->name('jadwal-terapis');
Route::get('/jadwal-terapis/detail', [JadwalTerapisController::class, 'detail'])->name('jadwal-terapis.detail');


// GUEST
Route::prefix('guest')->name('guest.')->group(function () {

    Route::get('/', fn() => view('welcome-guest'))->name('home');
    Route::get('/service', fn() => view('guest.layanan.service'))->name('service');
    Route::get('/terapis', fn() => view('guest.terapis.terapis'))->name('terapis');
    Route::get('/terapis', [TimMaminaController::class, 'guestIndex'])->name('terapis');
    Route::get('/cabang', fn() => view('guest.cabang.cabang'))->name('cabang');
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/regist', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/regist', [AuthController::class, 'register'])->name('register.post');
    Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot', [AuthController::class, 'sendResetLink'])->name('forgot.post');
    Route::get('/verifikasi', [AuthController::class, 'showVerifikasiForm'])->name('verifikasi');
    Route::post('/verifikasi', [AuthController::class, 'verifyOTP'])->name('verifikasi.post');
    Route::get('/new-password', [AuthController::class, 'showNewPasswordForm'])->name('new-password');
    Route::post('/new-password', [AuthController::class, 'updatePassword'])->name('new-password.post');
    Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('login.google.callback');

    Route::get('/layanan-anak', [LayananController::class, 'anak'])->name('layanan.anak');
    Route::get('/layanan-bayi', [LayananController::class, 'bayi'])->name('layanan.bayi');
    Route::get('/layanan-ibu', [LayananController::class, 'ibu'])->name('layanan.ibu');
    Route::get('/layanan-imunisasi', [LayananController::class, 'imunisasi'])->name('layanan.imunisasi');
    Route::get('/layanan-kelas', [LayananController::class, 'kelas'])->name('layanan.kelas');
    Route::get('/layanan-konsultasi', [LayananController::class, 'konsultasi'])->name('layanan.konsultasi');
    Route::get('/layanan-paket', [LayananController::class, 'paket'])->name('layanan.paket');
    Route::get('/layanan-toddler', [LayananController::class, 'toddler'])->name('layanan.toddler');
    Route::get('/layanan-umum', [LayananController::class, 'umum'])->name('layanan.umum');
    Route::get('/layanan-lainnya', [LayananController::class, 'lainnya'])->name('layanan.lainnya');

});


// MEMBER
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('member')->name('member.')->middleware('auth')->group(function () {

    Route::get('/', fn() => view('welcome-member'))->name('home');

    Route::get('/terapis', [TimMaminaController::class, 'memberIndex'])->name('terapis');
    Route::get('/cabang', fn() => view('member.cabang.cabang'))->name('cabang');

    Route::get('/riwayat-reservasi', [RiwayatReservasiController::class, 'index'])->name('reservasi');
    Route::get('/anak', [AnakController::class, 'index'])->name('anak');
    Route::post('/anak/store', [AnakController::class, 'storeKids'])->name('anak.store');
    Route::post('/anak/store-growth', [AnakController::class, 'storeGrowth'])->name('growth.store');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('edit-profile');
    Route::put('/edit-profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/change-password', fn() => view('member.profile.change-password'))->name('change-password');
    Route::get('/reset-password', fn() => view('member.profile.reset-password'))->name('reset-password');
    Route::post('/reset-password', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::get('/services', [LayananController::class, 'index'])->name('services');
    Route::get('/layanan-anak', [LayananController::class, 'anak'])->name('layanan.anak');
    Route::get('/layanan-bayi', [LayananController::class, 'bayi'])->name('layanan.bayi');
    Route::get('/layanan-ibu', [LayananController::class, 'ibu'])->name('layanan.ibu');
    Route::get('/layanan-imunisasi', [LayananController::class, 'imunisasi'])->name('layanan.imunisasi');
    Route::get('/layanan-kelas', [LayananController::class, 'kelas'])->name('layanan.kelas');
    Route::get('/layanan-konsultasi', [LayananController::class, 'konsultasi'])->name('layanan.konsultasi');
    Route::get('/layanan-paket', [LayananController::class, 'paket'])->name('layanan.paket');
    Route::get('/layanan-toddler', [LayananController::class, 'toddler'])->name('layanan.toddler');
    Route::get('/layanan-umum', [LayananController::class, 'umum'])->name('layanan.umum');
    Route::get('/layanan-lainnya', [LayananController::class, 'lainnya'])->name('layanan.lainnya');

});