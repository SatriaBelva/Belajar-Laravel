<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['URLTitle'=>'Halaman Home', 'judul' => 'Home Page', 'dataLain' => 'Testing']);
});

Route::get('/home', function () {
    return view('home', ['URLTitle'=>'Halaman Home', 'judul' => 'Home Page', 'dataLain' => 'Testing']);
});

Route::get('/about', function () {
    return view('about', ['URLTitle'=>'Halaman About','title' => 'About', 'penjelasan' => 'Ini adalah penjelasan sederhana', 'penjelasanSederhana' => 'Sederhana']);
});

Route::get('/posts', function () {
    return view('posts', ['URLTitle'=>'Halaman Blog', 'judul' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::find($slug);

    return view('post', ['URLTitle'=>'Halaman Artikel', 'judul' => 'Single Post', 'post' => $post]);
});

Route::get('/teams', function () {
    return view('teams', ['URLTitle'=>'Halaman Teams','title' => 'Teams']);
});
