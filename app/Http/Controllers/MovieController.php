<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function delete($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return response()->json(['message' => 'Movie berhasil dihapus']);
    }
}
