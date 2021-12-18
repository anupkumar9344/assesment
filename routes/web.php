<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ForntendController;
use App\Http\Middleware\AdminAuth;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashbord', function () {
    return view('admin.dashbord');
})->middleware([AdminAuth::class])->name('dashbord');

// Route::get('/users', function () {
//     return view('admin.users');
// })->name('users');


Route::get('/products', function () {
    return view('admin.products');
})->name('products');

Route::get('/category', function () {
    return view('admin.category');
})->name('category');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/register', function () {
    return view('registration');
});
Route::get('/product', function () {
    return view('view_product');
});
Route::get('/cart', function () {
    return view('mycart');
});
Route::get('/users',[UserController::class,'showusers'])->name('users');
Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::post('add',[UserController::class,'addUser']);
Route::get('/dashbord',[UserController::class,'show'])->name('users');

Route::post('category',[CategoryController::class,'addCategory']);
Route::get('/category',[CategoryController::class,'showcategory'])->name('category');
Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('delete');

Route::post('product',[ProductController::class,'addProduct']);
Route::get('/products',[ProductController::class,'showproducts'])->name('products');
Route::get('/',[ProductController::class,'show'])->name('home');

Route::get('/delete/{id}',[ProductController::class,'deletep'])->name('delete');

Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::post('/registeration',[UserController::class,'registeration'])->name('registeration');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/',[ForntendController::class,'allcategory'])->name('home');

Route::get('/product',[ForntendController::class,'allproduct'])->name('product');

