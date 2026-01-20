@extends('layouts.app')

@section('title', 'Professional Tiling Services in Dubai | Floor & Wall Tiling Installation & Repair')
@section('meta_description', 'Expert tiling services in Dubai: floor tiling, wall tiling, bathroom tiling, kitchen tiling, swimming pool tiling, marble & ceramic tile installation, tile repair & grouting.')
@section('meta_keywords', 'tiling services Dubai, floor tiling Dubai, wall tiling Dubai, bathroom tiling Dubai, kitchen tiling Dubai, marble tiling Dubai, ceramic tiles Dubai, tile repair Dubai')

@section('content')

<style>
    :root {
        --tile-blue: #cc0000;
        --tile-gray: #000000;
        --tile-beige: #5c5d61;
        --tile-green: #d0d1d2;
        --tile-brown: #3e6ae1;
        --tile-gold: #2bcd72;
        --tile-red: #e76f51;
        --tile-dark: #171a20;
    }

    /* Hero Section */
    .tiling-hero {
        background: linear-gradient(#cc0000b2, #00000093),
                    url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 500px;
        position: relative;
    }

    .tiling-hero::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100px;
        background: linear-gradient(to bottom, transparent, var(--tile-dark));
    }

    .tiling-hero-content {
        padding: 100px 0 120px;
        position: relative;
        z-index: 1;
    }

    .tiling-badge {
        background: var(--tile-blue);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }

    /* HOW WE WORK Section */
    .how-we-work-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        color: var(--tile-dark);
    }

    .work-process-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        border: 2px solid var(--tile-beige);
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .work-process-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: var(--tile-blue);
    }

    .work-process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 119, 182, 0.15);
        border-color: var(--tile-blue);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--tile-blue);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.5rem;
        margin: 0 auto 20px;
        position: relative;
        border: 3px solid rgba(0, 119, 182, 0.2);
    }

    .step-number::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border: 2px solid var(--tile-blue);
        border-radius: 50%;
        animation: tilingPulse 2s infinite;
    }

    @keyframes tilingPulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(1.3);
            opacity: 0;
        }
    }

    /* Stats Counter */
    .stats-section {
        background: linear-gradient(135deg, var(--tile-blue), #005691);
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

    /* Service Cards */
    .tiling-service-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    }

    .tiling-service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--tile-blue);
    }

    .tiling-service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 119, 182, 0.15);
        border-color: var(--tile-blue);
    }

    .tiling-service-card.premium {
        border-color: var(--tile-gold);
    }

    .tiling-service-card.premium::before {
        background: var(--tile-gold);
    }

    .tiling-service-card.commercial {
        border-color: var(--tile-green);
    }

    .tiling-service-card.commercial::before {
        background: var(--tile-green);
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
        background: linear-gradient(135deg, var(--tile-blue), #005691);
        border: 3px solid rgba(0, 119, 182, 0.2);
    }

    .premium .service-icon {
        background: linear-gradient(135deg, var(--tile-gold), #ffb300);
        border-color: rgba(255, 209, 102, 0.2);
    }

    .commercial .service-icon {
        background: linear-gradient(135deg, var(--tile-green), #21867a);
        border-color: rgba(42, 157, 143, 0.2);
    }

    /* Tile Types */
    .tile-type-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid var(--tile-beige);
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }

    .tile-type-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-color: var(--tile-blue);
    }

    .tile-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 20px;
        color: white;
        background: linear-gradient(135deg, var(--tile-gray), var(--tile-dark));
    }

    /* Installation Process */
    .install-step {
        position: relative;
        padding-left: 40px;
        margin-bottom: 30px;
    }

    .install-step::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 24px;
        height: 24px;
        background: var(--tile-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
    }

    .install-step:nth-child(1)::before { content: '1'; }
    .install-step:nth-child(2)::before { content: '2'; }
    .install-step:nth-child(3)::before { content: '3'; }
    .install-step:nth-child(4)::before { content: '4'; }
    .install-step:nth-child(5)::before { content: '5'; }

    /* Tile Patterns */
    .pattern-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid var(--tile-beige);
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }

    .pattern-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-color: var(--tile-blue);
    }

    .pattern-preview {
        width: 100%;
        height: 100px;
        border-radius: 8px;
        margin-bottom: 15px;
        background-size: cover;
        background-position: center;
    }

    /* Gallery Styles */
    .gallery-section {
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
        color: var(--tile-blue);
        border-bottom-color: var(--tile-blue);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--tile-blue);
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

    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(33, 37, 41, 0.9);
        color: white;
        padding: 15px;
        font-size: 0.9rem;
    }

    /* Pricing Cards */
    .pricing-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .pricing-card.popular {
        border-color: var(--tile-blue);
        box-shadow: 0 10px 30px rgba(0, 119, 182, 0.15);
        transform: scale(1.02);
    }

    .pricing-card.popular::before {
        content: 'Most Popular';
        position: absolute;
        top: 15px;
        right: -30px;
        background: var(--tile-blue);
        color: white;
        padding: 5px 30px;
        transform: rotate(45deg);
        font-size: 0.8rem;
        font-weight: 600;
    }

    .price-tag {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--tile-blue);
        line-height: 1;
    }

    /* Warranty Badge */
    .warranty-badge {
        background: linear-gradient(135deg, var(--tile-green), #21867a);
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        display: inline-flex;
        align-items: center;
        font-weight: 600;
    }

    /* Materials Showcase */
    .material-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid var(--tile-beige);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .material-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-color: var(--tile-blue);
    }

    .material-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin: 0 auto 15px;
        color: white;
        background: linear-gradient(135deg, var(--tile-brown), #6d4c41);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .tiling-hero-content {
            padding: 60px 0 80px;
        }
        
        .stat-number {
            font-size: 2.5rem;
        }
        
        .work-process-card {
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }
        
        .pricing-card.popular::before {
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
        
        .install-step {
            padding-left: 30px;
        }
        
        .tiling-badge {
            font-size: 0.9rem;
            padding: 6px 12px;
        }
    }
