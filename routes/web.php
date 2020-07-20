<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'site.index');
Route::view('/product/{id}', 'site.detail')->name('product');
Route::view('/cart', 'site.cart')->name('cart');
Route::view('/checkout', 'site.checkout')->name('checkout');
Route::view('/order/{id}', 'site.order')->name('order.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
