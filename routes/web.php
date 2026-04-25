<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', [TicketController::class, 'index']);
Route::get('/dashboard', [TicketController::class, 'dashboard']);
Route::post('/product/store', [TicketController::class, 'store']);
Route::delete('/product/delete/{id}', [TicketController::class, 'destroy']);