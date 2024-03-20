<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('testing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/bukutamu', function () {
    return view('bukutamu');
});