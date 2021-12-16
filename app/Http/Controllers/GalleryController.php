<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery', [
            "title" => "Gallery",
            "active" => "gallery",
            "gallery" => Gallery::all()
        ]);
    }

    public function show($slug)
    {
        return view('gallery-detail', [
            "title" => "Gallery Detail",
            "active" => "gallery",
            "gallery" => Gallery::find($slug)
        ]);
    }
}
