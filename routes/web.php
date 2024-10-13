<?php

use App\Models\Album;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumMovieController;

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
        'movies' => Movie::all(),
        'albums' => Album::all()
    ]);
});

Route::get('/movies/{movie:slug}', function (Movie $movie) {
    return view('movie', [
        'movie' => $movie
    ]);
});

Route::get('/huann', function () {
    return view('huann', [
        'albums' => Album::all()
    ]);
});

Route::get('/huann/{album:slug}', function (Album $album) {
    return view('album', [
        'album' => $album
    ]);
});

Route::delete('/albums/movies/{idAlbum}/{idMovie}', [AlbumMovieController::class, 'removeMovie'])->name('album.removeMovie');

Route::post('/albums/movies/{idAlbum}/{idMovie}', [AlbumMovieController::class, 'addMovie'])->name('album.addMovie');
