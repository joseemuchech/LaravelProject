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
/*    dynamic outputting
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'the name is'.$name.'with an id of'.$id;
}); */

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');



Route::get('posts/', 'App\Http\Controllers\PostsController@index');
Route::post('/posts', 'App\Http\Controllers\PostsController@store');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create');
Route::get('/posts/{id}', 'App\Http\Controllers\PostsController@show');

Route::put('/posts/{id}', 'App\Http\Controllers\PostsController@update');
Route::get('/posts/{id}/edit', 'App\Http\Controllers\PostsController@edit');
Route::delete('/posts/{id}', 'App\Http\Controllers\PostsController@destroy');


Auth::routes();

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
