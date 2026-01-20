@extends('layouts.app')

@section('title', 'Tesla Charger Installation in Dubai | Home & Commercial EV Charging Solutions')
@section('meta_description', 'Professional Tesla charger installation in Dubai. Wall Connector, Destination Charger, Supercharger installations for homes, villas, offices, and commercial properties.')
@section('meta_keywords', 'Tesla charger installation Dubai, EV charger installation Dubai, home charging station Dubai, Tesla Wall Connector Dubai, electric vehicle charging Dubai')

@section('content')

<style>
    :root {
        --tesla-red: #cc0000;
        --tesla-black: #000000;
        --tesla-gray: #5c5d61;
        --tesla-silver: #d0d1d2;
        --tesla-blue: #3e6ae1;
        --tesla-green: #2bcd72;
        --tesla-dark: #171a20;
    }

    /* Hero Section */
    .tesla-hero {
        background: linear-gradient(rgba(23, 26, 32, 0.9), rgba(23, 26, 32, 0.95)),
                    url('https://images.unsplash.com/photo-1593941707882-a5bba5337f2a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 500px;
        position: relative;
    }

    .tesla-hero::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100px;
        background: linear-gradient(to bottom, transparent, var(--tesla-dark));
    }

    .tesla-hero-content {
        padding: 100px 0 120px;
        position: relative;
        z-index: 1;
    }

    .tesla-badge {
        background: var(--tesla-red);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
    }

    /* HOW WE WORK Section */
    .how-we-work-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);
        color: var(--tesla-dark);
    }

    .work-process-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        border: 2px solid var(--tesla-silver);
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
        background: var(--tesla-red);
    }

    .work-process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(204, 0, 0, 0.15);
        border-color: var(--tesla-red);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--tesla-red);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.5rem;
        margin: 0 auto 20px;
        position: relative;
        border: 3px solid rgba(204, 0, 0, 0.2);
    }

    .step-number::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border: 2px solid var(--tesla-red);
        border-radius: 50%;
        animation: teslaPulse 2s infinite;
    }

    @keyframes teslaPulse {
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
        background: linear-gradient(135deg, var(--tesla-red), #990000);
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
    .tesla-service-card {
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

    .tesla-service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--tesla-red);
    }

    .tesla-service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(204, 0, 0, 0.15);
        border-color: var(--tesla-red);
    }

    .tesla-service-card.premium {
        border-color: var(--tesla-blue);
    }

    .tesla-service-card.premium::before {
        background: var(--tesla-blue);
    }

    .tesla-service-card.commercial {
        border-color: var(--tesla-green);
    }

    .tesla-service-card.commercial::before {
        background: var(--tesla-green);
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
        background: linear-gradient(135deg, var(--tesla-red), #990000);
        border: 3px solid rgba(204, 0, 0, 0.2);
    }

    .premium .service-icon {
        background: linear-gradient(135deg, var(--tesla-blue), #1e3a8a);
        border-color: rgba(62, 106, 225, 0.2);
    }

    .commercial .service-icon {
        background: linear-gradient(135deg, var(--tesla-green), #15803d);
        border-color: rgba(43, 205, 114, 0.2);
    }

    /* Charger Types */
    .charger-type-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid var(--tesla-silver);
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }

    .charger-type-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-color: var(--tesla-red);
    }

    .charger-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin: 0 auto 20px;
        color: white;
        background: linear-gradient(135deg, var(--tesla-gray), var(--tesla-dark));
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
        background: var(--tesla-red);
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

    /* Benefits Section */
    .benefit-card {
        background: white;
        border-radius: 10px;
        padding: 25px;
        border: 1px solid var(--tesla-silver);
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }

    .benefit-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-color: var(--tesla-red);
    }

    .benefit-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin: 0 auto 15px;
        color: white;
        background: linear-gradient(135deg, var(--tesla-red), var(--tesla-dark));
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
        color: var(--tesla-red);
        border-bottom-color: var(--tesla-red);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--tesla-red);
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
        background: rgba(23, 26, 32, 0.9);
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
        border-color: var(--tesla-red);
        box-shadow: 0 10px 30px rgba(204, 0, 0, 0.15);
        transform: scale(1.02);
    }

    .pricing-card.popular::before {
        content: 'Most Popular';
        position: absolute;
        top: 15px;
        right: -30px;
        background: var(--tesla-red);
        color: white;
        padding: 5px 30px;
        transform: rotate(45deg);
        font-size: 0.8rem;
        font-weight: 600;
    }

    .price-tag {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--tesla-red);
        line-height: 1;
    }

    /* Warranty Badge */
    .warranty-badge {
        background: linear-gradient(135deg, var(--tesla-green), #15803d);
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        display: inline-flex;
        align-items: center;
        font-weight: 600;
    }

    /* DEWA Integration */
    .dewa-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid #ffd700;
        transition: all 0.3s ease;
    }

    .dewa-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(255, 215, 0, 0.1);
    }

    /* Tesla Models Compatibility */
    .model-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        border: 1px solid var(--tesla-silver);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
    }

    .model-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-color: var(--tesla-red);
    }

    .model-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        margin: 0 auto 15px;
        color: white;
        background: linear-gradient(135deg, var(--tesla-red), #990000);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .tesla-hero-content {
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
        
        .tesla-badge {
            font-size: 0.9rem;
            padding: 6px 12px;
        }
    }
