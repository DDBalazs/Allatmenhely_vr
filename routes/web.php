<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'welcome');

Route::get('/sign', [UserController::class, 'Sign']);
Route::post('/sign', [UserController::class, 'SignUp']);

