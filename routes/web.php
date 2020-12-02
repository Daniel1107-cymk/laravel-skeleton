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

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::resource('profile','App\Http\Controllers\Admin\ProfileController');
    Route::resource('users','App\Http\Controllers\Admin\UserController');
});
