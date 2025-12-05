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