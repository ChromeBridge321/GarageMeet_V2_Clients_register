<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register');


