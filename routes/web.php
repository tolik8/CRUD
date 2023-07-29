<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/setlocale/{lang}', [App\Http\Controllers\HomeController::class, 'setLocale'])->name('setLocale');

Route::resource('pets', App\Http\Controllers\PetController::class);
