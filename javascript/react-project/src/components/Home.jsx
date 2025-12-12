import React from 'react';

const Home = () => {
    const featuredProducts = [
        {
            id: 1,
            name: 'Premium Wireless Headphones',
            price: 199.99,
            originalPrice: 249.99,
            rating: 4.5,
            image: 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=400&fit=crop',
            category: 'Electronics',
            discount: 20
        },
        {
            id: 2,
            name: 'Organic Cotton T-Shirt',
            price: 29.99,
            originalPrice: 34.99,
            rating: 4.2,
            image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop',
            category: 'Fashion',
            discount: 15
        },
        {
            id: 3,
            name: 'Smart Fitness Watch',
            price: 159.99,
            originalPrice: 199.99,
            rating: 4.7,
            image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop',
            category: 'Electronics',
            discount: 20
        },
        {
            id: 4,
            name: 'Ceramic Coffee Mug Set',
            price: 34.99,
            originalPrice: 49.99,
            rating: 4.4,
            image: 'https://images.unsplash.com/photo-1514228742587-6b1558fcf93a?w=400&h=400&fit=crop',
            category: 'Home',
            discount: 30
        }
    ];

    const categories = [
        { name: 'Electronics', count: 120, image: 'https://images.unsplash.com/photo-1498049794561-7780e7231661?w=300&h=200&fit=crop' },
        { name: 'Fashion', count: 85, image: 'https://images.unsplash.com/photo-1445205170230-053b83016050?w=300&h=200&fit=crop' },
        { name: 'Home & Kitchen', count: 67, image: 'https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=300&h=200&fit=crop' },
        { name: 'Sports', count: 42, image: 'https://images.unsplash.com/photo-1536922246289-88c42f957773?w=300&h=200&fit=crop' }
    ];

    const stats = [
        { number: '10K+', label: 'Happy Customers', icon: '😊' },
        { number: '500+', label: 'Premium Products', icon: '⭐' },
        { number: '24/7', label: 'Support Available', icon: '🛡️' },
        { number: '50+', label: 'Brand Partners', icon: '🤝' }
    ];

    return (
        <div className="min-vh-100">
            {/* Hero Banner */}
            <section className="bg-primary text-white py-5">
                <div className="container py-5">
                    <div className="row align-items-center">
                        <div className="col-lg-6 mb-5 mb-lg-0">
                            <div className="badge bg-warning text-dark mb-3 p-2">
                                <span className="fs-5">🎉</span> Summer Sale Extravaganza!
                            </div>
                            <h1 className="display-4 fw-bold mb-4">
                                Up to <span className="text-warning">60% OFF</span> on Premium Collection
                            </h1>
                            <p className="lead mb-4">
                                Discover handpicked products with exclusive discounts. Limited time offer!
                            </p>
                            <div className="d-flex flex-wrap gap-3">
                                <button className="btn btn-warning btn-lg px-4 py-3 fw-bold">
                                    <span className="fs-4 me-2">🛍️</span> Shop Now
                                </button>
                                <button className="btn btn-outline-light btn-lg px-4 py-3 fw-bold">
                                    <span className="fs-4 me-2">🔥</span> View Hot Deals
                                </button>
                            </div>
                        </div>
                        <div className="col-lg-6">
                            <div className="position-relative">
                                <img 
                                    src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=600&h=400&fit=crop" 
                                    alt="Hero" 
                                    className="img-fluid rounded-3 shadow-lg"
                                />
                                <div className="position-absolute top-0 start-0 m-3">
                                    <div className="bg-danger text-white p-3 rounded-circle">
                                        <span className="fs-4">🔥</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Stats Section */}
            <section className="py-5">
                <div className="container">
                    <div className="row g-4">
                        {stats.map((stat, index) => (
                            <div key={index} className="col-md-3 col-sm-6">
                                <div className="card border-0 shadow-sm h-100 text-center">
                                    <div className="card-body">
                                        <div className="fs-1 mb-3">{stat.icon}</div>
                                        <h3 className="card-title fw-bold text-primary">{stat.number}</h3>
                                        <p className="card-text text-muted">{stat.label}</p>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Categories Section */}
            <section className="py-5 bg-light">
                <div className="container">
                    <div className="text-center mb-5">
                        <h2 className="display-5 fw-bold mb-3">
                            <span className="text-primary">🏷️</span> Shop by Category
                        </h2>
                        <p className="lead text-muted">Explore our wide range of product categories</p>
                    </div>
                    <div className="row g-4">
                        {categories.map((category, index) => (
                            <div key={index} className="col-md-3 col-sm-6">
                                <div className="card border-0 shadow-sm h-100 overflow-hidden">
                                    <div className="position-relative">
                                        <img 
                                            src={category.image} 
                                            className="card-img-top" 
                                            alt={category.name}
                                            style={{ height: '200px', objectFit: 'cover' }}
                                        />
                                        <div className="position-absolute top-0 start-0 m-3">
                                            <span className="badge bg-primary px-3 py-2">
                                                {category.count} Products
                                            </span>
                                        </div>
                                    </div>
                                    <div className="card-body text-center">
                                        <h5 className="card-title fw-bold">{category.name}</h5>
                                        <button className="btn btn-outline-primary mt-2">
                                            Explore <span className="ms-1">→</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Featured Products */}
            <section className="py-5">
                <div className="container">
                    <div className="d-flex justify-content-between align-items-center mb-5">
                        <div>
                            <h2 className="display-5 fw-bold">
                                <span className="text-warning">⭐</span> Featured Products
                            </h2>
                            <p className="text-muted">Handpicked items just for you</p>
                        </div>
                        <button className="btn btn-primary btn-lg">
                            View All Products <span className="ms-2">→</span>
                        </button>
                    </div>
                    
                    <div className="row g-4">
                        {featuredProducts.map((product) => (
                            <div key={product.id} className="col-lg-3 col-md-6">
                                <div className="card border-0 shadow-sm h-100">
                                    <div className="position-relative">
                                        <img 
                                            src={product.image} 
                                            className="card-img-top" 
                                            alt={product.name}
                                            style={{ height: '250px', objectFit: 'cover' }}
                                        />
                                        <div className="position-absolute top-0 start-0 m-3">
                                            <span className="badge bg-danger px-3 py-2">
                                                {product.discount}% OFF
                                            </span>
                                        </div>
                                        <div className="position-absolute top-0 end-0 m-3">
                                            <button className="btn btn-light btn-sm rounded-circle">
                                                <span className="fs-5">❤️</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div className="card-body">
                                        <div className="d-flex align-items-center mb-2">
                                            {[...Array(5)].map((_, i) => (
                                                <span 
                                                    key={i} 
                                                    className={`fs-5 ${i < Math.floor(product.rating) ? 'text-warning' : 'text-muted'}`}
                                                >
                                                    ★
                                                </span>
                                            ))}
                                            <small className="text-muted ms-2">({product.rating})</small>
                                        </div>
                                        <h5 className="card-title fw-bold">{product.name}</h5>
                                        <p className="text-muted mb-3">{product.category}</p>
                                        <div className="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span className="fs-4 fw-bold text-dark">${product.price}</span>
                                                <span className="text-muted text-decoration-line-through ms-2">
                                                    ${product.originalPrice}
                                                </span>
                                            </div>
                                            <button className="btn btn-primary">
                                                <span className="fs-5 me-2">🛒</span> Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Newsletter Section */}
            <section className="py-5 bg-primary text-white">
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-lg-8 text-center">
                            <div className="fs-1 mb-4">💌</div>
                            <h2 className="display-5 fw-bold mb-4">Join Our Exclusive Club</h2>
                            <p className="lead mb-5">
                                Get 15% off your first order and be the first to know about exclusive deals!
                            </p>
                            <div className="row g-3 justify-content-center">
                                <div className="col-md-8">
                                    <div className="input-group input-group-lg">
                                        <input 
                                            type="email" 
                                            className="form-control" 
                                            placeholder="Enter your email address"
                                        />
                                        <button className="btn btn-warning btn-lg px-4">
                                            <span className="fs-5 me-2">🎁</span> Subscribe
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p className="mt-3 text-white-50">
                                By subscribing, you agree to our Privacy Policy
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default Home;