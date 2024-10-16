<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Method untuk menampilkan semua film berdasarkan genre
    public function index()
    {
        // Mengambil semua genre beserta film-filmnya
        $genres = Genre::with('movies')->get();

        // Mengirim data genre dan film ke view
        return view('movies', compact('genres'));
    }
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
