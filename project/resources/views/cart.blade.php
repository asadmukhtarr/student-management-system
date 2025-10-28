@extends('layouts.header')
@section('title', 'Cart')

@section('content')
<!-- Header -->
<section class="text-center py-5 bg-info text-white">
    <div class="container">
        <h1 class="fw-bold"><i class="fa fa-shopping-cart"></i> Your Cart</h1>
        <p class="lead">Review your selected items before checkout</p>
    </div>
</section>

<!-- Main Cart Section -->
<div class="container py-5">
    <div class="row">
        <!-- Cart Table -->
        <div class="col-lg-8">
            @if(session('success'))
            <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ session('success') }}</div>
            @endif

            @if($cartItems->count() > 0)
            <div class="table-responsive shadow-sm">
                <table class="table table-bordered align-middle">
                    <thead class="table-info text-center">
                        <tr>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('storage/products') }}/{{ $item->product->image }}"
                                    alt="{{ $item->product->name }}" class="rounded" width="60">
                            </td>
                            <td>{{ $item->product->name }}</td>
                            <td>PKR {{ number_format($item->product->price) }}</td>
                            <td width="120">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity"
                                        value="{{ $item->quantity }}" min="1"
                                        class="form-control text-center"
                                        onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>PKR {{ number_format($item->product->price * $item->quantity) }}</td>
                            <td class="text-center">
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" title="Remove Item">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                <a href="{{ route('products') }}" class="btn btn-outline-info">
                    <i class="fa fa-arrow-left"></i> Continue Shopping
                </a>
            </div>
            @else
            <div class="alert alert-warning text-center py-4">
                <i class="fa fa-exclamation-triangle fa-2x mb-2"></i>
                <p class="mb-0">Your cart is empty.</p>
                <a href="{{ route('products') }}" class="btn btn-info mt-3">
                    <i class="fa fa-shopping-bag"></i> Start Shopping
                </a>
            </div>
            @endif
        </div>

        <!-- Cart Summary -->
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="card border-info shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-info">
                        <i class="fa fa-calculator"></i> Cart Summary
                    </h5>
                    <hr>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal</span>
                            <span>PKR {{ number_format($subtotal) }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Shipping</span>
                            <span>PKR {{ number_format($shipping) }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between fw-bold text-info">
                            <span>Total</span>
                            <span>PKR {{ number_format($total) }}</span>
                        </li>
                    </ul>

                    @if($cartItems->count() > 0)
                    <a href="{{ route('checkout') }}" class="btn btn-info w-100">
                        <i class="fa fa-credit-card"></i> Proceed to Checkout
                    </a>
                    @else
                    <button class="btn btn-secondary w-100" disabled>
                        <i class="fa fa-ban"></i> Checkout Unavailable
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer CTA -->
<section class="text-center bg-info text-white py-4 mt-5">
    <div class="container">
        <p class="mb-0"><i class="fa fa-smile-o"></i> Your satisfaction is our priority.
            Thanks for shopping with <strong>YourShop</strong>!</p>
    </div>
</section>
@endsection
