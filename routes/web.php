<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('videojuegos', VideojuegoController::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});