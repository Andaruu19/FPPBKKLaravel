<?php
namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums', compact('albums'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:albums,name',
            'deskripsi' => 'required|string',
        ]);

        $slug = Str::slug($request->name, '-');

        $existingSlug = Album::where('slug', $slug)->exists();
        if ($existingSlug) {
            $count = 1;
            while (Album::where('slug', $slug . '-' . $count)->exists()) {
                $count++;
            }
            $slug = $slug . '-' . $count;
        }

        Album::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Album berhasil dibuat!');
    }

    public function edit(Album $album)
    {
        return view('editAlbum', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'name' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $album->update($request->all());
        return redirect()->route('albums.index')->with('success', 'Album updated successfully.');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
    }

}
