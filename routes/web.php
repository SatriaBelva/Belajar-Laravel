<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['judul' => 'Home Page', 'dataLain' => 'Testing']);
});

Route::get('/home', function () {
    return view('home', ['judul' => 'Home Page', 'dataLain' => 'Testing']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'penjelasan' => 'Ini adalah penjelasan sederhana', 'penjelasanSederhana' => 'Sederhana']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
Route::get('/teams', function () {
    return view('teams', ['title' => 'Teams']);
});
