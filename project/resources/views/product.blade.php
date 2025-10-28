@extends('layouts.header')

@section('title', $product->name)

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <!-- Product Info -->
            <div class="card shadow-sm border-light">
                <div class="row g-0">
                    <!-- Product Image -->
                    <div class="col-md-4">
                        <img src="{{ asset('storage/products/'.$product->image) }}" height="300px" width="100%" alt="{{ $product->name }}" style="object-fit: cover; height: 100%; width: 100%; max-height: 350px;">
                    </div>

                    <!-- Product Details -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $product->name }}</h3>
                            
                            <!-- Product Category & Price -->
                            <p class="text-muted">Category: <strong>{{ $product->category->name }}</strong></p>
                            <p class="text-primary fs-4"><strong>${{ number_format($product->price, 2) }}</strong></p>

                            <!-- Product Rating (if applicable) -->
                            <div class="d-flex">
                                <span class="text-warning">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </span>
                                <span class="ms-2 text-muted">4.5/5 (125 Reviews)</span>
                            </div>

                            <!-- Add to Cart Button -->
                            <div class="mt-3">
                                <a href="{{ route('add.cart',$product->id) }}">
                                    <button class="btn btn-lg btn-primary w-100">Add to Cart</button>
                                </a>
                            </div>

                            <!-- Additional Details -->
                            <div class="mt-3">
                                <h5>Description</h5>
                                <div class="product-description">
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
