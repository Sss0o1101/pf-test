<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Route::get('/', ['App\Http\Controllers\PostController','index'] );
//Route::get('/', [App\Http\Controllers\PostController::class,'index']);

Route::get('/', [PostController::class, 'index'])->name('posts.index');  // 名前付きルーティング

//URL の一部をパラメータ化
//{id} は、URL の一部をパラメータ化している。
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')  ;  // メソッド名は、記事の詳細を表示する、という意味で、show という名前をつけている

//Route::resource は、リソースコントローラーを定義する。
//except は、index メソッドを除外する。
Route::resource('posts', PostController::class)->except(['index']);

// コメントを追加するためのルーティング
//Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::resource('posts.comments', CommentController::class)->only(['store', 'destroy']);
