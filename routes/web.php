<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/workshop', function () {
    return view('workshop'); 
})->name('workshop');

Route::get('/speakers', function () {
    return view('speakers'); 
})->name('speakers');

Route::get('/seminar', function () {
    return view('seminar'); 
})->name('seminar');

Route::get('/product', function () {
    return view('product'); 
})->name('product');

Route::get('/login', function () {
    return view('login'); 
})->name('login');