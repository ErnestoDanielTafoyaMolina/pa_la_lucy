<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ImagenController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/formulario', [RegisterController::class, 'index']);
Route::post('/formulario', [RegisterController::class, 'store']);

Route::get('/inicio', [LoginController::class, 'index'])->name('login');
Route::post('/inicio', [LoginController::class, 'store']);

Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');

Route::get('/{user:username}', [PostController::class,'index'])->name('post.index');
Route::get('/muro/create', [PostController::class,'create'])->name('post.create');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes');

Route::post('/salir', [LogoutController::class, 'store'])->name('logout');
