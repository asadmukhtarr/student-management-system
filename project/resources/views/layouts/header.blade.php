<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Find it, Love it, Buy it.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
        <header>
        <nav class="navbar navbar-expand-lg bg-info saif">
            <div class="container">
                <a href="#" class="navbar-brand"> <i class="fa fa-user-circle"></i> Asad Mukhtar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#asad"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="asad">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link"> <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link"> <i class="fa fa-info-circle"></i> About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products') }}" class="nav-link"> <i class="fa fa-list"></i> Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link"> <i class="fa fa-handshake-o"></i> Contact</a>
                        </li>
                        <li class="nav-item m-1">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dm btn-danger"> <i class="fa fa-user-circle"></i> Account</button>
                                <button type="button" class="btn btn-danger btn-md dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cart') }}" class="btn btn-sm btn-outline-danger mt-2 position-relative">
                                <i class="fa fa-shopping-cart"></i> Cart
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
                                    3
                                    <span class="visually-hidden">items in cart</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
        <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
    
                <!-- About -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold text-warning">AR Web Store</h5>
                    <p>We offer quality tech gadgets, kitchen tools, kids' items, and more at the best prices.</p>
                </div>
    
                <!-- Links -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 fw-bold">Quick Links</h6>
                    <p><a href="#" class="text-white text-decoration-none">Home</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Shop</a></p>
                    <p><a href="#" class="text-white text-decoration-none">About Us</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Contact</a></p>
                </div>
    
                <!-- Help -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 fw-bold">Customer Service</h6>
                    <p><a href="#" class="text-white text-decoration-none">FAQs</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Shipping</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Returns</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Privacy Policy</a></p>
                </div>
    
                <!-- Contact -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 fw-bold">Contact</h6>
                    <p><i class="fa fa-home me-2"></i> Lahore, Pakistan</p>
                    <p><i class="fa fa-envelope me-2"></i> support@arwebstore.com</p>
                    <p><i class="fa fa-phone me-2"></i> +92 300 1234567</p>
                    <p><i class="fa fa-clock me-2"></i> Mon - Sat: 10am - 8pm</p>
                </div>
            </div>
    
            <hr class="my-4 text-white">
    
            <!-- Bottom Bar -->
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p class="text-white">© 2025 AR Web Store. All rights reserved.</p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-end">
                        <a href="#" class="text-white me-3"><i class="fa fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>