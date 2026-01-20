@extends('layouts.app')

@section('title', 'Professional CCTV Camera Installation in Dubai | OneCall Technical Services')
@section('meta_description', 'Expert CCTV installation in Dubai: IP cameras, surveillance systems, access control, video intercom, remote monitoring. 24/7 security solutions for homes & businesses.')
@section('meta_keywords', 'CCTV installation Dubai, security cameras Dubai, IP cameras Dubai, surveillance systems Dubai, access control Dubai, video intercom Dubai, home security Dubai')

@section('content')

<style>
    :root {
        --cctv-blue: #1565c0;
        --cctv-light-blue: #e3f2fd;
        --cctv-green: #00c853;
        --cctv-red: #d32f2f;
        --cctv-dark: #1a237e;
        --cctv-purple: #7b1fa2;
    }

    /* Hero Section */
    .cctv-hero {
        background: linear-gradient(rgba(21, 101, 192, 0.9), rgba(21, 101, 192, 0.95)),
                    url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 400px;
        position: relative;
    }

    .cctv-hero-content {
        padding: 80px 0 100px;
    }

    /* HOW WE WORK Section Styles */
    .how-we-work-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #0a192f 0%, #1a237e 100%);
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
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        border-color: var(--cctv-green);
        background: rgba(255, 255, 255, 0.15);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--cctv-green);
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
        border: 2px solid var(--cctv-green);
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
    .cctv-gallery-section {
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
        color: var(--cctv-blue);
        border-bottom-color: var(--cctv-blue);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--cctv-blue);
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
        background: linear-gradient(135deg, var(--cctv-blue), #0d47a1);
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
        box-shadow: 0 10px 25px rgba(21, 101, 192, 0.15);
        border-color: var(--cctv-blue);
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

    /* Camera Types */
    .camera-type-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .camera-type-card:hover {
        border-color: var(--cctv-blue);
        box-shadow: 0 10px 25px rgba(21, 101, 192, 0.1);
        transform: translateY(-5px);
    }

    .camera-type-card.popular {
        border-color: var(--cctv-green);
        position: relative;
        overflow: hidden;
    }

    .camera-type-card.popular::before {
        content: 'POPULAR';
        position: absolute;
        top: 15px;
        right: -30px;
        background: var(--cctv-green);
        color: white;
        padding: 5px 30px;
        transform: rotate(45deg);
        font-size: 0.8rem;
        font-weight: 600;
    }

    .camera-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 20px;
        color: white;
    }

    /* Security Features */
    .security-feature {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .security-feature:hover {
        border-color: var(--cctv-blue);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin: 0 auto 15px;
        color: white;
        background-color: var(--cctv-blue);
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
        border-color: var(--cctv-blue);
        box-shadow: 0 10px 30px rgba(21, 101, 192, 0.15);
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
        color: var(--cctv-blue);
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
        border-color: var(--cctv-blue);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    /* Emergency Banner */
    .emergency-banner {
        background: linear-gradient(90deg, var(--cctv-red), #ef5350);
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

    /* Monitoring Options */
    .monitoring-option {
        background: white;
        border-radius: 10px;
        padding: 25px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .monitoring-option:hover {
        border-color: var(--cctv-purple);
        box-shadow: 0 8px 20px rgba(123, 31, 162, 0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .cctv-hero-content {
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
        
        .camera-type-card.popular::before {
            font-size: 0.7rem;
            right: -35px;
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
<section class="cctv-hero">
    <div class="container">
        <div class="row align-items-center cctv-hero-content">
            <div class="col-lg-8 text-white">
                <h1 class="display-5 fw-bold mb-3">Professional CCTV Camera Installation in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    Complete security solutions: CCTV cameras, surveillance systems, access control, and remote monitoring for homes & businesses across Dubai.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4">
                        <i class="fa fa-shield-alt me-2"></i> Emergency Security
                    </a>
                    <a href="#booking" class="btn btn-outline-light btn-lg px-4">
                        <i class="fa fa-video me-2"></i> Free Security Audit
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
            <span class="badge bg-success mb-3 px-3 py-2" style="font-size: 0.9rem;">
                <i class="fa fa-cogs me-1"></i> Our Security Process
            </span>
            <h2 class="fw-bold mb-3">HOW WE WORK</h2>
            <p class="opacity-90 mx-auto" style="max-width: 700px;">
                Our professional 5-step security installation process ensures complete protection for your property
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3">Security Assessment</h4>
                    <p class="opacity-90">
                        Free site survey and security risk assessment. We identify vulnerabilities and recommend optimal camera placements.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-success bg-opacity-25 text-white">Free Site Survey</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3">System Design</h4>
                    <p class="opacity-90">
                        Custom security system design with camera placement map, DVR/NVR selection, and cabling plan.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-success bg-opacity-25 text-white">Custom Design</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3">Equipment Selection</h4>
                    <p class="opacity-90">
                        Choose from top brands and camera types based on your requirements and budget.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-success bg-opacity-25 text-white">Top Brands</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3">Professional Installation</h4>
                    <p class="opacity-90">
                        Clean installation with hidden cabling, proper mounting, and weatherproof connections.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-success bg-opacity-25 text-white">Expert Installation</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3">System Setup</h4>
                    <p class="opacity-90">
                        Network configuration, remote access setup, mobile app installation, and user training.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-success bg-opacity-25 text-white">Remote Access</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--cctv-green), #1b5e20); border-color: var(--cctv-green);">
                    <div class="step-number" style="background: white; color: var(--cctv-green);">✓</div>
                    <h4 class="fw-bold mb-3">24/7 Monitoring</h4>
                    <p>
                        Optional professional monitoring services with instant alerts and emergency response.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-white text-success">Peace of Mind</span>
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
                            <div class="stat-number">3,500+</div>
                            <div class="stat-label">Security Systems Installed</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">99%</div>
                            <div class="stat-label">Crime Deterrence Rate</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Technical Support</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">2H</div>
                            <div class="stat-label">Emergency Response</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="cctv-gallery-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--cctv-dark);">Our CCTV Installation Projects Gallery</h2>
            <p class="text-muted">Browse our professional security camera installations across Dubai</p>
        </div>

        <!-- Gallery Tabs -->
        <div class="d-flex justify-content-center gallery-tabs">
            <button class="gallery-tab active" data-category="all">All Projects</button>
            <button class="gallery-tab" data-category="residential">Residential</button>
            <button class="gallery-tab" data-category="commercial">Commercial</button>
            <button class="gallery-tab" data-category="industrial">Industrial</button>
            <button class="gallery-tab" data-category="retail">Retail</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="cctvGallery">
            <!-- Gallery items will be dynamically loaded here -->
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="tel:+971500000000" class="btn btn-primary px-4">
                <i class="fa fa-images me-2"></i> View Security Portfolio
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
            <span class="badge bg-primary mb-3 px-3 py-2" style="font-size: 0.9rem; background-color: var(--cctv-blue) !important;">
                <i class="fa fa-shield-alt me-1"></i> Complete Security Solutions
            </span>
            <h2 class="fw-bold mb-3" style="color: var(--cctv-dark);">Professional CCTV & Security Services</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                From basic surveillance to advanced security systems, we provide comprehensive protection for all types of properties in Dubai.
            </p>
        </div>

        <div class="row g-4">
            <!-- CCTV Installation -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--cctv-blue);">
                        <i class="fa fa-video text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--cctv-dark);">CCTV Camera Installation</h3>
                    <p class="text-muted mb-4">
                        Professional installation of HD security cameras, DVR/NVR systems, and complete surveillance setups for 24/7 monitoring.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> HD & 4K Camera Options</li>
                        <li><i class="fa fa-check-circle"></i> Night Vision Capability</li>
                        <li><i class="fa fa-check-circle"></i> Weatherproof Cameras</li>
                        <li><i class="fa fa-check-circle"></i> Mobile App Access</li>
                    </ul>
                    <div class="mt-4">
                        <a href="tel:+971500000000" class="btn btn-primary w-100">
                            <i class="fa fa-camera me-2"></i> Get CCTV Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Access Control -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--cctv-green);">
                        <i class="fa fa-fingerprint text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--cctv-dark);">Access Control Systems</h3>
                    <p class="text-muted mb-4">
                        Advanced access control solutions including biometric systems, key cards, and electronic locks for enhanced security.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Biometric Readers</li>
                        <li><i class="fa fa-check-circle"></i> RFID Card Systems</li>
                        <li><i class="fa fa-check-circle"></i> Time & Attendance</li>
                        <li><i class="fa fa-check-circle"></i> Remote Access Control</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#booking" class="btn btn-success w-100" style="background-color: var(--cctv-green); border-color: var(--cctv-green);">
                            <i class="fa fa-lock me-2"></i> Secure Your Property
                        </a>
                    </div>
                </div>
            </div>

            <!-- Alarm Systems -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--cctv-red);">
                        <i class="fa fa-bell text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--cctv-dark);">Alarm & Intrusion Systems</h3>
                    <p class="text-muted mb-4">
                        Complete burglar alarm systems with motion sensors, door/window contacts, and 24/7 monitoring services.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Motion Detection</li>
                        <li><i class="fa fa-check-circle"></i> Glass Break Sensors</li>
                        <li><i class="fa fa-check-circle"></i> Siren & Strobe Lights</li>
                        <li><i class="fa fa-check-circle"></i> Police Link Options</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#alarms" class="btn btn-danger w-100 text-white" style="background-color: var(--cctv-red); border-color: var(--cctv-red);">
                            <i class="fa fa-shield-alt me-2"></i> Alarm Systems
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Camera Types -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--cctv-dark);">Camera Types We Install</h2>
            <p class="text-muted">Choose the right camera for your specific security needs</p>
        </div>
        
        <div class="row g-4">
            @php
            $cameraTypes = [
                ['name' => 'Dome Cameras', 'features' => ['Discreet design', '360° coverage', 'Vandal resistant'], 'price' => 'AED 350+', 'icon' => 'fa-compact-disc', 'color' => '#1565c0', 'popular' => true],
                ['name' => 'Bullet Cameras', 'features' => ['Long range view', 'Weatherproof', 'Visible deterrent'], 'price' => 'AED 400+', 'icon' => 'fa-video', 'color' => '#00c853', 'popular' => false],
                ['name' => 'PTZ Cameras', 'features' => ['Pan-Tilt-Zoom', 'Auto tracking', 'Remote control'], 'price' => 'AED 1200+', 'icon' => 'fa-sync-alt', 'color' => '#d32f2f', 'popular' => false],
                ['name' => 'IP Cameras', 'features' => ['Network based', 'High resolution', 'PoE support'], 'price' => 'AED 500+', 'icon' => 'fa-wifi', 'color' => '#7b1fa2', 'popular' => true],
                ['name' => 'Wireless Cameras', 'features' => ['Easy installation', 'No cables needed', 'Battery/solar options'], 'price' => 'AED 600+', 'icon' => 'fa-broadcast-tower', 'color' => '#ff9800', 'popular' => false],
                ['name' => 'Thermal Cameras', 'features' => ['Heat detection', 'Works in total dark', 'Perimeter security'], 'price' => 'AED 2500+', 'icon' => 'fa-thermometer-full', 'color' => '#f44336', 'popular' => false],
            ];
            @endphp
            
            @foreach($cameraTypes as $camera)
            <div class="col-md-6 col-lg-4">
                <div class="camera-type-card @if($camera['popular']) popular @endif">
                    <div class="camera-icon" style="background-color: {{ $camera['color'] }};">
                        <i class="fa {{ $camera['icon'] }}"></i>
                    </div>
                    <h4 class="fw-bold mb-3">{{ $camera['name'] }}</h4>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($camera['features'] as $feature)
                        <li class="py-1">
                            <i class="fa fa-check-circle me-2" style="color: {{ $camera['color'] }};"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-4">
                        <span class="fw-bold h5" style="color: {{ $camera['color'] }};">{{ $camera['price'] }}</span>
                        <span class="text-muted small">per camera</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="tel:+971500000000" class="btn btn-sm w-100" 
                           style="background-color: {{ $camera['color'] }}; border-color: {{ $camera['color'] }}; color: white;">
                            <i class="fa fa-info-circle me-1"></i> More Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Security Features -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--cctv-dark);">Advanced Security Features</h3>
            <p class="text-muted">Modern security technologies for complete protection</p>
        </div>
        
        <div class="row g-4">
            @php
            $features = [
                ['name' => 'AI Detection', 'desc' => 'Smart person/vehicle detection', 'icon' => 'fa-brain', 'color' => '#1565c0'],
                ['name' => 'Facial Recognition', 'desc' => 'Identify authorized persons', 'icon' => 'fa-user-check', 'color' => '#00c853'],
                ['name' => 'License Plate Recognition', 'desc' => 'Automatic vehicle tracking', 'icon' => 'fa-car', 'color' => '#d32f2f'],
                ['name' => 'Cloud Storage', 'desc' => 'Secure video backup', 'icon' => 'fa-cloud', 'color' => '#7b1fa2'],
                ['name' => 'Two-Way Audio', 'desc' => 'Speak through cameras', 'icon' => 'fa-microphone', 'color' => '#ff9800'],
                ['name' => 'Smart Home Integration', 'desc' => 'Works with Alexa/Google', 'icon' => 'fa-home', 'color' => '#f44336'],
            ];
            @endphp
            
            @foreach($features as $feature)
            <div class="col-md-6 col-lg-4">
                <div class="security-feature">
                    <div class="feature-icon" style="background-color: {{ $feature['color'] }};">
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

<!-- Packages & Pricing -->
<section id="alarms" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--cctv-dark);">Security Packages</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Choose the right security package for your property</p>
        </div>
        
        <div class="row g-4">
            @php
            $packages = [
                ['name' => 'Basic Home Security', 'price' => 'AED 1,999', 'cameras' => '4 Cameras', 'features' => ['4 HD Dome Cameras', '1TB DVR System', 'Mobile App Access', 'Night Vision', '1-Year Warranty'], 'color' => '#1565c0'],
                ['name' => 'Advanced Home Security', 'price' => 'AED 3,499', 'cameras' => '8 Cameras', 'features' => ['8 HD IP Cameras', '2TB NVR System', 'Remote Viewing', 'Motion Detection', 'Cloud Backup (30 days)', '2-Year Warranty'], 'color' => '#00c853', 'popular' => true],
                ['name' => 'Business Security', 'price' => 'AED 6,999', 'cameras' => '16 Cameras', 'features' => ['16 4K Cameras', 'Professional NVR', 'Access Control System', 'Alarm Integration', '24/7 Monitoring Option', '3-Year Warranty'], 'color' => '#d32f2f'],
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
                        <p class="text-muted small">{{ $package['cameras'] }} • Complete Installation</p>
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
                        <i class="fa fa-shield-alt me-2"></i> SELECT PACKAGE
                    </a>
                    <p class="text-center small text-muted mt-2 mb-0">
                        Free installation • Free training
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Brands We Use -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--cctv-dark);">Premium Security Brands</h3>
            <p class="text-muted">We use only top-quality security equipment from leading manufacturers</p>
        </div>
        
        <div class="brand-grid">
            @php
            $brands = [
                ['name' => 'Hikvision', 'color' => '#e53935'],
                ['name' => 'Dahua', 'color' => '#1e88e5'],
                ['name' => 'Axis', 'color' => '#43a047'],
                ['name' => 'Bosch', 'color' => '#ffb300'],
                ['name' => 'Samsung', 'color' => '#1428a0'],
                ['name' => 'Honeywell', 'color' => '#d81b60'],
                ['name' => 'ZKTeco', 'color' => '#5e35b1'],
                ['name' => 'CP Plus', 'color' => '#00897b'],
                ['name' => 'Vivotek', 'color' => '#3949ab'],
                ['name' => 'Panasonic', 'color' => '#0040be'],
                ['name' => 'Uniview', 'color' => '#f57c00'],
                ['name' => 'Milesight', 'color' => '#7cb342'],
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

<!-- Monitoring Options -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--cctv-dark);">Monitoring & Support Options</h2>
            <p class="text-muted">Choose how you want to monitor your security system</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="monitoring-option">
                    <div class="feature-icon mb-4" style="background-color: var(--cctv-blue);">
                        <i class="fa fa-mobile-alt"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Self-Monitoring</h4>
                    <p class="text-muted mb-4">Monitor your property yourself through mobile app</p>
                    <ul class="list-unstyled mb-4">
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Mobile App Access</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Instant Alerts</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Cloud Storage Option</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Free Technical Support</li>
                    </ul>
                    <div class="fw-bold h4 mb-3" style="color: var(--cctv-blue);">AED 0/month</div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="monitoring-option" style="border-color: var(--cctv-green);">
                    <div class="feature-icon mb-4" style="background-color: var(--cctv-green);">
                        <i class="fa fa-headset"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Professional Monitoring</h4>
                    <p class="text-muted mb-4">24/7 monitoring by our security team</p>
                    <ul class="list-unstyled mb-4">
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> 24/7 Monitoring Center</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Instant Emergency Response</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Police Dispatch Coordination</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Monthly Activity Reports</li>
                    </ul>
                    <div class="fw-bold h4 mb-3" style="color: var(--cctv-green);">AED 299/month</div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="monitoring-option">
                    <div class="feature-icon mb-4" style="background-color: var(--cctv-purple);">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Business Monitoring</h4>
                    <p class="text-muted mb-4">Advanced monitoring for commercial properties</p>
                    <ul class="list-unstyled mb-4">
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Dedicated Account Manager</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Priority Response</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Customized Reports</li>
                        <li class="py-1"><i class="fa fa-check text-success me-2"></i> Regular System Audits</li>
                    </ul>
                    <div class="fw-bold h4 mb-3" style="color: var(--cctv-purple);">AED 599/month</div>
                </div>
            </div>
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
                        <i class="fa fa-exclamation-triangle me-2"></i> Emergency Security Response
                    </h3>
                    <p class="mb-0" style="font-size: 1.1rem;">
                        <strong>24/7 Emergency Service:</strong> Broken cameras, system failure, or security breach? Our emergency team responds within 2 hours across Dubai.
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
                <h2 class="fw-bold mb-4" style="color: var(--cctv-dark);">Free Security Audit & Quote</h2>
                <p class="text-muted mb-4">
                    Get a free security assessment and customized quote for your property. Our expert will visit your site and provide the best security solution.
                </p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: var(--cctv-light-blue);">
                            <div class="bg-primary p-2 rounded me-3">
                                <i class="fa fa-search text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Free Site Survey</h6>
                                <p class="small text-muted mb-0">Security vulnerability assessment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: var(--cctv-light-blue);">
                            <div class="bg-success p-2 rounded me-3">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">3-Year Warranty</h6>
                                <p class="small text-muted mb-0">On all equipment & installation</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Why Choose Our Security Services?</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Dubai Police Approved Systems</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Certified Security Technicians</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Hidden & Neat Cable Management</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Remote Access from Anywhere</li>
                        <li><i class="fa fa-check-circle text-primary me-2"></i> 24/7 Technical Support</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4" style="color: var(--cctv-dark);">Security Consultation Form</h4>
                        <form id="cctvServiceForm">
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
                                    <label class="form-label">Property Type *</label>
                                    <select class="form-select" required>
                                        <option value="">Select Type</option>
                                        <option>Villa</option>
                                        <option>Apartment</option>
                                        <option>Office</option>
                                        <option>Warehouse</option>
                                        <option>Retail Store</option>
                                        <option>Hotel/Resort</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Area Size</label>
                                    <select class="form-select">
                                        <option value="">Select Size</option>
                                        <option>Small (1-2 rooms)</option>
                                        <option>Medium (3-5 rooms)</option>
                                        <option>Large (Villa/Office)</option>
                                        <option>Commercial Building</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Property Address *</label>
                                    <input type="text" class="form-control" placeholder="Full address in Dubai" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Security Requirements</label>
                                    <textarea class="form-control" rows="3" placeholder="Specific areas to cover, existing systems, budget, etc."></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="freeSurvey">
                                        <label class="form-check-label" for="freeSurvey">
                                            <span class="fw-bold text-primary">Request Free Site Survey</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold">
                                        <i class="fa fa-shield-alt me-2"></i> GET FREE SECURITY AUDIT
                                    </button>
                                    <p class="text-center small text-muted mt-2 mb-0">
                                        Our security expert will contact you within 2 hours
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
            <h2 class="fw-bold mb-3" style="color: var(--cctv-dark);">Frequently Asked Questions</h2>
            <p class="text-muted">Common questions about CCTV and security systems</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="cctvFAQ">
                    @php
                    $faqs = [
                        [
                            'q' => 'Do I need Dubai Police approval for CCTV installation?',
                            'a' => 'For residential properties, no approval is needed for internal cameras. For commercial properties and cameras facing public areas, Dubai Police approval is required. We handle all necessary approvals and documentation.'
                        ],
                        [
                            'q' => 'What is the difference between IP cameras and analog cameras?',
                            'a' => 'IP cameras provide higher resolution (up to 4K), use network cables, offer remote access, and support advanced features like analytics. Analog cameras are more affordable but offer lower resolution and require separate power cables.'
                        ],
                        [
                            'q' => 'Can I view my cameras on my phone when I\'m abroad?',
                            'a' => 'Yes, all our systems come with mobile app access. You can view live footage, receive motion alerts, and playback recordings from anywhere in the world with internet connection.'
                        ],
                        [
                            'q' => 'How long is video footage stored?',
                            'a' => 'Typically 30-90 days depending on storage capacity. Our systems use motion-based recording to optimize storage. We can also set up cloud storage for additional backup.'
                        ],
                        [
                            'q' => 'Do your cameras work during power outages?',
                            'a' => 'Yes, we install UPS (Uninterruptible Power Supply) systems to keep cameras running during power outages. We also offer battery backup options for wireless cameras.'
                        ],
                        [
                            'q' => 'What maintenance is required for CCTV systems?',
                            'a' => 'Regular maintenance includes cleaning camera lenses, checking connections, updating firmware, and testing recording functionality. We offer annual maintenance contracts for hassle-free service.'
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
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#cctvFAQ">
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
<section class="py-5" style="background: linear-gradient(135deg, var(--cctv-dark), #0d47a1);">
    <div class="container">
        <div class="text-center text-white">
            <h2 class="fw-bold mb-3">Secure Your Property Today</h2>
            <p class="mb-4 mx-auto" style="max-width: 700px; font-size: 1.1rem;">
                Contact us for professional CCTV installation, security systems, and peace of mind in Dubai.
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
                <i class="fa fa-clock me-1"></i> 24/7 Emergency Response | 
                <i class="fa fa-shield-alt ms-3 me-1"></i> Dubai Police Approved Systems
            </p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Data for CCTV
    const galleryData = [
        {
            id: 1,
            category: 'residential',
            title: 'Villa Security System - Emirates Hills',
            description: 'Complete 16-camera security system with access control',
            image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 2,
            category: 'commercial',
            title: 'Office CCTV Installation - DIFC',
            description: 'Professional office security with 32 IP cameras',
            image: 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 3,
            category: 'industrial',
            title: 'Warehouse Surveillance - JAFZA',
            description: 'Industrial security system with thermal cameras',
            image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 4,
            category: 'retail',
            title: 'Retail Store Security - Dubai Mall',
            description: 'POS-integrated security with anti-theft features',
            image: 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 5,
            category: 'residential',
            title: 'Apartment Security - Marina',
            description: 'Smart home security with facial recognition',
            image: 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 6,
            category: 'commercial',
            title: 'Hotel Security System',
            description: 'Complete hotel security with 64 cameras',
            image: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 7,
            category: 'industrial',
            title: 'Construction Site Security',
            description: 'Temporary security system for construction site',
            image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 8,
            category: 'retail',
            title: 'Showroom Security - Sheikh Zayed Road',
            description: 'Luxury showroom security with 4K cameras',
            image: 'https://images.unsplash.com/photo-1483721310020-03333e577cce?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 9,
            category: 'residential',
            title: 'Gated Community Security',
            description: 'Perimeter security with license plate recognition',
            image: 'https://images.unsplash.com/photo-1572120360610-d971b9d7767c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        }
    ];

    // DOM Elements
    const galleryContainer = document.getElementById('cctvGallery');
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
    document.getElementById('cctvServiceForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you! Our security expert will contact you within 2 hours for a free security audit.');
        this.reset();
    });
    
    // Free survey checkbox highlight
    document.getElementById('freeSurvey').addEventListener('change', function() {
        if(this.checked) {
            this.parentElement.style.backgroundColor = '#e3f2fd';
            this.parentElement.style.padding = '10px';
            this.parentElement.style.borderRadius = '5px';
        }
    });
});
</script>
@endsection