<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShopController extends Controller
{
    public function get($product_id, $product_slug = null){
        $product = Product::byId($product_id);
        $this->registerViewContentEvent($product);
        return view('shop.productDetails', compact('product'));
    }
    public function registerViewContentEvent($product){
        $pixelId = env('META_PIXEL_ID'); // Store this in your .env file
        $accessToken = env('META_ACCESS_TOKEN'); // Store this in your .env file

        $endpoint = "https://graph.facebook.com/v19.0/{$pixelId}/events";

        $data = [
            "data" => [
                [
                    "event_name" => "View Product",
                    "event_time" => time(), // Current timestamp
                    "action_source" => "website",
                    "user_data" => [
                        "em" => [
                            hash('sha256', 'customer@example.com') // Hash email before sending
                        ],
                        "ph" => [
                            null
                        ]
                    ],
                    "custom_data" => [
                        "currency" => "INR",
                        "value" => "{$product->price}"
                    ],
                    "original_event_data" => [
                        "event_name" => "Purchase",
                        "event_time" => time()
                    ]
                ]
            ],
            "access_token" => $accessToken
        ];

        $response = Http::post($endpoint, $data);
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
    public function thankyou(Request $request, $order_id) {
        $order = Orders::where('id', $order_id)->first();
        return view('thankyou', compact('order'));
    }  
}
