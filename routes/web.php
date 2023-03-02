<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;





#Route::view('/home', 'home.index');
Route::get('/home', HomeController::class)->name('home');

Route::resource('login', LoginController::class);
Route::resource('register', RegisterController::class);


Route::resource('posts', PostController::class);








































Route::fallback(function () {
    return '404 не верный порт';
});
