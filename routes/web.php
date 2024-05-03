<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/create', function(){
    return view('posts.create');
})->name('posts.create');
Route::get('/', [PostController::class,'index']);
Route::post('/store', [PostController::class,'store'])->name('posts.store');
Route::get('/show/{id}', [PostController::class,'show'])->name('posts.show');
Route::get('/edit/{id}', [PostController::class,'edit'])->name('posts.edit');
Route::put('/update/{id}', [PostController::class,'update'])->name('posts.update');
Route::delete('/delete/{id}', [PostController::class,'destroy'])->name('posts.destroy');

