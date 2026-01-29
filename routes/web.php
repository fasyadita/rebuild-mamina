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

Route::get('/layanan/detail-layanan', function () {
    return view('main.layanan.detail-layanan');
})->name('layanan.detail');

Route::get('/join-member', function () {
    return view('welcome-guest');
});

Route::get('/member', function () {
    return view('welcome-member');
});

