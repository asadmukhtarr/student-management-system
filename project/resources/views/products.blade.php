@extends('layouts.header')
@section('title','Products')
@section('content')
    <!-- Header -->
    <section class="text-center py-5 bg-info text-white">
        <div class="container">
            <h1 class="fw-bold">Our Products</h1>
            <p class="lead">Explore the best deals curated just for you!</p>
        </div>
    </section>
    
    <!-- Filter Bar (optional/static) -->
    <div class="bg-light py-3 border-bottom">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="mb-2">
                <select class="form-select">
                    <option selected>Sort by</option>
                    <option>Price (Low to High)</option>
                    <option>Price (High to Low)</option>
                    <option>Newest</option>
                </select>
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" placeholder="Search products...">
            </div>
        </div>
    </div>
    
    <!-- Product Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4 mt-2">
                @foreach($products as $product)
                <!-- Product Card -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card product-card border-info shadow-sm">
                        <img src="{{ asset('storage/products/' . $product->image) }}" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="text-muted">PKR {{ $product->price }}</p>
                            <a href="{{ route('product.client.show',$product->id) }}" class="btn btn-info btn-sm">Add to Cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
    
            </div>
        </div>
    </section>
    
    <!-- Footer CTA -->
    <section class="text-center bg-info text-white py-5">
        <div class="container">
            <h2>Can't find what you're looking for?</h2>
            <p>Stay tuned, new products are added every week!</p>
            <a href="/contact" class="btn btn-light btn-lg rounded-pill px-4">Contact Us</a>
        </div>
    </section>
@endsection