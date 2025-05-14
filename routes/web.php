<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::redirect('/','posts');

Route::resource('posts', PostController::class);

Route::middleware('auth')->group(function (){

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});


Route::middleware('guest')->group(function (){
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');


Route::post('/register', [AuthController::class,'register']);

Route::view('/login','auth.login')->name('login');

Route::post('/login', [AuthController::class,'login']);
});

