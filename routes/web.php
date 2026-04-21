<?php

use Illuminate\Support\Facades\Route;

// Ini bawaan Laravel
Route::get('/', function () {
    return view('welcome');
});


Route::view('/product', 'product');
Route::view('/dashboard', 'dashboard');