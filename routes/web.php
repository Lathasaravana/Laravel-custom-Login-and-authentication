<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
Route::view('register','auth.register');
Route::POST('store',['App\Http\Controllers\Auth\RegisterController'::class,'store']);
Route::view('home','home');

Route::view('login','auth.login');
Route::POST('authenticate',['App\Http\Controllers\Auth\LoginController'::class,'authenticate']); 
Route::get('Logout',['App\Http\Controllers\Auth\LoginController'::class,'logout']);

