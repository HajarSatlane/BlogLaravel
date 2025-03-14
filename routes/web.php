<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

        
    Route::get('/posts/list', [App\Http\Controllers\PostController::class, 'index'])->name('posts.list');
    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
    Route::delete('/posts/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('posts.delete');
    Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

});



