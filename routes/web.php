<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashbord', function () {
    return view('admin.dashbord');
})->name('dashbord');

Route::get('/users', function () {
    return view('admin.users');
})->name('users');

Route::get('/products', function () {
    return view('admin.products');
})->name('products');

Route::get('/category', function () {
    return view('admin.category');
})->name('category');

Route::get('/register', function () {
    return view('registration');
});

Route::get('/cart', function () {
    return view('mycart');
});
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::post('/registeration',[UserController::class,'registeration'])->name('registeration');
Route::post('/login',[UserController::class,'login'])->name('login');
