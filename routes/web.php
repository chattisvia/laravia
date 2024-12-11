<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Halaman Utama']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Chattis'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blogku', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    
    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Kontakku']);
});
