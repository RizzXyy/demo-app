<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

// 1. Tes Ambil Semua Post + Usernya (Eager Loading biar cepat / cegah N+1)
Route::get('/posts', function () {
    return Post::with('user')->get();
});

// 2. Tes Pencarian Aman (FindOrFail)
Route::get('/posts/{id}', function ($id) {
    return Post::findOrFail($id);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return Post::with('user')->get();
});

// 2. Tes Pencarian Aman (FindOrFail)
Route::get('/posts/{id}', function ($id) {
    return Post::findOrFail($id);
});
