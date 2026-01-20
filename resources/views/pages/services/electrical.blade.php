@extends('layouts.app')

@section('title', 'Professional Electrical Services in Dubai | OneCall Technical Services')
@section('meta_description', 'Expert electrical services in Dubai: wiring, rewiring, lighting installation, circuit breaker repair, DB box installation, smart home wiring, electrical maintenance.')
@section('meta_keywords', 'electrician Dubai, electrical services Dubai, wiring Dubai, lighting installation Dubai, circuit breaker repair Dubai, DB box installation Dubai, electrical maintenance Dubai')

@section('content')

<style>
    :root {
        --electric-yellow: #ffd600;
        --electric-orange: #ff6d00;
        --electric-blue: #2962ff;
        --electric-green: #00c853;
        --electric-red: #d50000;
        --electric-dark: #0d47a1;
    }

    /* Hero Section */
    .electric-hero {
        background: linear-gradient(rgba(41, 98, 255, 0.9), rgba(41, 98, 255, 0.95)),
                    url('https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 400px;
        position: relative;
    }

    .electric-hero-content {
        padding: 80px 0 100px;
    }

    /* HOW WE WORK Section Styles */
    .how-we-work-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 100%);
        color: white;
    }

    .work-process-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 30px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }

    .work-process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(255, 214, 0, 0.2);
        border-color: var(--electric-yellow);
        background: rgba(255, 255, 255, 0.15);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--electric-yellow);
        color: #000;
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
        border: 2px solid var(--electric-yellow);
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
    .electric-gallery-section {
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
        color: var(--electric-blue);
        border-bottom-color: var(--electric-blue);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--electric-blue);
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
        background: linear-gradient(135deg, var(--electric-blue), #1a237e);
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
        box-shadow: 0 10px 25px rgba(41, 98, 255, 0.15);
        border-color: var(--electric-blue);
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

    /* Electrical Service Cards */
    .electrical-service-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
        position: relative;
    }

    .electrical-service-card:hover {
        border-color: var(--electric-blue);
        box-shadow: 0 10px 25px rgba(41, 98, 255, 0.1);
        transform: translateY(-5px);
    }

    .electrical-service-card.popular {
        border-color: var(--electric-yellow);
    }

    .electrical-service-card.emergency {
        border-color: var(--electric-red);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 20px;
        color: white;
        background: linear-gradient(135deg, var(--electric-blue), var(--electric-dark));
    }

    /* Safety Features */
    .safety-feature {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .safety-feature:hover {
        border-color: var(--electric-green);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    .safety-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin: 0 auto 15px;
        color: white;
        background-color: var(--electric-green);
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
        border-color: var(--electric-blue);
        box-shadow: 0 10px 30px rgba(41, 98, 255, 0.15);
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
        color: var(--electric-blue);
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
        border-color: var(--electric-blue);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    /* Emergency Banner */
    .emergency-banner {
        background: linear-gradient(90deg, var(--electric-red), #ef5350);
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

    /* Lighting Types */
    .lighting-type {
        background: white;
        border-radius: 10px;
        padding: 25px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .lighting-type:hover {
        border-color: var(--electric-yellow);
        box-shadow: 0 8px 20px rgba(255, 214, 0, 0.1);
    }

    .lighting-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 15px;
        color: white;
        background: linear-gradient(135deg, #ffd600, #ffab00);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .electric-hero-content {
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
        
        .brand-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- Hero Section -->
<section class="electric-hero">
    <div class="container">
        <div class="row align-items-center electric-hero-content">
            <div class="col-lg-8 text-white">
                <h1 class="display-5 fw-bold mb-3">Professional Electrical Services in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    Certified electricians for wiring, rewiring, lighting installation, circuit breaker repair, DB box installation, and complete electrical solutions across Dubai.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4">
                        <i class="fa fa-bolt me-2"></i> Emergency Electrician
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
            <span class="badge mb-3 px-3 py-2" style="background-color: var(--electric-yellow); color: #000; font-size: 0.9rem;">
                <i class="fa fa-cogs me-1"></i> Our Electrical Process
            </span>
            <h2 class="fw-bold mb-3">HOW WE WORK</h2>
            <p class="opacity-90 mx-auto" style="max-width: 700px;">
                Our professional 5-step electrical service process ensures safety, quality, and compliance with Dubai DEWA regulations
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3">Safety Assessment</h4>
                    <p class="opacity-90">
                        Comprehensive electrical safety check, load calculation, and DEWA compliance verification.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-warning bg-opacity-25 text-white">Safety First</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3">Diagnosis & Planning</h4>
                    <p class="opacity-90">
                        Identify electrical issues, create circuit diagrams, and plan optimal wiring solutions.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-warning bg-opacity-25 text-white">Detailed Planning</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3">Material Selection</h4>
                    <p class="opacity-90">
                        Choose DEWA-approved materials: cables, switches, DB boxes, and safety equipment.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-warning bg-opacity-25 text-white">Quality Materials</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3">Professional Installation</h4>
                    <p class="opacity-90">
                        Safe installation by certified electricians following Dubai electrical codes and standards.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-warning bg-opacity-25 text-white">Certified Electricians</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3">Testing & Certification</h4>
                    <p class="opacity-90">
                        Complete system testing, safety checks, and provision of compliance certificates.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-warning bg-opacity-25 text-white">DEWA Compliance</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--electric-yellow), #ff6d00); border-color: var(--electric-yellow); color: #000;">
                    <div class="step-number" style="background: #000; color: var(--electric-yellow);">✓</div>
                    <h4 class="fw-bold mb-3">Project Completion</h4>
                    <p>
                        Cleanup, client walkthrough, warranty documentation, and after-service support.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-dark text-warning">Safety Guaranteed</span>
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
                            <div class="stat-number">5,000+</div>
                            <div class="stat-label">Electrical Projects</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Safety Record</div>
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
                            <div class="stat-number">DEWA</div>
                            <div class="stat-label">Approved Contractors</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="electric-gallery-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--electric-dark);">Our Electrical Work Gallery</h2>
            <p class="text-muted">Browse our professional electrical installations and projects across Dubai</p>
        </div>

        <!-- Gallery Tabs -->
        <div class="d-flex justify-content-center gallery-tabs">
            <button class="gallery-tab active" data-category="all">All Projects</button>
            <button class="gallery-tab" data-category="wiring">Wiring</button>
            <button class="gallery-tab" data-category="lighting">Lighting</button>
            <button class="gallery-tab" data-category="db">DB Box</button>
            <button class="gallery-tab" data-category="smart">Smart Home</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="electricGallery">
            <!-- Gallery items will be dynamically loaded here -->
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="tel:+971500000000" class="btn btn-primary px-4">
                <i class="fa fa-images me-2"></i> View Electrical Portfolio
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
            <span class="badge bg-primary mb-3 px-3 py-2" style="font-size: 0.9rem; background-color: var(--electric-blue) !important;">
                <i class="fa fa-bolt me-1"></i> Complete Electrical Solutions
            </span>
            <h2 class="fw-bold mb-3" style="color: var(--electric-dark);">Professional Electrical Services</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                From emergency repairs to complete rewiring, we provide safe and reliable electrical solutions for homes and businesses in Dubai.
            </p>
        </div>

        <div class="row g-4">
            <!-- Wiring & Rewiring -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--electric-blue);">
                        <i class="fa fa-plug text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--electric-dark);">Wiring & Rewiring</h3>
                    <p class="text-muted mb-4">
                        Complete electrical wiring and rewiring services for villas, apartments, and commercial properties with DEWA-approved materials.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Complete House Rewiring</li>
                        <li><i class="fa fa-check-circle"></i> DEWA-Approved Cables</li>
                        <li><i class="fa fa-check-circle"></i> Concealed Conduit Wiring</li>
                        <li><i class="fa fa-check-circle"></i> Load Calculation</li>
                    </ul>
                    <div class="mt-4">
                        <a href="tel:+971500000000" class="btn btn-primary w-100">
                            <i class="fa fa-wrench me-2"></i> Get Wiring Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lighting Installation -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--electric-yellow); color: #000;">
                        <i class="fa fa-lightbulb"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--electric-dark);">Lighting Installation</h3>
                    <p class="text-muted mb-4">
                        Professional lighting installation including LED lights, downlights, track lighting, chandeliers, and outdoor lighting.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> LED Lighting Solutions</li>
                        <li><i class="fa fa-check-circle"></i> Smart Lighting Systems</li>
                        <li><i class="fa fa-check-circle"></i> Dimmer Switch Installation</li>
                        <li><i class="fa fa-check-circle"></i> Energy-Efficient Solutions</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#lighting" class="btn btn-warning w-100 text-dark" style="background-color: var(--electric-yellow); border-color: var(--electric-yellow);">
                            <i class="fa fa-sun me-2"></i> Lighting Solutions
                        </a>
                    </div>
                </div>
            </div>

            <!-- DB Box & Circuit Breaker -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--electric-green);">
                        <i class="fa fa-sliders-h text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--electric-dark);">DB Box Services</h3>
                    <p class="text-muted mb-4">
                        Distribution board installation, repair, and upgrading services with RCD protection and circuit breaker solutions.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Main DB Installation</li>
                        <li><i class="fa fa-check-circle"></i> Circuit Breaker Repair</li>
                        <li><i class="fa fa-check-circle"></i> RCD Protection</li>
                        <li><i class="fa fa-check-circle"></i> Load Balancing</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#db" class="btn btn-success w-100" style="background-color: var(--electric-green); border-color: var(--electric-green);">
                            <i class="fa fa-server me-2"></i> DB Box Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Electrical Services -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--electric-dark);">Our Electrical Services</h2>
            <p class="text-muted">Comprehensive electrical solutions for all your needs</p>
        </div>
        
        <div class="row g-4">
            @php
            $electricalServices = [
                ['name' => 'Emergency Electrical Repair', 'features' => ['Power failure', 'Tripping breakers', 'Spark repair', 'Quick response'], 'price' => 'AED 200+', 'icon' => 'fa-exclamation-triangle', 'color' => '#d50000', 'type' => 'emergency'],
                ['name' => 'Complete House Rewiring', 'features' => ['Full rewiring', 'DEWA compliance', 'Safety upgrade', '5-year warranty'], 'price' => 'AED 4,500+', 'icon' => 'fa-home', 'color' => '#2962ff', 'type' => 'popular'],
                ['name' => 'Smart Home Wiring', 'features' => ['Home automation', 'Smart switches', 'Network setup', 'Future-proof'], 'price' => 'AED 3,000+', 'icon' => 'fa-robot', 'color' => '#7b1fa2', 'type' => 'regular'],
                ['name' => 'Generator Installation', 'features' => ['Backup power', 'Automatic transfer', 'Load calculation', 'Maintenance'], 'price' => 'AED 5,000+', 'icon' => 'fa-car-battery', 'color' => '#ff6d00', 'type' => 'regular'],
                ['name' => 'Electrical Maintenance', 'features' => ['Regular checkups', 'Safety inspections', 'Preventive care', 'Annual contracts'], 'price' => 'AED 500+', 'icon' => 'fa-tools', 'color' => '#00c853', 'type' => 'regular'],
                ['name' => 'EV Charger Installation', 'features' => ['Tesla charger', 'Load assessment', 'Smart charging', 'DEWA approval'], 'price' => 'AED 1,500+', 'icon' => 'fa-charging-station', 'color' => '#ffd600', 'type' => 'regular'],
            ];
            @endphp
            
            @foreach($electricalServices as $service)
            <div class="col-md-6 col-lg-4">
                <div class="electrical-service-card @if(isset($service['type']) && $service['type'] == 'popular') popular @endif @if(isset($service['type']) && $service['type'] == 'emergency') emergency @endif">
                    <div class="service-icon" style="background: linear-gradient(135deg, {{ $service['color'] }}, {{ $service['color'] }}80);">
                        <i class="fa {{ $service['icon'] }}"></i>
                    </div>
                    <h4 class="fw-bold mb-3">{{ $service['name'] }}</h4>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($service['features'] as $feature)
                        <li class="py-1">
                            <i class="fa fa-check-circle me-2" style="color: {{ $service['color'] }};"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-4">
                        <span class="fw-bold h5" style="color: {{ $service['color'] }};">{{ $service['price'] }}</span>
                        <span class="text-muted small">starting price</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="tel:+971500000000" class="btn btn-sm w-100" 
                           style="background-color: {{ $service['color'] }}; border-color: {{ $service['color'] }}; color: white;">
                            <i class="fa fa-phone me-1"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Safety Features -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--electric-dark);">Safety & Compliance Features</h3>
            <p class="text-muted">Your safety is our top priority - DEWA approved electrical work</p>
        </div>
        
        <div class="row g-4">
            @php
            $safetyFeatures = [
                ['name' => 'DEWA Compliance', 'desc' => 'All work meets Dubai Electricity standards', 'icon' => 'fa-award', 'color' => '#2962ff'],
                ['name' => 'RCD Protection', 'desc' => 'Residual Current Devices for safety', 'icon' => 'fa-shield-alt', 'color' => '#00c853'],
                ['name' => 'Proper Earthing', 'desc' => 'Complete earthing system installation', 'icon' => 'fa-anchor', 'color' => '#ff6d00'],
                ['name' => 'Fire Safety', 'desc' => 'Fire-resistant materials & installation', 'icon' => 'fa-fire-extinguisher', 'color' => '#d50000'],
                ['name' => 'Load Calculation', 'desc' => 'Professional electrical load assessment', 'icon' => 'fa-calculator', 'color' => '#7b1fa2'],
                ['name' => 'Quality Materials', 'desc' => 'DEWA-approved cables & equipment', 'icon' => 'fa-check-double', 'color' => '#ffd600'],
            ];
            @endphp
            
            @foreach($safetyFeatures as $feature)
            <div class="col-md-6 col-lg-4">
                <div class="safety-feature">
                    <div class="safety-icon" style="background-color: {{ $feature['color'] }};">
                        <i class="fa {{ $feature['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-2">{{ $feature['name'] }}</h5>
                    <p class="small text-muted mb-0">{{ $feature['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Lighting Solutions -->
<section id="lighting" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--electric-dark);">Lighting Solutions</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Professional lighting installation for every space</p>
        </div>
        
        <div class="row g-4">
            @php
            $lightingTypes = [
                ['name' => 'LED Downlights', 'features' => ['Energy efficient', 'Long lifespan', 'Various color temperatures'], 'price' => 'AED 50-150', 'icon' => 'fa-lightbulb'],
                ['name' => 'Smart Lighting', 'features' => ['Voice control', 'Mobile app', 'Color changing'], 'price' => 'AED 200-500', 'icon' => 'fa-mobile-alt'],
                ['name' => 'Track Lighting', 'features' => ['Adjustable spots', 'Commercial grade', 'Flexible arrangement'], 'price' => 'AED 300-800', 'icon' => 'fa-sliders-h'],
                ['name' => 'Chandeliers', 'features' => ['Luxury installation', 'Ceiling support', 'Dimmer compatible'], 'price' => 'AED 500-2000', 'icon' => 'fa-gem'],
                ['name' => 'Outdoor Lighting', 'features' => ['Weatherproof', 'Security lighting', 'Garden lights'], 'price' => 'AED 150-500', 'icon' => 'fa-tree'],
                ['name' => 'Emergency Lighting', 'features' => ['Battery backup', 'Auto activation', 'Safety compliance'], 'price' => 'AED 200-600', 'icon' => 'fa-exclamation-circle'],
            ];
            @endphp
            
            @foreach($lightingTypes as $lighting)
            <div class="col-md-6 col-lg-4">
                <div class="lighting-type">
                    <div class="lighting-icon">
                        <i class="fa {{ $lighting['icon'] }}"></i>
                    </div>
                    <h4 class="fw-bold mb-3">{{ $lighting['name'] }}</h4>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($lighting['features'] as $feature)
                        <li class="py-1">
                            <i class="fa fa-check text-warning me-2"></i>
                            <span class="small">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-3">
                        <span class="fw-bold" style="color: var(--electric-dark);">{{ $lighting['price'] }}</span>
                        <span class="text-muted small">per fixture installed</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="tel:+971500000000" class="btn btn-warning btn-sm w-100">
                            <i class="fa fa-sun me-1"></i> Get Quote
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pricing Packages -->
<section id="db" class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--electric-dark);">Electrical Packages</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Complete electrical solutions for different property types</p>
        </div>
        
        <div class="row g-4">
            @php
            $packages = [
                ['name' => 'Apartment Rewiring', 'price' => 'AED 4,500', 'area' => '2BHK Apartment', 'features' => ['Complete rewiring', 'New DB box', 'LED lighting points', 'Power sockets upgrade', 'DEWA compliance certificate', '1-year warranty'], 'color' => '#2962ff'],
                ['name' => 'Villa Electrical', 'price' => 'AED 8,500', 'area' => '3-4 Bedroom Villa', 'features' => ['Complete villa wiring', 'Main & sub DB boxes', 'Outdoor lighting', 'Generator connection', 'Smart home readiness', '2-year warranty'], 'color' => '#00c853', 'popular' => true],
                ['name' => 'Office Electrical', 'price' => 'AED 12,000', 'area' => 'Small Office', 'features' => ['Commercial wiring', '3-phase connection', 'Emergency lighting', 'Data cabling', 'Meeting DEWA standards', '3-year warranty'], 'color' => '#ff6d00'],
            ];
            @endphp
            
            @foreach($packages as $package)
            <div class="col-md-4">
                <div class="pricing-card @if($package['popular'] ?? false) popular @endif" style="border-color: {{ $package['color'] }}20;">
                    <div class="text-center mb-4">
                        <span class="badge mb-3 px-3 py-2" style="background-color: {{ $package['color'] }} !important; font-size: 0.9rem;">
                            {{ $package['name'] }}
                        </span>
                        <div class="price-tag mb-1" style="color: {{ $package['color'] }};">{{ $package['price'] }}</div>
                        <p class="text-muted small">{{ $package['area'] }} • Complete Package</p>
                    </div>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($package['features'] as $feature)
                        <li class="py-2 border-bottom">
                            <i class="fa fa-check-circle me-2" style="color: {{ $package['color'] }};"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <a href="tel:+971500000000" class="btn w-100 py-3 fw-bold" 
                       style="background-color: {{ $package['color'] }}; border-color: {{ $package['color'] }}; color: white;">
                        <i class="fa fa-bolt me-2"></i> GET THIS PACKAGE
                    </a>
                    <p class="text-center small text-muted mt-2 mb-0">
                        Free consultation • DEWA approved
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Brands We Use -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--electric-dark);">Premium Electrical Brands</h3>
            <p class="text-muted">We use only DEWA-approved electrical equipment from top manufacturers</p>
        </div>
        
        <div class="brand-grid">
            @php
            $brands = [
                ['name' => 'ABB', 'color' => '#d50000'],
                ['name' => 'Schneider', 'color' => '#00c853'],
                ['name' => 'Legrand', 'color' => '#2962ff'],
                ['name' => 'Siemens', 'color' => '#009688'],
                ['name' => 'Hager', 'color' => '#ff6d00'],
                ['name' => 'Philips', 'color' => '#1e88e5'],
                ['name' => 'Osram', 'color' => '#ffd600'],
                ['name' => 'Havells', 'color' => '#7b1fa2'],
                ['name' => 'Anchor', 'color' => '#f57c00'],
                ['name' => 'GM', 'color' => '#d81b60'],
                ['name' => 'Polycab', 'color' => '#43a047'],
                ['name' => 'Finolex', 'color' => '#5e35b1'],
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

<!-- Emergency Banner -->
<section class="py-5">
    <div class="container">
        <div class="emergency-banner text-white p-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-3">
                        <i class="fa fa-exclamation-triangle me-2"></i> Emergency Electrical Service
                    </h3>
                    <p class="mb-0" style="font-size: 1.1rem;">
                        <strong>24/7 Emergency Electricians:</strong> Power failure, sparking, or electrical hazards? Our emergency team responds within 1 hour across Dubai.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4 py-3 fw-bold">
                        <i class="fa fa-phone-alt me-2"></i> EMERGENCY CALL
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
                <h2 class="fw-bold mb-4" style="color: var(--electric-dark);">Free Electrical Consultation</h2>
                <p class="text-muted mb-4">
                    Get a free electrical assessment and detailed quote for your property. Our certified electrician will visit your site and provide the best electrical solution.
                </p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: rgba(41, 98, 255, 0.1);">
                            <div class="bg-primary p-2 rounded me-3">
                                <i class="fa fa-user-check text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Certified Electricians</h6>
                                <p class="small text-muted mb-0">DEWA-approved technicians</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: rgba(41, 98, 255, 0.1);">
                            <div class="bg-success p-2 rounded me-3">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">DEWA Compliance</h6>
                                <p class="small text-muted mb-0">All work meets regulations</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Why Choose Our Electrical Services?</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> DEWA-Approved Electrical Contractors</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Certified & Experienced Electricians</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Quality DEWA-Approved Materials</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Safety-First Approach</li>
                        <li><i class="fa fa-check-circle text-primary me-2"></i> Comprehensive Warranty on All Work</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4" style="color: var(--electric-dark);">Electrical Service Request</h4>
                        <form id="electricServiceForm">
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
                                        <option>Emergency Electrical Repair</option>
                                        <option>Complete Rewiring</option>
                                        <option>Lighting Installation</option>
                                        <option>DB Box Installation/Repair</option>
                                        <option>Generator Installation</option>
                                        <option>Smart Home Wiring</option>
                                        <option>EV Charger Installation</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Property Type</label>
                                    <select class="form-select">
                                        <option value="">Select Type</option>
                                        <option>Villa</option>
                                        <option>Apartment</option>
                                        <option>Office</option>
                                        <option>Warehouse</option>
                                        <option>Retail Store</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Property Address *</label>
                                    <input type="text" class="form-control" placeholder="Full address in Dubai" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Electrical Requirements</label>
                                    <textarea class="form-control" rows="3" placeholder="Describe your electrical needs, issues, or specific requirements"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="freeInspection">
                                        <label class="form-check-label" for="freeInspection">
                                            <span class="fw-bold text-primary">Request Free Electrical Inspection</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold">
                                        <i class="fa fa-bolt me-2"></i> GET FREE QUOTATION
                                    </button>
                                    <p class="text-center small text-muted mt-2 mb-0">
                                        Our certified electrician will contact you within 1 hour
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
            <h2 class="fw-bold mb-3" style="color: var(--electric-dark);">Frequently Asked Questions</h2>
            <p class="text-muted">Common questions about electrical services in Dubai</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="electricFAQ">
                    @php
                    $faqs = [
                        [
                            'q' => 'Do I need DEWA approval for electrical work in Dubai?',
                            'a' => 'Yes, all major electrical work requires DEWA approval. We handle all necessary approvals, inspections, and certification processes. For minor repairs, approval may not be needed, but we always ensure compliance with DEWA regulations.'
                        ],
                        [
                            'q' => 'How long does complete house rewiring take?',
                            'a' => 'A typical 2BHK apartment rewiring takes 3-4 days. A 3-4 bedroom villa takes 5-7 days. Commercial properties vary based on size. We work efficiently to minimize disruption and complete projects on schedule.'
                        ],
                        [
                            'q' => 'What types of cables do you use?',
                            'a' => 'We use only DEWA-approved cables such as PVC/PVC, XLPE, and fire-resistant cables from reputable brands like Polycab, Finolex, and GM. We match cable specifications to your electrical load requirements.'
                        ],
                        [
                            'q' => 'Do you provide warranty on electrical work?',
                            'a' => 'Yes, we provide comprehensive warranties: 1 year for minor repairs, 2 years for installations, and up to 5 years for complete rewiring. All workmanship and materials are covered under warranty.'
                        ],
                        [
                            'q' => 'Can you upgrade my electrical system for smart home devices?',
                            'a' => 'Absolutely. We install dedicated circuits for smart home systems, network cabling, and prepare your electrical system for home automation. We can integrate with systems like KNX, Control4, or basic smart switches.'
                        ],
                        [
                            'q' => 'How do you ensure electrical safety during work?',
                            'a' => 'We follow strict safety protocols: proper isolation of circuits, use of insulated tools, RCD protection during work, fire extinguishers on site, and compliance with Dubai Civil Defense regulations.'
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
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#electricFAQ">
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

<!-- Final CTA -->
<section class="py-5" style="background: linear-gradient(135deg, var(--electric-dark), #0d47a1);">
    <div class="container">
        <div class="text-center text-white">
            <h2 class="fw-bold mb-3">Need Professional Electrical Services?</h2>
            <p class="mb-4 mx-auto" style="max-width: 700px; font-size: 1.1rem;">
                Contact us today for safe, reliable, and DEWA-compliant electrical solutions in Dubai.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="tel:+971500000000" class="btn btn-light btn-lg px-4">
                    <i class="fa fa-phone me-2"></i> Call Now: +971 5XX XXX XXX
                </a>
                <a href="https://wa.me/971500000000" class="btn btn-success btn-lg px-4">
                    <i class="fab fa-whatsapp me-2"></i> WhatsApp Consultation
                </a>
            </div>
            <p class="mt-4 small opacity-75">
                <i class="fa fa-clock me-1"></i> 24/7 Emergency Service | 
                <i class="fa fa-award ms-3 me-1"></i> DEWA-Approved Contractors
            </p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Data for Electrical Work
    const galleryData = [
        {
            id: 1,
            category: 'wiring',
            title: 'Complete Villa Rewiring - Emirates Hills',
            description: 'Professional rewiring with concealed conduit and DB box upgrade',
            image: 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 2,
            category: 'lighting',
            title: 'LED Lighting Installation - Downtown Dubai',
            description: 'Modern LED lighting with smart control system',
            image: 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 3,
            category: 'db',
            title: 'DB Box Installation - Jumeirah',
            description: 'Main distribution board with RCD protection',
            image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 4,
            category: 'smart',
            title: 'Smart Home Wiring - Palm Jumeirah',
            description: 'Complete smart home electrical infrastructure',
            image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 5,
            category: 'wiring',
            title: 'Office Electrical - DIFC',
            description: 'Commercial wiring with 3-phase connection',
            image: 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 6,
            category: 'lighting',
            title: 'Outdoor Lighting - Arabian Ranches',
            description: 'Garden and security lighting installation',
            image: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 7,
            category: 'db',
            title: 'Circuit Breaker Upgrade - Dubai Marina',
            description: 'DB box modernization with new circuit breakers',
            image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 8,
            category: 'smart',
            title: 'EV Charger Installation - Business Bay',
            description: 'Tesla charger installation with load management',
            image: 'https://images.unsplash.com/photo-1483721310020-03333e577cce?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 9,
            category: 'wiring',
            title: 'Apartment Rewiring - Dubai Hills',
            description: 'Complete electrical upgrade for modern apartment',
            image: 'https://images.unsplash.com/photo-1572120360610-d971b9d7767c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        }
    ];

    // DOM Elements
    const galleryContainer = document.getElementById('electricGallery');
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

    // Form submission
    document.getElementById('electricServiceForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you! Our certified electrician will contact you within 1 hour for a free electrical consultation.');
        this.reset();
    });
    
    // Free inspection checkbox highlight
    document.getElementById('freeInspection').addEventListener('change', function() {
        if(this.checked) {
            this.parentElement.style.backgroundColor = 'rgba(41, 98, 255, 0.1)';
            this.parentElement.style.padding = '10px';
            this.parentElement.style.borderRadius = '5px';
        }
    });
});
</script>
@endsection