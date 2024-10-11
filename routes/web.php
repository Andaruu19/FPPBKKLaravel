<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/albums', function () {
    return view('albums');
});

Route::get('/collection', function () {
    return view('collection');
});

Route::get('/movies', function () {
    return view('movies', [
        'movies' => Movie::all()
    ]);
});
