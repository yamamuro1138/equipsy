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

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get('/index', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/create', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

// Route::get('views/index', function () {
//     return view('index');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
