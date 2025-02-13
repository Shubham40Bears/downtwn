<?php

namespace App\Http\Controllers;

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
}
