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
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\CmsDashboardController;
use App\Http\Controllers\LandingController;

// MAIN
// landing page 
Route::get('/', [LandingController::class, 'main'])->name('beranda');
Route::get('/event', fn() => view('main.event.event'))->name('event');
Route::get('/artikel', fn() => view('main.artikel.artikel-page'))->name('artikel');
Route::get('/artikel/detail', fn() => view('main.artikel.content-artikel'))->name('artikel.detail');
Route::get('/guest', [LandingController::class, 'guest'])->name('guest');
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
Route::get('/kelas-form', fn() => view('main.kelas-pro.form'))->name('form.kelas');
Route::get('/maminago', fn() => view('main.maminago.form'))->name('maminago');
Route::post('/maminago/submit', [\App\Http\Controllers\MaminaGoController::class, 'submit'])->name('maminago.submit');
Route::get('/tim-mamina', [TimMaminaController::class, 'index'])->name('tim-mamina');
Route::get('/event/detail-event', fn() => view('main.event.detail-event'))->name('event.detail');
Route::get('/layanan', fn() => view('main.layanan.index'))->name('layanan.index');
Route::get('/layanan-anak', [LayananController::class, 'anakm'])->name('layanan.anak');
Route::get('/layanan-bayi', [LayananController::class, 'bayim'])->name('layanan.bayi');
Route::get('/layanan-ibu', [LayananController::class, 'ibum'])->name('layanan.ibu');
Route::get('/layanan-toddler', [LayananController::class, 'toddlerm'])->name('layanan.toddler');
Route::get('/layanan-imunisasi', [LayananController::class, 'imunisasim'])->name('layanan.imunisasi');
Route::get('/layanan-kelas', [LayananController::class, 'kelasm'])->name('layanan.kelas');
Route::get('/layanan-konsultasi', [LayananController::class, 'konsultasim'])->name('layanan.konsultasi');
Route::get('/layanan-lainnya', [LayananController::class, 'lainnyam'])->name('layanan.lainnya');
Route::get('/layanan-paket', [LayananController::class, 'paketm'])->name('layanan.paket');
Route::get('/layanan-umum', [LayananController::class, 'umumm'])->name('layanan.umum');
Route::get('/jadwal-terapis', [JadwalTerapisController::class, 'index'])->name('jadwal-terapis');
Route::get('/jadwal-terapis/detail', [JadwalTerapisController::class, 'detail'])->name('jadwal-terapis.detail');


