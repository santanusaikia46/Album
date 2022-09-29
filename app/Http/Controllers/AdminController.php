<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function album() {
        return view('admin.album');
    }
    function image() {
        return view('admin.image');
    }
    function createAlbum(Request $request) {
        $fullFilename = $request->file('cover_image')->getClientOriginalName();
    	$filename = pathinfo($fullFilename, PATHINFO_FILENAME);
    	$extension = $request->file('cover_image')->getClientOriginalExtension();
    	$filenameToStore = $filename . "_" . time() . "." . $extension;
    	$path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);
        $album = new Album;
        $album->name = $request->name;
        $album->description = $request->description;
        $album->cover_image = $filenameToStore;
        $album->save();

        return redirect()->back()->with('message', 'Album created successfully');
    }
    function showAlbum($id) {
        $album = Album::find($id);
        return view('admin.home', compact('album'));
    }
}