</style>

<!-- Hero Section -->
<section class="tiling-hero">
    <div class="container">
        <div class="row align-items-center tiling-hero-content">
            <div class="col-lg-8 text-white">
                <div class="tiling-badge">
                    <i class="fa fa-toolbox me-2"></i> Certified Tiling Specialists
                </div>
                <h1 class="display-5 fw-bold mb-3">Professional Tiling Services in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    Expert floor and wall tiling, marble installation, bathroom & kitchen tiling, swimming pool tiling, and complete tiling solutions across Dubai.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971501234567" class="btn btn-light btn-lg px-4">
                        <i class="fa fa-ruler-combined me-2"></i> Free Measurement
                    </a>
                    <a href="#booking" class="btn btn-outline-light btn-lg px-4">
                        <i class="fa fa-calendar me-2"></i> Book Installation
                    </a>
                </div>
                <div class="mt-4">
                    <div class="d-flex flex-wrap gap-3">
                        <span class="badge bg-dark px-3 py-2">
                            <i class="fa fa-shield-alt me-1"></i> 5-Year Warranty
                        </span>
                        <span class="badge bg-dark px-3 py-2">
                            <i class="fa fa-award me-1"></i> German Standards
                        </span>
                        <span class="badge bg-dark px-3 py-2">
                            <i class="fa fa-clock me-1"></i> Same-Day Service
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Banner -->
<section class="py-3" style="background: linear-gradient(90deg, var(--tile-red), #e76f51);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 p-3">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <i class="fa fa-exclamation-triangle fa-2x text-white"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-1 text-white">Emergency Tile Repair?</h4>
                        <p class="text-white mb-0">Broken tiles, water damage, or urgent tiling needs? We're available 24/7!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-3 text-lg-end">
                <a href="tel:+971501234567" class="btn btn-light btn-lg px-4">
                    <i class="fa fa-phone me-2"></i> Emergency Call
                </a>
            </div>
        </div>
    </div>
