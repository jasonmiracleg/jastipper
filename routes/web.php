<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Customer.index');
});

Route::get('jastiperInfo', function () {
    return view('Customer.jastipper_info');
});

Route::get('custCart', function () {
    return view('Customer.cart');
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

Route::get('jastiperHome', function () {
    return view('Jastiper.home');
});

Route::get('jastiperChats', function () {
    return view('Jastiper.chats');
});

Route::get('jastiperHistory', function () {
    return view('Jastiper.history');
});

Route::get('jastiperAccount', function () {
    return view('Jastiper.account');
});
