<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootFitsController;
use App\Http\Controllers\ProductsController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/productsCard', function () {
    return view('productsCard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/bestseller', [FootFitsController::class, 'bestSeller'])->name('bestSeller');
Route::get('/checkout', [FootFitsController::class, 'checkout'])->name('checkout');

Route::get('/admin', [FootFitsController::class, 'admin'])->name('admin');
Route::get('/adminLogin', [FootFitsController::class, 'adminLogin'])->name('adminLogin');
Route::get('/adminRegister', [FootFitsController::class, 'adminRegister'])->name('adminRegister');
Route::get('/manageaccount', [FootFitsController::class, 'manageAccount'])->name('manageAccount');
Route::get('/manageCustomers', [FootFitsController::class, 'manageCustomers'])->name('manageCustomers');
Route::get('/manageOrders', [FootFitsController::class, 'manageOrders'])->name('manageOrders');
Route::get('/manageProductList', [FootFitsController::class, 'manageProductList'])->name('manageProductList');

Route::post('/productDetails/add_cart/{id}', [CartController::class, 'AddCart'])->name('add.cart');
Route::get('/productDetails/delete_cart/{id}', [CartController::class, 'DeleteCart']);
Route::get('/productDetails/edit_cart/{id}', [CartController::class, 'EditCart']);
Route::post('/productDetails/update_cart/{id}', [CartController::class, 'UpdateCart']);