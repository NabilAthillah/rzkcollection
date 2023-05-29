<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
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
    return view('index');
})->name('home');

Route::get('/shop', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/shop/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/user={id}', 'App\Http\Controllers\UserController@show')->name('user.show');

Route::get('/user/login', [UserController::class, 'showLoginForm'])->name('login');
Route::get('/user/register', [UserController::class, 'create'])->name('register');
Route::post('/user/register', [UserController::class, 'store'])->name('register.user');
Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::get('/tes', [UserController::class, 'index']);
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
