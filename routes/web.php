<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tim-mamina', function () {
    return view('tim-mamina');
});
