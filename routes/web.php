<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('content.about-us');
});

Route::get('/sign-in', function () {
    return view('content.sign-in');
});

Route::get('/cart', function () {
    return view('content.cart');
});

Route::get('/editor', function () {
    return view('content.editor');
});

Route::get('/imprint', function () {
    return view('content.imprint');
});

Route::get('/conditions', function () {
    return view('content.conditions');
});

Route::get('/customer-service', function () {
    return view('content.customer-service');
});



