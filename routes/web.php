<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/album', function () {
    return view('album');
});

Route::get('/collection', function () {
    return view('collection');
});
