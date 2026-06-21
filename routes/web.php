<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MyAccountController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::get('/about', [HomeController::class, 'about'])
    ->name('home.about');

Route::get('/products', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('product.create');

Route::post('/products/save', [ProductController::class, 'save'])
    ->name('product.save');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('product.show');

Route::middleware(['admin'])->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.index');

    Route::get('/admin/products', [AdminProductController::class, 'index'])
        ->name('admin.product.index');

    Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])
        ->name('admin.product.edit');

    Route::post('/admin/products/{id}/update', [AdminProductController::class, 'update'])
        ->name('admin.product.update');

    Route::get('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])
        ->name('admin.product.delete');
});

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/cart/add/{id}', [CartController::class, 'add'])
    ->name('cart.add');

Route::get('/cart/delete', [CartController::class, 'delete'])
    ->name('cart.delete');

Route::middleware(['auth'])->group(function () {

    Route::get('/cart/purchase', [CartController::class, 'purchase'])
        ->name('cart.purchase');

    Route::get('/my-account/orders', [MyAccountController::class, 'orders'])
        ->name('myaccount.orders');
});

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Auth::routes();