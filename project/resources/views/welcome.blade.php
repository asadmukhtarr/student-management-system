@extends('layouts.header')
@section('title','Asad Mukhtar')
@section('content')
 <div class="bg-info border border-1 p-5 shadow-lg">
        <h2><i class="fa fa-smile-o"></i> Hello Asad Mukhtar!</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, reprehenderit repellat quas veniam nihil voluptatum ipsum a labore modi saepe vero rerum maiores magni, doloribus deserunt, ad reiciendis ipsam ut? Non nam tenetur fuga corrupti maiores, asperiores, doloremque vel excepturi rem dolorem velit at ad, earum quod quo soluta quis fugiat reprehenderit beatae dolorum et voluptates? Et veritatis quam sit obcaecati, error placeat enim explicabo excepturi amet id laborum iste, voluptate accusantium veniam! Quos tempore illo reiciendis earum dolorum nulla. Vero velit vitae quas alias, praesentium eius consequuntur eligendi reiciendis iure adipisci, necessitatibus, assumenda doloribus numquam sint quam pariatur cupiditate?
        </p>
        <div class="input-group" style="max-width: 400px;">
            <input type="text" class="form-control" placeholder="Search Here What You Want">
            <button class="btn btn-outline-danger" type="button">
                <i class="fa fa-search"></i> Search
            </button>
        </div>
    </div>
    <section>
        <div class="p-5">
            <h2>  <span class="text-info"> <i class="fa fa-star"></i> Our Feature</span> Products</h2>
            <hr />
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
        
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row mt-2">
                        <!-- Product 1 -->
                        <div class="col-lg-3">
                            <div class="card shadow-md hover-shadow">
                                <img src="https://picsum.photos/200?random=1" class="card-img-top" alt="">
                                <div class="card-body">
                                    <label><b>Iphone 13 Pro Max</b></label>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <div class="card-footer">
                                    <label><i class="fa fa-money"></i> 1000$</label>
                                    <button class="btn btn-sm btn-danger float-end"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
        
                        <!-- Product 2 -->
                        <div class="col-lg-3">
                            <div class="card shadow-md hover-shadow">
                                <img src="https://picsum.photos/200?random=2" class="card-img-top" alt="">
                                <div class="card-body">
                                    <label><b>Iphone 13 Pro Max</b></label>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <div class="card-footer">
                                    <label><i class="fa fa-money"></i> 1000$</label>
                                    <button class="btn btn-sm btn-danger float-end"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
        
                        <!-- Product 3 -->
                        <div class="col-lg-3">
                            <div class="card shadow-md hover-shadow">
                                <img src="https://picsum.photos/200?random=3" class="card-img-top" alt="">
                                <div class="card-body">
                                    <label><b>Iphone 13 Pro Max</b></label>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <div class="card-footer">
                                    <label><i class="fa fa-money"></i> 1000$</label>
                                    <button class="btn btn-sm btn-danger float-end"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
        
                        <!-- Product 4 -->
                        <div class="col-lg-3">
                            <div class="card shadow-md hover-shadow">
                                <img src="https://picsum.photos/200?random=4" class="card-img-top" alt="">
                                <div class="card-body">
                                    <label><b>Iphone 13 Pro Max</b></label>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <div class="card-footer">
                                    <label><i class="fa fa-money"></i> 1000$</label>
                                    <button class="btn btn-sm btn-danger float-end"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
        
                <!-- Slide 2 (duplicate or more products) -->
                <div class="carousel-item">
                    <div class="row mt-2">
                        <div class="col-lg-3">
                            <div class="card shadow-md hover-shadow">
                                <img src="https://picsum.photos/200?random=5" class="card-img-top" alt="">
                                <div class="card-body">
                                    <label><b>Iphone 14 Pro</b></label>
                                    <p>Another product description here...</p>
                                </div>
                                <div class="card-footer">
                                    <label><i class="fa fa-money"></i> 1200$</label>
                                    <button class="btn btn-sm btn-danger float-end"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card shadow-md hover-shadow">
                                <img src="https://picsum.photos/200?random=5" class="card-img-top" alt="">
                                <div class="card-body">
                                    <label><b>Iphone 14 Pro</b></label>
                                    <p>Another product description here...</p>
                                </div>
                                <div class="card-footer">
                                    <label><i class="fa fa-money"></i> 1200$</label>
                                    <button class="btn btn-sm btn-danger float-end"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card shadow-md hover-shadow">
                                <img src="https://picsum.photos/200?random=5" class="card-img-top" alt="">
                                <div class="card-body">
                                    <label><b>Iphone 14 Pro</b></label>
                                    <p>Another product description here...</p>
                                </div>
                                <div class="card-footer">
                                    <label><i class="fa fa-money"></i> 1200$</label>
                                    <button class="btn btn-sm btn-danger float-end"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card shadow-md hover-shadow">
                                <img src="https://picsum.photos/200?random=5" class="card-img-top" alt="">
                                <div class="card-body">
                                    <label><b>Iphone 14 Pro</b></label>
                                    <p>Another product description here...</p>
                                </div>
                                <div class="card-footer">
                                    <label><i class="fa fa-money"></i> 1200$</label>
                                    <button class="btn btn-sm btn-danger float-end"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- Add up to 4 items again -->
                    </div>
                </div>
        
            </div>
        
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </section>
    <section id="about">
        <div class="bg-info p-5 text-center shadow-lg">
            <h2 class="display-5 fw-bold text-white mb-3">
                <i class="fa fa-shopping-bag me-2"></i>Find it, Love it, Buy it.
                <hr />
            </h2>
            <p class="text-white-50 lead mb-4">
                Discover a wide variety of top-quality products. From gadgets to fashion, we have it all. Enjoy seamless
                shopping, fast delivery, and exclusive deals tailored just for you.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="btn btn-danger shadow-sm">
                    <i class="fa fa-list me-1"></i> All Products
                </a>
                <a href="#" class="btn btn-outline-light shadow-sm">
                    <i class="fa fa-sign-in me-1"></i> Login
                </a>
            </div>
        </div>
    </section>
    <section id="category">
        <div class="p-5">
            <h2><span class="text-info"><i class="fa fa-star"></i> Our Feature</span> Categories</h2>
            <hr />
            <div class="row g-0">
                <!-- Category Card Start -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/GKP5Z8N.png" class="img-fluid" alt="3D Printers">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">3D Printers</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/GvZKyXN.png" class="img-fluid" alt="Pizza Tools">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">Pizza Tools</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/H4If0D7.png" class="img-fluid" alt="SIM Tools">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">SIM Tools</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/BY0rFA6.png" class="img-fluid" alt="Screen Protectors">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">Screen Protectors</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/KL2qxKs.png" class="img-fluid" alt="Casserole Pots">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">Casserole Pots</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/6QslU7j.png" class="img-fluid" alt="Toy Boxes">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">Toy Boxes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <!-- Category Card Start -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/GKP5Z8N.png" class="img-fluid" alt="3D Printers">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">3D Printers</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/GvZKyXN.png" class="img-fluid" alt="Pizza Tools">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">Pizza Tools</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/H4If0D7.png" class="img-fluid" alt="SIM Tools">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">SIM Tools</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/BY0rFA6.png" class="img-fluid" alt="Screen Protectors">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">Screen Protectors</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/KL2qxKs.png" class="img-fluid" alt="Casserole Pots">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">Casserole Pots</h6>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card text-center">
                        <img src="https://i.imgur.com/6QslU7j.png" class="img-fluid" alt="Toy Boxes">
                        <div class="card-body py-2">
                            <h6 class="card-title mb-0">Toy Boxes</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-info text-white py-5">
        <div class="container text-center">
            <h3 class="mb-3"><i class="fa fa-envelope"></i> Subscribe to Our Newsletter</h3>
            <p class="mb-4">Get updates on latest products, offers, and more directly in your inbox.</p>
            <form class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-2">
                    <input type="email" class="form-control form-control-lg" placeholder="Enter your email" required>
                </div>
                <div class="col-md-3 col-lg-2 mb-2">
                    <button type="submit" class="btn btn-danger btn-lg w-100"><i class="fa fa-paper-plane"></i>
                        Subscribe</button>
                </div>
            </form>
        </div>
    </section>
@endsection