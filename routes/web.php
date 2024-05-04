<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Customer.cart');
});

Route::get('custChats', function () {
    return view('Customer.chats');
});

Route::get('custAccount', function () {
    return view('Customer.account');
});

Route::get('jastiperHome', function () {
    return view('Jastiper.home');
});
