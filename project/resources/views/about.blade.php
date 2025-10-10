@extends('layouts.header')
@section('title','About')
@section('content')
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1 class="display-4 fw-bold text-info">Welcome to Asad Mukhtar</h1>
            <p class="lead">We bring quality, value, and trust to your shopping experience.</p>
        </div>
    </section>
    
    <!-- Mission Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://source.unsplash.com/600x400/?shopping,store" class="img-fluid rounded shadow"
                        alt="Our Mission">
                </div>
                <div class="col-md-6">
                    <h2 class="text-info">Our Mission</h2>
                    <p>At <strong>YourShop</strong>, our mission is to provide a seamless online shopping experience with a
                        wide range of products at competitive prices. We are committed to quality, affordability, and
                        customer satisfaction.</p>
                    <p>With a user-friendly platform and fast delivery, we aim to become your go-to eCommerce destination.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4 text-info">Meet Our Team</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card team-card shadow-sm border-info">
                        <img src="https://source.unsplash.com/400x300/?man,profile" class="card-img-top" alt="CEO">
                        <div class="card-body">
                            <h5 class="card-title">Asad Mukhtar</h5>
                            <p class="card-text">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card team-card shadow-sm border-info">
                        <img src="https://source.unsplash.com/400x300/?woman,profile" class="card-img-top" alt="COO">
                        <div class="card-body">
                            <h5 class="card-title">Ayesha Khan</h5>
                            <p class="card-text">Chief Operations Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card team-card shadow-sm border-info">
                        <img src="https://source.unsplash.com/400x300/?developer,profile" class="card-img-top" alt="Dev">
                        <div class="card-body">
                            <h5 class="card-title">Hamza Ali</h5>
                            <p class="card-text">Lead Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="cta-section text-center">
        <div class="container">
            <h2 class="mb-3">Ready to Shop With Us?</h2>
            <p class="mb-4">Explore thousands of products with exclusive deals and fast delivery.</p>
            <a href="/shop" class="btn btn-light btn-lg rounded-pill px-4 shadow">Start Shopping</a>
        </div>
    </section>
@endsection