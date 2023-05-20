<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductController;
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





/*Middleware*/

Route::group(['middleware' => 'login'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/product-add-list', [ProductController::class, 'add_product_list'])->name('product-list');
    Route::get('/product-add', [ProductController::class, 'add_products'])->name('product-add');
    Route::post('/product-store', [ProductController::class, 'add_products_store'])->name('product-add-store');
    Route::post('/product-delete', [ProductController::class, 'add_products_destroy'])->name('product-add-destroy');

    Route::get('/contact', [HomeController::class, 'view_contact'])->name('contact');
});


Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/logincheck', [loginController::class, 'adminlogin'])->name('logincheck');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');





Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/contact-insert', [HomeController::class, 'contact_insert'])->name('contact-insert');
Route::post('/loadmore/load_data', [HomeController::class, 'load_data'])->name('loadmore.load_data');

// Route::post('load-data', [HomeController::class,'loadMoreData'])->name('load-data');
