@extends('layouts.app')

@section('title', 'Professional Aluminum & Glass Works in Dubai | OneCall Technical Services')
@section('meta_description', 'Expert aluminum and glass services in Dubai: window installation, glass partitions, curtain walls, shop fronts, sliding doors, balcony glass. 24/7 emergency service available.')
@section('meta_keywords', 'aluminum works Dubai, glass installation Dubai, window installation Dubai, glass partitions Dubai, curtain walls Dubai, shop front glass Dubai, sliding glass doors')

@section('content')

<style>
    /* Hero Section */
    .ag-hero {
        background: linear-gradient(#990000, rgba(0, 87, 179, 0.73)),
                    url('{{ asset("images/bgimages/banner.jpg") }}');
        background-size: cover;
        background-position: center;
        min-height: 400px;
        position: relative;
    }

    .ag-hero-content {
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
        box-shadow: 0 15px 30px rgba(30, 136, 229, 0.15);
        border-color: var(--primary);
    }

    /* Gallery Styles */
    .ag-gallery-section {
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
        color: var(--primary);
        border-bottom-color: var(--primary);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--primary);
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
        background: linear-gradient(135deg, var(--primary), #0d47a1);
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

  
   
    /* Pricing Table */
    .pricing-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }

    .pricing-card.popular {
        border-color: var(--primary);
        box-shadow: 0 10px 30px rgba(30, 136, 229, 0.15);
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
        color: var(--primary);
        line-height: 1;
    }

    /* Materials Section */
    .material-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 20px;
    }

    .material-item {
        background: white;
        padding: 25px 20px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
    }

    .material-item:hover {
        border-color: var(--primary);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    .material-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: white;
        background-color: var(--ag-silver);
    }

    /* Emergency Banner */
    .emergency-banner {
        background: linear-gradient(90deg, var(--ag-orange), #ffab91);
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

    /* Glass Types */
    .glass-type-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        height: 100%;
    }

    .glass-type-card:hover {
        border-color: var(--ag-green);
        box-shadow: 0 8px 20px rgba(0, 172, 193, 0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .ag-hero-content {
            padding: 60px 0 80px;
        }
        
        .service-highlight-card {
            padding: 20px;
        }
        
        .material-grid {
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
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
        
        .material-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- Hero Section -->
<section class="ag-hero">
    <div class="container">
        <div class="row align-items-center ag-hero-content">
            <div class="col-lg-8 text-white">
                <h1 class="display-5 fw-bold mb-3">Professional Aluminum & Glass Works in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    Expert aluminum fabrication, glass installation, curtain walls, and shop front solutions for residential & commercial projects across Dubai.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971500000000" class="btn btn-primary btn-lg px-4">
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
             <span class="badge bg-primary mb-3 px-3 py-2" style="background-color: var(--primary) !important; font-size: 0.9rem;">
                <i class="fa fa-cogs me-1"></i> Our Process
            </span>
            <h2 class="fw-bold mb-3" style="color: var(--primary-dark);">HOW WE WORK</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Our professional 5-step process ensures precision aluminum and glass work from consultation to completion
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3" style="color: var(--primary-dark);">Free Site Survey</h4>
                    <p class="text-muted">
                        Expert assessment and measurements at your location. We analyze requirements and provide design recommendations.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Precision Measurements</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3" style="color: var(--primary-dark);">Design & Quotation</h4>
                    <p class="text-muted">
                        3D design visualization and transparent pricing. Choose from various aluminum profiles and glass types.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">3D Visualization</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3" style="color: var(--primary-dark);">Fabrication</h4>
                    <p class="text-muted">
                        Precision cutting and fabrication in our workshop using state-of-the-art CNC machines and tools.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">CNC Precision</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3" style="color: var(--primary-dark);">Installation</h4>
                    <p class="text-muted">
                        Professional installation by certified technicians. Clean workmanship with attention to detail and safety.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Certified Installers</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3" style="color: var(--primary-dark);">Quality Check</h4>
                    <p class="text-muted">
                        Final inspection, sealant application, and functionality testing. Customer walkthrough and satisfaction guarantee.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">2-Year Warranty</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--primary), #0d47a1); color: white;">
                    <div class="step-number" style="background: white; color: var(--primary);">✓</div>
                    <h4 class="fw-bold mb-3">Project Completion</h4>
                    <p>
                        Cleanup, documentation, and after-sales support. We ensure your complete satisfaction with the final result.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-white text-primary">100% Satisfaction</span>
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
                            <div class="stat-number">2,500+</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Client Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Emergency Service</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="ag-gallery-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--primary-dark);">Our Aluminum & Glass Projects Gallery</h2>
            <p class="text-muted">Browse our professional aluminum and glass installations across Dubai</p>
        </div>

        <!-- Gallery Tabs -->
        <div class="d-flex justify-content-center gallery-tabs">
            <button class="gallery-tab active" data-category="all">All Projects</button>
            <button class="gallery-tab" data-category="windows">Windows</button>
            <button class="gallery-tab" data-category="glass-partitions">Glass Partitions</button>
            <button class="gallery-tab" data-category="curtain-walls">Curtain Walls</button>
            <button class="gallery-tab" data-category="shop-fronts">Shop Fronts</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="agGallery">
            <!-- Gallery items will be dynamically loaded here -->
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="tel:+971500000000" class="btn btn-primary px-4">
                <i class="fa fa-images me-2"></i> View Our Portfolio
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
            <span class="badge bg-primary mb-3 px-3 py-2" style="font-size: 0.9rem; background-color: var(--primary) !important;">
                <i class="fa fa-star me-1"></i> Expert Aluminum & Glass Services
            </span>
            <h2 class="fw-bold mb-3" style="color: var(--primary-dark);">Comprehensive Aluminum & Glass Solutions</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                From residential windows to commercial curtain walls, we provide professional aluminum and glass solutions for all projects in Dubai.
            </p>
        </div>

        <div class="row g-4">
            <!-- Window Installation -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg">
                        <i class="fa fa-window-restore text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--primary-dark);">Window Installation</h3>
                    <p class="text-muted mb-4">
                        Professional installation of aluminum windows including sliding, casement, tilt & turn, and fixed windows for residential and commercial spaces.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Thermal Break Windows</li>
                        <li><i class="fa fa-check-circle"></i> Soundproof Solutions</li>
                        <li><i class="fa fa-check-circle"></i> Weatherproof Sealing</li>
                        <li><i class="fa fa-check-circle"></i> Mosquito Mesh Included</li>
                    </ul>
                    <div class="mt-4">
                        <a href="tel:+971500000000" class="btn btn-primary w-100">
                            <i class="fa fa-ruler me-2"></i> Get Window Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Glass Partitions -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--ag-green);">
                        <i class="fa fa-border-all text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--primary-dark);">Glass Partitions</h3>
                    <p class="text-muted mb-4">
                        Modern glass partition systems for offices, showrooms, and residential spaces. Create open, light-filled environments with privacy options.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Frameless Partitions</li>
                        <li><i class="fa fa-check-circle"></i> Office Partitions</li>
                        <li><i class="fa fa-check-circle"></i> Frosted & Tinted Glass</li>
                        <li><i class="fa fa-check-circle"></i> Sliding & Fixed Systems</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#booking" class="btn btn-success w-100" style="background-color: var(--ag-green); border-color: var(--ag-green);">
                            <i class="fa fa-th-large me-2"></i> Book Consultation
                        </a>
                    </div>
                </div>
            </div>

            <!-- Curtain Walls -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--ag-orange);">
                        <i class="fa fa-building text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--primary-dark);">Curtain Walls</h3>
                    <p class="text-muted mb-4">
                        Structural glazing and curtain wall systems for commercial buildings. Energy-efficient designs with thermal and acoustic insulation.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Unitized Systems</li>
                        <li><i class="fa fa-check-circle"></i> Stick Systems</li>
                        <li><i class="fa fa-check-circle"></i> Structural Glazing</li>
                        <li><i class="fa fa-check-circle"></i> Double Glazed Units</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#commercial" class="btn btn-warning w-100 text-white" style="background-color: var(--ag-orange); border-color: var(--ag-orange);">
                            <i class="fa fa-hard-hat me-2"></i> Commercial Projects
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
                <h2 class="fw-bold mb-4" style="color: var(--primary-dark);">Complete Aluminum & Glass Services in Dubai</h2>
                
                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-3" style="color: var(--primary);">
                        <i class="fa fa-store me-2"></i> Shop Front & Showroom Works
                    </h3>
                    <p>Transform your retail space with stunning aluminum and glass shop fronts that attract customers and enhance brand visibility.</p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul class="service-feature-list">
                                <li><i class="fa fa-check text-primary"></i> Retail Shop Fronts</li>
                                <li><i class="fa fa-check text-primary"></i> Showroom Entrances</li>
                                <li><i class="fa fa-check text-primary"></i> Automatic Sliding Doors</li>
                                <li><i class="fa fa-check text-primary"></i> Display Windows</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-feature-list">
                                <li><i class="fa fa-check text-primary"></i> Security Grilles</li>
                                <li><i class="fa fa-check text-primary"></i> Awnings & Canopies</li>
                                <li><i class="fa fa-check text-primary"></i> Signage Integration</li>
                                <li><i class="fa fa-check text-primary"></i> LED Lighting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h3 class="h4 fw-bold mb-3" style="color: var(--primary);">
                        <i class="fa fa-door-open me-2"></i> Doors & Entrances
                    </h3>
                    <p>High-quality aluminum doors including sliding doors, folding doors, revolving doors, and entrance systems for residential and commercial properties.</p>
                    <div class="alert alert-info mt-3">
                        <i class="fa fa-info-circle me-2"></i>
                        <strong>Custom Solutions:</strong> We design and fabricate custom door systems to fit any architectural requirement with precision engineering.
                    </div>
                </div>

                <div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--primary);">
                        <i class="fa fa-tint me-2"></i> Glass Repair & Replacement
                    </h3>
                    <p>Emergency glass repair services for broken windows, cracked glass, and damaged storefronts. Quick response across Dubai.</p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-light p-2 rounded me-3">
                                    <i class="fa fa-exclamation-triangle text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Emergency Glass Repair</h6>
                                    <p class="small text-muted mb-0">24/7 emergency service for broken glass</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-3">
                                <div class="bg-light p-2 rounded me-3">
                                    <i class="fa fa-sync-alt text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Glass Upgradation</h6>
                                    <p class="small text-muted mb-0">Upgrade to energy-efficient glass</p>
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
                            <h4 class="fw-bold mb-3" style="color: var(--primary-dark);">Transparent Pricing</h4>
                            <div class="price-tag mb-2">AED 350<span style="font-size: 1rem; color: #666;">/sqm</span></div>
                            <p class="text-muted small">Starting price for standard windows</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Service Charges</h5>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Site Survey & Measurement</span>
                                <span class="fw-bold text-success">FREE</span>
                            </div>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Window Installation (per sqm)</span>
                                <span class="fw-bold">AED 350-600</span>
                            </div>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Glass Partition (per sqm)</span>
                                <span class="fw-bold">AED 450-800</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <span>Emergency Glass Repair</span>
                                <span class="fw-bold">AED 200+</span>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Material Options</h5>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Standard Aluminum</span>
                                <span class="fw-bold">AED 200/sqm</span>
                            </div>
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Thermal Break</span>
                                <span class="fw-bold">AED 350/sqm</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <span>Double Glazed Glass</span>
                                <span class="fw-bold">AED 150/sqm</span>
                            </div>
                        </div>
                        
                        <a href="tel:+971500000000" class="btn btn-primary w-100 py-3 fw-bold">
                            <i class="fa fa-calculator me-2"></i> GET EXACT QUOTE
                        </a>
                        <p class="text-center small text-muted mt-2 mb-0">Free site visit • Custom design</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Materials We Work With -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--primary-dark);">Materials We Work With</h3>
            <p class="text-muted">Premium quality materials for durable and beautiful results</p>
        </div>
        
        <div class="material-grid">
            @php
            $materials = [
                ['name' => 'Aluminum 6063-T5', 'desc' => 'Structural grade', 'icon' => 'fa-cube', 'color' => '#78909c'],
                ['name' => 'Thermal Break', 'desc' => 'Energy efficient', 'icon' => 'fa-snowflake', 'color' => '#1e88e5'],
                ['name' => 'Clear Glass', 'desc' => '6mm-12mm', 'icon' => 'fa-glass-martini', 'color' => '#00acc1'],
                ['name' => 'Tempered Glass', 'desc' => 'Safety glass', 'icon' => 'fa-shield-alt', 'color' => '#ff8a65'],
                ['name' => 'Laminated Glass', 'desc' => 'Security glass', 'icon' => 'fa-layer-group', 'color' => '#8e24aa'],
                ['name' => 'Double Glazed', 'desc' => 'Insulated units', 'icon' => 'fa-window-maximize', 'color' => '#43a047'],
                ['name' => 'Low-E Glass', 'desc' => 'Heat reflective', 'icon' => 'fa-sun', 'color' => '#ffb300'],
                ['name' => 'Frosted Glass', 'desc' => 'Privacy glass', 'icon' => 'fa-eye-slash', 'color' => '#90a4ae'],
            ];
            @endphp
            
            @foreach($materials as $material)
            <div class="material-item">
                <div class="material-icon" style="background-color: {{ $material['color'] }};">
                    <i class="fa {{ $material['icon'] }}"></i>
                </div>
                <h6 class="fw-bold mb-1">{{ $material['name'] }}</h6>
                <p class="small text-muted mb-0">{{ $material['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Glass Types -->
<section id="commercial" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--primary-dark);">Glass Types & Applications</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Choose the right glass for your specific requirements</p>
        </div>
        
        <div class="row g-4">
            @php
            $glassTypes = [
                ['name' => 'Clear Float Glass', 'features' => ['Standard clarity', 'Various thicknesses', 'Basic applications'], 'price' => 'AED 80-120/sqm', 'color' => '#1e88e5'],
                ['name' => 'Tempered Safety Glass', 'features' => ['4x stronger than regular', 'Safety break pattern', 'Doors & shower enclosures'], 'price' => 'AED 150-200/sqm', 'color' => '#ff8a65'],
                ['name' => 'Laminated Glass', 'features' => ['PVB interlayer', 'Security & soundproof', 'Skylights & floors'], 'price' => 'AED 200-300/sqm', 'color' => '#8e24aa'],
                ['name' => 'Double Glazed Units', 'features' => ['Thermal insulation', 'Noise reduction', 'Energy saving'], 'price' => 'AED 250-400/sqm', 'color' => '#43a047'],
                ['name' => 'Low-E Glass', 'features' => ['Heat reflection', 'UV protection', 'Commercial buildings'], 'price' => 'AED 300-500/sqm', 'color' => '#ffb300'],
                ['name' => 'Smart Glass', 'features' => ['Privacy on demand', 'Electric switchable', 'Conference rooms'], 'price' => 'AED 800-1200/sqm', 'color' => '#7b1fa2'],
            ];
            @endphp
            
            @foreach($glassTypes as $glass)
            <div class="col-md-6 col-lg-4">
                <div class="glass-type-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h5 class="fw-bold mb-0" style="color: {{ $glass['color'] }};">{{ $glass['name'] }}</h5>
                        <span class="badge" style="background-color: {{ $glass['color'] }}20; color: {{ $glass['color'] }};">
                            {{ $glass['price'] }}
                        </span>
                    </div>
                    
                    <ul class="list-unstyled mb-3">
                        @foreach($glass['features'] as $feature)
                        <li class="py-1">
                            <i class="fa fa-check-circle me-2 small" style="color: {{ $glass['color'] }};"></i>
                            <span class="small">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-3">
                        <a href="tel:+971500000000" class="btn btn-sm w-100" 
                           style="background-color: {{ $glass['color'] }}; border-color: {{ $glass['color'] }}; color: white;">
                            <i class="fa fa-info-circle me-1"></i> Learn More
                        </a>
                    </div>
                </div>
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
                        <i class="fa fa-exclamation-triangle me-2"></i> Emergency Glass Repair
                    </h3>
                    <p class="mb-0" style="font-size: 1.1rem;">
                        <strong>24/7 Emergency Service:</strong> Broken windows or damaged shop fronts? Our emergency team responds within 2 hours across Dubai.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4 py-3 fw-bold">
                        <i class="fa fa-phone-alt me-2"></i> CALL FOR REPAIR
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
                <h2 class="fw-bold mb-4" style="color: var(--primary-dark);">Book Aluminum & Glass Service</h2>
                <p class="text-muted mb-4">
                    Fill out this form for a free site survey and detailed quotation. Our expert will contact you within 2 hours.
                </p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: var(--tesla-silver);">
                            <div class="bg-primary p-2 rounded me-3">
                                <i class="fa fa-ruler text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Free Site Survey</h6>
                                <p class="small text-muted mb-0">Precision measurements</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: var(--tesla-silver);">
                            <div class="bg-success p-2 rounded me-3">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">2-Year Warranty</h6>
                                <p class="small text-muted mb-0">On all installations</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Why Choose Our Services?</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Certified Aluminum Fabricators</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Premium Quality Materials</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> CNC Precision Cutting</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Professional Installation Team</li>
                        <li><i class="fa fa-check-circle text-primary me-2"></i> Compliance with Dubai Regulations</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4" style="color: var(--primary-dark);">Project Inquiry Form</h4>
                        <form id="agServiceForm">
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
                                        <option>Window Installation</option>
                                        <option>Glass Partitions</option>
                                        <option>Curtain Walls</option>
                                        <option>Shop Front</option>
                                        <option>Glass Repair</option>
                                        <option>Other Aluminum Work</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Project Type</label>
                                    <select class="form-select">
                                        <option value="">Select Type</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Retail</option>
                                        <option>Office</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Project Address *</label>
                                    <input type="text" class="form-control" placeholder="Full address in Dubai" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Project Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Describe your requirements, measurements if known, etc."></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="siteSurvey">
                                        <label class="form-check-label" for="siteSurvey">
                                            <span class="fw-bold text-primary">Request Free Site Survey</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold">
                                        <i class="fa fa-paper-plane me-2"></i> GET FREE QUOTATION
                                    </button>
                                    <p class="text-center small text-muted mt-2 mb-0">
                                        Our expert will contact you within 2 hours
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
            <h2 class="fw-bold mb-3" style="color: var(--primary-dark);">Frequently Asked Questions</h2>
            <p class="text-muted">Common questions about aluminum and glass works</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="agFAQ">
                    @php
                    $faqs = [
                        [
                            'q' => 'How long does aluminum window installation take?',
                            'a' => 'Standard window installation for a typical villa takes 2-3 days. Commercial projects vary based on size and complexity. We provide detailed timelines after site survey.'
                        ],
                        [
                            'q' => 'What is thermal break aluminum and why is it important?',
                            'a' => 'Thermal break aluminum has a insulating barrier between inner and outer aluminum sections, reducing heat transfer. It improves energy efficiency by up to 40% and reduces condensation.'
                        ],
                        [
                            'q' => 'Do you handle permit approvals in Dubai?',
                            'a' => 'Yes, we handle all necessary permit applications and approvals from Dubai Municipality and relevant authorities for commercial and large-scale residential projects.'
                        ],
                        [
                            'q' => 'What glass thickness do you recommend for different applications?',
                            'a' => 'We recommend: 6mm for internal partitions, 8-10mm for windows, 12mm for balcony glass, and laminated glass for safety applications. Final recommendation depends on wind load and building height.'
                        ],
                        [
                            'q' => 'Can you match existing aluminum profiles?',
                            'a' => 'Yes, we can match most existing aluminum profiles or provide compatible alternatives. We recommend bringing a sample or photos for exact matching.'
                        ],
                        [
                            'q' => 'What warranty do you provide on installations?',
                            'a' => 'We provide 2-year warranty on workmanship and installation. Aluminum profiles typically have 10-year manufacturer warranty, and glass has varying warranties based on type.'
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
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#agFAQ">
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
<section class="py-5" style="background: linear-gradient(135deg, var(--primary), #0d47a1);">
    <div class="container">
        <div class="text-center text-white">
            <h2 class="fw-bold mb-3">Ready for Professional Aluminum & Glass Works?</h2>
            <p class="mb-4 mx-auto" style="max-width: 700px; font-size: 1.1rem;">
                Contact us today for expert aluminum fabrication, glass installation, or emergency repairs in Dubai.
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
                <i class="fa fa-clock me-1"></i> Operating Hours: 24/7 | 
                <i class="fa fa-map-marker-alt ms-3 me-1"></i> Service Areas: All Dubai Emirates
            </p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Data for Aluminum & Glass
    const galleryData = [
        {
            id: 1,
            category: 'windows',
            title: 'Aluminum Windows - Luxury Villa',
            description: 'Thermal break aluminum windows installation in Palm Jumeirah villa',
            image: 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 2,
            category: 'glass-partitions',
            title: 'Office Glass Partitions',
            description: 'Frameless glass partitions for corporate office in DIFC',
            image: 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 3,
            category: 'curtain-walls',
            title: 'Commercial Curtain Wall',
            description: 'Structural glazing for commercial building in Business Bay',
            image: 'https://images.unsplash.com/photo-1487956382158-bb926046304a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 4,
            category: 'shop-fronts',
            title: 'Retail Shop Front',
            description: 'Custom aluminum and glass shop front for fashion boutique',
            image: 'https://images.unsplash.com/photo-1483721310020-03333e577cce?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 5,
            category: 'windows',
            title: 'Sliding Glass Doors',
            description: 'Large sliding glass doors for waterfront apartment',
            image: 'https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 6,
            category: 'glass-partitions',
            title: 'Conference Room Glass',
            description: 'Smart glass partitions for boardroom',
            image: 'https://images.unsplash.com/photo-1560448204-603b3fc33ddc?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 7,
            category: 'curtain-walls',
            title: 'High-Rise Curtain Wall',
            description: 'Unitized curtain wall system for tower in Downtown Dubai',
            image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 8,
            category: 'shop-fronts',
            title: 'Restaurant Front Glass',
            description: 'Full-height glass front for restaurant with aluminum framing',
            image: 'https://images.unsplash.com/photo-1559925393-8be0ec4767c8?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 9,
            category: 'windows',
            title: 'Bay Windows Installation',
            description: 'Custom aluminum bay windows for residential project',
            image: 'https://images.unsplash.com/photo-1572120360610-d971b9d7767c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        }
    ];

    // DOM Elements
    const galleryContainer = document.getElementById('agGallery');
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
    document.getElementById('agServiceForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you! Our aluminum & glass specialist will contact you within 2 hours for a free site survey.');
        this.reset();
    });
    
    // Site survey checkbox highlight
    document.getElementById('siteSurvey').addEventListener('change', function() {
        if(this.checked) {
            this.parentElement.style.backgroundColor = '#e3f2fd';
            this.parentElement.style.padding = '10px';
            this.parentElement.style.borderRadius = '5px';
        }
    });
});
</script>
@endsection