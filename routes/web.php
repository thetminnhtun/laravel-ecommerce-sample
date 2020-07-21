<?php

use Illuminate\Support\Facades\Route;

route::get('/', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');
Route::get('/cart/clear', 'ProductController@clearCart')->name('cart.clear');
Route::get('/cart/{id}/increase', 'ProductController@increaseCart')->name('cart.increase');
Route::get('/cart/{id}/decrease', 'ProductController@decreaseCart')->name('cart.decrease');
Route::get('/cart/{id}/remove', 'ProductController@removeCart')->name('cart.remove');
Route::get('/cart/{product}', 'ProductController@addToCart')->name('cart.add');
Route::get('/cart', 'ProductController@viewCart')->name('cart.show');
Route::view('/checkout', 'site.checkout')->name('checkout');
Route::get('/order/{id}', 'ProductController@order')->name('order.show');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
