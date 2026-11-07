<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'home'])->name('home');

Route::get('/blog', [PostController::class, 'blog'])->name('blog');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

Route::post('/blog/create', [PostController::class, 'create'])->name('post');
Route::get('/blog/edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::put('/blog/update/{id}', [PostController::class, 'update'])->name('update');
