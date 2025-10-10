@extends('layouts.header')
@section('title','Cart')
@section('content')
 <!-- Header -->
    <section class="text-center py-5 bg-info text-white">
        <div class="container">
            <h1 class="fw-bold"><i class="fa fa-shopping-cart"></i> Your Cart</h1>
            <p class="lead">Review your selected items before checkout</p>
        </div>
    </section>

    <!-- Cart Table -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="cart-header">
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
                            <!-- Item 1 -->
                            <tr>
                                <td><img src="https://picsum.photos/60?random=1" alt="Product" class="product-img"></td>
                                <td>iPhone 13 Pro Max</td>
                                <td>PKR 245,000</td>
                                <td><input type="number" class="form-control quantity-input" value="1" min="1"></td>
                                <td>PKR 245,000</td>
                                <td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                            </tr>

                            <!-- Item 2 -->
                            <tr>
                                <td><img src="https://picsum.photos/60?random=2" alt="Product" class="product-img"></td>
                                <td>Wireless Headphones</td>
                                <td>PKR 12,000</td>
                                <td><input type="number" class="form-control quantity-input" value="2" min="1"></td>
                                <td>PKR 24,000</td>
                                <td><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                            </tr>

                            <!-- More items as needed -->
                        </tbody>
                    </table>
                </div>
                <a href="/shop" class="btn btn-outline-info"><i class="fa fa-arrow-left"></i> Continue Shopping</a>
            </div>

            <!-- Summary -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card cart-summary shadow-sm border-info">
                    <div class="card-body">
                        <h5 class="card-title text-info"><i class="fa fa-calculator"></i> Cart Summary</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span>PKR 269,000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Shipping</span>
                                <span>PKR 1,000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between fw-bold text-info">
                                <span>Total</span>
                                <span>PKR 270,000</span>
                            </li>
                        </ul>
                        <a href="{{ route('checkout') }}" class="btn btn-info w-100"><i class="fa fa-credit-card"></i> Proceed to
                            Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer CTA -->
    <section class="text-center bg-info text-white py-4">
        <div class="container">
            <p class="mb-0"><i class="fa fa-smile-o"></i> Your satisfaction is our priority. Thanks for shopping with
                YourShop!</p>
        </div>
    </section>
@endsection