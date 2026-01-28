<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservasi', function () {
    return view('reservasi.reservasi');
});

Route::get('/pricelist', function () {
    return view('pricelist.pricelist');
});

Route::get('/tim-mamina', function () {
    return view('tim-mamina.tim-mamina');
});
Route::get('/event', function () {
    return view('event.event');
});
Route::get('/event/detail-event', function () {
    return view('event.detail-event');
})->name('event.detail');

Route::get('/layanan', function () {
    return view('layanan.index');
})->name('layanan.index');

Route::get('/layanan/detail-layanan', function () {
    return view('layanan.detail-layanan');
})->name('layanan.detail');


