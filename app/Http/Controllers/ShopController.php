<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function get($product_id, $product_slug = null){
        $product = Product::byId($product_id);
        return view('shop.productDetails', compact('product'));
    }

    public function index(){
        $products = Product::all();
        return view('shop.shop', compact('products'));
    }

    public function getProductByCategory($category_slug) {
        $category = Category::where('slug', $category_slug)->with('products')->first();
    
        if (!$category) {
            abort(404, 'Category not found');
        }
    
        return view('shop.category', ['products' => $category->products, 'categoryName' => $category->name]);
    }    
}
