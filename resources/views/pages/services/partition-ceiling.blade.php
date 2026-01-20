@extends('layouts.app')

@section('title', 'Professional Gypsum Partition & Ceiling Work in Dubai | OneCall Technical Services')
@section('meta_description', 'Expert gypsum services in Dubai: false ceilings, partition walls, gypsum board installation, cornice work, wall panels, and decorative gypsum designs.')
@section('meta_keywords', 'gypsum work Dubai, false ceiling Dubai, partition walls Dubai, gypsum board installation Dubai, cornice work Dubai, gypsum ceiling Dubai, drywall installation Dubai')

@section('content')

<style>
    :root {
        --gypsum-white: #f5f5f5;
        --gypsum-gray: #757575;
        --gypsum-blue: #2196f3;
        --gypsum-orange: #ff9800;
        --gypsum-green: #4caf50;
        --gypsum-dark: #37474f;
    }

    /* Hero Section */
    .gypsum-hero {
        background: linear-gradient(rgba(55, 71, 79, 0.9), rgba(55, 71, 79, 0.95)),
                    url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 400px;
        position: relative;
    }

    .gypsum-hero-content {
        padding: 80px 0 100px;
    }

    /* HOW WE WORK Section Styles */
    .how-we-work-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #fafafa 0%, #eeeeee 100%);
        color: var(--gypsum-dark);
    }

    .work-process-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        border: 1px solid #e0e0e0;
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }

    .work-process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(33, 150, 243, 0.15);
        border-color: var(--gypsum-blue);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--gypsum-blue);
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
        border: 2px solid var(--gypsum-blue);
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
    .gypsum-gallery-section {
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
        color: var(--gypsum-blue);
        border-bottom-color: var(--gypsum-blue);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--gypsum-blue);
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
        background: linear-gradient(135deg, var(--gypsum-blue), #1565c0);
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
        box-shadow: 0 10px 25px rgba(33, 150, 243, 0.15);
        border-color: var(--gypsum-blue);
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

    /* Gypsum Service Cards */
    .gypsum-service-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
        position: relative;
    }

    .gypsum-service-card:hover {
        border-color: var(--gypsum-blue);
        box-shadow: 0 10px 25px rgba(33, 150, 243, 0.1);
        transform: translateY(-5px);
    }

    .gypsum-service-card.popular {
        border-color: var(--gypsum-orange);
    }

    .gypsum-service-card.premium {
        border-color: var(--gypsum-green);
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
        background: linear-gradient(135deg, var(--gypsum-blue), var(--gypsum-dark));
    }

    /* Gypsum Features */
    .gypsum-feature {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .gypsum-feature:hover {
        border-color: var(--gypsum-blue);
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
        background-color: var(--gypsum-blue);
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
        border-color: var(--gypsum-blue);
        box-shadow: 0 10px 30px rgba(33, 150, 243, 0.15);
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
        color: var(--gypsum-blue);
        line-height: 1;
    }

    /* Ceiling Types */
    .ceiling-type {
        background: white;
        border-radius: 10px;
        padding: 25px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .ceiling-type:hover {
        border-color: var(--gypsum-orange);
        box-shadow: 0 8px 20px rgba(255, 152, 0, 0.1);
    }

    .ceiling-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 15px;
        color: white;
        background: linear-gradient(135deg, var(--gypsum-orange), #ff5722);
    }

    /* Partition Types */
    .partition-type {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .partition-type:hover {
        border-color: var(--gypsum-green);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    .partition-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        margin: 0 auto 10px;
        color: white;
        background-color: var(--gypsum-green);
    }

    /* Emergency Banner */
    .emergency-banner {
        background: linear-gradient(90deg, var(--gypsum-orange), #ffb74d);
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

    /* Responsive */
    @media (max-width: 768px) {
        .gypsum-hero-content {
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
<section class="gypsum-hero">
    <div class="container">
        <div class="row align-items-center gypsum-hero-content">
            <div class="col-lg-8 text-white">
                <h1 class="display-5 fw-bold mb-3">Professional Gypsum Partition & Ceiling Work in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    Expert gypsum false ceilings, partition walls, decorative designs, and complete interior finishing solutions for residential and commercial spaces across Dubai.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4">
                        <i class="fa fa-ruler-combined me-2"></i> Free Site Survey
                    </a>
                    <a href="#booking" class="btn btn-outline-light btn-lg px-4">
                        <i class="fa fa-calendar me-2"></i> Get Quote
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
            <span class="badge mb-3 px-3 py-2" style="background-color: var(--gypsum-blue); font-size: 0.9rem;">
                <i class="fa fa-cogs me-1"></i> Our Gypsum Process
            </span>
            <h2 class="fw-bold mb-3">HOW WE WORK</h2>
            <p class="opacity-90 mx-auto" style="max-width: 700px;">
                Our professional 5-step gypsum installation process ensures precision, quality, and perfect finishing for your interior spaces
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3">Site Assessment</h4>
                    <p class="opacity-90">
                        Free site survey, measurements, and design consultation to understand your requirements and space constraints.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Free Survey</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3">Design & Planning</h4>
                    <p class="opacity-90">
                        3D design visualization, material selection, and detailed planning for optimal gypsum installation.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">3D Design</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3">Material Preparation</h4>
                    <p class="opacity-90">
                        Cutting gypsum boards to precise measurements, preparing metal frames, and organizing all required materials.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Precision Cutting</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3">Installation</h4>
                    <p class="opacity-90">
                        Professional installation of metal framework, gypsum boards, and integration of lighting/electrical elements.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Expert Installation</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3">Finishing & Painting</h4>
                    <p class="opacity-90">
                        Joint taping, sanding, priming, and final painting for seamless, professional-looking finishes.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Perfect Finishing</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--gypsum-blue), #1565c0); color: white; border-color: var(--gypsum-blue);">
                    <div class="step-number" style="background: white; color: var(--gypsum-blue);">✓</div>
                    <h4 class="fw-bold mb-3">Quality Check</h4>
                    <p>
                        Final inspection, cleaning, and handover with warranty documentation and maintenance guidance.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-white text-primary">Quality Assured</span>
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
                            <div class="stat-number">2,800+</div>
                            <div class="stat-label">Gypsum Projects</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">12+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Customer Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">7 Days</div>
                            <div class="stat-label">Project Completion</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gypsum-gallery-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--gypsum-dark);">Our Gypsum Work Gallery</h2>
            <p class="text-muted">Browse our professional gypsum ceiling and partition installations across Dubai</p>
        </div>

        <!-- Gallery Tabs -->
        <div class="d-flex justify-content-center gallery-tabs">
            <button class="gallery-tab active" data-category="all">All Projects</button>
            <button class="gallery-tab" data-category="ceiling">False Ceilings</button>
            <button class="gallery-tab" data-category="partition">Partition Walls</button>
            <button class="gallery-tab" data-category="decorative">Decorative Work</button>
            <button class="gallery-tab" data-category="commercial">Commercial</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="gypsumGallery">
            <!-- Gallery items will be dynamically loaded here -->
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="tel:+971500000000" class="btn btn-primary px-4">
                <i class="fa fa-images me-2"></i> View Gypsum Portfolio
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
            <span class="badge bg-primary mb-3 px-3 py-2" style="font-size: 0.9rem; background-color: var(--gypsum-blue) !important;">
                <i class="fa fa-grip-lines me-1"></i> Professional Gypsum Services
            </span>
            <h2 class="fw-bold mb-3" style="color: var(--gypsum-dark);">Complete Gypsum Solutions</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                From false ceilings to partition walls, we provide comprehensive gypsum work solutions for homes, offices, and commercial spaces in Dubai.
            </p>
        </div>

        <div class="row g-4">
            <!-- False Ceilings -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--gypsum-blue);">
                        <i class="fa fa-layer-group text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--gypsum-dark);">False Ceilings</h3>
                    <p class="text-muted mb-4">
                        Professional installation of gypsum false ceilings with integrated lighting, ventilation, and acoustic solutions.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> POP & Gypsum Board Ceilings</li>
                        <li><i class="fa fa-check-circle"></i> LED Light Integration</li>
                        <li><i class="fa fa-check-circle"></i> Acoustic Soundproofing</li>
                        <li><i class="fa fa-check-circle"></i> Fire-Resistant Options</li>
                    </ul>
                    <div class="mt-4">
                        <a href="tel:+971500000000" class="btn btn-primary w-100">
                            <i class="fa fa-ruler me-2"></i> Get Ceiling Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Partition Walls -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--gypsum-green);">
                        <i class="fa fa-border-all text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--gypsum-dark);">Partition Walls</h3>
                    <p class="text-muted mb-4">
                        Custom gypsum partition walls for offices, homes, and commercial spaces with various thickness and design options.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> Office Partitions</li>
                        <li><i class="fa fa-check-circle"></i> Soundproof Walls</li>
                        <li><i class="fa fa-check-circle"></i> Glass & Gypsum Combos</li>
                        <li><i class="fa fa-check-circle"></i> Movable Partitions</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#partition" class="btn btn-success w-100" style="background-color: var(--gypsum-green); border-color: var(--gypsum-green);">
                            <i class="fa fa-th-large me-2"></i> Partition Solutions
                        </a>
                    </div>
                </div>
            </div>

            <!-- Decorative Work -->
            <div class="col-md-6 col-lg-4">
                <div class="service-highlight-card">
                    <div class="service-icon-lg" style="background-color: var(--gypsum-orange);">
                        <i class="fa fa-gem text-white"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3" style="color: var(--gypsum-dark);">Decorative Gypsum</h3>
                    <p class="text-muted mb-4">
                        Custom decorative gypsum designs including arches, columns, wall panels, cornices, and 3D designs.
                    </p>
                    <ul class="service-feature-list list-unstyled">
                        <li><i class="fa fa-check-circle"></i> 3D Wall Panels</li>
                        <li><i class="fa fa-check-circle"></i> Decorative Cornices</li>
                        <li><i class="fa fa-check-circle"></i> Gypsum Arches & Columns</li>
                        <li><i class="fa fa-check-circle"></i> Feature Walls</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#decorative" class="btn btn-warning w-100 text-white" style="background-color: var(--gypsum-orange); border-color: var(--gypsum-orange);">
                            <i class="fa fa-paint-brush me-2"></i> Decorative Designs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gypsum Services -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--gypsum-dark);">Our Gypsum Services</h2>
            <p class="text-muted">Comprehensive gypsum work solutions for every need</p>
        </div>
        
        <div class="row g-4">
            @php
            $gypsumServices = [
                ['name' => 'Gypsum False Ceiling', 'features' => ['POP ceilings', 'Integrated lighting', 'Acoustic panels', 'Fire-resistant'], 'price' => 'AED 35/sqm', 'icon' => 'fa-layer-group', 'color' => '#2196f3', 'type' => 'popular'],
                ['name' => 'Office Partition Walls', 'features' => ['Soundproof walls', 'Glass partitions', 'Electrical outlets', 'Quick installation'], 'price' => 'AED 45/sqm', 'icon' => 'fa-border-all', 'color' => '#4caf50', 'type' => 'popular'],
                ['name' => 'Gypsum Cornice Work', 'features' => ['Decorative cornices', 'Crown molding', 'Custom designs', 'Perfect finishing'], 'price' => 'AED 25/meter', 'icon' => 'fa-grip-lines', 'color' => '#ff9800', 'type' => 'regular'],
                ['name' => '3D Gypsum Wall Panels', 'features' => ['Modern designs', 'Textured finishes', 'Feature walls', 'Custom patterns'], 'price' => 'AED 60/sqm', 'icon' => 'fa-cube', 'color' => '#9c27b0', 'type' => 'premium'],
                ['name' => 'Gypsum Repair & Maintenance', 'features' => ['Crack repair', 'Water damage', 'Re-painting', 'Restoration'], 'price' => 'AED 300+', 'icon' => 'fa-tools', 'color' => '#795548', 'type' => 'regular'],
                ['name' => 'Complete Room Partitioning', 'features' => ['Room division', 'Privacy walls', 'Doors included', 'Electrical work'], 'price' => 'AED 120/sqm', 'icon' => 'fa-door-closed', 'color' => '#607d8b', 'type' => 'regular'],
            ];
            @endphp
            
            @foreach($gypsumServices as $service)
            <div class="col-md-6 col-lg-4">
                <div class="gypsum-service-card @if(isset($service['type']) && $service['type'] == 'popular') popular @endif @if(isset($service['type']) && $service['type'] == 'premium') premium @endif">
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

<!-- Gypsum Features -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--gypsum-dark);">Gypsum Work Advantages</h3>
            <p class="text-muted">Why choose gypsum for your interior work</p>
        </div>
        
        <div class="row g-4">
            @php
            $gypsumFeatures = [
                ['name' => 'Fire Resistant', 'desc' => 'Gypsum boards are naturally fire-resistant', 'icon' => 'fa-fire', 'color' => '#f44336'],
                ['name' => 'Sound Proofing', 'desc' => 'Excellent acoustic insulation properties', 'icon' => 'fa-volume-mute', 'color' => '#2196f3'],
                ['name' => 'Easy Installation', 'desc' => 'Quick installation with minimal mess', 'icon' => 'fa-tools', 'color' => '#4caf50'],
                ['name' => 'Design Flexibility', 'desc' => 'Can be molded into any shape or design', 'icon' => 'fa-palette', 'color' => '#ff9800'],
                ['name' => 'Moisture Resistant', 'desc' => 'Special boards available for wet areas', 'icon' => 'fa-tint', 'color' => '#00bcd4'],
                ['name' => 'Lightweight', 'desc' => 'Easy to handle and reduces structural load', 'icon' => 'fa-weight', 'color' => '#9c27b0'],
            ];
            @endphp
            
            @foreach($gypsumFeatures as $feature)
            <div class="col-md-6 col-lg-4">
                <div class="gypsum-feature">
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

<!-- Ceiling Types -->
<section id="ceiling" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--gypsum-dark);">False Ceiling Types</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Choose the perfect ceiling type for your space</p>
        </div>
        
        <div class="row g-4">
            @php
            $ceilingTypes = [
                ['name' => 'POP Ceiling', 'features' => ['Smooth finish', 'Custom designs', 'Moldable', 'Traditional'], 'price' => 'AED 35-50/sqm', 'icon' => 'fa-grip-lines'],
                ['name' => 'Gypsum Board Ceiling', 'features' => ['Quick installation', 'Fire resistant', 'Lightweight', 'Modern'], 'price' => 'AED 30-45/sqm', 'icon' => 'fa-layer-group'],
                ['name' => 'Suspended Ceiling', 'features' => ['Access panels', 'Easy maintenance', 'Grid system', 'Commercial'], 'price' => 'AED 40-60/sqm', 'icon' => 'fa-th'],
                ['name' => 'Acoustic Ceiling', 'features' => ['Sound absorption', 'Noise reduction', 'Perforated panels', 'Offices'], 'price' => 'AED 50-70/sqm', 'icon' => 'fa-volume-mute'],
                ['name' => 'LED Integrated Ceiling', 'features' => ['Built-in lighting', 'Energy efficient', 'Modern look', 'Residential'], 'price' => 'AED 60-80/sqm', 'icon' => 'fa-lightbulb'],
                ['name' => '3D Ceiling Designs', 'features' => ['Architectural', 'Custom patterns', 'Luxury finish', 'Hotels'], 'price' => 'AED 80-120/sqm', 'icon' => 'fa-cube'],
            ];
            @endphp
            
            @foreach($ceilingTypes as $ceiling)
            <div class="col-md-6 col-lg-4">
                <div class="ceiling-type">
                    <div class="ceiling-icon">
                        <i class="fa {{ $ceiling['icon'] }}"></i>
                    </div>
                    <h4 class="fw-bold mb-3">{{ $ceiling['name'] }}</h4>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($ceiling['features'] as $feature)
                        <li class="py-1">
                            <i class="fa fa-check text-warning me-2"></i>
                            <span class="small">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-3">
                        <span class="fw-bold" style="color: var(--gypsum-dark);">{{ $ceiling['price'] }}</span>
                        <span class="text-muted small">installed price</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="tel:+971500000000" class="btn btn-warning btn-sm w-100">
                            <i class="fa fa-info-circle me-1"></i> Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Partition Types -->
