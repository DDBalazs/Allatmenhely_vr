<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//főoldal
Route::view('/', 'welcome');

// login & regiszter
Route::view('/sign', 'sign');
Route::post('/login', [UserController::class, 'Login']);
Route::post('/register', [UserController::class, 'Register']);

//mypage
Route::view('/mypage', 'mypage');
Route::post('/modositas', [UserController::class, 'Modositas']);
Route::get('/logout', [UserController::class, 'Logout']);
