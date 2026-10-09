<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category');
        $query = GalleryImage::orderBy('sort_order', 'asc');

        if ($category && $category !== 'all') {
            $query->where('category', $category);
        }

        $images = $query->get();
        $categories = GalleryImage::select('category')->distinct()->pluck('category');

        return view('pages.gallery', compact('images', 'categories', 'category'));
    }
}
