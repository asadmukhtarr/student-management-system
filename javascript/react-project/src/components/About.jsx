import React from 'react';

const About = () => {
    const teamMembers = [
        {
            id: 1,
            name: 'Sarah Johnson',
            role: 'CEO & Founder',
            image: 'https://images.unsplash.com/photo-1494790108755-2616b786d4d1?w=300&h=300&fit=crop',
            bio: '10+ years in ecommerce industry',
            icon: '👑'
        },
        {
            id: 2,
            name: 'Michael Chen',
            role: 'Head of Operations',
            image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop',
            bio: 'Supply chain optimization expert',
            icon: '⚙️'
        },
        {
            id: 3,
            name: 'Emma Rodriguez',
            role: 'Marketing Director',
            image: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=300&fit=crop',
            bio: 'Digital marketing strategist',
            icon: '📈'
        },
        {
            id: 4,
            name: 'David Park',
            role: 'Technology Lead',
            image: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop',
            bio: 'Full-stack developer & architect',
            icon: '💻'
        }
    ];

    const milestones = [
        { year: '2015', event: 'Company founded with 3 employees', icon: '🚀' },
        { year: '2017', event: 'Reached 10,000 customers', icon: '🎯' },
        { year: '2019', event: 'Expanded to international markets', icon: '🌍' },
        { year: '2021', event: 'Launched mobile app', icon: '📱' },
        { year: '2023', event: 'Surpassed 1 million products sold', icon: '🏆' }
    ];

    const values = [
        { icon: '❤️', title: 'Customer First', description: 'We put our customers at the heart of everything' },
        { icon: '🎯', title: 'Quality Focus', description: 'Curating only the best products for our customers' },
        { icon: '🌱', title: 'Sustainability', description: 'Committed to eco-friendly practices and packaging' },
        { icon: '⚡', title: 'Fast Delivery', description: 'Same-day shipping for orders placed before 2 PM' }
    ];

    const stats = [
        { number: '50K+', label: 'Happy Customers', icon: '😊', color: 'primary' },
        { number: '100+', label: 'Brand Partners', icon: '🤝', color: 'success' },
        { number: '24/7', label: 'Customer Support', icon: '🛡️', color: 'info' },
        { number: '15+', label: 'Countries Served', icon: '🌍', color: 'warning' }
    ];

    return (
        <div className="min-vh-100">
            {/* Hero Section */}
            <section className="bg-primary text-white py-5">
                <div className="container py-5">
                    <div className="row justify-content-center text-center">
                        <div className="col-lg-8">
                            <div className="badge bg-warning text-dark mb-4 p-2 fs-5">
                                <span className="fs-4 me-2">🌟</span> Our Story Since 2015
                            </div>
                            <h1 className="display-3 fw-bold mb-4">
                                Building the Future of <span className="text-warning">Ecommerce</span>
                            </h1>
                            <p className="lead mb-5">
                                We're revolutionizing online shopping with curated products, exceptional service, 
                                and a commitment to making quality accessible to everyone.
                            </p>
                            <button className="btn btn-warning btn-lg px-4 py-3 fw-bold">
                                <span className="fs-4 me-2">🎯</span> Explore Our Mission
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            {/* Mission Section */}
            <section className="py-5">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-lg-6 mb-5 mb-lg-0">
                            <h2 className="display-5 fw-bold mb-4">
                                <span className="text-primary">✨</span> Our Vision & Mission
                            </h2>
                            <div className="card border-0 shadow-sm mb-4">
                                <div className="card-body">
                                    <div className="fs-1 mb-3">🎯</div>
                                    <h4 className="card-title fw-bold text-primary">Our Mission</h4>
                                    <p className="card-text">
                                        To create a seamless shopping experience that brings joy to every customer, 
                                        while supporting ethical brands and sustainable practices.
                                    </p>
                                </div>
                            </div>
                            <div className="card border-0 shadow-sm">
                                <div className="card-body">
                                    <div className="fs-1 mb-3">🚀</div>
                                    <h4 className="card-title fw-bold text-primary">Our Vision</h4>
                                    <p className="card-text">
                                        To become the most trusted and innovative ecommerce platform globally, 
                                        setting new standards for customer satisfaction and environmental responsibility.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6">
                            <div className="card border-0 shadow-lg">
                                <img 
                                    src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=500&fit=crop" 
                                    className="card-img-top" 
                                    alt="Our team"
                                    style={{ height: '400px', objectFit: 'cover' }}
                                />
                                <div className="card-body bg-light">
                                    <div className="d-flex align-items-center">
                                        <div className="fs-1 me-3">🏆</div>
                                        <div>
                                            <h5 className="fw-bold mb-0">Best Ecommerce 2023</h5>
                                            <p className="text-muted mb-0">Retail Excellence Awards</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Values Section */}
            <section className="py-5 bg-light">
                <div className="container">
                    <div className="text-center mb-5">
                        <h2 className="display-5 fw-bold mb-3">
                            <span className="text-primary">💎</span> Our Core Values
                        </h2>
                        <p className="lead text-muted">
                            These principles guide every decision we make and every interaction we have
                        </p>
                    </div>
                    <div className="row g-4">
                        {values.map((value, index) => (
                            <div key={index} className="col-md-3 col-sm-6">
                                <div className="card border-0 shadow-sm h-100">
                                    <div className="card-body text-center">
                                        <div className="fs-1 mb-3">{value.icon}</div>
                                        <h5 className="card-title fw-bold">{value.title}</h5>
                                        <p className="card-text text-muted">{value.description}</p>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Timeline Section */}
            <section className="py-5">
                <div className="container">
                    <h2 className="display-5 fw-bold text-center mb-5">
                        <span className="text-warning">📜</span> Our Journey
                    </h2>
                    <div className="row justify-content-center">
                        <div className="col-lg-10">
                            {milestones.map((milestone, index) => (
                                <div key={index} className="row align-items-center mb-4">
                                    <div className={`col-md-4 ${index % 2 === 0 ? '' : 'order-md-2'}`}>
                                        <div className="text-center text-md-start">
                                            <div className="fs-1 mb-2">{milestone.icon}</div>
                                            <h3 className="fw-bold text-primary">{milestone.year}</h3>
                                        </div>
                                    </div>
                                    <div className="col-md-4 text-center">
                                        <div className="position-relative">
                                            <div className={`bg-${index % 2 === 0 ? 'primary' : 'warning'} rounded-circle d-inline-flex align-items-center justify-content-center`} 
                                                 style={{ width: '40px', height: '40px' }}>
                                                <span className="text-white">{index + 1}</span>
                                            </div>
                                            {index < milestones.length - 1 && (
                                                <div className={`border-${index % 2 === 0 ? 'primary' : 'warning'} border-2 h-100 position-absolute`} 
                                                     style={{ left: '50%', top: '40px', width: '2px', height: '60px' }}></div>
                                            )}
                                        </div>
                                    </div>
                                    <div className="col-md-4">
                                        <div className={`card ${index % 2 === 0 ? 'text-md-end' : 'text-md-start'}`}>
                                            <div className="card-body">
                                                <p className="card-text">{milestone.event}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </section>

            {/* Team Section */}
            <section className="py-5 bg-primary bg-opacity-10">
                <div className="container">
                    <div className="text-center mb-5">
                        <h2 className="display-5 fw-bold mb-3">
                            <span className="text-primary">👥</span> Meet Our Leadership Team
                        </h2>
                        <p className="lead text-muted">
                            Passionate professionals dedicated to delivering exceptional shopping experiences
                        </p>
                    </div>
                    <div className="row g-4">
                        {teamMembers.map((member) => (
                            <div key={member.id} className="col-md-3 col-sm-6">
                                <div className="card border-0 shadow-sm h-100">
                                    <div className="position-relative">
                                        <img 
                                            src={member.image} 
                                            className="card-img-top" 
                                            alt={member.name}
                                            style={{ height: '250px', objectFit: 'cover' }}
                                        />
                                        <div className="position-absolute top-0 end-0 m-2">
                                            <span className="badge bg-primary p-2 fs-5">{member.icon}</span>
                                        </div>
                                    </div>
                                    <div className="card-body text-center">
                                        <h5 className="card-title fw-bold">{member.name}</h5>
                                        <span className="badge bg-primary bg-opacity-25 text-primary mb-3 px-3 py-2">
                                            {member.role}
                                        </span>
                                        <p className="card-text text-muted">{member.bio}</p>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Stats Section */}
            <section className="py-5">
                <div className="container">
                    <div className="row g-4">
                        {stats.map((stat, index) => (
                            <div key={index} className="col-md-3 col-sm-6">
                                <div className={`card bg-${stat.color} text-white border-0 shadow`}>
                                    <div className="card-body text-center">
                                        <div className="fs-1 mb-3">{stat.icon}</div>
                                        <h3 className="card-title fw-bold display-6">{stat.number}</h3>
                                        <p className="card-text">{stat.label}</p>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* CTA Section */}
            <section className="py-5 bg-primary text-white">
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-lg-8 text-center">
                            <div className="fs-1 mb-4">🚀</div>
                            <h2 className="display-5 fw-bold mb-4">Ready to Join Our Community?</h2>
                            <p className="lead mb-5">
                                Be part of our growing community of shoppers and sellers. 
                                Together, we're building the future of ecommerce.
                            </p>
                            <div className="d-flex flex-wrap gap-3 justify-content-center">
                                <button className="btn btn-warning btn-lg px-4 py-3 fw-bold">
                                    <span className="fs-4 me-2">🛍️</span> Start Shopping
                                </button>
                                <button className="btn btn-outline-light btn-lg px-4 py-3 fw-bold">
                                    <span className="fs-4 me-2">📞</span> Contact Us
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default About;