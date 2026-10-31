<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'views'])->name('home');

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