</section>

<!-- HOW WE WORK Section -->
<section class="how-we-work-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge mb-3 px-3 py-2" style="background-color: var(--tile-blue); font-size: 0.9rem;">
                <i class="fa fa-cogs me-1"></i> Our Tiling Process
            </span>
            <h2 class="fw-bold mb-3">HOW WE WORK</h2>
            <p class="opacity-90 mx-auto" style="max-width: 700px;">
                Professional 5-step tiling process ensuring perfect alignment, durability, and flawless finishes
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3">Surface Preparation</h4>
                    <p class="opacity-90">
                        Thorough cleaning, leveling, waterproofing, and priming of surfaces for perfect tile adhesion.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Perfect Base</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3">Layout & Planning</h4>
                    <p class="opacity-90">
                        Laser leveling, pattern design, dry layout, and precise measurements for perfect alignment.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Precision Layout</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3">Tile Installation</h4>
                    <p class="opacity-90">
                        Expert installation using proper adhesives, spacing, and techniques for various tile types.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Expert Installation</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3">Grouting & Sealing</h4>
                    <p class="opacity-90">
                        Professional grouting with color matching, cleaning, and sealing for protection and beauty.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Perfect Finish</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3">Final Cleaning</h4>
                    <p class="opacity-90">
                        Thorough cleaning, polishing, final inspection, and protection of installed tiles.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Spotless Finish</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--tile-blue), #005691); color: white; border-color: var(--tile-blue);">
                    <div class="step-number" style="background: white; color: var(--tile-blue);">✓</div>
                    <h4 class="fw-bold mb-3">Quality Assurance</h4>
                    <p>
                        5-year warranty, maintenance guidance, and after-service support for your tiling project.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-white text-primary">5-Year Warranty</span>
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
                            <div class="stat-label">Tiling Projects</div>
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
                            <div class="stat-number">5 Year</div>
                            <div class="stat-label">Installation Warranty</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Services -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--tile-dark);">Our Tiling Services</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Comprehensive tiling solutions for residential, commercial, and industrial properties in Dubai
            </p>
        </div>
        
        <div class="row g-4">
            @php
            $tilingServices = [
                [
                    'name' => 'Floor Tiling',
                    'desc' => 'Professional floor tiling with ceramic, porcelain, marble, and natural stone tiles.',
                    'icon' => 'fa-layer-group',
                    'features' => ['Ceramic Tiles', 'Porcelain Tiles', 'Marble Flooring', 'Pattern Design'],
                    'price' => 'AED 45',
                    'type' => 'standard',
                    'unit' => 'per sq.m.'
                ],
                [
                    'name' => 'Bathroom Tiling',
                    'desc' => 'Complete bathroom tiling with waterproofing, mosaic work, and steam room tiling.',
                    'icon' => 'fa-bath',
                    'features' => ['Wall & Floor Tiling', 'Mosaic Work', 'Waterproofing', 'Niche Tiling'],
                    'price' => 'AED 65',
                    'type' => 'premium',
                    'unit' => 'per sq.m.'
                ],
                [
                    'name' => 'Kitchen Tiling',
                    'desc' => 'Kitchen backsplash, floor tiling, and countertop installation with premium materials.',
                    'icon' => 'fa-utensils',
                    'features' => ['Backsplash Tiling', 'Floor Tiling', 'Countertops', 'Splash Protection'],
                    'price' => 'AED 55',
                    'type' => 'standard',
                    'unit' => 'per sq.m.'
                ],
                [
                    'name' => 'Commercial Tiling',
                    'desc' => 'Large-scale tiling for offices, malls, hotels, and commercial spaces across Dubai.',
                    'icon' => 'fa-building',
                    'features' => ['Commercial Spaces', 'Heavy Traffic Areas', 'Anti-slip Tiles', 'Quick Installation'],
                    'price' => 'AED 35',
                    'type' => 'commercial',
                    'unit' => 'per sq.m.'
                ],
                [
                    'name' => 'Swimming Pool Tiling',
                    'desc' => 'Specialized pool tiling with anti-slip surfaces, mosaic art, and waterproof installations.',
                    'icon' => 'fa-swimming-pool',
                    'features' => ['Pool Walls & Floor', 'Anti-slip Surfaces', 'Mosaic Art', 'Waterproofing'],
                    'price' => 'AED 85',
                    'type' => 'premium',
                    'unit' => 'per sq.m.'
                ],
                [
                    'name' => 'Tile Repair & Restoration',
                    'desc' => 'Professional tile repair, grout renewal, crack fixing, and tile replacement services.',
                    'icon' => 'fa-tools',
                    'features' => ['Tile Replacement', 'Grout Repair', 'Crack Fixing', 'Color Matching'],
                    'price' => 'AED 250',
                    'type' => 'standard',
                    'unit' => 'starting from'
                ],
            ];
            @endphp
            
            @foreach($tilingServices as $service)
            <div class="col-md-6 col-lg-4">
                <div class="tiling-service-card @if($service['type'] == 'premium') premium @elseif($service['type'] == 'commercial') commercial @endif">
                    <div class="service-icon">
                        <i class="fa {{ $service['icon'] }}"></i>
                    </div>
                    <h4 class="fw-bold mb-3">{{ $service['name'] }}</h4>
                    <p class="text-muted mb-4">{{ $service['desc'] }}</p>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($service['features'] as $feature)
                        <li class="py-1">
                            <i class="fa fa-check-circle me-2" style="color: var(--tile-blue);"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-4 d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fw-bold h5" style="color: var(--tile-blue);">{{ $service['price'] }}</span>
                            <span class="text-muted d-block small">{{ $service['unit'] }}</span>
                        </div>
                        <a href="tel:+971501234567" class="btn btn-sm btn-primary">
                            <i class="fa fa-phone me-1"></i> Get Quote
                        </a>
                    </div>
                    
                    @if($service['type'] == 'premium')
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-warning text-dark">Premium</span>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Tile Types -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--tile-dark);">Tile Materials We Work With</h3>
            <p class="text-muted">Premium quality tiles from leading international brands</p>
        </div>
        
        <div class="row g-4">
            @php
            $tileTypes = [
                [
                    'name' => 'Ceramic Tiles',
                    'desc' => 'Affordable, durable tiles perfect for indoor areas and light traffic zones.',
                    'icon' => 'fa-square',
                    'best_for' => 'Living Rooms, Bedrooms'
                ],
                [
                    'name' => 'Porcelain Tiles',
                    'desc' => 'Highly durable, low-maintenance tiles suitable for high-traffic areas.',
                    'icon' => 'fa-th-large',
                    'best_for' => 'Kitchens, Hallways'
                ],
                [
                    'name' => 'Marble Tiles',
                    'desc' => 'Luxurious natural stone with unique patterns for elegant spaces.',
                    'icon' => 'fa-gem',
                    'best_for' => 'Lobbies, Luxury Homes'
                ],
                [
                    'name' => 'Granite Tiles',
                    'desc' => 'Extremely durable natural stone perfect for floors and countertops.',
                    'icon' => 'fa-mountain',
                    'best_for' => 'Countertops, Outdoor'
                ],
                [
                    'name' => 'Mosaic Tiles',
                    'desc' => 'Small decorative tiles for artistic patterns and accent walls.',
                    'icon' => 'fa-th',
                    'best_for' => 'Bathrooms, Feature Walls'
                ],
                [
                    'name' => 'Vitrified Tiles',
                    'desc' => 'High-strength, stain-resistant tiles with glass-like finish.',
                    'icon' => 'fa-glass-whiskey',
                    'best_for' => 'Commercial Spaces'
                ],
                [
                    'name' => 'Terracotta Tiles',
                    'desc' => 'Natural clay tiles with rustic appeal for traditional designs.',
                    'icon' => 'fa-square',
                    'best_for' => 'Villas, Outdoor Areas'
                ],
                [
                    'name' => 'Quarry Tiles',
                    'desc' => 'Unglazed ceramic tiles with excellent slip resistance.',
                    'icon' => 'fa-industry',
                    'best_for' => 'Kitchens, Pool Areas'
                ],
            ];
            @endphp
            
            @foreach($tileTypes as $tile)
            <div class="col-md-6 col-lg-3">
                <div class="tile-type-card">
                    <div class="tile-icon">
                        <i class="fa {{ $tile['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-2">{{ $tile['name'] }}</h5>
                    <p class="small text-muted mb-3">{{ $tile['desc'] }}</p>
                    <div class="mt-3">
                        <span class="badge bg-light text-dark small">Best for {{ $tile['best_for'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Tile Patterns -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--tile-dark);">Popular Tile Patterns</h3>
            <p class="text-muted">Creative patterns to enhance your space aesthetics</p>
        </div>
        
        <div class="row g-4">
            @php
            $patterns = [
                ['name' => 'Straight Lay', 'desc' => 'Classic grid pattern for traditional look', 'color' => 'linear-gradient(45deg, #6c757d, #495057)'],
                ['name' => 'Diagonal', 'desc' => '45-degree angle for visual interest', 'color' => 'linear-gradient(45deg, #0077b6, #0096c7)'],
                ['name' => 'Herringbone', 'desc' => 'V-shaped pattern for modern elegance', 'color' => 'linear-gradient(45deg, #2a9d8f, #21867a)'],
                ['name' => 'Brick Joint', 'desc' => 'Offset pattern mimicking brick walls', 'color' => 'linear-gradient(45deg, #e76f51, #e63946)'],
                ['name' => 'Hexagonal', 'desc' => 'Modern hexagonal tiles for contemporary look', 'color' => 'linear-gradient(45deg, #ffd166, #ffb300)'],
                ['name' => 'Chevron', 'desc' => 'Continuous V-shape pattern', 'color' => 'linear-gradient(45deg, #8d6e63, #6d4c41)'],
                ['name' => 'Pinwheel', 'desc' => 'Rotating square pattern', 'color' => 'linear-gradient(45deg, #7209b7, #560bad)'],
                ['name' => 'Basket Weave', 'desc' => 'Interlocking pattern for texture', 'color' => 'linear-gradient(45deg, #212529, #343a40)'],
            ];
            @endphp
            
            @foreach($patterns as $pattern)
            <div class="col-6 col-md-3">
                <div class="pattern-card">
                    <div class="pattern-preview" style="background: {{ $pattern['color'] }};"></div>
                    <h6 class="fw-bold mb-2">{{ $pattern['name'] }}</h6>
                    <p class="small text-muted mb-0">{{ $pattern['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Materials & Brands -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--tile-dark);">Premium Materials & Brands</h3>
            <p class="text-muted">We use only the best quality materials from trusted brands</p>
        </div>
        
        <div class="row g-4 mb-5">
            @php
            $materials = [
                ['name' => 'Tile Adhesives', 'desc' => 'Premium adhesives for strong bonding', 'icon' => 'fa-paste'],
                ['name' => 'Grouts', 'desc' => 'Color-matched, stain-resistant grouts', 'icon' => 'fa-fill-drip'],
                ['name' => 'Waterproofing', 'desc' => 'Liquid membrane waterproofing systems', 'icon' => 'fa-tint-slash'],
                ['name' => 'Leveling Systems', 'desc' => 'Professional tile leveling clips', 'icon' => 'fa-ruler-combined'],
                ['name' => 'Sealers', 'desc' => 'Penetrating and enhancing sealers', 'icon' => 'fa-shield-alt'],
                ['name' => 'Cutting Tools', 'desc' => 'Professional tile cutters and saws', 'icon' => 'fa-cut'],
            ];
            @endphp
            
            @foreach($materials as $material)
            <div class="col-md-6 col-lg-4">
                <div class="material-card">
                    <div class="material-icon">
                        <i class="fa {{ $material['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-2">{{ $material['name'] }}</h5>
                    <p class="small text-muted mb-0">{{ $material['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Brands -->
        <div class="text-center mt-5">
            <h5 class="fw-bold mb-4">Trusted Tile Brands</h5>
            <div class="row g-3 justify-content-center">
                @php
                $tileBrands = ['RAK Ceramics', 'Al Khaleej Ceramics', 'Johnson Tiles', 'VitrA', 'Porcelanosa', 
                              'Marazzi', 'Cotto d\'Este', 'Ceramica Cleopatra', 'Kajaria', 'Somany'];
                @endphp
                
                @foreach($tileBrands as $brand)
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="p-3 bg-white rounded border">
                        <span class="fw-bold">{{ $brand }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--tile-dark);">Transparent Pricing</h2>
            <p class="text-muted">All-inclusive pricing with no hidden costs</p>
        </div>
        
        <div class="row g-4">
            @php
            $pricingPlans = [
                [
                    'name' => 'Basic Tiling',
                    'price' => '45',
                    'unit' => 'per sq.m.',
                    'desc' => 'Standard ceramic tile installation',
                    'features' => ['Ceramic Tiles', 'Basic Adhesive', 'Standard Grout', 'Surface Preparation', '1-Year Warranty'],
                    'color' => '#495057',
                    'popular' => false
                ],
                [
                    'name' => 'Premium Package',
                    'price' => '75',
                    'unit' => 'per sq.m.',
                    'desc' => 'Premium tile installation with marble/porcelain',
                    'features' => ['Marble/Porcelain', 'Premium Adhesive', 'Color-matched Grout', 'Laser Leveling', 'Waterproofing', '5-Year Warranty'],
                    'color' => '#0077b6',
                    'popular' => true
                ],
                [
                    'name' => 'Commercial Package',
                    'price' => '35',
                    'unit' => 'per sq.m.',
                    'desc' => 'Large area commercial tiling',
                    'features' => ['Commercial Tiles', 'Industrial Adhesive', 'Quick Installation', 'Minimal Disruption', '10-Year Warranty', '24/7 Support'],
                    'color' => '#2a9d8f',
                    'popular' => false
                ],
            ];
            @endphp
            
            @foreach($pricingPlans as $plan)
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card @if($plan['popular']) popular @endif">
                    <div class="pricing-header">
                        <h4 class="fw-bold mb-2">{{ $plan['name'] }}</h4>
                        <p class="text-muted mb-3">{{ $plan['desc'] }}</p>
                        <div class="price-tag" style="color: {{ $plan['color'] }};">
                            AED {{ $plan['price'] }}
                            <small class="text-muted fw-normal d-block">/{{ $plan['unit'] }}</small>
                        </div>
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
                        <a href="tel:+971501234567" class="btn w-100" 
                           style="background-color: {{ $plan['color'] }}; color: white; border-color: {{ $plan['color'] }};">
                            <i class="fa fa-calculator me-2"></i> Calculate Cost
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <div class="warranty-badge">
                <i class="fa fa-shield-alt me-2"></i> All Work Includes 5-Year Warranty
            </div>
            <p class="text-muted mt-3">
                *Prices include labor, materials, and VAT. Minimum 10 sq.m. Free site measurement available.
            </p>
        </div>
    </div>
</section>

<!-- Installation Process Details -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4" style="color: var(--tile-dark);">Professional Tiling Process</h3>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Site Assessment</h5>
                    <p class="text-muted">Measurement of area, assessment of subfloor condition, and planning of tile layout and pattern.</p>
                </div>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Surface Preparation</h5>
                    <p class="text-muted">Cleaning, leveling, waterproofing (for wet areas), and priming of surfaces for optimal tile adhesion.</p>
                </div>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Layout & Dry Run</h5>
                    <p class="text-muted">Laser leveling, dry layout of tiles without adhesive to ensure perfect pattern and minimize cuts.</p>
                </div>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Tile Installation</h5>
                    <p class="text-muted">Application of premium adhesive, precise tile placement with spacers, and cutting tiles to fit edges.</p>
                </div>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Grouting & Finishing</h5>
                    <p class="text-muted">Application of color-matched grout, cleaning of excess grout, and final sealing for protection.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="gallery-section">
                    <div class="gallery-grid" id="tilingGallery">
                        <!-- Gallery items will be dynamically loaded -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--tile-dark);">Tiling Services FAQs</h3>
            <p class="text-muted">Common questions about tiling work in Dubai</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="tilingFAQ">
                    @php
                    $faqs = [
                        [
                            'question' => 'How long does tiling installation take in Dubai?',
                            'answer' => 'Average installation time is 2-5 days depending on area size and complexity. Bathroom tiling typically takes 3-4 days, while large floor areas may take 5-7 days.'
                        ],
                        [
                            'question' => 'What is the best tile for Dubai climate?',
                            'answer' => 'Porcelain tiles are ideal for Dubai due to their durability, low water absorption, and heat resistance. For outdoor areas, anti-slip porcelain or natural stone works best.'
                        ],
                        [
                            'question' => 'Do you provide waterproofing for bathrooms?',
                            'answer' => 'Yes, we provide comprehensive waterproofing using liquid membrane systems for all wet areas including bathrooms, kitchens, and balconies. This is included in our premium packages.'
                        ],
                        [
                            'question' => 'Can you match existing tiles for repairs?',
                            'answer' => 'Yes, we have extensive experience in tile matching. We maintain a wide range of tile samples and can source matching tiles or provide close alternatives for repairs.'
                        ],
                        [
                            'question' => 'What warranty do you provide on tiling work?',
                            'answer' => 'We provide a 5-year warranty on installation workmanship. For premium packages with waterproofing, we offer extended warranty options up to 10 years.'
                        ],
                        [
                            'question' => 'Do you work with marble and natural stone?',
                            'answer' => 'Yes, we specialize in marble, granite, and natural stone installation. Our team includes experts in stone work with proper sealing and maintenance knowledge.'
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
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#tilingFAQ">
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
<section id="booking" class="py-5" style="background-color: var(--tile-dark); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bold mb-3">Get Your Free Tiling Consultation</h2>
                <p class="opacity-90 mb-4">
                    Schedule a free site visit with our tiling expert for measurement, tile selection, and detailed quotation.
                </p>
                
                <div class="row g-3">
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-ruler-combined fa-2x" style="color: var(--tile-blue);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Free Measurement</h6>
                                    <p class="small opacity-90 mb-0">Precise area measurement and assessment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-palette fa-2x" style="color: var(--tile-green);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Tile Selection</h6>
                                    <p class="small opacity-90 mb-0">Professional guidance on tiles and patterns</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-shield-alt fa-2x" style="color: var(--tile-gold);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">5-Year Warranty</h6>
                                    <p class="small opacity-90 mb-0">Comprehensive warranty on all work</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <form id="tilingBookingForm">
                            <div class="mb-3">
                                <label class="form-label">Service Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select Tiling Service</option>
                                    <option>Floor Tiling</option>
                                    <option>Bathroom Tiling</option>
                                    <option>Kitchen Tiling</option>
                                    <option>Swimming Pool Tiling</option>
                                    <option>Commercial Tiling</option>
                                    <option>Tile Repair</option>
                                    <option>Complete Renovation</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Area Size (approx.)</label>
                                <select class="form-select">
                                    <option>Less than 20 sq.m.</option>
                                    <option>20-50 sq.m.</option>
                                    <option>50-100 sq.m.</option>
                                    <option>100-200 sq.m.</option>
                                    <option>200-500 sq.m.</option>
                                    <option>500+ sq.m.</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Tile Type Preference</label>
                                <select class="form-select">
                                    <option>Ceramic Tiles</option>
                                    <option>Porcelain Tiles</option>
                                    <option>Marble Tiles</option>
                                    <option>Granite Tiles</option>
                                    <option>Mosaic Tiles</option>
                                    <option>Not Sure - Need Advice</option>
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
                                    <option>Hotel/Resort</option>
                                    <option>Swimming Pool</option>
                                    <option>Other</option>
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
                            
                            <button type="submit" class="btn btn-primary w-100 py-3">
                                <i class="fa fa-calendar me-2"></i> Schedule Free Consultation
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryData = [
        { img: 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Modern Bathroom Tiling - Downtown Dubai' },
        { img: 'https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Luxury Villa Floor Tiling - Emirates Hills' },
        { img: 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Kitchen Backsplash Tiling - Jumeirah' },
        { img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Swimming Pool Tiling - Palm Jumeirah' },
        { img: 'https://images.unsplash.com/photo-1560185127-6ed189bf02f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Commercial Space Tiling - Business Bay' },
        { img: 'https://images.unsplash.com/photo-1519710164239-da123dc03ef4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Marble Floor Installation - Dubai Marina' },
    ];

    const galleryGrid = document.getElementById('tilingGallery');

    function loadGallery() {
        galleryGrid.innerHTML = '';
        
        galleryData.forEach((item) => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            
            galleryItem.innerHTML = `
                <img src="${item.img}" alt="${item.caption}" loading="lazy">
                <div class="gallery-caption">
                    ${item.caption}
                </div>
            `;
            
            galleryGrid.appendChild(galleryItem);
        });
    }

    // Initialize gallery
    loadGallery();

    // Form submission
    document.getElementById('tilingBookingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your tiling consultation request! Our expert will contact you within 24 hours to schedule the free site visit.');
        this.reset();
    });
});
</script>

<!-- Contact Footer -->
<section class="py-5 bg-black text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold mb-4">Professional Tiling Services Dubai</h5>
                <p class="opacity-75">
                    Certified tiling specialists providing premium floor and wall tiling solutions across Dubai since 2008.
                </p>
                <div class="mt-4">
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-pinterest fa-lg"></i></a>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold mb-4">Our Tiling Services</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#floor-tiling" class="text-white opacity-75 text-decoration-none">Floor Tiling</a></li>
                    <li class="mb-2"><a href="#bathroom" class="text-white opacity-75 text-decoration-none">Bathroom Tiling</a></li>
                    <li class="mb-2"><a href="#kitchen" class="text-white opacity-75 text-decoration-none">Kitchen Tiling</a></li>
                    <li class="mb-2"><a href="#pool" class="text-white opacity-75 text-decoration-none">Swimming Pool Tiling</a></li>
                    <li class="mb-2"><a href="#commercial" class="text-white opacity-75 text-decoration-none">Commercial Tiling</a></li>
                </ul>
            </div>
            
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold mb-4">Contact Us</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fa fa-map-marker-alt me-2"></i>
                        <span class="opacity-75">Al Quoz Industrial Area, Dubai, UAE</span>
                    </li>
                    <li class="mb-3">
                        <i class="fa fa-phone me-2"></i>
                        <a href="tel:+971501234567" class="text-white opacity-75 text-decoration-none">+971 50 123 4567</a>
                    </li>
                    <li class="mb-3">
                        <i class="fa fa-envelope me-2"></i>
                        <a href="mailto:tiling@onecall.ae" class="text-white opacity-75 text-decoration-none">tiling@onecall.ae</a>
                    </li>
                    <li>
                        <i class="fa fa-clock me-2"></i>
                        <span class="opacity-75">Mon-Sat: 8:00 AM - 8:00 PM | Sun: 10:00 AM - 6:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="text-center pt-4 border-top border-secondary">
            <p class="opacity-75 mb-0">
                &copy; {{ date('Y') }} OneCall Technical Services. Professional tiling contractors in Dubai.
            </p>
        </div>
    </div>
</section>

@endsection