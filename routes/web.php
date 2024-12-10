<?php

use App\Models\Blogspot;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/testing', function () {
    return view('testing', ['URLTitle'=>'Halaman Blog', 
                            'judul' => 'Blog', 
                            'posts' => Blogspot::all()]);
});

Route::get('/testingwithuser/{user:id}', function (User $user) {
    // dd($user);
    return view('testingwithuser', ['URLTitle'=>'Halaman Blog', 
                            'judul' => 'Blog', 
                            'posts' => Blogspot::all(),
                            'user' => $user]);
});

Route::get('/', function () {
    return view('home', ['URLTitle'=>'Halaman Home', 'judul' => 'Home Page', 'dataLain' => 'Testing', 'user' => User::all()]);
});

Route::get('/home', function () {
    return view('home', ['URLTitle'=>'Halaman Home', 'judul' => 'Home Page', 'dataLain' => 'Testing', 'user' => User::all()]);
});

Route::get('/about', function () {
    return view('about', ['URLTitle'=>'Halaman About','title' => 'About', 'penjelasan' => 'Ini adalah penjelasan sederhana', 'penjelasanSederhana' => 'Sederhana']);
});

Route::get('/posts', function () {
    return view('posts', ['URLTitle'=>'Halaman Blog', 
                          'judul' => 'Blog', 
                          'posts' => Blogspot::all()]);
});

Route::get('/posts/{blogspot:slug}', function (Blogspot $blogspot) {
    return view('post', ['URLTitle'=>'Halaman Artikel', 
                         'judul' => 'Single Post', 
                         'blogspot' => $blogspot]);
});

Route::get('/authors/{user:username}', function (User $user) { 
    return view('posts', ['URLTitle'=>'Halaman Artikel', 
                          'judul' => count($user->post).' Article By '. $user->name . " @".$user->username, 
                          'posts' => $user->post]);
});

// {user:username} artinya Cari data di model User dengan mencocokkan kolom username
// $ Variabel $user berisi satu baris data pada tabel user
// 'posts' => $user->post post adalah method yang menunjukkan relasi antar model
// Laravel membaca john-doe dari URL
// Laravel mencocokkan john-doe dengan kolom username di tabel users.
// Laravel mengambil baris data yang sesuai dan membuat instance model User untuk diberikan ke variabel $user.

Route::get('/category/{category:slug}', function (Category $category) { 
    return view('posts', ['URLTitle'=>'Halaman Artikel', 'judul' => count($category->post).' Artikel Dengan Kategori '. $category->name, 'posts' => $category->post]);
});

Route::get('/teams', function () {
    return view('teams', ['URLTitle'=>'Halaman Teams','title' => 'Teams']);
});
