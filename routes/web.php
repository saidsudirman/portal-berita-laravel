<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/cai', function () {
    return view('cai', ['title' => 'Cai', 'nama' => 'PI + PI = PIPI']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){


    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});