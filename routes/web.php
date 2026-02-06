<?php

use Illuminate\Support\Facades\Route;

// main 
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/reservasi', function () {
        return view('main.reservasi.reservasi');
    });

    Route::get('/pricelist', function () {
        return view('main.pricelist.pricelist');
    });

    Route::get('/tim-mamina', function () {
        return view('main.tim-mamina.tim-mamina');
    });

    Route::get('/event', function () {
        return view('main.event.event');
    });

    Route::get('/event/detail-event', function () {
        return view('main.event.detail-event');
    })->name('event.detail');

    Route::get('/layanan', function () {
        return view('main.layanan.index');
    })->name('layanan.index');

    Route::get('/layanan/detail-layanan-anak', function () {
        return view('main.layanan.detail-layanan-anak');
    })->name('layanan.detail');

    
Route::prefix('guest')->name('guest.')->group(function () {

    Route::get('/', function () {
        return view('welcome-guest');
    });

    Route::get('/terapis', function () {
        return view('guest.terapis.terapis');
    });

    Route::get('/cabang', function () {
        return view('guest.cabang.cabang');
    });

    Route::get('/login', function () {
        return view('guest.login-regist.login');
    });
    Route::get('/regist', function () {
        return view('guest.login-regist.regist');
    });

    Route::get('/layanan-anak', function () {
        return view('guest.layanan.layanan-anak');
    });

    Route::get('/layanan-bayi', function () {
        return view('guest.layanan.layanan-bayi');
    });

    Route::get('/layanan-ibu', function () {
        return view('guest.layanan.layanan-ibu');
    });
    
    Route::get('/layanan-imunisasi', function () {
        return view('guest.layanan.layanan-imunisasi');
    });

    Route::get('/layanan-kelas', function () {
        return view('guest.layanan.layanan-kelas');
    });

    Route::get('/layanan-konsultasi', function () {
        return view('guest.layanan.layanan-konsultasi');
    });

    Route::get('/layanan-paket', function () {
        return view('guest.layanan.layanan-paket');
    });

    Route::get('/layanan-toddler', function () {
        return view('guest.layanan.layanan-toddler');
    });

    Route::get('/layanan-umum', function () {
        return view('guest.layanan.layanan-umum');
    });

    Route::get('/layanan-lainnya', function () {
        return view('guest.layanan.layanan-lainnya');
    });

});

Route::prefix('member')->name('member.')->group(function () {

    Route::get('/', function () {
        return view('welcome-member');
    });

    Route::get('/terapis', function () {
        return view('member.terapis.terapis');
    });

    Route::get('/cabang', function () {
        return view('member.cabang.cabang');
    });

    Route::get('/riwayat-reservasi', function () {
        return view('member.reservasi.reservasi');
    });
    Route::get('/anak', function () {
        return view('member.anak.anak');
    });
    Route::get('/profile', function () {
        return view('member.profile.profile');
    });

    Route::get('/edit-profile', function () {
        return view('member.profile.edit-profile');
    });

    Route::get('/change-password', function () {
        return view('member.profile.change-password');
    });

    Route::get('/reset-password', function () {
        return view('member.profile.reset-password');
    });

    Route::get('/layanan-anak', function () {
        return view('member.layanan.layanan-anak');
    });

    Route::get('/layanan-bayi', function () {
        return view('member.layanan.layanan-bayi');
    });

    Route::get('/layanan-ibu', function () {
        return view('member.layanan.layanan-ibu');
    });
    
    Route::get('/layanan-imunisasi', function () {
        return view('member.layanan.layanan-imunisasi');
    });

    Route::get('/layanan-kelas', function () {
        return view('member.layanan.layanan-kelas');
    });

    Route::get('/layanan-konsultasi', function () {
        return view('member.layanan.layanan-konsultasi');
    });

    Route::get('/layanan-paket', function () {
        return view('member.layanan.layanan-paket');
    });

    Route::get('/layanan-toddler', function () {
        return view('member.layanan.layanan-toddler');
    });

    Route::get('/layanan-umum', function () {
        return view('member.layanan.layanan-umum');
    });

    Route::get('/layanan-lainnya', function () {
        return view('member .layanan.layanan-lainnya');
    });
});
