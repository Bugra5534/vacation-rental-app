<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VacationsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hakkimizda', [AboutController::class, 'index'])->name('about');
Route::get('/iletisim', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/liste' , [VacationsController::class ,'index'])->name('vacations');
Route::get('/liste/{id}', [VacationsController::class, 'detail'])->name('vacationdetail');
Route::get('/blogdetay', [BlogController::class, 'detail'])->name('blogdetail');

Route::get('/giris',[LoginController::class, 'showLogin'])->name('login');
Route::post('/giris', [LoginController::class, 'login']);

Route::get('/kayit',[RegisterController::class, 'showRegister'])->name('register');
Route::post('/kayit', [RegisterController::class, 'register']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
