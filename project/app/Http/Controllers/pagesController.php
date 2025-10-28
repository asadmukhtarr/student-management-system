<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\order as Order;
use App\Models\order_item as OrderItem;

class pagesController extends Controller
{
    // Home
    public function home()
    {
        return view('welcome');
    }

    // All products
    public function products()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('products', compact('products'));
    }

    // Single product view
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }

    // Static pages
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

// Checkout page
public function checkout()
{
    $cartItems = Cart::with('product')
        ->where('user_id', Auth::id())
        ->get();

    $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
    $shipping = $cartItems->count() ? 1000 : 0;
    $total = $subtotal + $shipping;

    return view('checkout', compact('cartItems', 'subtotal', 'shipping', 'total'));
}

// Place order
public function place_order(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
    ]);

    $cartItems = Cart::with('product')
        ->where('user_id', Auth::id())
        ->get();

    if ($cartItems->isEmpty()) {
        return redirect()->route('cart')->with('error', 'Your cart is empty!');
    }

    $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
    $shipping = 1000;
    $total = $subtotal + $shipping;

    // Create Order
    $order = new Order();
    $order->user_id = Auth::id();
    $order->name = $request->name;
    $order->email = $request->email;
    $order->phone = $request->phone;
    $order->address = $request->address;
    $order->amount = $total;
    $order->status = 'Pending';
    $order->save();

    // Add order items (object query style)
    foreach ($cartItems as $item) {
        $orderItem = new OrderItem();
        $orderItem->order_id = $order->id;
        $orderItem->product_id = $item->product_id;
        $orderItem->quantity = $item->quantity;
        $orderItem->total = $item->product->price * $item->quantity;
        $orderItem->save();
    }

    // Clear cart
    Cart::where('user_id', Auth::id())->delete();

    return redirect()->route('home')->with('success', 'Your order has been placed successfully!');
}


    // =========================
    // 🛒 CART SYSTEM STARTS HERE
    // =========================

    // Show user cart
    public function cart()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', Auth::id())
            ->get();

        $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
        $shipping = $cartItems->count() ? 1000 : 0;
        $total = $subtotal + $shipping;

        return view('cart', compact('cartItems', 'subtotal', 'shipping', 'total'));
    }

    // Add product to cart
    public function add_to_cart($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first!');
        }

        $product = Product::findOrFail($id);

        $existing = Cart::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->first();

        if ($existing) {
            $existing->increment('quantity');
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('cart')->with('success', 'Product added to cart!');
    }

    // Update quantity
    public function update_cart(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->update(['quantity' => $request->quantity]);
        return redirect()->route('cart')->with('success', 'Cart updated successfully!');
    }

    // Remove product from cart
    public function remove_cart($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();
        return redirect()->route('cart')->with('success', 'Item removed from cart!');
    }
}
