@extends('layouts.app')

@section('title', 'Professional AC Repair, Installation & Maintenance in Dubai | OneCall Technical Services')
@section('meta_description', 'Expert AC services in Dubai: AC repair, installation, maintenance, gas charging, duct cleaning, ventilation systems. 24/7 emergency service available.')
@section('meta_keywords', 'AC repair Dubai, AC installation Dubai, AC maintenance Dubai, AC gas charging Dubai, duct cleaning Dubai, ventilation systems Dubai, split AC repair')

@section('content')

<style>
    :root {
        --ac-blue: #990000;
        --ac-light-blue: #e6f2ff;
        --ac-green: #00a859;
        --ac-orange: #ff6b35;
        --ac-dark: #000000;
    }

    /* Hero Section */
    .ac-hero {
        background: linear-gradient(#990000, rgba(0, 87, 179, 0.73)),
                    url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 400px;
        position: relative;
    }

    .ac-hero-content {
        padding: 80px 0 100px;
    }

    /* HOW WE WORK Section Styles */
    .how-we-work-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    }

    .work-process-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }

    .work-process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 102, 204, 0.15);
        border-color: var(--ac-blue);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--ac-blue);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.5rem;
        margin: 0 auto 20px;
        position: relative;
    }

    .step-number::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border: 2px solid var(--ac-blue);
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(1.3);
            opacity: 0;
        }
    }

    /* Gallery Styles */
    .ac-gallery-section {
        padding: 80px 0;
        background: white;
    }

    .gallery-tabs {
        border-bottom: 2px solid #e2e8f0;
        margin-bottom: 40px;
    }

    .gallery-tab {
        padding: 12px 25px;
        border: none;
        background: none;
        font-weight: 600;
        color: #64748b;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
        cursor: pointer;
        margin-right: 10px;
    }

    .gallery-tab.active {
        color: var(--ac-blue);
        border-bottom-color: var(--ac-blue);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--ac-blue);
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .gallery-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        height: 250px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        transform: scale(1.03);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        color: white;
        padding: 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        transform: translateY(0);
    }

    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 15px;
        font-size: 0.9rem;
    }

    /* Stats Counter */
    .stats-section {
        background: linear-gradient(135deg, var(--ac-blue), #004d99);
        padding: 60px 0;
        color: white;
        border-radius: 15px;
        margin-top: 60px;
    }

    .stat-item {
        text-align: center;
        padding: 20px;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1;
    }

    .stat-label {
        font-size: 1rem;
        opacity: 0.9;
    }

    /* Lightbox Modal */
    .gallery-lightbox .modal-dialog {
        max-width: 90%;
        max-height: 90vh;
    }

    .gallery-lightbox .modal-content {
        background: transparent;
        border: none;
    }

    .gallery-lightbox .modal-body {
        padding: 0;
        position: relative;
    }

    .lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--ac-blue);
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .lightbox-nav:hover {
        background: white;
        transform: translateY(-50%) scale(1.1);
    }

    .lightbox-nav.prev {
        left: 20px;
    }

    .lightbox-nav.next {
        right: 20px;
    }

    .lightbox-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 20px;
        text-align: center;
    }

    /* Service Highlight Cards */
    .service-highlight-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border: 1px solid #e1e8ed;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .service-highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 102, 204, 0.15);
        border-color: var(--ac-blue);
    }

    .service-icon-lg {
        width: 70px;
        height: 70px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    /* Service Details */
    .service-detail-section {
        padding: 60px 0;
    }

    .service-feature-list li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
    }

    .service-feature-list li:last-child {
        border-bottom: none;
    }

    .service-feature-list i {
        color: var(--ac-green);
        margin-right: 10px;
        font-size: 0.9rem;
    }

    /* Pricing Table */
    .pricing-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }

    .pricing-card.popular {
        border-color: var(--ac-blue);
        box-shadow: 0 10px 30px rgba(0, 102, 204, 0.15);
        transform: scale(1.02);
    }

    .pricing-header {
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
        margin-bottom: 20px;
    }

    .price-tag {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--ac-blue);
        line-height: 1;
    }

    /* Brands Section */
    .brand-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 20px;
    }

    .brand-item {
        background: white;
        padding: 20px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
    }

    .brand-item:hover {
        border-color: var(--ac-blue);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    /* Emergency Banner */
    .emergency-banner {
        background: linear-gradient(90deg, var(--ac-orange), #ff8c5a);
        border-radius: 15px;
        overflow: hidden;
        position: relative;
    }

    .emergency-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" opacity="0.1"><path d="M0,0 L100,0 L100,100 Z" fill="white"/></svg>');
        background-size: cover;
    }

    /* Process Steps */
    .process-step {
        position: relative;
        padding: 20px;
        text-align: center;
    }

    .process-step-number {
        width: 50px;
        height: 50px;
        background: var(--ac-blue);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.2rem;
        margin: 0 auto 15px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .ac-hero-content {
            padding: 60px 0 80px;
        }
        
        .service-highlight-card {
            padding: 20px;
        }
        
        .brand-grid {
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }
        
        .stat-number {
            font-size: 2.5rem;
        }
        
        .work-process-card {
            padding: 20px;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 576px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }
        
        .gallery-tabs {
            flex-wrap: wrap;
        }
        
        .gallery-tab {
            padding: 8px 15px;
            margin-bottom: 10px;
        }
    }
</style>

<!-- Hero Section -->
<section class="ac-hero">
    <div class="container">
        <div class="row align-items-center ac-hero-content">
            <div class="col-lg-8 text-white">
                <h1 class="display-5 fw-bold mb-3">Professional AC & Ventilation Services in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    Expert air conditioning repair, installation, maintenance & ventilation solutions for homes and businesses across Dubai.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4">
                        <i class="fa fa-phone me-2"></i> Emergency AC Repair
                    </a>
                    <a href="#booking" class="btn btn-outline-light btn-lg px-4">
                        <i class="fa fa-calendar me-2"></i> Schedule Service
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW WE WORK Section -->
<section class="how-we-work-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary mb-3 px-3 py-2" style="background-color: var(--ac-blue) !important; font-size: 0.9rem;">
                <i class="fa fa-cogs me-1"></i> Our Process
            </span>
            <h2 class="fw-bold mb-3" style="color: var(--ac-dark);">HOW WE WORK</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Our 5-step professional process ensures quality AC service from diagnosis to completion
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3" style="color: var(--ac-dark);">Service Request</h4>
                    <p class="text-muted">
                        Contact us via call, WhatsApp, or online form. Our team responds within 15 minutes to understand your AC issue.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">24/7 Available</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3" style="color: var(--ac-dark);">Professional Diagnosis</h4>
                    <p class="text-muted">
                        Certified technician arrives with diagnostic tools. Complete system check and transparent issue identification.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Free Diagnosis</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3" style="color: var(--ac-dark);">Transparent Quotation</h4>
                    <p class="text-muted">
                        Detailed quote with itemized pricing. No hidden charges. Approval required before any work begins.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Price Lock Guarantee</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3" style="color: var(--ac-dark);">Expert Service</h4>
                    <p class="text-muted">
                        Professional repair/installation using genuine parts. Quality workmanship with attention to detail.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Genuine Parts</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3" style="color: var(--ac-dark);">Quality Assurance</h4>
                    <p class="text-muted">
                        System testing and customer demonstration. Follow-up call for satisfaction. Warranty documentation provided.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">90-Day Warranty</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--ac-blue), #004d99); color: white;">
                    <div class="step-number" style="background: white; color: var(--ac-blue);">✓</div>
                    <h4 class="fw-bold mb-3">Satisfaction Guaranteed</h4>
                    <p>
                        Your satisfaction is our priority. We ensure proper cooling and optimal AC performance with every service.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-white text-primary">Happy Customers</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Counter -->
        <div class="stats-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">10,000+</div>
                            <div class="stat-label">AC Units Serviced</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Customer Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Emergency Service</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">15min</div>
                            <div class="stat-label">Average Response Time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AC Gallery Section -->
<section class="ac-gallery-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--ac-dark);">Our AC & Ventilation Work Gallery</h2>
            <p class="text-muted">Browse our professional AC installations, repairs, and ventilation projects</p>
        </div>

        <!-- Gallery Tabs -->
        <div class="d-flex justify-content-center gallery-tabs">
            <button class="gallery-tab active" data-category="all">All Projects</button>
            <button class="gallery-tab" data-category="installation">AC Installation</button>
            <button class="gallery-tab" data-category="repair">AC Repair</button>
            <button class="gallery-tab" data-category="maintenance">Maintenance</button>
            <button class="gallery-tab" data-category="ventilation">Ventilation</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="acGallery">
            <!-- Gallery items will be dynamically loaded here -->
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="tel:+971500000000" class="btn btn-primary px-4">
                <i class="fa fa-images me-2"></i> View More Projects
            </a>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="modal fade gallery-lightbox" id="galleryLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3 bg-white rounded-circle p-2" 
                        data-bs-dismiss="modal" aria-label="Close"></button>
                
                <div id="lightboxCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" id="lightboxItems">
                        <!-- Carousel items will be dynamically loaded here -->
                    </div>
                    
                    <button class="carousel-control-prev lightbox-nav prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button class="carousel-control-next lightbox-nav next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
                
                <div class="lightbox-caption" id="lightboxCaption">
                    <!-- Caption will be dynamically loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Highlights -->
<section class="service-detail-section" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary mb-3 px-3 py-2" style="font-size: 0.9rem; background-color: var(--ac-blue) !important;">
                <i class="fa fa-star me-1"></i> Trusted AC Services
            </span>
            <h2 class="fw-bold mb-3" style="color: var(--ac-dark);">Comprehensive AC Solutions</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                From emergency repairs to complete system installations, we provide professional AC services for all major brands.
            </p>
        </div>

        <div class="row g-4">
            <!-- AC Repair -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--ac-blue);">
                        <i class="fa fa-tools text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--ac-dark);">AC Repair Services</h3>
                    <p class="text-muted mb-4">
                        Fast and reliable AC repair for all issues including cooling problems, strange noises, water leakage, and electrical faults.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> 24/7 Emergency Repair</li>
                        <li><i class="fa fa-check-circle"></i> Same-Day Service</li>
                        <li><i class="fa fa-check-circle"></i> All AC Brands</li>
                        <li><i class="fa fa-check-circle"></i> 90-Day Warranty</li>
                    </ul>
                    <div class="mt-4">
                        <a href="tel:+971500000000" class="btn btn-primary w-100">
                            <i class="fa fa-wrench me-2"></i> Call for Repair
                        </a>
                    </div>
                </div>
            </div>

            <!-- AC Installation -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--ac-green);">
                        <i class="fa fa-wrench text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--ac-dark);">AC Installation</h3>
                    <p class="text-muted mb-4">
                        Professional installation of split ACs, central systems, ducted units, and VRV/VRF systems with proper load calculation.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Free Site Survey</li>
                        <li><i class="fa fa-check-circle"></i> Correct Capacity Sizing</li>
                        <li><i class="fa fa-check-circle"></i> Professional Mounting</li>
                        <li><i class="fa fa-check-circle"></i> 1-Year Installation Warranty</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#booking" class="btn btn-success w-100" style="background-color: var(--ac-green); border-color: var(--ac-green);">
                            <i class="fa fa-calendar me-2"></i> Book Installation
                        </a>
                    </div>
                </div>
            </div>

            <!-- AC Maintenance -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--ac-orange);">
                        <i class="fa fa-cogs text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--ac-dark);">AC Maintenance</h3>
                    <p class="text-muted mb-4">
                        Preventive maintenance plans to keep your AC running efficiently, reduce energy costs, and extend system lifespan.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Annual Maintenance Contracts</li>
                        <li><i class="fa fa-check-circle"></i> Deep Cleaning Service</li>
                        <li><i class="fa fa-check-circle"></i> Filter Replacement</li>
                        <li><i class="fa fa-check-circle"></i> Performance Check</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#maintenance" class="btn btn-warning w-100 text-white" style="background-color: var(--ac-orange); border-color: var(--ac-orange);">
                            <i class="fa fa-clipboard-list me-2"></i> Maintenance Plans
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Details -->
<section class="service-detail-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4" style="color: var(--ac-dark);">Complete AC Services in Dubai</h2>
                
                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-3" style="color: var(--ac-blue);">
                        <i class="fa fa-fire-extinguisher me-2"></i> Emergency AC Repair Services
                    </h3>
                    <p>When your AC breaks down in Dubai's heat, we provide immediate response. Our certified technicians arrive within 2 hours for emergency repairs.</p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul class="service-feature-list">
                                <li><i class="fa fa-check text-primary"></i> No Cooling / Weak Cooling</li>
                                <li><i class="fa fa-check text-primary"></i> Water Leakage Issues</li>
                                <li><i class="fa fa-check text-primary"></i> Strange Noises & Vibrations</li>
                                <li><i class="fa fa-check text-primary"></i> AC Not Turning On</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-feature-list">
                                <li><i class="fa fa-check text-primary"></i> Electrical Problems</li>
                                <li><i class="fa fa-check text-primary"></i> Frozen Coils</li>
                                <li><i class="fa fa-check text-primary"></i> Thermostat Issues</li>
                                <li><i class="fa fa-check text-primary"></i> Compressor Failure</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-3" style="color: var(--ac-blue);">
                        <i class="fa fa-compress-alt me-2"></i> AC Gas Charging & Refilling
                    </h3>
                    <p>Proper refrigerant charging is crucial for AC efficiency. We use calibrated equipment and follow manufacturer specifications for precise gas charging.</p>
                    <div class="alert alert-info mt-3">
                        <i class="fa fa-info-circle me-2"></i>
                        <strong>Important:</strong> We only use approved refrigerants (R410A, R32, R22) and follow EPA guidelines for environmental safety.
                    </div>
                </div>

                <div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--ac-blue);">
                        <i class="fa fa-wind me-2"></i> Duct Cleaning & Ventilation
                    </h3>
                    <p>Improve indoor air quality and system efficiency with professional duct cleaning services. We remove dust, allergens, and contaminants from your ventilation system.</p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-light p-2 rounded me-3">
                                    <i class="fa fa-broom text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Residential Duct Cleaning</h6>
                                    <p class="small text-muted mb-0">Complete cleaning for villas and apartments</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-light p-2 rounded me-3">
                                    <i class="fa fa-building text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Commercial Ventilation</h6>
                                    <p class="small text-muted mb-0">Office, mall, and industrial ventilation systems</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="pricing-card popular">
                        <div class="pricing-header text-center">
                            <h4 class="fw-bold mb-3" style="color: var(--ac-dark);">Transparent Pricing</h4>
                            <div class="price-tag mb-2">AED 150<span style="font-size: 1rem; color: #666;">/starting</span></div>
                            <p class="text-muted small">Diagnosis fee includes basic check</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: var(--ac-dark);">Service Charges</h5>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>AC Diagnosis</span>
                                <span class="fw-bold">AED 150</span>
                            </div>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Gas Charging (1-2 Tons)</span>
                                <span class="fw-bold">AED 350</span>
                            </div>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>AC General Service</span>
                                <span class="fw-bold">AED 180</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <span>Emergency Callout</span>
                                <span class="fw-bold">AED 250</span>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: var(--ac-dark);">Installation Prices</h5>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Split AC (1.5 Ton)</span>
                                <span class="fw-bold">AED 450</span>
                            </div>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Split AC (2 Ton)</span>
                                <span class="fw-bold">AED 550</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <span>Window AC</span>
                                <span class="fw-bold">AED 350</span>
                            </div>
                        </div>
                        
                        <a href="tel:+971500000000" class="btn btn-primary w-100 py-3 fw-bold">
                            <i class="fa fa-phone-alt me-2"></i> GET FREE QUOTE
                        </a>
                        <p class="text-center small text-muted mt-2 mb-0">No hidden charges • Free site visit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brands We Service -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--ac-dark);">AC Brands We Service</h3>
            <p class="text-muted">Expert repair and maintenance for all major AC brands</p>
        </div>
        
        <div class="brand-grid">
            @php
            $brands = [
                ['name' => 'Daikin', 'color' => '#0066b3'],
                ['name' => 'LG', 'color' => '#a50034'],
                ['name' => 'Samsung', 'color' => '#1428a0'],
                ['name' => 'Midea', 'color' => '#002c5f'],
                ['name' => 'Carrier', 'color' => '#007dc3'],
                ['name' => 'Toshiba', 'color' => '#ff0000'],
                ['name' => 'Panasonic', 'color' => '#0040be'],
                ['name' => 'York', 'color' => '#00a4e4'],
                ['name' => 'Hitachi', 'color' => '#e4032e'],
                ['name' => 'Sharp', 'color' => '#eb1d23'],
                ['name' => 'Fujitsu', 'color' => '#e60012'],
                ['name' => 'Gree', 'color' => '#009688'],
            ];
            @endphp
            
            @foreach($brands as $brand)
            <div class="brand-item">
                <span style="font-weight: 600; color: {{ $brand['color'] }};">{{ $brand['name'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Maintenance Plans -->
<section id="maintenance" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--ac-dark);">Annual Maintenance Contracts</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Protect your investment with our comprehensive AC maintenance plans</p>
        </div>
        
        <div class="row g-4">
            @php
            $plans = [
                ['name' => 'Basic Plan', 'price' => 'AED 599', 'period' => 'Per Year', 'color' => '#0066cc', 'features' => ['2 General Services', 'Filter Cleaning', 'Basic Checkup', '15% Discount on Repairs']],
                ['name' => 'Premium Plan', 'price' => 'AED 999', 'period' => 'Per Year', 'color' => '#00a859', 'features' => ['4 General Services', 'Complete System Cleaning', 'Priority Service', '30% Discount on Repairs', 'Gas Top-up (if needed)']],
                ['name' => 'Business Plan', 'price' => 'AED 1,999', 'period' => 'Per Year', 'color' => '#ff6b35', 'features' => ['Unlimited Services', 'Complete System Maintenance', '24/7 Priority Support', '50% Discount on Repairs', 'Free Gas Charging', 'Annual Performance Report']],
            ];
            @endphp
            
            @foreach($plans as $plan)
            <div class="col-md-4">
                <div class="pricing-card @if($plan['name'] == 'Premium Plan') popular @endif" style="border-color: {{ $plan['color'] }}20;">
                    <div class="text-center mb-4">
                        <span class="badge mb-3 px-3 py-2" style="background-color: {{ $plan['color'] }} !important; font-size: 0.9rem;">
                            {{ $plan['name'] }}
                        </span>
                        <div class="price-tag mb-1" style="color: {{ $plan['color'] }};">{{ $plan['price'] }}</div>
                        <p class="text-muted small">{{ $plan['period'] }}</p>
                    </div>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($plan['features'] as $feature)
                        <li class="py-2 border-bottom">
                            <i class="fa fa-check-circle me-2" style="color: {{ $plan['color'] }};"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <a href="tel:+971500000000" class="btn w-100 py-3 fw-bold" 
                       style="background-color: {{ $plan['color'] }}; border-color: {{ $plan['color'] }}; color: white;">
                        <i class="fa fa-file-contract me-2"></i> Select Plan
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Process (Removed duplicate section - kept only the new one) -->

<!-- Emergency Banner -->
<section class="py-5">
    <div class="container">
        <div class="emergency-banner text-white p-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-3">
                        <i class="fa fa-exclamation-triangle me-2"></i> Emergency AC Repair
                    </h3>
                    <p class="mb-0" style="font-size: 1.1rem;">
                        <strong>24/7 Service Available:</strong> Our emergency team responds within 2 hours across Dubai.
                        No cooling in the Dubai heat? We're here to help!
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4 py-3 fw-bold">
                        <i class="fa fa-phone-alt me-2"></i> CALL NOW
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking Form -->
<section id="booking" class="py-5" style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4" style="color: var(--ac-dark);">Book AC Service Today</h2>
                <p class="text-muted mb-4">
                    Fill out this form and our AC specialist will contact you within 30 minutes to schedule your service.
                </p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: var(--ac-light-blue);">
                            <div class="bg-primary p-2 rounded me-3">
                                <i class="fa fa-clock text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Response Time</h6>
                                <p class="small text-muted mb-0">Within 30 minutes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: var(--ac-light-blue);">
                            <div class="bg-success p-2 rounded me-3">
                                <i class="fa fa-shield-alt text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Service Warranty</h6>
                                <p class="small text-muted mb-0">90 days on all repairs</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Why Choose Our AC Services?</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Certified and Experienced Technicians</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Genuine Spare Parts Available</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Same-Day Service Available</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Transparent Pricing with No Hidden Costs</li>
                        <li><i class="fa fa-check-circle text-primary me-2"></i> 24/7 Emergency Services</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4" style="color: var(--ac-dark);">Service Request Form</h4>
                        <form id="acServiceForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" placeholder="05x xxx xxxx" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="your@email.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Service Type *</label>
                                    <select class="form-select" required>
                                        <option value="">Select Service</option>
                                        <option>AC Repair</option>
                                        <option>AC Installation</option>
                                        <option>AC Maintenance</option>
                                        <option>Gas Charging</option>
                                        <option>Duct Cleaning</option>
                                        <option>Emergency Service</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">AC Brand</label>
                                    <select class="form-select">
                                        <option value="">Select Brand</option>
                                        <option>Daikin</option>
                                        <option>LG</option>
                                        <option>Samsung</option>
                                        <option>Midea</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Service Address *</label>
                                    <input type="text" class="form-control" placeholder="Full address in Dubai" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Describe the Problem</label>
                                    <textarea class="form-control" rows="3" placeholder="Any specific issues?"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="emergency">
                                        <label class="form-check-label" for="emergency">
                                            <span class="fw-bold text-danger">Emergency Service Required</span> (24/7)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold">
                                        <i class="fa fa-paper-plane me-2"></i> REQUEST SERVICE
                                    </button>
                                    <p class="text-center small text-muted mt-2 mb-0">
                                        We'll contact you within 30 minutes to confirm
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--ac-dark);">Frequently Asked Questions</h2>
            <p class="text-muted">Common questions about our AC services</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="acFAQ">
                    @php
                    $faqs = [
                        [
                            'q' => 'How quickly can you respond to AC repair requests?',
                            'a' => 'For emergency repairs, we typically respond within 2 hours across Dubai. Regular service requests are scheduled within 24 hours. We operate 24/7 for emergency situations.'
                        ],
                        [
                            'q' => 'Do you provide warranty on AC repairs?',
                            'a' => 'Yes, all our repairs come with a 90-day service warranty. For parts replaced, we provide warranty as per manufacturer specifications (usually 6-12 months).'
                        ],
                        [
                            'q' => 'What AC brands do you service?',
                            'a' => 'We service all major AC brands including Daikin, LG, Samsung, Midea, Carrier, Toshiba, Panasonic, York, Hitachi, and more. Our technicians are trained on multiple brands.'
                        ],
                        [
                            'q' => 'How often should I service my AC?',
                            'a' => 'In Dubai climate, we recommend servicing your AC every 6 months for optimal performance. For heavy usage, quarterly maintenance is advised.'
                        ],
                        [
                            'q' => 'What is included in a general AC service?',
                            'a' => 'Our general service includes: cleaning filters, checking refrigerant levels, inspecting electrical connections, cleaning condenser coils, checking drainage, and overall system performance testing.'
                        ],
                        [
                            'q' => 'Do you offer free site surveys for AC installation?',
                            'a' => 'Yes, we provide free site surveys for all AC installation projects. Our expert will assess your space, recommend the right capacity, and provide a detailed quotation.'
                        ],
                    ];
                    @endphp
                    
                    @foreach($faqs as $index => $faq)
                    <div class="accordion-item mb-3 border-0 rounded overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
                                <strong>{{ $faq['q'] }}</strong>
                            </button>
                        </h2>
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#acFAQ">
                            <div class="accordion-body bg-white">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Data
    const galleryData = [
        {
            id: 1,
            category: 'installation',
            title: 'Central AC Installation - Business Center',
            description: 'Complete central AC system installation for a commercial building in Business Bay',
            image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 2,
            category: 'repair',
            title: 'Split AC Compressor Repair',
            description: 'Emergency compressor replacement for a 3-ton split AC in Jumeirah',
            image: 'https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 3,
            category: 'maintenance',
            title: 'Annual AC Maintenance Service',
            description: 'Regular maintenance service including coil cleaning and filter replacement',
            image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 4,
            category: 'ventilation',
            title: 'Commercial Kitchen Ventilation System',
            description: 'Industrial ventilation installation for a restaurant kitchen in Downtown Dubai',
            image: 'https://images.unsplash.com/photo-1595435934247-5d33b7f92c70?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 5,
            category: 'installation',
            title: 'VRF System Installation - Villa',
            description: 'Variable Refrigerant Flow system installation for luxury villa in Palm Jumeirah',
            image: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 6,
            category: 'repair',
            title: 'AC Gas Charging Service',
            description: 'Precise refrigerant charging using calibrated equipment',
            image: 'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 7,
            category: 'maintenance',
            title: 'Duct Cleaning Service',
            description: 'Professional duct cleaning to improve indoor air quality',
            image: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 8,
            category: 'ventilation',
            title: 'Residential Ventilation Upgrade',
            description: 'Home ventilation system upgrade with heat recovery unit',
            image: 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 9,
            category: 'installation',
            title: 'Window AC Installation - Apartment',
            description: 'Quick and clean window AC installation in Dubai Marina apartment',
            image: 'https://images.unsplash.com/photo-1579530190412-b35a65e17c8d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        }
    ];

    // DOM Elements
    const galleryContainer = document.getElementById('acGallery');
    const galleryTabs = document.querySelectorAll('.gallery-tab');
    const lightbox = new bootstrap.Modal(document.getElementById('galleryLightbox'));
    const lightboxItems = document.getElementById('lightboxItems');
    const lightboxCaption = document.getElementById('lightboxCaption');
    let currentCategory = 'all';

    // Initialize Gallery
    function initGallery() {
        renderGallery(currentCategory);
        setupEventListeners();
    }

    // Render Gallery Items
    function renderGallery(category) {
        galleryContainer.innerHTML = '';
        
        const filteredItems = category === 'all' 
            ? galleryData 
            : galleryData.filter(item => item.category === category);
        
        filteredItems.forEach((item, index) => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            galleryItem.setAttribute('data-category', item.category);
            galleryItem.setAttribute('data-index', index);
            
            galleryItem.innerHTML = `
                <img src="${item.image}" alt="${item.title}" loading="lazy">
                <div class="gallery-overlay">
                    <h5 class="mb-2">${item.title}</h5>
                    <p class="small mb-0">${item.description}</p>
                </div>
                <div class="gallery-caption">
                    ${item.title}
                </div>
            `;
            
            galleryItem.addEventListener('click', () => openLightbox(index, filteredItems));
            galleryContainer.appendChild(galleryItem);
        });
    }

    // Setup Event Listeners
    function setupEventListeners() {
        // Tab switching
        galleryTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                galleryTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                currentCategory = this.getAttribute('data-category');
                renderGallery(currentCategory);
            });
        });
    }

    // Open Lightbox
    function openLightbox(index, items) {
        lightboxItems.innerHTML = '';
        const filteredItems = currentCategory === 'all' ? galleryData : items;
        
        filteredItems.forEach((item, i) => {
            const carouselItem = document.createElement('div');
            carouselItem.className = `carousel-item ${i === index ? 'active' : ''}`;
            carouselItem.innerHTML = `
                <img src="${item.image}" class="d-block w-100" alt="${item.title}" 
                     style="max-height: 70vh; object-fit: contain;">
            `;
            lightboxItems.appendChild(carouselItem);
        });
        
        // Set initial caption
        lightboxCaption.innerHTML = `
            <h5 class="mb-1">${filteredItems[index].title}</h5>
            <p class="mb-0 small">${filteredItems[index].description}</p>
        `;
        
        // Update caption on slide
        const lightboxCarousel = document.querySelector('#lightboxCarousel');
        lightboxCarousel.addEventListener('slid.bs.carousel', function(event) {
            const activeIndex = event.to;
            lightboxCaption.innerHTML = `
                <h5 class="mb-1">${filteredItems[activeIndex].title}</h5>
                <p class="mb-0 small">${filteredItems[activeIndex].description}</p>
            `;
        });
        
        lightbox.show();
    }

    // Initialize
    initGallery();

    // Existing form submission code
    document.getElementById('acServiceForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you! Our AC specialist will contact you within 30 minutes.');
        this.reset();
    });
    
    document.getElementById('emergency').addEventListener('change', function() {
        if(this.checked) {
            this.parentElement.style.backgroundColor = '#fff3cd';
            this.parentElement.style.padding = '10px';
            this.parentElement.style.borderRadius = '5px';
        }
    });
});
</script>
@endsection