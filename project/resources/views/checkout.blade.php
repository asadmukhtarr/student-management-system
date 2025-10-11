@extends('layouts.header')
@section('title','Checkout')
@section('content')
 <!-- Header -->
    <section class="text-center py-5 bg-info text-white">
        <div class="container">
            <h1 class="fw-bold"><i class="fa fa-credit-card"></i> Checkout</h1>
            <p class="lead">Complete your purchase securely</p>
        </div>
    </section>
    
    <!-- Checkout Section -->
    <div class="container py-5">
        <div class="row g-4">
    
            <!-- Billing & Shipping Form -->
            <div class="col-lg-8">
                <div class="card shadow-sm border-info p-4">
                    <h4 class="text-info mb-4"><i class="fa fa-user"></i> Billing Information</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3 position-relative">
                                <i class="fa fa-user form-icon"></i>
                                <input type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6 mb-3 position-relative">
                                <i class="fa fa-envelope form-icon"></i>
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="mb-3 position-relative">
                            <i class="fa fa-phone form-icon"></i>
                            <input type="text" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="mb-3 position-relative">
                            <i class="fa fa-map-marker form-icon"></i>
                            <input type="text" class="form-control" placeholder="Shipping Address" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 position-relative">
                                <i class="fa fa-building form-icon"></i>
                                <input type="text" class="form-control" placeholder="City" required>
                            </div>
                            <div class="col-md-6 mb-3 position-relative">
                                <i class="fa fa-globe form-icon"></i>
                                <input type="text" class="form-control" placeholder="Country" required>
                            </div>
                        </div>

                        <h5 class="text-info mt-4"><i class="fa fa-credit-card"></i> Payment Method</h5>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="cod" checked>
                            <label class="form-check-label" for="cod">
                                <i class="fa fa-money"></i> Cash on Delivery
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="card">
                            <label class="form-check-label" for="card">
                                <i class="fa fa-cc-visa"></i> Debit/Credit Card
                            </label>
                        </div>

                        <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-info btn-lg">
                                <i class="fa fa-check"></i> Place Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        
            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card checkout-summary shadow-sm border-info">
                    <div class="card-body">
                        <h5 class="card-title text-info"><i class="fa fa-list"></i> Order Summary</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>iPhone 13 Pro Max</span>
                                <span>PKR 245,000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Wireless Headphones</span>
                                <span>PKR 24,000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Subtotal</strong>
                                <strong>PKR 269,000</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Shipping</span>
                                <span>PKR 1,000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between text-info fw-bold">
                                <span>Total</span>
                                <span>PKR 270,000</span>
                            </li>
                        </ul>
                        <a href="{{ route('cart') }}" class="btn btn-outline-info w-100"><i class="fa fa-arrow-left"></i> Back to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection