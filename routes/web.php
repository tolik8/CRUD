<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/locale/{lang}', [App\Http\Controllers\HomeController::class, 'locale'])->name('locale');

Route::resource('categories', App\Http\Controllers\CategoryController::class);

//Route::resource('posts', App\Http\Controllers\PostController::class);
Route::group(['namespace' => 'App\Http\Controllers\Post'], static function() {
    Route::get('/posts', 'IndexController')->name('posts.index');
    Route::get('/posts/create', 'CreateController')->name('posts.create');
    Route::post('/posts', 'StoreController')->name('posts.store');
    Route::get('/posts/{post}', 'ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('posts.destroy');
});
