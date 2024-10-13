<?php
namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // Menampilkan semua album
    public function index()
    {
        $albums = Album::all();
        return view('albums', compact('albums'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255|unique:albums,name', // validasi nama harus unik
            'deskripsi' => 'required|string',
        ]);

        // Membuat slug unik
        $slug = Str::slug($request->name, '-');

        // Cek apakah slug sudah ada di database
        $existingSlug = Album::where('slug', $slug)->exists();
        if ($existingSlug) {
            // Jika slug sudah ada, tambahkan angka unik di akhir slug
            $count = 1;
            while (Album::where('slug', $slug . '-' . $count)->exists()) {
                $count++;
            }
            $slug = $slug . '-' . $count;
        }

        // Membuat album baru dengan slug
        Album::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'slug' => $slug, // Simpan slug di database
        ]);

        // Redirect setelah album berhasil dibuat
        return redirect()->back()->with('success', 'Album berhasil dibuat!');
    }

    // Menampilkan form edit album
    public function edit(Album $album)
    {
        return view('editAlbum', compact('album'));
    }

    // Memperbarui album yang ada
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'name' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $album->update($request->all());
        return redirect()->route('albums.index')->with('success', 'Album updated successfully.');
    }

    // Menghapus album
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
    }

}
