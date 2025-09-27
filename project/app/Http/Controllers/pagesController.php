<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }
    // products .. 
    public function products(){
        return view('products');
    }
    //  about ..
    public function about(){
        return view('about');
    }
    // contact ..
    public function contact(){
        return view('contact');
    }
    // products ..
    public function checkout(){
        return view('checkout');
    }
    // cart ..
    public function cart(){
        return view('cart');
    }
    // 
}
