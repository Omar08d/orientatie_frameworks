<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('home'); // '/' verwijst nu naar homepage.blade.php
Route::view('/movies', 'movies')->name('movies');
Route::view('/series', 'series')->name('series');
