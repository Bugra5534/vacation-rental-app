<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::view('/', 'index');
Route::view('/hakkimizda', 'about');
Route::view('/iletisim', 'contact');
Route::view('/sartlar', 'terms');
Route::view('/blog', 'blog');
Route::view('/a', 'blog-details');
Route::view('/b', 'testimonials');
Route::view('/c', 'vacations');
Route::view('/d', 'vacation-details');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