// GUEST
Route::prefix('guest')->name('guest.')->group(function () {

    Route::get('/', [LandingController::class, 'guest'])->name('home');
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

    Route::get('/', [LandingController::class, 'member'])->name('home');

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


// ==============================
// ADMIN CMS ROUTES (Terpisah dari member)
// ==============================
Route::prefix('admin')->name('admin.')->group(function () {

    // Login (tidak butuh middleware)
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Protected CMS routes
    Route::middleware('admin.auth')->group(function () {

        // Dashboard
        Route::get('/', [CmsDashboardController::class, 'index'])->name('dashboard');

        // CMS: Main Hero
        Route::get('/cms/hero', [CmsDashboardController::class, 'heroIndex'])->name('cms.hero');
        Route::put('/cms/hero', [CmsDashboardController::class, 'heroUpdate'])->name('cms.hero.update');

        // CMS: About / Tentang Mamina
        Route::get('/cms/about', [CmsDashboardController::class, 'aboutIndex'])->name('cms.about');
        Route::put('/cms/about', [CmsDashboardController::class, 'aboutUpdate'])->name('cms.about.update');

        // CMS: Layanan Unggulan (Landing Page Cards)
        Route::get('/cms/layanan', [CmsDashboardController::class, 'layananIndex'])->name('cms.layanan');
        Route::get('/cms/layanan/create', [CmsDashboardController::class, 'layananCreate'])->name('cms.layanan.create');
        Route::post('/cms/layanan', [CmsDashboardController::class, 'layananStore'])->name('cms.layanan.store');
        Route::get('/cms/layanan/{id}/edit', [CmsDashboardController::class, 'layananEdit'])->name('cms.layanan.edit');
        Route::put('/cms/layanan/{id}', [CmsDashboardController::class, 'layananUpdate'])->name('cms.layanan.update');
        Route::delete('/cms/layanan/{id}', [CmsDashboardController::class, 'layananDestroy'])->name('cms.layanan.destroy');

        // CMS: Semua Layanan (Katalog Layanan & Foto)
        Route::get('/cms/katalog-layanan', [CmsDashboardController::class, 'katalogLayananIndex'])->name('cms.katalog-layanan');
        Route::get('/cms/katalog-layanan/create', [CmsDashboardController::class, 'katalogLayananCreate'])->name('cms.katalog-layanan.create');
        Route::post('/cms/katalog-layanan', [CmsDashboardController::class, 'katalogLayananStore'])->name('cms.katalog-layanan.store');
        Route::get('/cms/katalog-layanan/{id}/edit', [CmsDashboardController::class, 'katalogLayananEdit'])->name('cms.katalog-layanan.edit');
        Route::put('/cms/katalog-layanan/{id}', [CmsDashboardController::class, 'katalogLayananUpdate'])->name('cms.katalog-layanan.update');
        Route::delete('/cms/katalog-layanan/{id}', [CmsDashboardController::class, 'katalogLayananDestroy'])->name('cms.katalog-layanan.destroy');

        // CMS: Terapis & Tim Mamina (Informasi Pribadi & Foto)
        Route::get('/cms/terapis', [CmsDashboardController::class, 'terapisIndex'])->name('cms.terapis');
        Route::get('/cms/terapis/create', [CmsDashboardController::class, 'terapisCreate'])->name('cms.terapis.create');
        Route::post('/cms/terapis', [CmsDashboardController::class, 'terapisStore'])->name('cms.terapis.store');
        Route::get('/cms/terapis/{id}/edit', [CmsDashboardController::class, 'terapisEdit'])->name('cms.terapis.edit');
        Route::put('/cms/terapis/{id}', [CmsDashboardController::class, 'terapisUpdate'])->name('cms.terapis.update');
        Route::delete('/cms/terapis/{id}', [CmsDashboardController::class, 'terapisDestroy'])->name('cms.terapis.destroy');

        // CMS: Testimony
        Route::get('/cms/testimony', [CmsDashboardController::class, 'testimonyIndex'])->name('cms.testimony');
        Route::get('/cms/testimony/create', [CmsDashboardController::class, 'testimonyCreate'])->name('cms.testimony.create');
        Route::post('/cms/testimony', [CmsDashboardController::class, 'testimonyStore'])->name('cms.testimony.store');
        Route::get('/cms/testimony/{id}/edit', [CmsDashboardController::class, 'testimonyEdit'])->name('cms.testimony.edit');
        Route::put('/cms/testimony/{id}', [CmsDashboardController::class, 'testimonyUpdate'])->name('cms.testimony.update');
        Route::delete('/cms/testimony/{id}', [CmsDashboardController::class, 'testimonyDestroy'])->name('cms.testimony.destroy');

        // CMS: FAQ
        Route::get('/cms/faq', [CmsDashboardController::class, 'faqIndex'])->name('cms.faq');
        Route::get('/cms/faq/create', [CmsDashboardController::class, 'faqCreate'])->name('cms.faq.create');
        Route::post('/cms/faq', [CmsDashboardController::class, 'faqStore'])->name('cms.faq.store');
        Route::get('/cms/faq/{id}/edit', [CmsDashboardController::class, 'faqEdit'])->name('cms.faq.edit');
        Route::put('/cms/faq/{id}', [CmsDashboardController::class, 'faqUpdate'])->name('cms.faq.update');
        Route::delete('/cms/faq/{id}', [CmsDashboardController::class, 'faqDestroy'])->name('cms.faq.destroy');

        // CMS: Cabang
        Route::get('/cms/cabang', [CmsDashboardController::class, 'cabangIndex'])->name('cms.cabang');
        Route::get('/cms/cabang/create', [CmsDashboardController::class, 'cabangCreate'])->name('cms.cabang.create');
        Route::post('/cms/cabang', [CmsDashboardController::class, 'cabangStore'])->name('cms.cabang.store');
        Route::get('/cms/cabang/{id}/edit', [CmsDashboardController::class, 'cabangEdit'])->name('cms.cabang.edit');
        Route::put('/cms/cabang/{id}', [CmsDashboardController::class, 'cabangUpdate'])->name('cms.cabang.update');
        Route::delete('/cms/cabang/{id}', [CmsDashboardController::class, 'cabangDestroy'])->name('cms.cabang.destroy');

        // CMS: Artikel
        Route::get('/cms/artikel', [CmsDashboardController::class, 'artikelIndex'])->name('cms.artikel');
        Route::get('/cms/artikel/create', [CmsDashboardController::class, 'artikelCreate'])->name('cms.artikel.create');
        Route::post('/cms/artikel', [CmsDashboardController::class, 'artikelStore'])->name('cms.artikel.store');
        Route::get('/cms/artikel/{id}/edit', [CmsDashboardController::class, 'artikelEdit'])->name('cms.artikel.edit');
        Route::put('/cms/artikel/{id}', [CmsDashboardController::class, 'artikelUpdate'])->name('cms.artikel.update');
        Route::delete('/cms/artikel/{id}', [CmsDashboardController::class, 'artikelDestroy'])->name('cms.artikel.destroy');

        // CMS: Guest Hero
        Route::get('/cms/guest-hero', [CmsDashboardController::class, 'guestHeroIndex'])->name('cms.guest-hero');
        Route::put('/cms/guest-hero', [CmsDashboardController::class, 'guestHeroUpdate'])->name('cms.guest-hero.update');

        // CMS: Settings
        Route::get('/cms/settings', [CmsDashboardController::class, 'settingsIndex'])->name('cms.settings');
        Route::put('/cms/settings', [CmsDashboardController::class, 'settingsUpdate'])->name('cms.settings.update');
    });
});