<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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
Route::get('/', [UserController::class, 'homepage']);

Route::get('/cadastros', [UserController::class, 'cadastro'])->name('cadastros.cadastro');
Route::get('/openlogin', [LoginController::class, 'openLogin'])->name('login.openLogin');
Route::post('/doLogin', [LoginController::class, 'doLogin'])->name('login.doLogin');
