<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartitemController;

use App\Mail\WelcomeMail;
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

Route::get('/', [WelcomeController::class,'index'])->name('welcome');

Route::get('/private',[WelcomeController::class,'private']);

Auth::routes(['verify'=>true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route for mailing

Route::get('/email', function(){
    Mail::to('tarekbaraa7@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::get('/facebook/login', [FacebookController::class,'provider'])->name('facebook.login');
Route::get('/facebook/callback', [FacebookController::class,'handleCallback'])->name('facebook.callback');

Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/addproduct', [ProductController::class,'create'])->name('addproduct');
Route::post('/uploadproduct', [ProductController::class,'store'])->name('uploadproduct');
Route::get('/product/show/{product}', [ProductController::class,'show'])->name('product.show');
Route::get('/product/delete/{product}', [ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/edit/{product}', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class,'update'])->name('product.update');
Route::get('/search', [ProductController::class,'search'])->name('search');

Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::get('/addcategory', [CategoryController::class,'create'])->name('addcategory');
Route::post('/uploadcategory', [CategoryController::class,'store'])->name('uploadcategory');
Route::get('/category/show/{category}', [CategoryController::class,'show'])->name('category.show');
Route::get('/category/delete/{category}', [CategoryController::class,'destroy'])->name('category.delete');
Route::get('/category/edit/{category}', [CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');

Route::get('/users', [UserController::class,'index'])->name('users');
Route::get('/adduser', [UserController::class,'create'])->name('adduser');
Route::post('/uploaduser', [UserController::class,'store'])->name('uploaduser');
Route::get('/user/show/{user}', [UserController::class,'show'])->name('user.show');
Route::get('/user/delete/{user}', [UserController::class,'destroy'])->name('user.delete');
Route::get('/user/edit/{user}', [UserController::class,'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class,'update'])->name('user.update');

Route::post('/addcart/{id}',[WelcomeController::class,'addcart'])->name('addcart');
Route::get('/showcart',[WelcomeController::class,'showcart'])->name('showcart');
Route::get('/showprofile/{user}', [WelcomeController::class,'showprofile'])->name('showprofile');

// Route::post('/cart/{$cart_id}',[CartController::class,'index'])->name('cart');
