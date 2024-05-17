<?php

use App\Http\Controllers\JastiperProductController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Customer.index');
});


Route::get('custCart', function () {
    return view('Customer.cart');
});

Route::get('custCheckout', function () {
    return view('Customer.checkout');
});

Route::get('custChats', function () {
    return view('Customer.chats');
});

Route::get('custHistory', function () {
    return view('Customer.history');
});

Route::get('custAccount', function () {
    return view('Customer.account');
});

Route::get('/jastiperHome', function () {
    return view('Jastiper.home');
});

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

Route::post('/custCart', [OrderDetailController::class, 'cart'])->name('customer.cart');
Route::get('jastiperRoute', function() {
    return view('Jastiper.route');
});
