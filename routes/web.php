<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//? Route Konser
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/tiket_pesawat', [IndexController::class, 'tiket_pesawat'])->name('tiket_pesawat');

Route::get('/tiket_pesawat/{id}', [IndexController::class, 'tiket_pesawat_show'])->name('tiket_pesawat_show');

Route::get('/beli_tiket/{id}', [IndexController::class, 'beli_tiket_belum_dibuat'])->name('beli_tiket');

Route::get('/sign_up', [UserController::class, 'signup'])->name('signup');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/beli_tiket', [IndexController::class, 'beli_tiket_store'])->name('beli_tiket_store');

Route::post('/sign_up', [UserController::class, 'store'])->name('user_store');

//! Route::get('/beli_tiket/${id}', [IndexController::class, 'beli_tiket'])->name('beli_tiket');
//. Route::put('/konser/${id}', [ControllerModel::class, 'update'])->name('konser.update');
//. Route::post('/konser', [ControllerModel::class, 'store'])->name('konser.store');
//. Route::delete('/konser/${id}', [ControllerModel::class, 'destroy'])->name('konser.destroy');
