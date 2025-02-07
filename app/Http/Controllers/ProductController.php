<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Orders;
use App\Models\User;
use App\Models\UserAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::with('category')->get());
    }

    public function show($id, $slug = null)
    {
        $product = Product::where('id', $id)
                          ->when($slug, fn ($query) => $query->where('slug', $slug))
                          ->with('category')
                          ->firstOrFail();

        return response()->json($product);
    }

    public function getByCategory($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        return response()->json($category->products);
    }

    public function addToCart(Request $request) {
        $cart = json_decode(Session::get('cart', '[]'), true);

        $productId = $request->productId;
        $size = $request->size; // Size is required
        $quantity = $request->quantity ?? 1; // Default to 1 if not provided

        // Check if the product with the same size already exists in the cart
        $found = false;
        foreach ($cart as &$item) {
            if ($item['productId'] == $productId && $item['size'] == $size) {
                $item['quantity'] += $quantity;
                $found = true;
                break;
            }
        }

        // If the product with the same size doesn't exist, add a new entry
        if (!$found) {
            $cart[] = [
                'productId' => $productId,
                'size' => $size,
                'quantity' => $quantity,
            ];
        }

        // Store the updated cart back in session
        Session::put('cart', json_encode($cart));

        return response()->json([
            'success' => true,
            'cart' => $cart, // Return updated cart
        ]);
    }
    public function cart() {
        $cartItems = Session::get('cart', []);
        if(!empty($cartItems)){
            $cartItems = json_decode($cartItems, true);
            // Extract only product IDs from the session
            $productIds = array_column($cartItems, 'productId');
        }
    
        $products = collect(); // Default empty collection
    
        if (!empty($productIds)) {
            $products = Product::whereIn('id', $productIds)->get();
        }
    
        return view('shop.cart', compact('products', 'cartItems'));
    }

    public function initPayment() {
        $cartItems = Session::get('cart', []);
        $cartItems = json_decode($cartItems, true);
        // Extract only product IDs from the session
        $productIds = array_column($cartItems, 'productId');
    
        $products = collect(); // Default empty collection
    
        if (!empty($productIds)) {
            $products = Product::whereIn('id', $productIds)->get();
        }
        $cartTotal = 0;
        foreach ($products as $product) {
            $cartData = $cartItem = collect($cartItems)->firstWhere('productId', $product->id);
            $quantity = $cartItem['quantity'] ?? 1;
            if($product->sales_price){
                $cartTotal += ($product->sales_price * $quantity);
            } else {
                $cartTotal += ($product->price * $quantity);
            }
        }
        $cartTotal += 200;
        $amount = (float) $cartTotal * 100;
        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $order = $api->order->create([
                'amount' => $amount, // Amount in paise
                'currency' => 'INR',
                'receipt' => 'rcpt_'.Carbon::now().'_dt',
                'payment_capture' => 1,
            ]);
            
            
            return response()->json([
                'success' => true,
                'order_id' => $order->id,
                'amount' => $amount,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function confirmOrder(Request $request){
        $cartItems = Session::get('cart', []);

        if (!empty($cartItems)) {
            $cartItems = json_decode($cartItems, true);
            $productIds = array_column($cartItems, 'productId');
        }

        $products = collect(); // Default empty collection

        if (!empty($productIds)) {
            $products = Product::whereIn('id', $productIds)->get();
        }

        if ($products->isEmpty()) {
            return response()->json(['error' => 'Cart is empty or products not found'], 400);
        }

        // Check if user exists, else create a new user
        $user = User::firstOrCreate(
            ['email' => $request->email],
            ['name' => $request->fullName, 'password' => bcrypt('password'), 'phone' => $request->phone]
        );

        // Save user address
        $userAddress = UserAddress::create([
            'user_id' => $user->id,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip
        ]);

        // Format products data
        $orderProducts = [];
        foreach ($cartItems as $item) {
            $orderProducts[] = [
                'product_id' => $item['productId'],
                'size' => $item['size'] ?? null,
                'quantity' => $item['quantity'] ?? 1
            ];
        }

        // Save order
        $order = Orders::create([
            'user_id' => $user->id,
            'user_address_id' => $userAddress->id,
            'products' => json_encode($orderProducts),
            'total_price' => floatval(preg_replace('/[^\d.]/', '', $request->total_price)),
            'coupon' => $request->coupon,
            'razorpay_data' => json_encode($request->razorpay_data),
            'status' => 'processing'
        ]);

        // Clear cart after order is placed
        Session::forget('cart');

        return response()->json(['success' => true, 'order' => $order]);
    }
    
}
