<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = product::all();
        return view('admin.products.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required'
        ]);
        if($request->hasFile('image')){
            $name = time().".".$request->image->getClientOriginalExtension();
            $request->image->storeAs('products',$name,'public');
        }
        $product = new product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->image = $name;
        $product->save();
        return redirect()->back()->with('success','Product Created Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Get the product and categories
        $product = product::findOrFail($id);
        $categories = category::all();
        
        // Return the edit view with the product and categories
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'category_id' => 'required',
        'image' => 'nullable|image'
    ]);

    // Find the product by ID
    $product = product::findOrFail($id);

    // Update the product details
    $product->name = $request->name;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->category_id = $request->category_id;

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        $name = time() . "." . $request->image->getClientOriginalExtension();
        $request->image->storeAs('products', $name, 'public');
        $product->image = $name;
    }

    // Save the updated product
    $product->save();

    // Redirect back with success message
    return redirect()->route('admin.product.index')->with('success', 'Product updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Find the product by ID
    $product = product::findOrFail($id);

    // Delete the product's image from storage
    if (file_exists(public_path('storage/products/' . $product->image))) {
        unlink(public_path('storage/products/' . $product->image));
    }

    // Delete the product
    $product->delete();

    // Redirect back with success message
    return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully');
}

}
