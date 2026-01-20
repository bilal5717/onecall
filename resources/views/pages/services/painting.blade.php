@extends('layouts.app')

@section('title', 'Professional Painting Services in Dubai | OneCall Technical Services')
@section('meta_description', 'Expert painting services in Dubai: interior painting, exterior painting, wall texture, waterproofing, decorative painting, and complete paint solutions for homes & businesses.')
@section('meta_keywords', 'painting services Dubai, house painting Dubai, interior painting Dubai, exterior painting Dubai, wall texture Dubai, waterproofing Dubai, decorative painting Dubai')

@section('content')

<style>
    :root {
        --paint-red: #f44336;
        --paint-blue: #2196f3;
        --paint-green: #4caf50;
        --paint-yellow: #ffeb3b;
        --paint-purple: #9c27b0;
        --paint-dark: #263238;
    }

    /* Hero Section */
    .paint-hero {
        background: linear-gradient(rgba(244, 67, 54, 0.9), rgba(244, 67, 54, 0.95)),
                    url('https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 400px;
        position: relative;
    }

    .paint-hero-content {
        padding: 80px 0 100px;
    }

    /* HOW WE WORK Section Styles */
    .how-we-work-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%);
        color: var(--paint-dark);
    }

    .work-process-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid #ffcc80;
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }

    .work-process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(244, 67, 54, 0.15);
        border-color: var(--paint-red);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--paint-red);
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
        border: 2px solid var(--paint-red);
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
    .paint-gallery-section {
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
        color: var(--paint-red);
        border-bottom-color: var(--paint-red);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--paint-red);
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
        background: linear-gradient(135deg, var(--paint-red), #d32f2f);
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
        box-shadow: 0 10px 25px rgba(244, 67, 54, 0.15);
        border-color: var(--paint-red);
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

    /* Paint Service Cards */
    .paint-service-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
        position: relative;
    }

    .paint-service-card:hover {
        border-color: var(--paint-red);
        box-shadow: 0 10px 25px rgba(244, 67, 54, 0.1);
        transform: translateY(-5px);
    }

    .paint-service-card.popular {
        border-color: var(--paint-blue);
    }

    .paint-service-card.premium {
        border-color: var(--paint-purple);
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
        background: linear-gradient(135deg, var(--paint-red), var(--paint-dark));
    }

    /* Paint Features */
    .paint-feature {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .paint-feature:hover {
        border-color: var(--paint-red);
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
        background-color: var(--paint-red);
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
        border-color: var(--paint-red);
        box-shadow: 0 10px 30px rgba(244, 67, 54, 0.15);
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
        color: var(--paint-red);
        line-height: 1;
    }

    /* Paint Types */
    .paint-type {
        background: white;
        border-radius: 10px;
        padding: 25px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .paint-type:hover {
        border-color: var(--paint-blue);
        box-shadow: 0 8px 20px rgba(33, 150, 243, 0.1);
    }

    .paint-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 15px;
        color: white;
        background: linear-gradient(135deg, var(--paint-blue), #0d47a1);
    }

    /* Texture Types */
    .texture-type {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .texture-type:hover {
        border-color: var(--paint-yellow);
        box-shadow: 0 5px 15px rgba(255, 235, 59, 0.1);
        transform: translateY(-3px);
    }

    .texture-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        margin: 0 auto 10px;
        color: white;
        background-color: var(--paint-yellow);
        color: #000;
    }

    /* Paint Brands */
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
        border-color: var(--paint-red);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    /* Emergency Banner */
    .emergency-banner {
        background: linear-gradient(90deg, var(--paint-red), #ef5350);
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

    /* Color Palette */
    .color-palette {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 10px;
        margin: 20px 0;
    }

    .color-item {
        height: 40px;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    .color-item:hover {
        transform: scale(1.1);
    }

    /* Lightbox */
    .gallery-lightbox .modal-content {
        background: transparent;
        border: none;
    }

    .gallery-lightbox .modal-body {
        padding: 0;
        position: relative;
    }

    .gallery-lightbox .btn-close {
        z-index: 10;
    }

    .lightbox-nav {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
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
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 15px;
        text-align: center;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .paint-hero-content {
            padding: 60px 0 80px;
        }
        
        .service-highlight-card {
            padding: 20px;
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
        
        .color-palette {
            grid-template-columns: repeat(4, 1fr);
        }
        
        .lightbox-nav {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
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
        
        .color-palette {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .brand-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .lightbox-nav {
            width: 35px;
            height: 35px;
            font-size: 1rem;
        }
        
        .lightbox-nav.prev {
            left: 10px;
        }
        
        .lightbox-nav.next {
            right: 10px;
        }
    }
</style>

<!-- Hero Section -->
<section class="paint-hero">
    <div class="container">
        <div class="row align-items-center paint-hero-content">
            <div class="col-lg-8 text-white">
                <h1 class="display-5 fw-bold mb-3">Professional Painting Services in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    Expert interior & exterior painting, wall texture, waterproofing, and decorative painting solutions for homes, offices, and commercial spaces across Dubai.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4">
                        <i class="fa fa-paint-roller me-2"></i> Free Color Consultation
                    </a>
                    <a href="#booking" class="btn btn-outline-light btn-lg px-4">
                        <i class="fa fa-calendar me-2"></i> Get Painting Quote
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
            <span class="badge mb-3 px-3 py-2" style="background-color: var(--paint-red); font-size: 0.9rem;">
                <i class="fa fa-cogs me-1"></i> Our Painting Process
            </span>
            <h2 class="fw-bold mb-3">HOW WE WORK</h2>
            <p class="opacity-90 mx-auto" style="max-width: 700px;">
                Our professional 5-step painting process ensures perfect finishes, durability, and complete satisfaction for every project
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3">Surface Preparation</h4>
                    <p class="opacity-90">
                        Thorough cleaning, sanding, patching, and priming to ensure perfect paint adhesion and smooth finish.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Perfect Preparation</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3">Color Consultation</h4>
                    <p class="opacity-90">
                        Professional color selection, lighting analysis, and 3D visualization to choose the perfect colors for your space.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Color Expert</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3">Material Selection</h4>
                    <p class="opacity-90">
                        Choosing premium quality paints, primers, and tools based on surface type and environmental conditions.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Premium Materials</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3">Professional Painting</h4>
                    <p class="opacity-90">
                        Expert application using proper techniques, masking protection, and multiple coats for flawless results.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Expert Application</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3">Final Inspection</h4>
                    <p class="opacity-90">
                        Quality check, touch-ups, cleaning, and protection application for long-lasting beautiful finishes.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Quality Assured</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--paint-red), #d32f2f); color: white; border-color: var(--paint-red);">
                    <div class="step-number" style="background: white; color: var(--paint-red);">✓</div>
                    <h4 class="fw-bold mb-3">Project Completion</h4>
                    <p>
                        Cleanup, furniture replacement, warranty documentation, and after-service maintenance guidance.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-white text-danger">100% Satisfaction</span>
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
                            <div class="stat-number">3,200+</div>
                            <div class="stat-label">Painting Projects</div>
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
                            <div class="stat-number">99%</div>
                            <div class="stat-label">Client Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">5 Days</div>
                            <div class="stat-label">Average Project Time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="paint-gallery-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--paint-dark);">Our Painting Projects Gallery</h2>
            <p class="text-muted">Browse our professional painting work across Dubai</p>
        </div>

        <!-- Gallery Tabs -->
        <div class="d-flex justify-content-center gallery-tabs">
            <button class="gallery-tab active" data-category="all">All Projects</button>
            <button class="gallery-tab" data-category="interior">Interior Painting</button>
            <button class="gallery-tab" data-category="exterior">Exterior Painting</button>
            <button class="gallery-tab" data-category="texture">Wall Texture</button>
            <button class="gallery-tab" data-category="commercial">Commercial</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="paintGallery">
            <!-- Gallery items will be dynamically loaded here -->
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="tel:+971500000000" class="btn btn-danger px-4">
                <i class="fa fa-images me-2"></i> View Painting Portfolio
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
            <span class="badge bg-danger mb-3 px-3 py-2" style="font-size: 0.9rem;">
                <i class="fa fa-paint-roller me-1"></i> Professional Painting Services
            </span>
            <h2 class="fw-bold mb-3" style="color: var(--paint-dark);">Complete Painting Solutions</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                From interior walls to exterior facades, we provide comprehensive painting services for residential and commercial properties in Dubai.
            </p>
        </div>

        <div class="row g-4">
            <!-- Interior Painting -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--paint-red);">
                        <i class="fa fa-home text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--paint-dark);">Interior Painting</h3>
                    <p class="text-muted mb-4">
                        Professional interior painting for walls, ceilings, doors, windows, and trim with premium quality paints.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Wall & Ceiling Painting</li>
                        <li><i class="fa fa-check-circle"></i> Doors & Windows Painting</li>
                        <li><i class="fa fa-check-circle"></i> Trim & Molding Work</li>
                        <li><i class="fa fa-check-circle"></i> Color Consultation</li>
                    </ul>
                    <div class="mt-4">
                        <a href="tel:+971500000000" class="btn btn-danger w-100">
                            <i class="fa fa-paint-brush me-2"></i> Interior Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Exterior Painting -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--paint-blue);">
                        <i class="fa fa-building text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--paint-dark);">Exterior Painting</h3>
                    <p class="text-muted mb-4">
                        Weather-resistant exterior painting for villas, buildings, and facades with protection against Dubai's climate.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Villa Exterior Painting</li>
                        <li><i class="fa fa-check-circle"></i> Building Facade Painting</li>
                        <li><i class="fa fa-check-circle"></i> Weatherproof Coatings</li>
                        <li><i class="fa fa-check-circle"></i> UV Protection</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#exterior" class="btn btn-primary w-100">
                            <i class="fa fa-sun me-2"></i> Exterior Painting
                        </a>
                    </div>
                </div>
            </div>

            <!-- Wall Texture -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--paint-yellow); color: #000;">
                        <i class="fa fa-text-height"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--paint-dark);">Wall Texture</h3>
                    <p class="text-muted mb-4">
                        Custom wall texture designs including popcorn, orange peel, knockdown, and Venetian plaster finishes.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Popcorn Texture</li>
                        <li><i class="fa fa-check-circle"></i> Orange Peel Texture</li>
                        <li><i class="fa fa-check-circle"></i> Venetian Plaster</li>
                        <li><i class="fa fa-check-circle"></i> Custom Designs</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#texture" class="btn btn-warning w-100 text-dark">
                            <i class="fa fa-palette me-2"></i> Texture Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Paint Services -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--paint-dark);">Our Painting Services</h2>
            <p class="text-muted">Comprehensive painting solutions for every surface and need</p>
        </div>
        
        <div class="row g-4">
            @php
            $paintServices = [
                ['name' => 'Complete Villa Painting', 'features' => ['Interior & exterior', 'Premium paints', 'Color consultation', '5-year warranty'], 'price' => 'AED 8,500+', 'icon' => 'fa-home', 'color' => '#f44336', 'type' => 'popular'],
                ['name' => 'Office Painting', 'features' => ['Commercial grade', 'Quick drying', 'Minimal disruption', 'Weekend work'], 'price' => 'AED 6,500+', 'icon' => 'fa-building', 'color' => '#2196f3', 'type' => 'popular'],
                ['name' => 'Waterproofing Services', 'features' => ['Bathroom waterproofing', 'Terrace coating', 'Basement protection', '10-year guarantee'], 'price' => 'AED 3,500+', 'icon' => 'fa-tint', 'color' => '#4caf50', 'type' => 'regular'],
                ['name' => 'Decorative Painting', 'features' => ['Feature walls', 'Murals & art', 'Faux finishes', 'Custom designs'], 'price' => 'AED 5,000+', 'icon' => 'fa-palette', 'color' => '#9c27b0', 'type' => 'premium'],
                ['name' => 'Paint Repair & Touch-up', 'features' => ['Crack repair', 'Water damage', 'Color matching', 'Quick service'], 'price' => 'AED 500+', 'icon' => 'fa-tools', 'color' => '#ff9800', 'type' => 'regular'],
                ['name' => 'Epoxy Floor Coating', 'features' => ['Garage floors', 'Industrial floors', 'Chemical resistant', 'High durability'], 'price' => 'AED 4,500+', 'icon' => 'fa-th-large', 'color' => '#607d8b', 'type' => 'regular'],
            ];
            @endphp
            
            @foreach($paintServices as $service)
            <div class="col-md-6 col-lg-4">
                <div class="paint-service-card @if(isset($service['type']) && $service['type'] == 'popular') popular @endif @if(isset($service['type']) && $service['type'] == 'premium') premium @endif">
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
                            <i class="fa fa-phone me-1"></i> Get Quote
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Paint Features -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--paint-dark);">Why Choose Our Painting Services</h3>
            <p class="text-muted">Premium quality and professional expertise for perfect results</p>
        </div>
        
        <div class="row g-4">
            @php
            $paintFeatures = [
                ['name' => 'Premium Quality Paints', 'desc' => 'We use only top-grade paints from leading brands', 'icon' => 'fa-award', 'color' => '#f44336'],
                ['name' => 'Color Consultation', 'desc' => 'Expert advice on color schemes and combinations', 'icon' => 'fa-palette', 'color' => '#2196f3'],
                ['name' => 'Surface Preparation', 'desc' => 'Thorough cleaning, sanding, and priming', 'icon' => 'fa-broom', 'color' => '#4caf50'],
                ['name' => 'Clean Work', 'desc' => 'Minimal mess with proper masking and protection', 'icon' => 'fa-shield-alt', 'color' => '#ff9800'],
                ['name' => 'Warranty Protection', 'desc' => '5-10 year warranty on all painting work', 'icon' => 'fa-file-contract', 'color' => '#9c27b0'],
                ['name' => 'Quick Completion', 'desc' => 'Efficient work with minimal disruption', 'icon' => 'fa-clock', 'color' => '#607d8b'],
            ];
            @endphp
            
            @foreach($paintFeatures as $feature)
            <div class="col-md-6 col-lg-4">
                <div class="paint-feature">
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

<!-- Paint Types Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--paint-dark);">Paint Types We Use</h3>
            <p class="text-muted">High-quality paints suitable for Dubai's climate and your specific needs</p>
        </div>
        
        <div class="row g-4">
            @php
            $paintTypes = [
                ['name' => 'Emulsion Paint', 'desc' => 'Water-based paint for interior walls with easy cleaning', 'icon' => 'fa-droplet', 'color' => '#f44336'],
                ['name' => 'Oil-Based Paint', 'desc' => 'Durable finish for trim, doors, and high-traffic areas', 'icon' => 'fa-oil-can', 'color' => '#2196f3'],
                ['name' => 'Weatherproof Paint', 'desc' => 'Exterior paint resistant to sun, rain, and humidity', 'icon' => 'fa-sun', 'color' => '#4caf50'],
                ['name' => 'Anti-Mold Paint', 'desc' => 'Special paint for bathrooms and humid areas', 'icon' => 'fa-bacteria', 'color' => '#ff9800'],
                ['name' => 'Eco-Friendly Paint', 'desc' => 'Low VOC paints for healthier indoor air', 'icon' => 'fa-leaf', 'color' => '#9c27b0'],
                ['name' => 'Heat Reflective', 'desc' => 'Energy-saving paint that reflects sunlight', 'icon' => 'fa-temperature-high', 'color' => '#607d8b'],
            ];
            @endphp
            
            @foreach($paintTypes as $type)
            <div class="col-md-6 col-lg-4">
                <div class="paint-type">
                    <div class="paint-icon" style="background: linear-gradient(135deg, {{ $type['color'] }}, {{ $type['color'] }}80);">
                        <i class="fa {{ $type['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-2">{{ $type['name'] }}</h5>
                    <p class="small text-muted mb-0">{{ $type['desc'] }}</p>
                    <div class="mt-3">
                        <span class="badge bg-light text-dark small">Best for {{ $type['name'] == 'Emulsion Paint' ? 'Interior Walls' : ($type['name'] == 'Weatherproof Paint' ? 'Exterior' : 'Special Areas') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Texture Types Section -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--paint-dark);">Wall Texture Options</h3>
            <p class="text-muted">Various texture finishes to enhance your walls' appearance</p>
        </div>
        
        <div class="row g-4">
            @php
            $textureTypes = [
                ['name' => 'Popcorn Texture', 'desc' => 'Classic rough texture for ceilings and walls', 'icon' => 'fa-cloud'],
                ['name' => 'Orange Peel', 'desc' => 'Subtle texture resembling orange skin', 'icon' => 'fa-circle'],
                ['name' => 'Knockdown', 'desc' => 'Smooth flattened texture pattern', 'icon' => 'fa-layer-group'],
                ['name' => 'Venetian Plaster', 'desc' => 'Luxurious polished plaster finish', 'icon' => 'fa-gem'],
                ['name' => 'Sand Texture', 'desc' => 'Gritty finish with sand particles', 'icon' => 'fa-mountain'],
                ['name' => 'Stucco Finish', 'desc' => 'Mediterranean-style rough plaster', 'icon' => 'fa-hill-rockslide'],
                ['name' => 'Smooth Finish', 'desc' => 'Perfectly smooth painted surface', 'icon' => 'fa-splotch'],
                ['name' => 'Custom Designs', 'desc' => 'Patterns, murals, and special effects', 'icon' => 'fa-paintbrush'],
            ];
            @endphp
            
            @foreach($textureTypes as $texture)
            <div class="col-md-6 col-lg-3">
                <div class="texture-type">
                    <div class="texture-icon">
                        <i class="fa {{ $texture['icon'] }}"></i>
                    </div>
                    <h6 class="fw-bold mb-2">{{ $texture['name'] }}</h6>
                    <p class="small text-muted mb-0">{{ $texture['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Paint Brands -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--paint-dark);">Trusted Paint Brands</h3>
            <p class="text-muted">We use premium quality paints from leading international brands</p>
        </div>
        
        <div class="brand-grid">
            @php
            $paintBrands = [
                'Jotun', 'National Paints', 'Berger Paints', 'AkzoNobel', 'Dulux',
                'Sikkens', 'Caparol', 'Al Gurg Paints', 'Asian Paints', 'RPM',
                'Sherwin-Williams', 'Nippon Paint'
            ];
            @endphp
            
            @foreach($paintBrands as $brand)
            <div class="brand-item">
                <span class="fw-bold">{{ $brand }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Color Palette -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--paint-dark);">Popular Color Palettes</h3>
            <p class="text-muted">Choose from our trending color combinations for Dubai homes</p>
        </div>
        
        <div class="row g-4">
            @php
            $colorPalettes = [
                ['name' => 'Modern Neutral', 'colors' => ['#F5F5F5', '#E0E0E0', '#9E9E9E', '#616161', '#212121']],
                ['name' => 'Desert Sunrise', 'colors' => ['#FFEBEE', '#FFCDD2', '#E57373', '#F44336', '#C62828']],
                ['name' => 'Ocean Breeze', 'colors' => ['#E3F2FD', '#BBDEFB', '#64B5F6', '#2196F3', '#0D47A1']],
                ['name' => 'Luxury Gold', 'colors' => ['#FFFDE7', '#FFF9C4', '#FFEB3B', '#FBC02D', '#F57F17']],
                ['name' => 'Earthy Tones', 'colors' => ['#EFEBE9', '#D7CCC8', '#A1887F', '#795548', '#3E2723']],
                ['name' => 'Royal Purple', 'colors' => ['#F3E5F5', '#E1BEE7', '#BA68C8', '#9C27B0', '#4A148C']],
            ];
            @endphp
            
            @foreach($colorPalettes as $palette)
            <div class="col-md-6 col-lg-4">
                <div class="paint-feature">
                    <h5 class="fw-bold mb-3">{{ $palette['name'] }}</h5>
                    <div class="color-palette">
                        @foreach($palette['colors'] as $color)
                        <div class="color-item" style="background-color: {{ $color }};" 
                             title="HEX: {{ $color }}"></div>
                        @endforeach
                    </div>
                    <p class="small text-muted mt-3 mb-0">
                        Perfect for {{ $palette['name'] == 'Modern Neutral' ? 'contemporary living rooms' : 
                                      ($palette['name'] == 'Desert Sunrise' ? 'warm bedrooms' : 
                                      ($palette['name'] == 'Ocean Breeze' ? 'calm bathrooms' : 
                                      ($palette['name'] == 'Luxury Gold' ? 'accent walls' : 
                                      ($palette['name'] == 'Earthy Tones' ? 'dining areas' : 'feature walls')))) }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--paint-dark);">Transparent Pricing</h2>
            <p class="text-muted">Clear pricing with no hidden costs</p>
        </div>
        
        <div class="row g-4">
            @php
            $pricingPlans = [
                ['name' => 'Basic Interior', 'price' => '12', 'unit' => 'per sq.ft.', 'features' => ['Surface cleaning', '1 coat primer', '2 coats paint', 'Basic color choices', '1-year warranty'], 'color' => '#4caf50'],
                ['name' => 'Standard Package', 'price' => '18', 'unit' => 'per sq.ft.', 'features' => ['Surface preparation', '2 coats primer', '3 coats paint', 'Color consultation', '3-year warranty', 'Furniture protection'], 'color' => '#2196f3', 'popular' => true],
                ['name' => 'Premium Complete', 'price' => '25', 'unit' => 'per sq.ft.', 'features' => ['Full surface repair', 'Premium paints', 'Unlimited colors', '5-year warranty', 'Complete cleanup', 'Touch-up service'], 'color' => '#f44336'],
            ];
            @endphp
            
            @foreach($pricingPlans as $plan)
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card @if(isset($plan['popular']) && $plan['popular']) popular @endif">
                    <div class="pricing-header">
                        <h4 class="fw-bold mb-2">{{ $plan['name'] }}</h4>
                        <div class="price-tag" style="color: {{ $plan['color'] }};">
                            AED {{ $plan['price'] }}
                            <small class="text-muted fw-normal">/{{ $plan['unit'] }}</small>
                        </div>
                        <p class="small text-muted mb-0">Minimum 500 sq.ft.</p>
                    </div>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($plan['features'] as $feature)
                        <li class="py-2">
                            <i class="fa fa-check-circle me-2" style="color: {{ $plan['color'] }};"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-4">
                        <a href="tel:+971500000000" class="btn w-100" 
                           style="background-color: {{ $plan['color'] }}; color: white; border-color: {{ $plan['color'] }};">
                            <i class="fa fa-calculator me-2"></i> Calculate Cost
                        </a>
                    </div>
                    
                    @if(isset($plan['popular']) && $plan['popular'])
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-danger">Most Popular</span>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <p class="text-muted">
                <i class="fa fa-info-circle me-1"></i> All prices include labor, materials, and VAT. 
                Free onsite estimation available.
            </p>
        </div>
    </div>
</section>

<!-- Emergency Banner -->
<section class="py-5">
    <div class="container">
        <div class="emergency-banner">
            <div class="row align-items-center">
                <div class="col-lg-8 p-5">
                    <h3 class="fw-bold mb-3 text-white">Need Emergency Painting?</h3>
                    <p class="text-white mb-4">
                        Water damage, peeling paint, or urgent commercial painting needs? 
                        We offer 24/7 emergency painting services across Dubai.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="tel:+971500000000" class="btn btn-light px-4">
                            <i class="fa fa-phone me-2"></i> Call Now: +971 50 000 0000
                        </a>
                        <a href="https://wa.me/971500000000" class="btn btn-success px-4">
                            <i class="fab fa-whatsapp me-2"></i> WhatsApp
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="p-4 text-center">
                        <i class="fa fa-exclamation-triangle text-white" style="font-size: 6rem; opacity: 0.3;"></i>
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
            <h3 class="fw-bold mb-3" style="color: var(--paint-dark);">Frequently Asked Questions</h3>
            <p class="text-muted">Get answers to common painting questions</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="paintFAQ">
                    @php
                    $faqs = [
                        [
                            'question' => 'How long does a typical painting project take?',
                            'answer' => 'A standard 3-bedroom villa interior takes 3-5 days. Exterior painting may take 5-7 days depending on weather conditions. We work efficiently to minimize disruption.'
                        ],
                        [
                            'question' => 'Do I need to move furniture before painting?',
                            'answer' => 'No, our team will move and cover all furniture with protective sheets. We recommend removing small personal items, but we handle all major furniture movement.'
                        ],
                        [
                            'question' => 'What paint brands do you use?',
                            'answer' => 'We use premium brands like Jotun, National Paints, Berger, and Dulux. We select paint based on your specific needs, surface type, and Dubai\'s climate conditions.'
                        ],
                        [
                            'question' => 'Is there a warranty on your painting work?',
                            'answer' => 'Yes, we offer 5-year warranty on interior painting and 3-year warranty on exterior work. Warranty covers peeling, cracking, and color fading under normal conditions.'
                        ],
                        [
                            'question' => 'How do you handle paint fumes and odors?',
                            'answer' => 'We use low-VOC and odorless paints where possible. We ensure proper ventilation and can provide air purifiers if needed. Most paints are odor-free within 24 hours.'
                        ],
                        [
                            'question' => 'Can you match existing paint colors?',
                            'answer' => 'Yes, we have advanced color matching technology to perfectly match any existing paint color for touch-ups or extensions.'
                        ],
                    ];
                    @endphp
                    
                    @foreach($faqs as $index => $faq)
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#faq{{ $index }}" aria-expanded="false">
                                {{ $faq['question'] }}
                            </button>
                        </h2>
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#paintFAQ">
                            <div class="accordion-body">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section id="booking" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bold mb-3" style="color: var(--paint-dark);">Get Your Free Painting Quote</h2>
                <p class="text-muted mb-4">
                    Fill out the form and our painting expert will contact you within 30 minutes with a detailed estimate.
                </p>
                
                <div class="row g-3">
                    <div class="col-12">
                        <div class="paint-feature">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fa fa-calendar-check"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Free Color Consultation</h6>
                                    <p class="small text-muted mb-0">Expert advice on color selection</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="paint-feature">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3" style="background-color: var(--paint-green);">
                                    <i class="fa fa-ruler-combined"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Free Measurement</h6>
                                    <p class="small text-muted mb-0">Accurate onsite measurements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="paint-feature">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon me-3" style="background-color: var(--paint-blue);">
                                    <i class="fa fa-file-invoice-dollar"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Detailed Quotation</h6>
                                    <p class="small text-muted mb-0">Itemized cost breakdown</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <form id="paintingQuoteForm">
                            <div class="mb-3">
                                <label class="form-label">Service Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select Painting Service</option>
                                    <option>Interior Painting</option>
                                    <option>Exterior Painting</option>
                                    <option>Wall Texture</option>
                                    <option>Waterproofing</option>
                                    <option>Decorative Painting</option>
                                    <option>Complete Package</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Property Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select Property Type</option>
                                    <option>Villa</option>
                                    <option>Apartment</option>
                                    <option>Office</option>
                                    <option>Commercial Building</option>
                                    <option>Warehouse</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Approximate Area (sq.ft.) *</label>
                                <input type="number" class="form-control" placeholder="e.g., 1500" min="100" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Preferred Paint Brand</label>
                                <select class="form-select">
                                    <option value="">Any premium brand</option>
                                    <option>Jotun</option>
                                    <option>National Paints</option>
                                    <option>Berger</option>
                                    <option>Dulux</option>
                                    <option>No preference</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Your Name *</label>
                                <input type="text" class="form-control" required>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" required>
                            </div>
                            
                            <button type="submit" class="btn btn-danger w-100 py-3">
                                <i class="fa fa-paint-roller me-2"></i> Get Free Painting Quote
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Data Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryData = {
        all: [
            { img: 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'interior', caption: 'Modern Villa Interior Painting - Arabian Ranches' },
            { img: 'https://images.unsplash.com/photo-1560185127-6ed189bf02f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'exterior', caption: 'Villa Exterior Painting - Palm Jumeirah' },
            { img: 'https://images.unsplash.com/photo-1595429035839-c99c298ffdde?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'texture', caption: 'Venetian Plaster Texture Wall' },
            { img: 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'commercial', caption: 'Office Space Painting - Business Bay' },
            { img: 'https://images.unsplash.com/photo-1519710164239-da123dc03ef4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'interior', caption: 'Luxury Apartment Painting - Downtown Dubai' },
            { img: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'exterior', caption: 'Building Facade Painting - JLT' },
            { img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'texture', caption: 'Custom Wall Texture Design' },
            { img: 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'commercial', caption: 'Hotel Lobby Painting - Dubai Marina' }
        ],
        interior: [
            { img: 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Living Room Painting - Modern Colors' },
            { img: 'https://images.unsplash.com/photo-1519710164239-da123dc03ef4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Bedroom Painting - Calming Tones' },
            { img: 'https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Kitchen Cabinets Painting' }
        ],
        exterior: [
            { img: 'https://images.unsplash.com/photo-1560185127-6ed189bf02f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Villa Exterior - Weatherproof Coating' },
            { img: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Building Exterior - UV Protection' }
        ],
        texture: [
            { img: 'https://images.unsplash.com/photo-1595429035839-c99c298ffdde?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Venetian Plaster Finish' },
            { img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Custom Texture Patterns' }
        ],
        commercial: [
            { img: 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Office Space - Professional Finish' },
            { img: 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Commercial Building Lobby' }
        ]
    };

    const galleryGrid = document.getElementById('paintGallery');
    const tabs = document.querySelectorAll('.gallery-tab');
    const lightbox = document.getElementById('galleryLightbox');
    const lightboxItems = document.getElementById('lightboxItems');
    const lightboxCaption = document.getElementById('lightboxCaption');

    function loadGallery(category) {
        galleryGrid.innerHTML = '';
        const items = category === 'all' ? [...galleryData.interior, ...galleryData.exterior, 
                                          ...galleryData.texture, ...galleryData.commercial] : galleryData[category];
        
        items.forEach((item, index) => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            galleryItem.setAttribute('data-index', index);
            galleryItem.setAttribute('data-category', category);
            
            galleryItem.innerHTML = `
                <img src="${item.img}" alt="${item.caption}" loading="lazy">
                <div class="gallery-caption">
                    ${item.caption}
                </div>
                <div class="gallery-overlay">
                    <button class="btn btn-sm btn-light view-btn" data-index="${index}">
                        <i class="fa fa-expand me-1"></i> View
                    </button>
                </div>
            `;
            
            galleryGrid.appendChild(galleryItem);
            
            // Add click event for lightbox
            galleryItem.querySelector('.view-btn').addEventListener('click', function() {
                openLightbox(category, index);
            });
        });
    }

    function openLightbox(category, index) {
        const items = category === 'all' ? [...galleryData.interior, ...galleryData.exterior, 
                                          ...galleryData.texture, ...galleryData.commercial] : galleryData[category];
        
        lightboxItems.innerHTML = '';
        items.forEach((item, i) => {
            const carouselItem = document.createElement('div');
            carouselItem.className = `carousel-item ${i === index ? 'active' : ''}`;
            carouselItem.innerHTML = `
                <img src="${item.img}" class="d-block w-100" alt="${item.caption}">
            `;
            lightboxItems.appendChild(carouselItem);
            
            if (i === index) {
                lightboxCaption.innerHTML = item.caption;
            }
        });
        
        const lightboxModal = new bootstrap.Modal(lightbox);
        lightboxModal.show();
    }

    // Tab click events
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            loadGallery(this.dataset.category);
        });
    });

    // Initialize gallery
    loadGallery('all');

    // Form submission
    document.getElementById('paintingQuoteForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your painting inquiry! Our expert will contact you within 30 minutes.');
        this.reset();
    });
});
</script>

@endsection