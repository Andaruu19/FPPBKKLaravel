<?php

use App\Models\Album;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumMovieController;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('home');
});

Route::get('/albums', function () {
    return view('albums', [
        'albums' => Album::all()
    ]);
});

Route::get('/collection', function () {
    return view('collection');
});

Route::get('/movies', function () {
    return view('movies', [
        'movies' => Movie::all(),
        'albums' => Album::all()
    ]);
});

Route::get('/movies/{movie:slug}', function (Movie $movie) {
    return view('movie', [
        'movie' => $movie
    ]);
});

Route::post('/albums', [AlbumController::class, 'store']);

Route::resource('albums', AlbumController::class);

Route::delete('/albums/movies/{idAlbum}/{idMovie}', [AlbumMovieController::class, 'removeMovie'])->name('album.removeMovie');

Route::post('/albums/movies/{idAlbum}/{idMovie}', [AlbumMovieController::class, 'addMovie'])->name('album.addMovie');
