<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class pagesController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }
    // products .. 
    public function products(){
        $products = product::orderby('id','desc')->get();
        return view('products',compact('products'));
    }
    public function show($id){
        $product = product::find($id);
        return view('product',compact('product'));
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
