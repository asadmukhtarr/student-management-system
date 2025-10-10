@extends('layouts.header')
@section('title','Contact')
@section('content')
    <!-- Header -->
    <section class="text-center py-5 bg-info text-white">
        <div class="container">
            <h1 class="fw-bold"><i class="fa fa-envelope"></i> Contact Us</h1>
            <p class="lead">We’re here to help and answer any question you might have.</p>
        </div>
    </section>
    
    <!-- Contact Info + Form -->
    <section class="contact-section py-5">
        <div class="container">
            <div class="row g-4">
    
                <!-- Contact Info -->
                <div class="col-md-5">
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="contact-icon me-3">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div>
                                <h5>Our Location</h5>
                                <p>123 Market Street, Lahore, Pakistan</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="contact-icon me-3">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div>
                                <h5>Call Us</h5>
                                <p>+92 300 1234567</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="mb-4">
                        <div class="d-flex align-items-start">
                            <div class="contact-icon me-3">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>support@yourshop.pk</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/bY1aZC2DkSA?si=nw0jeGpcLZD6Rq6Q"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
    
                <!-- Contact Form -->
                <div class="col-md-7">
                    <div class="card shadow-sm border-info p-4">
                        <h4 class="text-info mb-4"><i class="fa fa-paper-plane"></i> Send us a message</h4>
                        <form>
                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-user"></i> Your Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-envelope"></i> Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-comment"></i> Message</label>
                                <textarea class="form-control" rows="5" placeholder="Write your message..."
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-info"><i class="fa fa-send"></i> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Google Map Embed -->
    <section class="map">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.05062044!2d-74.3091695806123!3d40.69719334793303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1754231333323!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
    </section>
    
    <!-- Footer CTA -->
    <section class="text-center bg-info text-white py-4">
        <div class="container">
            <p class="mb-0"><i class="fa fa-heart"></i> Thank you for visiting YourShop — we value your trust.</p>
        </div>
    </section>
@endsection