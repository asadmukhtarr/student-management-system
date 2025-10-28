<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order as Order;
use App\Models\order_item as OrderItem;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        return view('admin.Dashboard');
    }

    // Login
    public function login()
    {
        return view('admin.Login');
    }

    // Settings
    public function settings()
    {
        return view('admin.settings');
    }

    // Analytics
    public function analytics()
    {
        return view('admin.analytics');
    }

    // 🧾 New Orders
    public function newOrders()
    {
        $orders = Order::where('status', 'Pending')->orderBy('id', 'desc')->get();
        return view('admin.orders.new', compact('orders'));
    }

    // 📜 Order History
    public function orderHistory()
    {
        $orders = Order::where('status', '!=', value: 'Pending')->orderBy('id', 'desc')->get();
        return view('admin.orders.history', compact('orders'));
    }

    // ✅ Mark Order as Completed
    public function completeOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Completed';
        $order->save();

        return redirect()->back()->with('success', 'Order marked as completed!');
    }

    // ✅ View Single Order Details
    public function viewOrder($id)
    {
        $order = Order::findOrFail($id);
        $items = OrderItem::where('order_id', $id)->get();

        return view('admin.orders.view', compact('order', 'items'));
    }
}