</style>

<!-- Hero Section -->
<section class="tesla-hero">
    <div class="container">
        <div class="row align-items-center tesla-hero-content">
            <div class="col-lg-8 text-white">
                <div class="tesla-badge">
                    <i class="fa fa-bolt me-2"></i> Certified Tesla Charger Installer
                </div>
                <h1 class="display-5 fw-bold mb-3">Tesla Charger Installation in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    Professional installation of Tesla Wall Connectors, Destination Chargers, and home EV charging solutions across Dubai. DEWA-approved installations with 3-year warranty.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971501234567" class="btn btn-danger btn-lg px-4">
                        <i class="fa fa-charging-station me-2"></i> Get Free Site Survey
                    </a>
                    <a href="#booking" class="btn btn-outline-light btn-lg px-4">
                        <i class="fa fa-calendar me-2"></i> Book Installation
                    </a>
                </div>
                <div class="mt-4">
                    <div class="d-flex flex-wrap gap-3">
                        <span class="badge bg-dark px-3 py-2">
                            <i class="fa fa-shield-alt me-1"></i> DEWA Approved
                        </span>
                        <span class="badge bg-dark px-3 py-2">
                            <i class="fa fa-award me-1"></i> Tesla Certified
                        </span>
                        <span class="badge bg-dark px-3 py-2">
                            <i class="fa fa-bolt me-1"></i> 48-Hour Installation
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Banner -->
<section class="py-3" style="background: linear-gradient(90deg, var(--tesla-red), #cc3333);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 p-3">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <i class="fa fa-bolt fa-2x text-white"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-1 text-white">Need Immediate Charger Installation?</h4>
                        <p class="text-white mb-0">Same-day installation available for urgent requirements</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-3 text-lg-end">
                <a href="tel:+971501234567" class="btn btn-light btn-lg px-4">
                    <i class="fa fa-phone me-2"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- HOW WE WORK Section -->
