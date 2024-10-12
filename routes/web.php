<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//? Route Tiket Pesawat
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/tiket_pesawat', [IndexController::class, 'tiket_pesawat'])->name('tiket_pesawat');

Route::get('/tiket_pesawat/{id}', [IndexController::class, 'tiket_pesawat_show'])->name('tiket_pesawat_show');

Route::get('/beli_tiket/{id}', [IndexController::class, 'beli_tiket_belum_dibuat'])->name('beli_tiket')->middleware('auth');

Route::post('/beli_tiket', [IndexController::class, 'beli_tiket_store'])->name('beli_tiket_store');


//? Route Auth
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->name('login.store');

Route::get('/lupa_passsword', [AuthController::class, 'lupa_password'])->name('lupa_password');

Route::get('signup', [AuthController::class, 'showSignUpForm'])->name('signup')->middleware('guest');
Route::post('signup', [AuthController::class, 'signUp'])->name('signup.store');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('logout_get', [AuthController::class, 'logout'])->name('logout_get')->middleware('auth');



// Route::post('/sign_up', [UserController::class, 'store'])->name('user_store');
//! Route::get('/beli_tiket/${id}', [IndexController::class, 'beli_tiket'])->name('beli_tiket');
//. Route::put('/konser/${id}', [ControllerModel::class, 'update'])->name('konser.update');
//. Route::post('/konser', [ControllerModel::class, 'store'])->name('konser.store');
//. Route::delete('/konser/${id}', [ControllerModel::class, 'destroy'])->name('konser.destroy');
