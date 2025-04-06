<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', ['App\Http\Controllers\PostController','index'] );
//Route::get('/', [App\Http\Controllers\PostController::class,'index']);
Route::get('/', [PostController::class, 'index'])->name('posts.index');

//URL の一部をパラメータ化
//{id} は、URL の一部をパラメータ化している。
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')  ;  // メソッド名は、記事の詳細を表示する、という意味で、show という名前をつけている

//Route::resource は、リソースコントローラーを定義する。
//except は、index メソッドを除外する。
Route::resource('posts', PostController::class)->except(['index']);

