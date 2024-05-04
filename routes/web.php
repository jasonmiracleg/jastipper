<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Customer.index');
});

Route::get('cart', function () {
    return view('Customer.cart');
});

Route::get('chats', function () {
    return view('Customer.chats');
});
