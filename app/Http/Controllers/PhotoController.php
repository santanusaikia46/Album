<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use App\Models\User;

class PhotoController extends Controller
{
    function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $album = Album::all();
                return view('user.home', compact('album'));
            } elseif (Auth::user()->usertype == '1') {
                $album = Album::all();
                return view('dashboard', compact('album'));
            } else {
                $album = Album::all();
                return view('admin.home', compact('album'));
            }
        } else {
            return redirect()->back();
        }
    }
    function create($album_id){
    	return view('admin.image')->with('album_id', $album_id);
    }
    function addImage(Request $request) {
        $fullFilename = $request->file('photo')->getClientOriginalName();
    	$filename = pathinfo($fullFilename, PATHINFO_FILENAME);
    	$extension = $request->file('photo')->getClientOriginalExtension();
    	$filenameToStore = $filename . "_" . time() . "." . $extension;
    	$path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $filenameToStore);
        $photo = new Photo;
    	$photo->album_id = $request->input('album_id');
    	$photo->title = $request->input('title');
        $photo->photo = $filenameToStore;

        $photo->save();
        return redirect()->back();
    }
    function index()
    {
        $album = Album::all();
        return view('user.home', compact('album'));
    }
    function view()
    {
        $photo = Photo::all();
        return view('user.view', compact('photo'));
    }
}
