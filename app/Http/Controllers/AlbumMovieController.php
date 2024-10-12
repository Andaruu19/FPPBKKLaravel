<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumMovieController extends Controller
{
    // Menambahkan movie ke album
    public function addMovie(Request $request, $albumId)
    {
        $album = Album::find($albumId);

        // Menambahkan movie berdasarkan ID
        $album->movies()->attach($request->movie_id);

        return response()->json(['message' => 'Movie berhasil ditambahkan ke album']);
    }

    // Menghapus movie dari album
    public function removeMovie(Request $request, $albumId)
    {
        $album = Album::find($albumId);

        // Menghapus movie dari album
        $album->movies()->detach($request->movie_id);

        return response()->json(['message' => 'Movie berhasil dihapus dari album']);
    }

    // Menyinkronkan movies dengan album
    public function syncMovies(Request $request, $albumId)
    {
        $album = Album::find($albumId);

        // Menyinkronkan movies berdasarkan array movie_id
        $album->movies()->sync($request->movie_ids);

        return response()->json(['message' => 'Movies berhasil disinkronkan dengan album']);
    }
}