<section class="how-we-work-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge mb-3 px-3 py-2" style="background-color: var(--tesla-red); font-size: 0.9rem;">
                <i class="fa fa-cogs me-1"></i> Our Installation Process
            </span>
            <h2 class="fw-bold mb-3">HOW WE INSTALL TESLA CHARGERS</h2>
            <p class="opacity-90 mx-auto" style="max-width: 700px;">
                Professional 5-step process for safe, efficient, and DEWA-compliant Tesla charger installations
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3">Free Site Survey</h4>
                    <p class="opacity-90">
                        Technical assessment, electrical load analysis, and optimal location planning for your charger.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Technical Assessment</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3">DEWA Paperwork</h4>
                    <p class="opacity-90">
                        Handling all DEWA permit applications, electrical load approvals, and documentation.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Permit Processing</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3">Electrical Preparation</h4>
                    <p class="opacity-90">
                        Dedicated circuit installation, wiring, conduit setup, and electrical panel upgrades if needed.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Electrical Work</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3">Charger Installation</h4>
                    <p class="opacity-90">
                        Professional mounting of Tesla Wall Connector, proper wiring, and weatherproof installation.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Professional Installation</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3">Testing & Commissioning</h4>
                    <p class="opacity-90">
                        Comprehensive testing, DEWA inspection, app setup, and user training for optimal charging.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-danger">Quality Assurance</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--tesla-red), #990000); color: white; border-color: var(--tesla-red);">
                    <div class="step-number" style="background: white; color: var(--tesla-red);">✓</div>
                    <h4 class="fw-bold mb-3">Warranty & Support</h4>
                    <p>
                        3-year warranty, maintenance package, and 24/7 support for your Tesla charging setup.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-white text-danger">3-Year Warranty</span>
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
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Tesla Chargers Installed</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">3</div>
                            <div class="stat-label">Year Warranty</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">48h</div>
                            <div class="stat-label">Average Installation Time</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">DEWA Approval Rate</div>
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
            <h2 class="fw-bold mb-3" style="color: var(--tesla-dark);">Tesla Charger Installation Services</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Complete EV charging solutions for homes, villas, offices, and commercial properties in Dubai
            </p>
        </div>
        
        <div class="row g-4">
            @php
            $teslaServices = [
                [
                    'name' => 'Tesla Wall Connector',
                    'desc' => 'Professional installation of Tesla Gen 3 Wall Connector for home charging with up to 48A / 11.5kW.',
                    'icon' => 'fa-home',
                    'features' => ['Up to 48A / 11.5kW', 'Wi-Fi Enabled', 'Dynamic LED Ring', 'Weatherproof'],
                    'price' => 'AED 2,500',
                    'type' => 'standard',
                    'time' => '1-2 Days'
                ],
                [
                    'name' => 'Commercial Charger Installation',
                    'desc' => 'Multiple charger installations for offices, hotels, malls, and commercial buildings.',
                    'icon' => 'fa-building',
                    'features' => ['Multiple Units', 'Load Management', 'Billing Systems', '24/7 Access'],
                    'price' => 'AED 8,000+',
                    'type' => 'commercial',
                    'time' => '3-5 Days'
                ],
                [
                    'name' => 'Villa Charging Solution',
                    'desc' => 'Complete EV charging setup for villas including electrical upgrades and smart scheduling.',
                    'icon' => 'fa-house-user',
                    'features' => ['Dedicated Circuit', 'Smart Scheduling', 'Electrical Upgrade', 'Remote Access'],
                    'price' => 'AED 3,500',
                    'type' => 'premium',
                    'time' => '2-3 Days'
                ],
                [
                    'name' => 'Apartment Complex',
                    'desc' => 'Shared charging solutions for apartment buildings and residential complexes in Dubai.',
                    'icon' => 'fa-building',
                    'features' => ['Shared Infrastructure', 'Usage Monitoring', 'Resident Access', 'Central Billing'],
                    'price' => 'AED 15,000+',
                    'type' => 'commercial',
                    'time' => '5-7 Days'
                ],
                [
                    'name' => 'Destination Charger',
                    'desc' => 'Tesla Destination Charger installation for hotels, restaurants, and public venues.',
                    'icon' => 'fa-map-marker-alt',
                    'features' => ['Tesla Network', 'High Visibility', 'Custom Branding', 'Maintenance'],
                    'price' => 'AED 5,000',
                    'type' => 'premium',
                    'time' => '3-4 Days'
                ],
                [
                    'name' => 'Electrical Panel Upgrade',
                    'desc' => 'Electrical system upgrades to support high-power EV charging requirements.',
                    'icon' => 'fa-bolt',
                    'features' => ['Panel Upgrade', 'Load Calculation', 'DEWA Approval', 'Safety Compliance'],
                    'price' => 'AED 4,500+',
                    'type' => 'standard',
                    'time' => '2-3 Days'
                ],
            ];
            @endphp
            
            @foreach($teslaServices as $service)
            <div class="col-md-6 col-lg-4">
                <div class="tesla-service-card @if($service['type'] == 'premium') premium @elseif($service['type'] == 'commercial') commercial @endif">
                    <div class="service-icon">
                        <i class="fa {{ $service['icon'] }}"></i>
                    </div>
                    <h4 class="fw-bold mb-3">{{ $service['name'] }}</h4>
                    <p class="text-muted mb-4">{{ $service['desc'] }}</p>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($service['features'] as $feature)
                        <li class="py-1">
                            <i class="fa fa-check-circle me-2" style="color: var(--tesla-red);"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-4 d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fw-bold h5" style="color: var(--tesla-red);">{{ $service['price'] }}</span>
                            <span class="text-muted d-block small">Installation Time: {{ $service['time'] }}</span>
                        </div>
                        <a href="tel:+971501234567" class="btn btn-sm btn-danger">
                            <i class="fa fa-bolt me-1"></i> Get Quote
                        </a>
                    </div>
                    
                    @if($service['type'] == 'premium')
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-primary">Premium</span>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Charger Types -->
<section class="py-5" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--tesla-dark);">Tesla Charger Types</h3>
            <p class="text-muted">Choose the right charger for your Tesla in Dubai</p>
        </div>
        
        <div class="row g-4">
            @php
            $chargerTypes = [
                [
                    'name' => 'Gen 3 Wall Connector',
                    'desc' => 'Latest Tesla home charger with Wi-Fi, up to 48A, and smart features',
                    'power' => 'Up to 48A / 11.5kW',
                    'range' => '~70 km/h',
                    'icon' => 'fa-home'
                ],
                [
                    'name' => 'Mobile Connector',
                    'desc' => 'Portable charger with adapters for different power outlets',
                    'power' => 'Up to 32A / 7.7kW',
                    'range' => '~45 km/h',
                    'icon' => 'fa-plug'
                ],
                [
                    'name' => 'Destination Charger',
                    'desc' => 'Commercial charger for hotels, restaurants, and public places',
                    'power' => 'Up to 80A / 19.2kW',
                    'range' => '~115 km/h',
                    'icon' => 'fa-map-marker-alt'
                ],
                [
                    'name' => 'Supercharger',
                    'desc' => 'Fastest charging for Tesla vehicles (commercial installations only)',
                    'power' => 'Up to 250kW',
                    'range' => '~1,600 km/h',
                    'icon' => 'fa-bolt'
                ],
            ];
            @endphp
            
            @foreach($chargerTypes as $charger)
            <div class="col-md-6 col-lg-3">
                <div class="charger-type-card">
                    <div class="charger-icon">
                        <i class="fa {{ $charger['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-2">{{ $charger['name'] }}</h5>
                    <p class="small text-muted mb-3">{{ $charger['desc'] }}</p>
                    <div class="mb-2">
                        <span class="fw-bold" style="color: var(--tesla-red);">{{ $charger['power'] }}</span>
                        <div class="small text-muted">Charging Power</div>
                    </div>
                    <div>
                        <span class="fw-bold" style="color: var(--tesla-blue);">{{ $charger['range'] }}</span>
                        <div class="small text-muted">Range per Hour</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Tesla Models -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--tesla-dark);">Compatible Tesla Models</h3>
            <p class="text-muted">We install chargers for all Tesla models available in Dubai</p>
        </div>
        
        <div class="row g-4">
            @php
            $teslaModels = [
                ['name' => 'Model 3', 'icon' => 'fa-car', 'range' => '491-602 km'],
                ['name' => 'Model Y', 'icon' => 'fa-car-side', 'range' => '455-533 km'],
                ['name' => 'Model S', 'icon' => 'fa-car', 'range' => '652 km'],
                ['name' => 'Model X', 'icon' => 'fa-car-side', 'range' => '560 km'],
                ['name' => 'Model S Plaid', 'icon' => 'fa-bolt', 'range' => '637 km'],
                ['name' => 'Model X Plaid', 'icon' => 'fa-bolt', 'range' => '536 km'],
                ['name' => 'Cybertruck', 'icon' => 'fa-truck-pickup', 'range' => '400-800 km'],
                ['name' => 'Roadster', 'icon' => 'fa-road', 'range' => '1,000 km'],
            ];
            @endphp
            
            @foreach($teslaModels as $model)
            <div class="col-6 col-md-3">
                <div class="model-card">
                    <div class="model-icon">
                        <i class="fa {{ $model['icon'] }}"></i>
                    </div>
                    <h6 class="fw-bold mb-2">{{ $model['name'] }}</h6>
                    <p class="small text-muted mb-0">Range: {{ $model['range'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Installation Benefits -->
<section class="py-5" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--tesla-dark);">Benefits of Professional Installation</h3>
            <p class="text-muted">Why choose our certified Tesla charger installation services</p>
        </div>
        
        <div class="row g-4">
            @php
            $benefits = [
                ['name' => 'DEWA Approved', 'desc' => 'All installations comply with DEWA regulations and safety standards', 'icon' => 'fa-shield-alt'],
                ['name' => '3-Year Warranty', 'desc' => 'Comprehensive warranty on installation and electrical work', 'icon' => 'fa-award'],
                ['name' => 'Fast Installation', 'desc' => 'Most installations completed within 48 hours from approval', 'icon' => 'fa-bolt'],
                ['name' => 'Certified Electricians', 'desc' => 'Tesla-certified technicians with EV charging expertise', 'icon' => 'fa-user-check'],
                ['name' => 'Smart Charging', 'desc' => 'Wi-Fi enabled chargers with app control and scheduling', 'icon' => 'fa-wifi'],
                ['name' => 'After-Sales Support', 'desc' => '24/7 technical support and maintenance services', 'icon' => 'fa-headset'],
            ];
            @endphp
            
            @foreach($benefits as $benefit)
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fa {{ $benefit['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-2">{{ $benefit['name'] }}</h5>
                    <p class="small text-muted mb-0">{{ $benefit['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- DEWA Integration -->
<section class="py-5">
    <div class="container">
        <div class="dewa-card">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3">
                            <i class="fa fa-file-contract fa-2x" style="color: #ffd700;"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-1">DEWA Approval & Paperwork</h3>
                            <p class="text-muted mb-0">We handle all DEWA requirements for Tesla charger installations</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fa fa-check-circle me-2" style="color: var(--tesla-green);"></i> DEWA Load Approval</li>
                                <li class="mb-2"><i class="fa fa-check-circle me-2" style="color: var(--tesla-green);"></i> Electrical Permit Application</li>
                                <li><i class="fa fa-check-circle me-2" style="color: var(--tesla-green);"></i> Site Inspection Coordination</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fa fa-check-circle me-2" style="color: var(--tesla-green);"></i> Documentation Submission</li>
                                <li class="mb-2"><i class="fa fa-check-circle me-2" style="color: var(--tesla-green);"></i> Compliance Certification</li>
                                <li><i class="fa fa-check-circle me-2" style="color: var(--tesla-green);"></i> Green Charger Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/DEWA_logo.svg/2560px-DEWA_logo.svg.png" alt="DEWA" style="height: 80px; margin-top: 20px;">
                    <div class="mt-3">
                        <span class="badge bg-warning text-dark">Approved Installer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5" style="background-color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--tesla-dark);">Transparent Pricing</h2>
            <p class="text-muted">Complete package pricing including installation, materials, and DEWA fees</p>
        </div>
        
        <div class="row g-4">
            @php
            $pricingPlans = [
                [
                    'name' => 'Basic Installation',
                    'price' => '2,500',
                    'desc' => 'Tesla Wall Connector Installation',
                    'features' => ['Tesla Gen 3 Wall Connector', 'Standard Installation', '10-meter cable', 'DEWA Permit Processing', '1-Year Warranty'],
                    'color' => '#5c5d61',
                    'popular' => false
                ],
                [
                    'name' => 'Premium Package',
                    'price' => '3,800',
                    'desc' => 'Complete Home Charging Solution',
                    'features' => ['Tesla Gen 3 Wall Connector', 'Premium Installation', '15-meter cable', 'Electrical Panel Check', 'DEWA Full Support', 'Smart Scheduling Setup', '3-Year Warranty'],
                    'color' => '#cc0000',
                    'popular' => true
                ],
                [
                    'name' => 'Commercial Package',
                    'price' => '15,000+',
                    'desc' => 'Multiple Charger Installation',
                    'features' => ['Multiple Wall Connectors', 'Load Management System', 'Billing System Setup', '24/7 Monitoring', 'Maintenance Contract', '5-Year Warranty', 'Priority Support'],
                    'color' => '#3e6ae1',
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
                            <small class="text-muted fw-normal d-block">Inclusive of VAT</small>
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
                            <i class="fa fa-bolt me-2"></i> Get This Package
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <div class="warranty-badge">
                <i class="fa fa-shield-alt me-2"></i> All Installations Include 3-Year Warranty
            </div>
            <p class="text-muted mt-3">
                *Prices include charger unit, installation, materials, and DEWA fees. Additional charges may apply for electrical upgrades.
            </p>
        </div>
    </div>
</section>

<!-- Installation Process Details -->
<section class="py-5" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4" style="color: var(--tesla-dark);">Detailed Installation Process</h3>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Site Survey & Planning</h5>
                    <p class="text-muted">Our certified technician visits your property to assess electrical capacity, determine optimal charger location, and plan the installation route.</p>
                </div>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">DEWA Application</h5>
                    <p class="text-muted">We submit all required documents to DEWA for electrical load approval and installation permits on your behalf.</p>
                </div>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Electrical Preparation</h5>
                    <p class="text-muted">Installation of dedicated circuit, wiring through conduit, and any necessary electrical panel upgrades.</p>
                </div>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Charger Installation</h5>
                    <p class="text-muted">Mounting of Tesla Wall Connector, final wiring connections, and weatherproof sealing for outdoor installations.</p>
                </div>
                <div class="install-step">
                    <h5 class="fw-bold mb-2">Testing & Handover</h5>
                    <p class="text-muted">Comprehensive testing, DEWA inspection coordination, app setup, and user training session.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="gallery-section">
                    <div class="gallery-grid" id="teslaGallery">
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
            <h3 class="fw-bold mb-3" style="color: var(--tesla-dark);">Tesla Charger FAQs</h3>
            <p class="text-muted">Common questions about Tesla charger installation in Dubai</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="teslaFAQ">
                    @php
                    $faqs = [
                        [
                            'question' => 'How long does Tesla charger installation take in Dubai?',
                            'answer' => 'Most installations are completed within 48 hours after DEWA approval. This includes 1 day for site survey and DEWA paperwork, and 1 day for actual installation and testing.'
                        ],
                        [
                            'question' => 'Do I need DEWA approval for Tesla charger installation?',
                            'answer' => 'Yes, all EV charger installations in Dubai require DEWA approval. We handle the entire DEWA application process including load approval, permits, and final inspection.'
                        ],
                        [
                            'question' => 'What is the cost of charging a Tesla at home in Dubai?',
                            'answer' => 'Charging cost depends on DEWA\'s Green Charger tariff (approximately 29 fils/kWh for EVs). A full charge for a Tesla Model 3 (75 kWh) costs around AED 22, which provides about 450 km of range.'
                        ],
                        [
                            'question' => 'Can I install a Tesla charger in an apartment building?',
                            'answer' => 'Yes, we provide solutions for apartment buildings including shared charging infrastructure, usage monitoring systems, and proper approvals from building management and DEWA.'
                        ],
                        [
                            'question' => 'What warranty do you provide on installations?',
                            'answer' => 'We provide a 3-year warranty on all installation work and electrical components. The Tesla Wall Connector itself comes with a 4-year manufacturer warranty.'
                        ],
                        [
                            'question' => 'Do you provide maintenance services?',
                            'answer' => 'Yes, we offer annual maintenance packages that include charger inspection, software updates, and 24/7 emergency support for any charging issues.'
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
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#teslaFAQ">
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
<section id="booking" class="py-5" style="background-color: var(--tesla-dark); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="fw-bold mb-3">Schedule Your Free Site Survey</h2>
                <p class="opacity-90 mb-4">
                    Get a professional assessment and quotation for your Tesla charger installation. Our expert will visit your property within 24 hours.
                </p>
                
                <div class="row g-3">
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-bolt fa-2x" style="color: var(--tesla-red);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Free Site Survey</h6>
                                    <p class="small opacity-90 mb-0">Professional assessment and quotation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-file-contract fa-2x" style="color: var(--tesla-blue);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">DEWA Paperwork</h6>
                                    <p class="small opacity-90 mb-0">We handle all DEWA requirements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-shield-alt fa-2x" style="color: var(--tesla-green);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">3-Year Warranty</h6>
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
                        <form id="teslaBookingForm">
                            <div class="mb-3">
                                <label class="form-label">Installation Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select Installation Type</option>
                                    <option>Tesla Wall Connector (Home)</option>
                                    <option>Villa Charging Solution</option>
                                    <option>Apartment Building</option>
                                    <option>Commercial Installation</option>
                                    <option>Destination Charger</option>
                                    <option>Electrical Upgrade</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Property Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select Property Type</option>
                                    <option>Villa</option>
                                    <option>Apartment</option>
                                    <option>Office Building</option>
                                    <option>Hotel/Resort</option>
                                    <option>Shopping Mall</option>
                                    <option>Industrial</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Number of Chargers</label>
                                    <select class="form-select">
                                        <option>1 Charger</option>
                                        <option>2 Chargers</option>
                                        <option>3-5 Chargers</option>
                                        <option>6-10 Chargers</option>
                                        <option>10+ Chargers</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Tesla Model</label>
                                    <select class="form-select">
                                        <option>Model 3</option>
                                        <option>Model Y</option>
                                        <option>Model S</option>
                                        <option>Model X</option>
                                        <option>Cybertruck</option>
                                        <option>Multiple Models</option>
                                    </select>
                                </div>
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
                                <i class="fa fa-bolt me-2"></i> Schedule Free Site Survey
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
        { img: 'https://images.unsplash.com/photo-1593941707882-a5bba5337f2a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Tesla Wall Connector Installation - Emirates Hills' },
        { img: 'https://images.unsplash.com/photo-1621544402535-5d0e8a1c45f9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Villa Charging Setup - Arabian Ranches' },
        { img: 'https://images.unsplash.com/photo-1629812430946-8e2e1660e1e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Commercial Charger Installation - Business Bay' },
        { img: 'https://images.unsplash.com/photo-1593941671393-8c24d0c7c0c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Apartment Complex Charging - Dubai Marina' },
        { img: 'https://images.unsplash.com/photo-1551836225-5685c5166337?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Electrical Panel Upgrade for EV Charging' },
        { img: 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Tesla Destination Charger - Hotel Installation' },
    ];

    const galleryGrid = document.getElementById('teslaGallery');

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
    document.getElementById('teslaBookingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your Tesla charger installation request! Our expert will contact you within 24 hours to schedule the free site survey.');
        this.reset();
    });
});
</script>



@endsection