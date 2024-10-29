<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ['penjelasan' => 'Ini adalah penjelasan sederhana', 'penjelasanSederhana' => 'Sederhana']);
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/teams', function () {
    return view('teams');
});
