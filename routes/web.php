<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/set_locale/{lang}', [App\Http\Controllers\HomeController::class, 'setLocale'])->name('set_locale');

Route::resource('pets', App\Http\Controllers\PetController::class);
