<?php
/** @noinspection PhpUndefinedClassInspection */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{locale}', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::get('/products', ['uses' => 'ProductController@index', 'as' => 'products.index']);
Route::get('/products/create', ['uses' => 'ProductController@create', 'as' => 'products.create']);
Route::post('/products', ['uses' => 'ProductController@store', 'as' => 'products.store']);
Route::get('/products/{product}', ['uses' => 'ProductController@show', 'as' => 'products.show']);
Route::get('/products/{product}/edit', ['uses' => 'ProductController@edit', 'as' => 'products.edit']);
Route::put('/products/{product}', ['uses' => 'ProductController@update', 'as' => 'products.update']);
Route::delete('/products/{product}', ['uses' => 'ProductController@destroy', 'as' => 'products.destroy']);
