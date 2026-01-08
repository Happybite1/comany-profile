<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\WsController;
use App\Http\Controllers\SeminarController;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/workshop', function () {
    return view('workshop'); 
})->name('workshop');   

Route::get('/seminar', function () {
    return view('seminar'); 
})->name('seminar');

Route::get('/product', function () {
    return view('product'); 
})->name('product');

Route::get('/login', [AdminLoginController::class, 'form']);
Route::post('/login', [AdminLoginController::class, 'login']);
Route::post('/logout', [AdminLoginController::class, 'logout']);

Route::get('/home', [HomePageController::class, 'edit']);
Route::post('/home', [HomePageController::class, 'update']);
Route::resource('home', HomePageController::class);

Route::get('/company-profile', [CompanyController::class, 'edit']);
Route::post('/company-profile', [CompanyController::class, 'update']);

Route::post('/ws', [WsController::class, 'store']);
Route::resource('ws', WsController::class);

Route::post('/sm', [SeminarController::class, 'store']);
Route::resource('Seminar', SeminarController::class);

Route::post('/book', [SeminarController::class, 'store']);

Route::get('/detail-ws', function () {
    return view('detail-ws'); 
})->name('detail-ws');

Route::get('/detail-sm', function () {
    return view('detail-sm'); 
})->name('detail-sm');

Route::get('/detail-product', function () {
    return view('detail-product'); 
})->name('detail-product');

Route::get('/list-pemateri', function () {
    return view('list-pemateri'); 
})->name('list-pemateri');

Route::get('/dashbord',  [SpeakerController::class, 'index'])->name('dashbord');
Route::post('/dashbord',  [SpeakerController::class, 'store'])->name('dashbord');

Route::get('/blog', function () {
    return view('blog'); 
})->name('blog');

Route::get('/detail-artikel', function () {
    return view('detail-artikel'); 
})->name('detail-artikel');
