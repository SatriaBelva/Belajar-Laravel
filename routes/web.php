<?php

use App\Models\Post;
use App\Models\Blogspot;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['URLTitle'=>'Halaman Home', 'judul' => 'Home Page', 'dataLain' => 'Testing']);
});

Route::get('/home', function () {
    return view('home', ['URLTitle'=>'Halaman Home', 'judul' => 'Home Page', 'dataLain' => 'Testing', 'user' => User::all()]);
});

Route::get('/about', function () {
    return view('about', ['URLTitle'=>'Halaman About','title' => 'About', 'penjelasan' => 'Ini adalah penjelasan sederhana', 'penjelasanSederhana' => 'Sederhana']);
});

Route::get('/posts', function () {
    return view('posts', ['URLTitle'=>'Halaman Blog', 'judul' => 'Blog', 'posts' => Blogspot::all()]);
});

Route::get('/posts/{blogspot:slug}', function (Blogspot $blogspot) {
    // $post = Post::find($id);

    return view('post', ['URLTitle'=>'Halaman Artikel', 'judul' => 'Single Post', 'blogspot' => $blogspot]);
});

Route::get('/teams', function () {
    return view('teams', ['URLTitle'=>'Halaman Teams','title' => 'Teams']);
});
