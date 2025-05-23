<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AllatMenhely;

//főoldal
Route::get('/', [AllatMenhely::class, 'Welcome']);
//bladek
Route::view('/contact', 'contact');
Route::view('/programok', 'programok');

Route::get('/allatok', [AllatMenhely::class, 'Allatok']);
Route::post('/allatok',[AllatMenhely::class, 'AllatokPost']);
Route::get('/allatok/{id}', [AllatMenhely::class, 'AllatData']);
Route::post('/allatok/{id}/foglalas', [AllatMenhely::class, 'FoglalasPost']);

// documentumok
Route::view('/information', 'information');
Route::view('/information/aszf', 'documents.aszf');
Route::view('/information/adatved', 'documents.adatved');
Route::view('/information/gyik', 'documents.gyik');
Route::view('/information/cookie', 'documents.cookie');
Route::view('/information/adomany', 'documents.adomany');
Route::view('/information/jollet', 'documents.jollet');

// login & regiszter
Route::get('/sign', [UserController::class, 'Sign']);
Route::post('/login', [UserController::class, 'Login']);
Route::post('/register', [UserController::class, 'Register']);
//mypage
Route::get('/mypage', [UserController::class, 'Mypage']);
Route::delete('/mypage/{id}', [UserController::class, 'DelFog']);
Route::delete('/mypage/tel/del', [UserController::class, 'DelTel']);
Route::post('/mypage/tel', [UserController::class, 'Tel']);
Route::get('/mypage/logout', [UserController::class, 'Logout']);
//newpass
Route::get('/mypage/newpass', [UserController::class, 'Newpass']);
Route::post('/mypage/newpass', [UserController::class, 'NewpassData']);