<section id="partition" class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--gypsum-dark);">Partition Wall Types</h2>
            <p class="text-muted">Different partition solutions for various applications</p>
        </div>
        
        <div class="row g-3">
            @php
            $partitionTypes = [
                ['name' => 'Single Layer', 'thickness' => '50mm', 'use' => 'Basic divisions', 'sound' => '30dB'],
                ['name' => 'Double Layer', 'thickness' => '100mm', 'use' => 'Office partitions', 'sound' => '40dB'],
                ['name' => 'Soundproof', 'thickness' => '150mm', 'use' => 'Meeting rooms', 'sound' => '50dB'],
                ['name' => 'Fire Rated', 'thickness' => '75mm', 'use' => 'Commercial spaces', 'sound' => '35dB'],
                ['name' => 'Moisture Resistant', 'thickness' => '50mm', 'use' => 'Bathroom areas', 'sound' => '30dB'],
                ['name' => 'Glass & Gypsum', 'thickness' => '80mm', 'use' => 'Modern offices', 'sound' => '35dB'],
            ];
            @endphp
            
            @foreach($partitionTypes as $partition)
            <div class="col-md-6 col-lg-4">
                <div class="partition-type">
                    <div class="partition-icon" style="background-color: var(--gypsum-green);">
                        <i class="fa fa-border-all"></i>
                    </div>
                    <h5 class="fw-bold mb-2">{{ $partition['name'] }}</h5>
                    <div class="row text-center small">
                        <div class="col-4">
                            <div class="fw-bold">{{ $partition['thickness'] }}</div>
                            <div class="text-muted">Thickness</div>
                        </div>
                        <div class="col-4">
                            <div class="fw-bold">{{ $partition['sound'] }}</div>
                            <div class="text-muted">Sound Rating</div>
                        </div>
                        <div class="col-4">
                            <div class="fw-bold">{{ $partition['use'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pricing Packages -->
<section id="decorative" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--gypsum-dark);">Gypsum Work Packages</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Complete gypsum solutions for different spaces</p>
        </div>
        
        <div class="row g-4">
            @php
            $packages = [
                ['name' => 'Basic Ceiling Package', 'price' => 'AED 2,500', 'area' => '50 sqm Area', 'features' => ['Gypsum board ceiling', 'Standard cornices', 'Primer coating', 'Basic lighting points', '5-year warranty'], 'color' => '#2196f3'],
                ['name' => 'Office Partition Package', 'price' => 'AED 4,500', 'area' => '30 sqm Partitions', 'features' => ['Soundproof partitions', 'Glass sections', 'Electrical outlets', 'Doors included', 'Painting included', '7-year warranty'], 'color' => '#4caf50', 'popular' => true],
                ['name' => 'Complete Room Package', 'price' => 'AED 8,500', 'area' => 'Complete Room', 'features' => ['False ceiling', 'All walls partition', 'Electrical work', 'Painting & finishing', 'Doors & frames', '10-year warranty'], 'color' => '#ff9800'],
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
                        <i class="fa fa-grip-lines me-2"></i> GET THIS PACKAGE
                    </a>
                    <p class="text-center small text-muted mt-2 mb-0">
                        Free consultation • Professional installation
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Materials We Use -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--gypsum-dark);">Premium Gypsum Materials</h3>
            <p class="text-muted">We use only high-quality gypsum materials from top brands</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="brand-item">
                    <span style="font-weight: 600; color: #e53935;">Knauf</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="brand-item">
                    <span style="font-weight: 600; color: #1e88e5;">Gyproc</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="brand-item">
                    <span style="font-weight: 600; color: #43a047;">USG Boral</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="brand-item">
                    <span style="font-weight: 600; color: #ffb300;">National Gypsum</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="brand-item">
                    <span style="font-weight: 600; color: #d81b60;">Georgia-Pacific</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="brand-item">
                    <span style="font-weight: 600; color: #5e35b1;">CertainTeed</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="brand-item">
                    <span style="font-weight: 600; color: #00897b;">Lafarge</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="brand-item">
                    <span style="font-weight: 600; color: #3949ab;">Saint-Gobain</span>
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
                        <i class="fa fa-exclamation-triangle me-2"></i> Urgent Gypsum Repair
                    </h3>
                    <p class="mb-0" style="font-size: 1.1rem;">
                        <strong>Emergency Repair Service:</strong> Water-damaged ceilings, cracked walls, or urgent partition work? Our team responds within 4 hours across Dubai.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="tel:+971500000000" class="btn btn-light btn-lg px-4 py-3 fw-bold">
                        <i class="fa fa-phone-alt me-2"></i> URGENT REPAIR
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
                <h2 class="fw-bold mb-4" style="color: var(--gypsum-dark);">Free Gypsum Consultation</h2>
                <p class="text-muted mb-4">
                    Get a free site survey and detailed quote for your gypsum work. Our expert will visit your site and provide the best gypsum solution.
                </p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: rgba(33, 150, 243, 0.1);">
                            <div class="bg-primary p-2 rounded me-3">
                                <i class="fa fa-ruler-combined text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Free Site Survey</h6>
                                <p class="small text-muted mb-0">Precise measurements</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded" style="background-color: rgba(33, 150, 243, 0.1);">
                            <div class="bg-success p-2 rounded me-3">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">10-Year Warranty</h6>
                                <p class="small text-muted mb-0">On all installations</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Why Choose Our Gypsum Services?</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Certified Gypsum Installers</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Premium Quality Materials</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Perfect Finishing & Painting</li>
                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Clean Work & Minimal Disruption</li>
                        <li><i class="fa fa-check-circle text-primary me-2"></i> Compliance with Dubai Regulations</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4" style="color: var(--gypsum-dark);">Gypsum Work Inquiry Form</h4>
                        <form id="gypsumServiceForm">
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
                                        <option>False Ceiling Installation</option>
                                        <option>Partition Wall Installation</option>
                                        <option>Gypsum Cornice Work</option>
                                        <option>3D Gypsum Designs</option>
                                        <option>Gypsum Repair & Maintenance</option>
                                        <option>Complete Room Partitioning</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Property Type</label>
                                    <select class="form-select">
                                        <option value="">Select Type</option>
                                        <option>Residential - Villa</option>
                                        <option>Residential - Apartment</option>
                                        <option>Office</option>
                                        <option>Commercial Space</option>
                                        <option>Hotel/Resort</option>
                                        <option>Retail Store</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Property Address *</label>
                                    <input type="text" class="form-control" placeholder="Full address in Dubai" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Project Requirements</label>
                                    <textarea class="form-control" rows="3" placeholder="Describe your gypsum work needs, area size, design preferences, etc."></textarea>
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
                                        <i class="fa fa-grip-lines me-2"></i> GET FREE QUOTATION
                                    </button>
                                    <p class="text-center small text-muted mt-2 mb-0">
                                        Our gypsum expert will contact you within 2 hours
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
            <h2 class="fw-bold mb-3" style="color: var(--gypsum-dark);">Frequently Asked Questions</h2>
            <p class="text-muted">Common questions about gypsum work in Dubai</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="gypsumFAQ">
                    @php
                    $faqs = [
                        [
                            'q' => 'What is the difference between POP and gypsum board ceilings?',
                            'a' => 'POP (Plaster of Paris) ceilings are traditional, offer more design flexibility, and require skilled labor. Gypsum board ceilings are modern, faster to install, fire-resistant, and easier to maintain. We recommend gypsum boards for most applications due to their durability and cost-effectiveness.'
                        ],
                        [
                            'q' => 'How long does gypsum false ceiling installation take?',
                            'a' => 'A standard gypsum false ceiling for a 50 sqm room takes 3-4 days including framework, boarding, jointing, and painting. Larger commercial projects may take 1-2 weeks depending on complexity and area size.'
                        ],
                        [
                            'q' => 'Can gypsum partitions be soundproof?',
                            'a' => 'Yes, we install soundproof gypsum partitions with special acoustic insulation materials that can reduce noise transmission by up to 50dB. These are ideal for offices, meeting rooms, studios, and bedrooms.'
                        ],
                        [
                            'q' => 'Do you handle painting after gypsum installation?',
                            'a' => 'Yes, we provide complete finishing services including joint taping, sanding, priming, and painting. We can match any color scheme and finish (matte, satin, or glossy) as per your requirements.'
                        ],
                        [
                            'q' => 'What maintenance is required for gypsum ceilings?',
                            'a' => 'Gypsum ceilings require minimal maintenance. Regular dusting and occasional repainting every 5-7 years. Avoid water leakage and excessive moisture. We provide maintenance contracts for commercial properties.'
                        ],
                        [
                            'q' => 'Can you install lighting in gypsum ceilings?',
                            'a' => 'Yes, we specialize in integrated lighting solutions. We can install LED lights, spotlights, recessed lighting, and chandeliers within gypsum ceilings with proper electrical wiring and heat management.'
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
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#gypsumFAQ">
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
<section class="py-5" style="background: linear-gradient(135deg, var(--gypsum-dark), #1565c0);">
    <div class="container">
        <div class="text-center text-white">
            <h2 class="fw-bold mb-3">Transform Your Space with Professional Gypsum Work</h2>
            <p class="mb-4 mx-auto" style="max-width: 700px; font-size: 1.1rem;">
                Contact us today for expert gypsum ceilings, partitions, and decorative work in Dubai.
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
                <i class="fa fa-clock me-1"></i> Free Site Survey Available | 
                <i class="fa fa-award ms-3 me-1"></i> 10-Year Warranty on Installations
            </p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Data for Gypsum Work
    const galleryData = [
        {
            id: 1,
            category: 'ceiling',
            title: 'Gypsum False Ceiling - Luxury Villa',
            description: 'Modern gypsum ceiling with integrated LED lighting in Palm Jumeirah',
            image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 2,
            category: 'partition',
            title: 'Office Partition Walls - DIFC',
            description: 'Soundproof gypsum partitions for corporate office space',
            image: 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 3,
            category: 'decorative',
            title: '3D Gypsum Wall - Hotel Lobby',
            description: 'Custom 3D gypsum wall design for luxury hotel',
            image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 4,
            category: 'commercial',
            title: 'Commercial Ceiling - Shopping Mall',
            description: 'Large-scale gypsum ceiling installation in Dubai Mall',
            image: 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 5,
            category: 'ceiling',
            title: 'POP Ceiling Design - Apartment',
            description: 'Traditional POP ceiling with decorative cornices',
            image: 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 6,
            category: 'partition',
            title: 'Glass & Gypsum Partitions',
            description: 'Modern office partitions combining glass and gypsum',
            image: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 7,
            category: 'decorative',
            title: 'Gypsum Arches & Columns',
            description: 'Decorative gypsum arches for residential interior',
            image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 8,
            category: 'commercial',
            title: 'Restaurant Ceiling Design',
            description: 'Custom gypsum ceiling for fine dining restaurant',
            image: 'https://images.unsplash.com/photo-1483721310020-03333e577cce?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        },
        {
            id: 9,
            category: 'ceiling',
            title: 'Acoustic Ceiling - Conference Room',
            description: 'Sound-absorbing gypsum ceiling for meeting room',
            image: 'https://images.unsplash.com/photo-1572120360610-d971b9d7767c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        }
    ];

    // DOM Elements
    const galleryContainer = document.getElementById('gypsumGallery');
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
    document.getElementById('gypsumServiceForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you! Our gypsum expert will contact you within 2 hours for a free site survey.');
        this.reset();
    });
    
    // Free survey checkbox highlight
    document.getElementById('freeSurvey').addEventListener('change', function() {
        if(this.checked) {
            this.parentElement.style.backgroundColor = 'rgba(33, 150, 243, 0.1)';
            this.parentElement.style.padding = '10px';
            this.parentElement.style.borderRadius = '5px';
        }
    });
});
</script>
@endsection