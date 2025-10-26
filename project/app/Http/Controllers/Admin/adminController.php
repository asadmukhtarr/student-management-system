<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    // Orders
    public function newOrders()
    {
        return view('admin.orders.new');
    }

    public function orderHistory()
    {
        return view('admin.orders.history');
    }
    // for users ..
}
