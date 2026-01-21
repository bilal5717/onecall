@extends('layouts.app')

@section('title', 'Professional Services in Dubai | OneCall Technical Services')
@section('meta_description', 'Expert technical services in Dubai including AC repair, electrical work, plumbing, CCTV installation, painting, tiling, and more. 24/7 emergency services available.')
@section('meta_keywords', 'AC repair Dubai, electrical services Dubai, plumbing Dubai, CCTV installation Dubai, painting services Dubai, tiling work Dubai, Tesla charger installation Dubai')

@section('content')

<style>


.services-hero {
    background: linear-gradient(#990000, rgba(0, 87, 179, 0.73)), 
                url('https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') 
                center/cover no-repeat;
    min-height: 35vh;
}

/* Compact Category Styles */
.category-section {
    margin-bottom: 2.5rem;
    padding-top: 1.5rem;
}

.category-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.2rem;
    padding-bottom: 0.8rem;
    border-bottom: 1px solid var(--border);
}

.category-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-dark);
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.category-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: white;
}

.view-all {
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
    font-size: 0.85rem;
    transition: all 0.3s ease;
}

.view-all:hover {
    color: var(--primary-dark);
    transform: translateX(3px);
}

/* Ultra-Compact Service Cards */
.service-card-compact {
    border: 1px solid var(--border);
    border-radius: 10px;
    background: var(--bg-white);
    transition: all 0.3s ease;
    overflow: hidden;
    height: 100%;
    position: relative;
    padding: 15px;
}

.service-card-compact:hover {
    border-color: var(--primary-light);
    box-shadow: 0 5px 15px rgba(0, 86, 179, 0.1);
    transform: translateY(-3px);
}

.service-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
}

.service-card-icon {
    width: 45px;
    height: 45px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: white;
    flex-shrink: 0;
}

.service-card-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-dark);
    margin: 0;
    line-height: 1.3;
    flex: 1;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 2.6rem;
}

.service-card-description {
    color: var(--text-light);
    font-size: 0.85rem;
    line-height: 1.4;
    margin-bottom: 12px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 2.4rem;
}

.service-card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.service-price {
    color: var(--primary);
    font-weight: 700;
    font-size: 1rem;
}

.btn-compact {
    background-color: var(--primary);
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.8rem;
    font-weight: 500;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    cursor: pointer;
}

.btn-compact:hover {
    background-color: var(--primary-dark);
    color: white;
    transform: translateY(-1px);
}

.service-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: var(--accent);
    color: white;
    padding: 3px 8px;
    border-radius: 4px;
    font-size: 0.7rem;
    font-weight: 600;
    z-index: 2;
}

/* Compact Grid Layout */
.service-grid-compact {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 15px;
}

/* Compact Category for smaller sections */
.compact-category {
    padding: 15px;
    background: var(--bg-white);
    border-radius: 10px;
    border: 1px solid var(--border);
    margin-bottom: 20px;
}

.compact-category-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.compact-service-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.compact-service-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.compact-service-item:last-child {
    border-bottom: none;
}

.service-name {
    font-size: 0.9rem;
    color: var(--text-dark);
    font-weight: 500;
}

.service-price-sm {
    color: var(--primary);
    font-weight: 600;
    font-size: 0.9rem;
}

/* Featured Card Style */
.featured-card {
    border: 2px solid var(--accent);
}

/* Quick Contact Banner */
.quick-contact-banner {
    background: linear-gradient(90deg, var(--primary), var(--primary-dark));
    border-radius: 10px;
    padding: 1.5rem;
    margin: 2.5rem 0;
}

/* Responsive */
@media (max-width: 768px) {
    .services-hero {
        min-height: 30vh;
    }
    
    .category-title {
        font-size: 1.3rem;
    }
    
    .service-grid-compact {
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 12px;
    }
    
    .service-card-compact {
        padding: 12px;
    }
    
    .service-card-title {
        font-size: 0.95rem;
        min-height: 2.4rem;
    }
    
    .service-card-description {
        font-size: 0.8rem;
        min-height: 2.2rem;
    }
}

@media (max-width: 576px) {
    .service-grid-compact {
        grid-template-columns: 1fr 1fr;
    }
    
    .category-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.8rem;
    }
    
    .view-all {
        align-self: flex-end;
    }
}

