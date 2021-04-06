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

Route::post('todo_submit', 'App\Http\Controllers\RegisterController@store');
Route::get('todo_create', 'App\Http\Controllers\LoginController@create');
Route::post('todo_login', 'App\Http\Controllers\LoginController@show');
Route::post('todo_authenticate', 'App\Http\Controllers\LoginController@authenticate');

