<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AllatMenhely;

//főoldal
Route::get('/', [AllatMenhely::class, 'Welcome']);
//bladek
Route::view('/contact', 'contact');
Route::view('/information', 'information');
Route::view('/programok', 'programok');

Route::get('/allatok', [AllatMenhely::class, 'Allatok']);
Route::post('/allatok',[AllatMenhely::class, 'AllatokPost']);
Route::get('/allatok/{id}', [AllatMenhely::class, 'AllatData']);
Route::get('/allatok/foglalas',[AllatMenhely::class, 'Foglalas']);
Route::get('/allatok/foglalas/{id}', [AllatMenhely::class, 'FoglalasData']);

// documentumok
Route::view('aszf', 'documents.aszf');
Route::view('adatved', 'documents.adatved');
Route::view('gyik', 'documents.gyik');
Route::view('cookie', 'documents.cookie');
Route::view('adomany', 'documents.adomany');
Route::view('jollet', 'documents.jollet');

// login & regiszter
Route::get('/sign', [UserController::class, 'Sign']);
Route::post('/login', [UserController::class, 'Login']);
Route::post('/register', [UserController::class, 'Register']);
//mypage
Route::get('/mypage', [UserController::class, 'Mypage']);
Route::post('/tel', [UserController::class, 'Tel']);
Route::post('/modositas', [UserController::class, 'Modositas']);
Route::get('/logout', [UserController::class, 'Logout']);
//newpass
Route::get('/newpass', [UserController::class, 'Newpass']);
Route::post('/newpass', [UserController::class, 'NewpassData']);