@media (max-width: 400px) {
    .service-grid-compact {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- Compact Hero Section -->
<section class="services-hero d-flex align-items-center position-relative">
    <div class="container position-relative z-1">
        <div class="row justify-content-center text-center text-white">
            <div class="col-lg-10">
                <h1 class="display-5 fw-bold mb-3">All Services in Dubai</h1>
                <p class="lead mb-3 opacity-90" style="font-size: 1.1rem;">
                    Professional technical services for homes & businesses
                </p>
                <div class="d-flex justify-content-center gap-2 flex-wrap">
                    <a href="#categories" class="btn btn-light btn-sm px-3 py-2">
                        <i class="fa fa-search me-1"></i>Browse Services
                    </a>
                    <a href="tel:+971000000000" class="btn btn-outline-light btn-sm px-3 py-2">
                        <i class="fa fa-phone me-1"></i>Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute bottom-0 start-0 w-100">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="fill: var(--bg-white); width: 100%; height: 30px;">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"></path>
        </svg>
    </div>
</section>
<!-- Compact Main Services Categories -->
<section class="py-5" style="background-color: var(--bg-white);">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold" style="color: var(--primary); font-size: 1.8rem;">
                Our Main Services
            </h2>
            <p class="text-muted" style="font-size: 0.95rem;">Professional services across Dubai</p>
        </div>
        
        <div class="row justify-content-center g-3">
            @php
            $mainCategories = [
                ['name' => 'Electrician', 'icon' => 'fa-bolt', 'color' => '#0056b3', 'url' => '#electrition'],
                ['name' => 'A/C Service', 'icon' => 'fa-wind', 'color' => '#228be6', 'url' => '#ac-ventilation'],
                ['name' => 'UPS', 'icon' => 'fa-car-battery', 'color' => '#40c057', 'url' => 'services/ups.html'],
                ['name' => 'Painter', 'icon' => 'fa-paint-roller', 'color' => '#ff6b6b', 'url' => 'services/painting.html'],
                ['name' => 'Plumbing', 'icon' => 'fa-faucet', 'color' => '#20c997', 'url' => 'services/plumbing.html'],
                ['name' => 'CCTV', 'icon' => 'fa-video', 'color' => '#d4af37', 'url' => 'services/cctv.html'],
                ['name' => 'Tiling', 'icon' => 'fa-th-large', 'color' => '#9775fa', 'url' => 'services/tiling.html'],
                ['name' => 'Aluminum & Glass', 'icon' => 'fa-window-restore', 'color' => '#4dabf7', 'url' => 'services/aluminum-glass.html'],
                ['name' => 'Gypsum Work', 'icon' => 'fa-grip-lines', 'color' => '#adb5bd', 'url' => 'services/gypsum.html'],
                ['name' => 'EV Charger', 'icon' => 'fa-charging-station', 'color' => '#f06595', 'url' => 'services/ev-charging.html'],
            ];
            @endphp
            
            @foreach($mainCategories as $category)
            <div class="col-4 col-sm-3 col-md-2 col-lg-2">
                <a href="{{ $category['url'] }}" class="text-decoration-none">
                    <div class="category-card-compact text-center p-3">
                        <div class="category-icon-compact mb-3 mx-auto" 
                             style="background-color: {{ $category['color'] }};
                                    width: 60px;
                                    height: 60px;
                                    border-radius: 12px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;">
                            <i class="fa {{ $category['icon'] }} fa-lg text-white"></i>
                        </div>
                        <h6 class="category-name mb-0" 
                            style="color: var(--text-dark);
                                   font-size: 0.85rem;
                                   font-weight: 600;
                                   line-height: 1.3;">
                            {{ $category['name'] }}
                        </h6>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        
       
    </div>
</section>



<style>
.category-card-compact {
    background: var(--bg-white);
    border: 1px solid var(--border);
    border-radius: 12px;
    transition: all 0.3s ease;
    height: 100%;
    padding: 15px 10px;
}

.category-card-compact:hover {
    border-color: var(--primary-light);
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 86, 179, 0.1);
}

.category-icon-compact {
    transition: transform 0.3s ease;
}

.category-card-compact:hover .category-icon-compact {
    transform: scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .category-card-compact {
        padding: 12px 8px;
    }
    
    .category-icon-compact {
        width: 55px !important;
        height: 55px !important;
    }
    
    .category-name {
        font-size: 0.8rem !important;
    }
}

@media (max-width: 576px) {
    .category-card-compact {
        padding: 10px 6px;
    }
    
    .category-icon-compact {
        width: 50px !important;
        height: 50px !important;
        border-radius: 10px !important;
    }
    
    .category-name {
        font-size: 0.75rem !important;
    }
}
</style>
<!-- Main Services Categories -->
<section id="categories" class="py-4" style="background-color: var(--bg-white);">
    <div class="container">
        <!-- AC and Ventilation Category -->
        <div class="category-section" id="ac-ventilation">
            <div class="category-header">
                <h2 class="category-title">
                    <div class="category-icon" style="background-color: #228be6;">
                        <i class="fa fa-wind"></i>
                    </div>
                    AC & Ventilation
                </h2>
            </div>
            
            <div class="service-grid-compact">
                @php
                $acServices = [
                    ['title' => 'AC Installation', 'price' => 'AED 450+', 'icon' => 'fa-tools', 'color' => '#228be6', 'featured' => true],
                    ['title' => 'Emergency AC Repair', 'price' => 'AED 250+', 'icon' => 'fa-exclamation-triangle', 'color' => '#ff6b6b'],
                    ['title' => 'AC Maintenance', 'price' => 'AED 180+', 'icon' => 'fa-cogs', 'color' => '#228be6'],
                    ['title' => 'AC Gas Charging', 'price' => 'AED 350+', 'icon' => 'fa-gas-pump', 'color' => '#228be6'],
                    ['title' => 'Duct Cleaning', 'price' => 'AED 200+', 'icon' => 'fa-broom', 'color' => '#20c997'],
                    ['title' => 'Ventilation Systems', 'price' => 'AED 600+', 'icon' => 'fa-fan', 'color' => '#228be6'],
                ];
                @endphp
                
                @foreach($acServices as $service)
                <div class="service-card-compact @if($service['featured'] ?? false) featured-card @endif">
                    @if($service['featured'] ?? false)
                    <div class="service-badge">Popular</div>
                    @endif
                    <div class="service-card-header">
                        <div class="service-card-icon" style="background-color: {{ $service['color'] }};">
                            <i class="fa {{ $service['icon'] }}"></i>
                        </div>
                        <h3 class="service-card-title">{{ $service['title'] }}</h3>
                    </div>
                    <p class="service-card-description">
                        Professional installation & repair services for all AC brands in Dubai.
                    </p>
                    <div class="service-card-footer">
                        <div class="service-price">{{ $service['price'] }}</div>
                        <a href="tel:+971000000000" class="btn-compact">
                            <i class="fa fa-phone"></i> Call
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Electrical Work Category -->
        <div class="category-section" id="electrition">
            <div class="category-header">
                <h2 class="category-title">
                    <div class="category-icon" style="background-color: #0056b3;">
                        <i class="fa fa-bolt"></i>
                    </div>
                    Electrical Services
                </h2>
            </div>
            
            <div class="service-grid-compact">
                @php
                $electricalServices = [
                    ['title' => 'Wiring & Rewiring', 'price' => 'AED 500+', 'icon' => 'fa-plug', 'color' => '#0056b3', 'featured' => true],
                    ['title' => 'Circuit Breaker', 'price' => 'AED 300+', 'icon' => 'fa-sliders-h', 'color' => '#0056b3'],
                    ['title' => 'Lighting Installation', 'price' => 'AED 200+', 'icon' => 'fa-lightbulb', 'color' => '#d4af37'],
                    ['title' => 'Generator Setup', 'price' => 'AED 1000+', 'icon' => 'fa-car-battery', 'color' => '#0056b3'],
                    ['title' => 'Smart Home Setup', 'price' => 'AED 800+', 'icon' => 'fa-home', 'color' => '#9775fa'],
                    ['title' => 'DB Box Installation', 'price' => 'AED 400+', 'icon' => 'fa-server', 'color' => '#0056b3'],
                ];
                @endphp
                
                @foreach($electricalServices as $service)
                <div class="service-card-compact @if($service['featured'] ?? false) featured-card @endif">
                    @if($service['featured'] ?? false)
                    <div class="service-badge">Featured</div>
                    @endif
                    <div class="service-card-header">
                        <div class="service-card-icon" style="background-color: {{ $service['color'] }};">
                            <i class="fa {{ $service['icon'] }}"></i>
                        </div>
                        <h3 class="service-card-title">{{ $service['title'] }}</h3>
                    </div>
                    <p class="service-card-description">
                        Certified electricians for safe electrical work in Dubai.
                    </p>
                    <div class="service-card-footer">
                        <div class="service-price">{{ $service['price'] }}</div>
                        <a href="tel:+971000000000" class="btn-compact">
                            <i class="fa fa-phone"></i> Call
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Plumbing Services Category -->
        <div class="category-section">
            <div class="category-header">
                <h2 class="category-title">
                    <div class="category-icon" style="background-color: #20c997;">
                        <i class="fa fa-faucet"></i>
                    </div>
                    Plumbing Services
                </h2>
                <a href="services/plumbing.html" class="view-all">
                    View All <i class="fa fa-arrow-right ms-1"></i>
                </a>
            </div>
            
            <div class="service-grid-compact">
                @php
                $plumbingServices = [
                    ['title' => 'Emergency Repair', 'price' => 'AED 200+', 'icon' => 'fa-exclamation-circle', 'color' => '#ff6b6b', 'featured' => true],
                    ['title' => 'Pipe Installation', 'price' => 'AED 350+', 'icon' => 'fa-pipe', 'color' => '#20c997'],
                    ['title' => 'Water Heater', 'price' => 'AED 400+', 'icon' => 'fa-fire', 'color' => '#ff6b6b'],
                    ['title' => 'Drain Cleaning', 'price' => 'AED 150+', 'icon' => 'fa-shower', 'color' => '#20c997'],
                    ['title' => 'Bathroom Plumbing', 'price' => 'AED 300+', 'icon' => 'fa-sink', 'color' => '#20c997'],
                    ['title' => 'Leak Detection', 'price' => 'AED 250+', 'icon' => 'fa-tint', 'color' => '#20c997'],
                ];
                @endphp
                
                @foreach($plumbingServices as $service)
                <div class="service-card-compact @if($service['featured'] ?? false) featured-card @endif">
                    @if($service['featured'] ?? false)
                    <div class="service-badge">24/7</div>
                    @endif
                    <div class="service-card-header">
                        <div class="service-card-icon" style="background-color: {{ $service['color'] }};">
                            <i class="fa {{ $service['icon'] }}"></i>
                        </div>
                        <h3 class="service-card-title">{{ $service['title'] }}</h3>
                    </div>
                    <p class="service-card-description">
                        Quick plumbing solutions for homes & businesses in Dubai.
                    </p>
                    <div class="service-card-footer">
                        <div class="service-price">{{ $service['price'] }}</div>
                        <a href="tel:+971000000000" class="btn-compact">
                            <i class="fa fa-phone"></i> Call
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Quick Contact Banner -->
        <div class="quick-contact-banner text-white">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h4 class="fw-bold mb-1">Need Professional Services?</h4>
                    <p class="mb-0 opacity-90" style="font-size: 0.9rem;">Our experts are available 24/7 in Dubai</p>
                </div>
                <div class="col-md-3 text-md-end mt-2 mt-md-0">
                    <a href="tel:+971000000000" class="btn btn-light btn-sm">
                        <i class="fa fa-phone me-1"></i> Call Now
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional Services in Compact Layout -->
        <div class="row mt-4">
            <!-- CCTV & Security -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="compact-category">
                    <h3 class="compact-category-title">
                        <i class="fa fa-video" style="color: #d4af37;"></i>
                        CCTV & Security
                    </h3>
                    <div class="compact-service-list">
                        @php
                        $cctvServices = [
                            ['name' => 'CCTV Installation', 'price' => 'AED 800+'],
                            ['name' => 'Camera Repair', 'price' => 'AED 200+'],
                            ['name' => 'Remote Monitoring', 'price' => 'AED 500+'],
                            ['name' => 'Night Vision Cameras', 'price' => 'AED 400+'],
                        ];
                        @endphp
                        
                        @foreach($cctvServices as $service)
                        <div class="compact-service-item">
                            <span class="service-name">{{ $service['name'] }}</span>
                            <span class="service-price-sm">{{ $service['price'] }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-3">
                        <a href="tel:+971000000000" class="btn-compact w-100 text-center">
                            <i class="fa fa-phone me-1"></i> Book CCTV Service
                        </a>
                    </div>
                </div>
            </div>

            <!-- Painting Services -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="compact-category">
                    <h3 class="compact-category-title">
                        <i class="fa fa-paint-roller" style="color: #ff6b6b;"></i>
                        Painting Services
                    </h3>
                    <div class="compact-service-list">
                        @php
                        $paintingServices = [
                            ['name' => 'Interior Painting', 'price' => 'AED 600+'],
                            ['name' => 'Exterior Painting', 'price' => 'AED 800+'],
                            ['name' => 'Wall Texture', 'price' => 'AED 400+'],
                            ['name' => 'Waterproofing', 'price' => 'AED 500+'],
                        ];
                        @endphp
                        
                        @foreach($paintingServices as $service)
                        <div class="compact-service-item">
                            <span class="service-name">{{ $service['name'] }}</span>
                            <span class="service-price-sm">{{ $service['price'] }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-3">
                        <a href="tel:+971000000000" class="btn-compact w-100 text-center">
                            <i class="fa fa-brush me-1"></i> Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tiling Work -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="compact-category">
                    <h3 class="compact-category-title">
                        <i class="fa fa-th-large" style="color: #9775fa;"></i>
                        Tiling Work
                    </h3>
                    <div class="compact-service-list">
                        @php
                        $tilingServices = [
                            ['name' => 'Floor Tile Installation', 'price' => 'AED 500+'],
                            ['name' => 'Marble Work', 'price' => 'AED 700+'],
                            ['name' => 'Tile Repair', 'price' => 'AED 250+'],
                            ['name' => 'Grouting & Sealing', 'price' => 'AED 300+'],
                        ];
                        @endphp
                        
                        @foreach($tilingServices as $service)
                        <div class="compact-service-item">
                            <span class="service-name">{{ $service['name'] }}</span>
                            <span class="service-price-sm">{{ $service['price'] }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-3">
                        <a href="tel:+971000000000" class="btn-compact w-100 text-center">
                            <i class="fa fa-hammer me-1"></i> Book Tiling
                        </a>
                    </div>
                </div>
            </div>

            <!-- Aluminum & Glass -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="compact-category">
                    <h3 class="compact-category-title">
                        <i class="fa fa-window-restore" style="color: #40c057;"></i>
                        Aluminum & Glass
                    </h3>
                    <div class="compact-service-list">
                        @php
                        $glassServices = [
                            ['name' => 'Window Installation', 'price' => 'AED 400+'],
                            ['name' => 'Glass Partitions', 'price' => 'AED 600+'],
                            ['name' => 'Curtain Walls', 'price' => 'AED 800+'],
                            ['name' => 'Shop Front Works', 'price' => 'AED 700+'],
                        ];
                        @endphp
                        
                        @foreach($glassServices as $service)
                        <div class="compact-service-item">
                            <span class="service-name">{{ $service['name'] }}</span>
                            <span class="service-price-sm">{{ $service['price'] }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-3">
                        <a href="tel:+971000000000" class="btn-compact w-100 text-center">
                            <i class="fa fa-tools me-1"></i> Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Gypsum Work -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="compact-category">
                    <h3 class="compact-category-title">
                        <i class="fa fa-grip-lines" style="color: #4dabf7;"></i>
                        Gypsum Work
                    </h3>
                    <div class="compact-service-list">
                        @php
                        $gypsumServices = [
                            ['name' => 'Gypsum Ceiling', 'price' => 'AED 350+'],
                            ['name' => 'Partition Walls', 'price' => 'AED 450+'],
                            ['name' => 'False Ceiling', 'price' => 'AED 500+'],
                            ['name' => 'Cornice Work', 'price' => 'AED 300+'],
                        ];
                        @endphp
                        
                        @foreach($gypsumServices as $service)
                        <div class="compact-service-item">
                            <span class="service-name">{{ $service['name'] }}</span>
                            <span class="service-price-sm">{{ $service['price'] }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-3">
                        <a href="tel:+971000000000" class="btn-compact w-100 text-center">
                            <i class="fa fa-ruler me-1"></i> Book Service
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tesla Charger -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="compact-category">
                    <h3 class="compact-category-title">
                        <i class="fa fa-charging-station" style="color: #f06595;"></i>
                        EV Charging
                    </h3>
                    <div class="compact-service-list">
                        @php
                        $evServices = [
                            ['name' => 'Tesla Charger Install', 'price' => 'AED 1200+'],
                            ['name' => 'Commercial Stations', 'price' => 'AED 2000+'],
                            ['name' => 'Load Assessment', 'price' => 'AED 300'],
                            ['name' => 'Smart Charging', 'price' => 'AED 800+'],
                        ];
                        @endphp
                        
                        @foreach($evServices as $service)
                        <div class="compact-service-item">
                            <span class="service-name">{{ $service['name'] }}</span>
                            <span class="service-price-sm">{{ $service['price'] }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-3">
                        <a href="tel:+971000000000" class="btn-compact w-100 text-center" style="background-color: #f06595;">
                            <i class="fa fa-bolt me-1"></i> EV Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for category links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    const yOffset = -80;
                    const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    window.scrollTo({top: y, behavior: 'smooth'});
                }
            }
        });
    });
});
</script>
@endsection