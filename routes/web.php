<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterCOntroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

Route::get('/', function () {
    return view('home');
});



Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/register',[RegisterCOntroller::class,'index'])->name('register');
Route::post('/register',[RegisterCOntroller::class,'store']);

Route::get('/login',[LoginController::class ,'index'])->name('login');
Route::Post('/login',[LoginController::class ,'store']);

Route::post('/logout',[LogoutController::class ,'logout'])->name('logout')->middleware('auth');

Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/posts',[PostController::class,'store']);
Route::delete('/posts',[PostController::class,'destroy']);

Route::post('/posts/{post}/like',[PostLikeController::class,'store'])->name('posts.like');
Route::delete('/posts/{post}/like',[PostLikeController::class,'destroy'])->name('posts.like');

