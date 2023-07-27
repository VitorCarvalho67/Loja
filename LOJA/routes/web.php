<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CadastroController;
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

// Rota para a página inicial
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::group([], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');
});

Route::group([], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::group([], function () {
    Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro.index');
    Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');
});