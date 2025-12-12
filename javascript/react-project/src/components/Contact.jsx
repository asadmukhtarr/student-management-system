import React, { useState } from 'react';

const Contact = () => {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        phone: '',
        subject: '',
        message: ''
    });

    const [isSubmitted, setIsSubmitted] = useState(false);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData(prevState => ({
            ...prevState,
            [name]: value
        }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        // In a real application, you would send this data to your backend
        console.log('Form submitted:', formData);
        setIsSubmitted(true);
        // Reset form after 3 seconds
        setTimeout(() => {
            setIsSubmitted(false);
            setFormData({
                name: '',
                email: '',
                phone: '',
                subject: '',
                message: ''
            });
        }, 3000);
    };

    const contactInfo = [
        {
            icon: '📞',
            title: 'Phone Support',
            details: ['1-800-SHOP-NOW', '+1 (555) 123-4567'],
            hours: '24/7 Available',
            color: 'primary'
        },
        {
            icon: '✉️',
            title: 'Email Us',
            details: ['support@shopease.com', 'sales@shopease.com'],
            response: 'Response within 24 hours',
            color: 'success'
        },
        {
            icon: '🏢',
            title: 'Visit Us',
            details: ['123 Commerce Street', 'New York, NY 10001', 'United States'],
            hours: 'Mon-Fri: 9AM-6PM',
            color: 'warning'
        }
    ];

    const faqs = [
        {
            question: 'How can I track my order?',
            answer: 'You can track your order by logging into your account and visiting the "My Orders" section. You will receive tracking information via email once your order ships.'
        },
        {
            question: 'What is your return policy?',
            answer: 'We offer a 30-day return policy for unused items in original packaging. Returns are free for orders over $50.'
        },
        {
            question: 'Do you ship internationally?',
            answer: 'Yes, we ship to over 50 countries worldwide. Shipping costs and delivery times vary by location.'
        },
        {
            question: 'How can I contact customer service?',
            answer: 'You can contact us via phone, email, or the contact form on this page. We typically respond within 24 hours.'
        }
    ];

    return (
        <div className="min-vh-100">
            {/* Hero Section */}
            <section className="bg-primary text-white py-5">
                <div className="container py-5">
                    <div className="row justify-content-center text-center">
                        <div className="col-lg-8">
                            <div className="badge bg-warning text-dark mb-4 p-2 fs-5">
                                <span className="fs-4 me-2">📞</span> We're Here to Help
                            </div>
                            <h1 className="display-3 fw-bold mb-4">Get in Touch</h1>
                            <p className="lead mb-5">
                                Have questions or need assistance? Our friendly team is ready to help you 
                                with any inquiries about our products, orders, or services.
                            </p>
                            <div className="d-flex flex-wrap gap-3 justify-content-center">
                                <button className="btn btn-warning btn-lg px-4 py-3 fw-bold" onClick={() => window.location.href = 'tel:1-800-SHOP-NOW'}>
                                    <span className="fs-4 me-2">📞</span> Call Now
                                </button>
                                <button className="btn btn-outline-light btn-lg px-4 py-3 fw-bold" onClick={() => window.location.href = 'mailto:support@shopease.com'}>
                                    <span className="fs-4 me-2">✉️</span> Email Us
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Contact Info Cards */}
            <section className="py-5">
                <div className="container">
                    <div className="row g-4">
                        {contactInfo.map((info, index) => (
                            <div key={index} className="col-md-4">
                                <div className={`card border-0 shadow-sm h-100 bg-${info.color} bg-opacity-10 border-${info.color} border-opacity-25`}>
                                    <div className="card-body text-center">
                                        <div className={`bg-${info.color} text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4`} 
                                             style={{ width: '80px', height: '80px' }}>
                                            <span className="fs-2">{info.icon}</span>
                                        </div>
                                        <h4 className="card-title fw-bold mb-3">{info.title}</h4>
                                        {info.details.map((detail, idx) => (
                                            <p key={idx} className="card-text">{detail}</p>
                                        ))}
                                        <div className="mt-3">
                                            <small className={`text-${info.color}`}>
                                                {info.hours || info.response}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Contact Form Section */}
            <section className="py-5 bg-light">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-6 mb-5 mb-lg-0">
                            <h2 className="display-5 fw-bold mb-4">
                                <span className="text-primary">📝</span> Send Us a Message
                            </h2>
                            <p className="lead mb-4">
                                Fill out the form below and we'll get back to you as soon as possible.
                            </p>
                            
                            {isSubmitted ? (
                                <div className="alert alert-success alert-dismissible fade show" role="alert">
                                    <div className="fs-1 mb-2">✅</div>
                                    <h4 className="alert-heading">Message Sent Successfully!</h4>
                                    <p>Thank you for contacting us. We'll get back to you within 24 hours.</p>
                                    <button type="button" className="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            ) : (
                                <form onSubmit={handleSubmit} className="needs-validation" noValidate>
                                    <div className="row g-3">
                                        <div className="col-md-6">
                                            <label htmlFor="name" className="form-label fw-bold">Full Name *</label>
                                            <input
                                                type="text"
                                                className="form-control form-control-lg"
                                                id="name"
                                                name="name"
                                                value={formData.name}
                                                onChange={handleChange}
                                                required
                                            />
                                            <div className="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <div className="col-md-6">
                                            <label htmlFor="email" className="form-label fw-bold">Email Address *</label>
                                            <input
                                                type="email"
                                                className="form-control form-control-lg"
                                                id="email"
                                                name="email"
                                                value={formData.email}
                                                onChange={handleChange}
                                                required
                                            />
                                            <div className="invalid-feedback">Please enter a valid email.</div>
                                        </div>
                                        <div className="col-md-6">
                                            <label htmlFor="phone" className="form-label fw-bold">Phone Number</label>
                                            <input
                                                type="tel"
                                                className="form-control form-control-lg"
                                                id="phone"
                                                name="phone"
                                                value={formData.phone}
                                                onChange={handleChange}
                                            />
                                        </div>
                                        <div className="col-md-6">
                                            <label htmlFor="subject" className="form-label fw-bold">Subject *</label>
                                            <select
                                                className="form-select form-select-lg"
                                                id="subject"
                                                name="subject"
                                                value={formData.subject}
                                                onChange={handleChange}
                                                required
                                            >
                                                <option value="">Select a subject</option>
                                                <option value="order">Order Inquiry</option>
                                                <option value="shipping">Shipping & Delivery</option>
                                                <option value="returns">Returns & Refunds</option>
                                                <option value="product">Product Questions</option>
                                                <option value="account">Account Issues</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div className="invalid-feedback">Please select a subject.</div>
                                        </div>
                                        <div className="col-12">
                                            <label htmlFor="message" className="form-label fw-bold">Message *</label>
                                            <textarea
                                                className="form-control form-control-lg"
                                                id="message"
                                                name="message"
                                                rows="5"
                                                value={formData.message}
                                                onChange={handleChange}
                                                required
                                                placeholder="Please describe your inquiry in detail..."
                                            ></textarea>
                                            <div className="invalid-feedback">Please enter your message.</div>
                                        </div>
                                        <div className="col-12">
                                            <div className="form-check">
                                                <input
                                                    className="form-check-input"
                                                    type="checkbox"
                                                    id="newsletter"
                                                    name="newsletter"
                                                />
                                                <label className="form-check-label" htmlFor="newsletter">
                                                    Subscribe to our newsletter for updates and offers
                                                </label>
                                            </div>
                                        </div>
                                        <div className="col-12">
                                            <button type="submit" className="btn btn-primary btn-lg px-5 py-3 fw-bold w-100">
                                                <span className="fs-4 me-2">📨</span> Send Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            )}
                        </div>

                        {/* FAQ Section */}
                        <div className="col-lg-6">
                            <div className="card border-0 shadow h-100">
                                <div className="card-body">
                                    <h3 className="card-title fw-bold mb-4">
                                        <span className="text-warning">❓</span> Frequently Asked Questions
                                    </h3>
                                    <div className="accordion" id="faqAccordion">
                                        {faqs.map((faq, index) => (
                                            <div className="accordion-item" key={index}>
                                                <h2 className="accordion-header">
                                                    <button
                                                        className="accordion-button collapsed fw-bold"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target={`#faq${index}`}
                                                    >
                                                        {faq.question}
                                                    </button>
                                                </h2>
                                                <div
                                                    id={`faq${index}`}
                                                    className="accordion-collapse collapse"
                                                    data-bs-parent="#faqAccordion"
                                                >
                                                    <div className="accordion-body">
                                                        {faq.answer}
                                                    </div>
                                                </div>
                                            </div>
                                        ))}
                                    </div>
                                    
                                    {/* Live Chat */}
                                    <div className="mt-5 pt-4 border-top">
                                        <div className="d-flex align-items-center mb-3">
                                            <div className="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center me-3" 
                                                 style={{ width: '60px', height: '60px' }}>
                                                <span className="fs-3">💬</span>
                                            </div>
                                            <div>
                                                <h4 className="fw-bold mb-1">Live Chat Support</h4>
                                                <p className="text-muted mb-0">Available Mon-Fri, 9AM-6PM EST</p>
                                            </div>
                                        </div>
                                        <button className="btn btn-success btn-lg w-100">
                                            <span className="fs-4 me-2">💬</span> Start Live Chat
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Map Section */}
            <section className="py-5">
                <div className="container">
                    <h2 className="display-5 fw-bold text-center mb-5">
                        <span className="text-primary">📍</span> Visit Our Office
                    </h2>
                    <div className="row">
                        <div className="col-lg-6 mb-4 mb-lg-0">
                            <div className="card border-0 shadow h-100">
                                <div className="card-body">
                                    <div className="ratio ratio-16x9">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a3161e1bf39%3A0x8d5c2f5b9b0e0b8e!2s123%20Commerce%20St%2C%20New%20York%2C%20NY%2010001!5e0!3m2!1sen!2sus!4v1234567890123"
                                            title="Our Location"
                                            allowFullScreen
                                            loading="lazy"
                                            className="rounded"
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6">
                            <div className="card border-0 shadow h-100">
                                <div className="card-body">
                                    <h3 className="card-title fw-bold mb-4">Office Information</h3>
                                    <div className="row">
                                        <div className="col-md-6 mb-4">
                                            <h5 className="fw-bold mb-3">
                                                <span className="text-primary me-2">🏢</span> Headquarters
                                            </h5>
                                            <p className="mb-1">123 Commerce Street</p>
                                            <p className="mb-1">New York, NY 10001</p>
                                            <p>United States</p>
                                        </div>
                                        <div className="col-md-6 mb-4">
                                            <h5 className="fw-bold mb-3">
                                                <span className="text-primary me-2">🕒</span> Business Hours
                                            </h5>
                                            <p className="mb-1"><strong>Monday-Friday:</strong> 9:00 AM - 6:00 PM</p>
                                            <p className="mb-1"><strong>Saturday:</strong> 10:00 AM - 4:00 PM</p>
                                            <p><strong>Sunday:</strong> Closed</p>
                                        </div>
                                        <div className="col-12">
                                            <h5 className="fw-bold mb-3">
                                                <span className="text-primary me-2">📋</span> Departments
                                            </h5>
                                            <div className="row">
                                                <div className="col-md-6 mb-3">
                                                    <strong>Customer Support:</strong>
                                                    <p className="mb-1">support@shopease.com</p>
                                                    <p>1-800-SHOP-NOW</p>
                                                </div>
                                                <div className="col-md-6 mb-3">
                                                    <strong>Sales & Business:</strong>
                                                    <p className="mb-1">sales@shopease.com</p>
                                                    <p>1-800-BUY-NOW</p>
                                                </div>
                                                <div className="col-md-6 mb-3">
                                                    <strong>Careers:</strong>
                                                    <p className="mb-1">careers@shopease.com</p>
                                                    <p>View Open Positions</p>
                                                </div>
                                                <div className="col-md-6 mb-3">
                                                    <strong>Press & Media:</strong>
                                                    <p className="mb-1">press@shopease.com</p>
                                                    <p>Media Kit</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Social Media Section */}
            <section className="py-5 bg-primary text-white">
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-lg-8 text-center">
                            <div className="fs-1 mb-4">🌐</div>
                            <h2 className="display-5 fw-bold mb-4">Connect With Us</h2>
                            <p className="lead mb-5">
                                Follow us on social media for the latest updates, promotions, and news.
                            </p>
                            <div className="d-flex flex-wrap justify-content-center gap-3 mb-4">
                                {[
                                    { icon: '📘', name: 'Facebook', color: 'info' },
                                    { icon: '🐦', name: 'Twitter', color: 'info' },
                                    { icon: '📷', name: 'Instagram', color: 'warning' },
                                    { icon: '💼', name: 'LinkedIn', color: 'info' },
                                    { icon: '▶️', name: 'YouTube', color: 'danger' }
                                ].map((social, index) => (
                                    <a
                                        key={index}
                                        href="/"
                                        className={`btn btn-outline-light btn-lg px-4 py-3 fw-bold`}
                                        style={{ minWidth: '140px' }}
                                    >
                                        <span className="fs-4 me-2">{social.icon}</span>
                                        {social.name}
                                    </a>
                                ))}
                            </div>
                            <div className="mt-4">
                                <p className="text-white-50">
                                    Subscribe to our newsletter for exclusive deals and updates
                                </p>
                                <div className="input-group input-group-lg w-lg-50 mx-auto">
                                    <input 
                                        type="email" 
                                        className="form-control" 
                                        placeholder="Enter your email"
                                    />
                                    <button className="btn btn-warning btn-lg">
                                        <span className="fs-5 me-2">✉️</span> Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default Contact;