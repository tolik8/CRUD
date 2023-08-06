<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/set_locale/{lang}', [App\Http\Controllers\HomeController::class, 'setLocale'])->name('set_locale');

Route::resource('categories', App\Http\Controllers\CategoryController::class);
//Route::resource('pets', App\Http\Controllers\PetController::class);

Route::group(['namespace' => 'App\Http\Controllers\Post'], static function() {
    Route::get('/pets', 'IndexController')->name('pets.index');
    Route::get('/pets/create', 'CreateController')->name('pets.create');
    Route::post('/pets', 'StoreController')->name('pets.store');
    Route::get('/pets/{pet}', 'ShowController')->name('pets.show');
    Route::get('/pets/{pet}/edit', 'EditController')->name('pets.edit');
    Route::patch('/pets/{pet}', 'UpdateController')->name('pets.update');
    Route::delete('/pets/{pet}', 'DestroyController')->name('pets.destroy');
});
