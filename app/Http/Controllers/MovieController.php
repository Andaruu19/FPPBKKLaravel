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
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Mencari film berdasarkan title yang sesuai dengan query
        if ($query) {
            $movies = Movie::where('title', 'LIKE', "%{$query}%")->get();
        } else {
            $movies = collect(); // Return empty collection jika tidak ada query
        }
    
        // Mengirim hasil pencarian ke view
        return view('moviesearch', compact('movies'));
    }
}
