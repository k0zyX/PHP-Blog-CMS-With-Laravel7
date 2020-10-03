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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','PostsController@index');
Route::get('/post/{id}','PostsController@show');
Route::get('/posts','PostsController@allPosts');d

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');