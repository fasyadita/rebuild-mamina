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

