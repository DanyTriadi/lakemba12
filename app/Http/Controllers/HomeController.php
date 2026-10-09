<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GalleryImage;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->get();
        $featuredProducts = Product::with('category')
            ->where('is_active', true)
            ->latest()
            ->take(6)
            ->get();
        $galleryImages = GalleryImage::orderBy('sort_order', 'asc')
            ->take(6)
            ->get();

        return view('pages.home', compact('categories', 'featuredProducts', 'galleryImages'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
