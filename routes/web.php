<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/convert', function () {
    return view('convert');
});

Route::post('/convert', [CurrencyController::class, 'convert'])->name('currency.convert');
Route::get('/convert', [CurrencyController::class, 'showForm'])->name('currency.showForm');
