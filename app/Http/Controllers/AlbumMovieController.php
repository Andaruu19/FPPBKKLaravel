<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumMovieController extends Controller
{
    public function addMovie($idAlbum, $idMovie)
    {
        $album = Album::find($idAlbum);
        $album->movies()->attach($idMovie);
        // return response()->json(['message' => 'Movie berhasil ditambahkan ke album']);
        // return view('album', [
        //     'album' => $album
        // ]);
        return redirect()->route('albums.show', $album->slug)->with('success', 'Movie removed successfully from album.');
    }

    public function removeMovie($idAlbum, $idMovie)
    {
        $album = Album::find($idAlbum);
        $album->movies()->detach($idMovie);
        // return response()->json(['message' => 'Movie berhasil dihapus dari album']);
        // return view('album', [
        //     'album' => $album
        // ]);
        return redirect()->route('albums.show', $album->slug)->with('success', 'Movie removed successfully from album.');
    }

    public function syncMovies(Request $request, $albumId)
    {
        $album = Album::find($albumId);
        $album->movies()->sync($request->movie_ids);
        return response()->json(['message' => 'Movies berhasil disinkronkan dengan album']);
    }
}
