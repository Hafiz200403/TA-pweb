<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-form', [App\Http\Controllers\AuthController::class, 'loginform']);
Route::post('/login-submit', [App\Http\Controllers\AuthController::class, 'login']);


Route::get('/daftar-form', [App\Http\Controllers\AuthController::class, 'daftarform']);
Route::post('/daftar-submit', [App\Http\Controllers\AuthController::class, 'daftar']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);


