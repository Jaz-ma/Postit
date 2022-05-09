<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterCOntroller;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

Route::get('/', function () {
    return view('posts.index');
});

Route::get('/register',[RegisterCOntroller::class,'register'])->name('register');
Route::post('/register',[RegisterCOntroller::class,'store']);

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
