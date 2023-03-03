<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

use Illuminate\Support\Facades\Route;





#Route::view('/home', 'home.index');
Route::get('/home', HomeController::class)->name('home')->middleware('auth');

Route::resource('login', LoginController::class)->middleware('guest');
Route::resource('register', RegisterController::class)->middleware('guest');


Route::resource('posts', PostController::class);


Route::resource('logout', LogoutController::class);









































Route::fallback(function () {
    return '404 не верный порт';
});
