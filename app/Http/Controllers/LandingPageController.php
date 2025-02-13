<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->orderBy('created_at', 'desc')->get();
        return view('home', compact('categories'));
    }
}
