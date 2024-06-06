<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\JastiperProductController;

Route::get('/', function () {
    return view('Customer.index');
});


Route::get('custCart', function () {
    return view('Customer.cart');
});

Route::get('custCheckout', function () {
    return view('Customer.checkout');
});

Route::get('incomplete', function(){
    return view('under_construction');
})->name('incomplete');

Route::get('custChats', function () {
    return view('Customer.chats');
});

Route::get('custHistory', function () {
    return view('Customer.history');
});

Route::get('custAccount', function () {
    return view('Customer.account');
});

Route::get('/jastiperHome', [OrderController::class, 'index']);

Route::get('/jastiperChats', function () {
    return view('Jastiper.chats');
});

Route::get('/jastiperHistory', function () {
    return view('Jastiper.history');
});

Route::get('/jastiperAccount', function () {
    return view('Jastiper.account');
});

Route::get('/jastiperInfo', [UserController::class, 'jastip_show'])->name('jastiper.info');
Route::get('/jastiperAddProduct/{user_id}', [JastiperProductController::class, 'create'])->name('Jastiper.create');
Route::post('/store', [JastiperProductController::class, 'store'])->name('Jastiper.store');
Route::get('/jastiperAccount', [UserController::class, 'jastip_index'])->name('Jastiper.account');

Route::get('/cart', [OrderDetailController::class, 'cart'])->name('customer.navcart');
Route::post('/custCart', [OrderDetailController::class, 'addCart'])->name('customer.cart');
Route::get('jastiperRoute', function() {
    return view('Jastiper.route');
});

Route::post('custCheckout', [OrderDetailController::class, 'checkout'])->name('checkout');
