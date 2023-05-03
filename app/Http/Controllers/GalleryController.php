<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $categories = Category::with('galleryImages')->get();

        return view('gallery.index', compact('categories'));
    }
}
