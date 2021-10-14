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

// Route::get('users/register', 'App\Http\Controllers\RegisterController@index');

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function(){
    Route::get('register', 'App\Http\Controllers\RegisterController@index');
});

