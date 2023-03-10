<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'App\Http\Controllers\PizzasController@index')->middleware('auth');
Route::get('/pizzas/create', 'App\Http\Controllers\PizzasController@create');
Route::post('/pizzas', 'App\Http\Controllers\PizzasController@store');
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzasController@show')->middleware('auth');
Route::delete('/pizzas/{id}', 'App\Http\Controllers\PizzasController@destroy')->middleware('auth');


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
