<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/join-member', function () {
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