@extends('layouts.app')

@section('title', 'Professional Plumbing Services in Dubai | OneCall Technical Services')
@section('meta_description', 'Expert plumbing services in Dubai: emergency plumbing, water heater repair, pipe installation, drainage cleaning, bathroom plumbing, kitchen plumbing, and complete plumbing solutions.')
@section('meta_keywords', 'plumbing services Dubai, emergency plumber Dubai, water heater repair Dubai, pipe installation Dubai, drainage cleaning Dubai, bathroom plumbing Dubai, kitchen plumbing Dubai')

@section('content')

<style>
    :root {
        --plumber-blue: #2196f3;
        --plumber-green: #4caf50;
        --plumber-orange: #ff9800;
        --plumber-red: #f44336;
        --plumber-purple: #9c27b0;
        --plumber-dark: #263238;
        --plumber-water: #e3f2fd;
    }

    /* Hero Section */
    .plumber-hero {
        background: linear-gradient(rgba(33, 150, 243, 0.9), rgba(33, 150, 243, 0.95)),
                    url('https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        min-height: 400px;
        position: relative;
    }

    .plumber-hero-content {
        padding: 80px 0 100px;
    }

    /* HOW WE WORK Section */
    .how-we-work-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
        color: var(--plumber-dark);
    }

    .work-process-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        border: 2px solid var(--plumber-blue);
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
        background: var(--plumber-blue);
    }

    .work-process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(33, 150, 243, 0.15);
        border-color: var(--plumber-green);
    }

    .work-process-card:hover::before {
        background: var(--plumber-green);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: var(--plumber-blue);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.5rem;
        margin: 0 auto 20px;
        position: relative;
        border: 3px solid #bbdefb;
    }

    .step-number::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border: 2px solid var(--plumber-blue);
        border-radius: 50%;
        animation: plumberPulse 2s infinite;
    }

    @keyframes plumberPulse {
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
        background: linear-gradient(135deg, var(--plumber-blue), #1565c0);
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
    .plumber-service-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .plumber-service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--plumber-blue);
    }

    .plumber-service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(33, 150, 243, 0.15);
        border-color: var(--plumber-blue);
    }

    .plumber-service-card.emergency {
        border-color: var(--plumber-red);
    }

    .plumber-service-card.emergency::before {
        background: var(--plumber-red);
    }

    .plumber-service-card.popular {
        border-color: var(--plumber-green);
    }

    .plumber-service-card.popular::before {
        background: var(--plumber-green);
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
        background: linear-gradient(135deg, var(--plumber-blue), #0d47a1);
        border: 3px solid #bbdefb;
    }

    .emergency .service-icon {
        background: linear-gradient(135deg, var(--plumber-red), #c62828);
        border-color: #ffcdd2;
    }

    .popular .service-icon {
        background: linear-gradient(135deg, var(--plumber-green), #2e7d32);
        border-color: #c8e6c9;
    }

    /* Emergency Banner */
    .emergency-banner {
        background: linear-gradient(90deg, var(--plumber-red), #ef5350);
        border-radius: 15px;
        overflow: hidden;
        position: relative;
        margin: 40px 0;
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
        color: var(--plumber-blue);
        border-bottom-color: var(--plumber-blue);
    }

    .gallery-tab:hover:not(.active) {
        color: var(--plumber-blue);
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
        background: rgba(33, 150, 243, 0.9);
        color: white;
        padding: 15px;
        font-size: 0.9rem;
    }

    /* Problem Solutions */
    .problem-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border-left: 5px solid var(--plumber-blue);
        transition: all 0.3s ease;
        margin-bottom: 20px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    }

    .problem-card:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(33, 150, 243, 0.1);
    }

    .problem-card.urgent {
        border-left-color: var(--plumber-red);
    }

    /* Brands Section */
    .brands-section {
        background: #f8fafc;
        padding: 60px 0;
    }

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
        height: 100px;
    }

    .brand-item:hover {
        border-color: var(--plumber-blue);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-3px);
    }

    /* Tool Showcase */
    .tool-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        border: 1px solid #e1e8ed;
        transition: all 0.3s ease;
        height: 100%;
    }

    .tool-card:hover {
        border-color: var(--plumber-blue);
        box-shadow: 0 5px 15px rgba(33, 150, 243, 0.1);
        transform: translateY(-3px);
    }

    .tool-icon {
        width: 60px;
        height: 60px;
        background: var(--plumber-water);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--plumber-blue);
        margin: 0 auto 15px;
    }

    /* Pricing Table */
    .pricing-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        height: 100%;
    }

    .pricing-card.popular {
        border-color: var(--plumber-green);
        box-shadow: 0 10px 30px rgba(76, 175, 80, 0.15);
        transform: scale(1.02);
        position: relative;
        overflow: hidden;
    }

    .pricing-card.popular::before {
        content: 'Most Popular';
        position: absolute;
        top: 15px;
        right: -30px;
        background: var(--plumber-green);
        color: white;
        padding: 5px 30px;
        transform: rotate(45deg);
        font-size: 0.8rem;
        font-weight: 600;
    }

    .price-tag {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--plumber-blue);
        line-height: 1;
    }

    /* Warranty Badge */
    .warranty-badge {
        background: linear-gradient(135deg, var(--plumber-green), #2e7d32);
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        display: inline-flex;
        align-items: center;
        font-weight: 600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .plumber-hero-content {
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
        
        .brand-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .emergency-banner .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

<!-- Hero Section -->
<section class="plumber-hero">
    <div class="container">
        <div class="row align-items-center plumber-hero-content">
            <div class="col-lg-8 text-white">
                <h1 class="display-5 fw-bold mb-3">Professional Plumbing Services in Dubai</h1>
                <p class="lead mb-4" style="font-size: 1.2rem;">
                    24/7 Emergency plumbing services, water heater repair, pipe installation, drainage cleaning, and complete plumbing solutions for homes and businesses across Dubai.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+971501234567" class="btn btn-light btn-lg px-4">
                        <i class="fa fa-phone me-2"></i> Emergency Call: 24/7
                    </a>
                    <a href="#booking" class="btn btn-outline-light btn-lg px-4">
                        <i class="fa fa-calendar me-2"></i> Book Service
                    </a>
                </div>
                <div class="mt-4">
                    <div class="d-flex flex-wrap gap-3">
                        <span class="badge bg-white text-primary px-3 py-2">
                            <i class="fa fa-clock me-1"></i> 30-Minute Response
                        </span>
                        <span class="badge bg-white text-primary px-3 py-2">
                            <i class="fa fa-shield-alt me-1"></i> 2-Year Warranty
                        </span>
                        <span class="badge bg-white text-primary px-3 py-2">
                            <i class="fa fa-check-circle me-1"></i> Certified Plumbers
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Banner -->
<section class="py-3">
    <div class="container">
        <div class="emergency-banner">
            <div class="row align-items-center">
                <div class="col-lg-8 p-4">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="fa fa-exclamation-triangle fa-3x text-white"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-1 text-white">Plumbing Emergency?</h3>
                            <p class="text-white mb-0">Water leakage, blocked drain, or no water? We're available 24/7!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-4 text-lg-end">
                    <a href="tel:+971501234567" class="btn btn-light btn-lg px-4">
                        <i class="fa fa-phone me-2"></i> Call Now
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
            <span class="badge mb-3 px-3 py-2" style="background-color: var(--plumber-blue); font-size: 0.9rem;">
                <i class="fa fa-wrench me-1"></i> Our Process
            </span>
            <h2 class="fw-bold mb-3">HOW WE WORK</h2>
            <p class="opacity-90 mx-auto" style="max-width: 700px;">
                Our systematic 5-step approach ensures efficient, reliable, and permanent plumbing solutions
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">1</div>
                    <h4 class="fw-bold mb-3">Emergency Response</h4>
                    <p class="opacity-90">
                        Immediate response within 30 minutes for emergencies. 24/7 availability for all plumbing issues.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Quick Response</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">2</div>
                    <h4 class="fw-bold mb-3">Diagnosis & Inspection</h4>
                    <p class="opacity-90">
                        Advanced leak detection, camera inspection, and thorough problem analysis using modern tools.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Precise Diagnosis</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">3</div>
                    <h4 class="fw-bold mb-3">Solution & Quotation</h4>
                    <p class="opacity-90">
                        Clear explanation of the problem, multiple solution options, and transparent pricing with no hidden costs.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Transparent Pricing</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">4</div>
                    <h4 class="fw-bold mb-3">Professional Repair</h4>
                    <p class="opacity-90">
                        Expert repair using quality materials, proper techniques, and minimal disruption to your property.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Expert Workmanship</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card">
                    <div class="step-number">5</div>
                    <h4 class="fw-bold mb-3">Testing & Cleanup</h4>
                    <p class="opacity-90">
                        Thorough testing of repairs, complete cleanup, and warranty documentation for peace of mind.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-light text-primary">Quality Assurance</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="work-process-card" style="background: linear-gradient(135deg, var(--plumber-green), #2e7d32); color: white; border-color: var(--plumber-green);">
                    <div class="step-number" style="background: white; color: var(--plumber-green);">✓</div>
                    <h4 class="fw-bold mb-3">Follow-up Service</h4>
                    <p>
                        48-hour follow-up check, maintenance tips, and 2-year warranty on all plumbing work.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-white text-success">2-Year Warranty</span>
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
                            <div class="stat-label">Plumbing Jobs</div>
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
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Satisfaction Rate</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">30 Min</div>
                            <div class="stat-label">Response Time</div>
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
            <h2 class="fw-bold mb-3" style="color: var(--plumber-dark);">Our Plumbing Services</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Comprehensive plumbing solutions for residential, commercial, and industrial properties in Dubai
            </p>
        </div>
        
        <div class="row g-4">
            @php
            $plumbingServices = [
                [
                    'name' => 'Emergency Plumbing',
                    'desc' => '24/7 emergency response for water leaks, burst pipes, blocked drains, and urgent plumbing issues.',
                    'icon' => 'fa-exclamation-triangle',
                    'features' => ['24/7 Availability', '30-Minute Response', 'Leak Detection', 'Quick Fix'],
                    'price' => 'AED 200',
                    'type' => 'emergency'
                ],
                [
                    'name' => 'Water Heater Repair',
                    'desc' => 'Expert repair and maintenance of all water heater types including electric, gas, and solar.',
                    'icon' => 'fa-water',
                    'features' => ['All Brands', 'Same-Day Service', 'Parts Replacement', 'Maintenance'],
                    'price' => 'AED 300',
                    'type' => 'popular'
                ],
                [
                    'name' => 'Drain Cleaning',
                    'desc' => 'Professional drain and sewer cleaning using high-pressure jetting and camera inspection.',
                    'icon' => 'fa-shower',
                    'features' => ['Blockage Removal', 'Camera Inspection', 'Sewer Cleaning', 'Preventive'],
                    'price' => 'AED 250',
                    'type' => 'regular'
                ],
                [
                    'name' => 'Pipe Installation',
                    'desc' => 'Complete pipe installation and replacement using quality materials and expert techniques.',
                    'icon' => 'fa-pipe',
                    'features' => ['New Installation', 'Pipe Replacement', 'Water Lines', 'Gas Lines'],
                    'price' => 'AED 400',
                    'type' => 'regular'
                ],
                [
                    'name' => 'Bathroom Plumbing',
                    'desc' => 'Complete bathroom plumbing including toilets, showers, sinks, and fixture installation.',
                    'icon' => 'fa-bath',
                    'features' => ['Toilet Installation', 'Shower Plumbing', 'Sink Installation', 'Fixture Repair'],
                    'price' => 'AED 350',
                    'type' => 'popular'
                ],
                [
                    'name' => 'Kitchen Plumbing',
                    'desc' => 'Professional kitchen plumbing services for sinks, dishwashers, and water filtration systems.',
                    'icon' => 'fa-sink',
                    'features' => ['Sink Installation', 'Dishwasher Hookup', 'Water Filters', 'Garbage Disposal'],
                    'price' => 'AED 320',
                    'type' => 'regular'
                ],
            ];
            @endphp
            
            @foreach($plumbingServices as $service)
            <div class="col-md-6 col-lg-4">
                <div class="plumber-service-card @if($service['type'] == 'emergency') emergency @elseif($service['type'] == 'popular') popular @endif">
                    <div class="service-icon">
                        <i class="fa {{ $service['icon'] }}"></i>
                    </div>
                    <h4 class="fw-bold mb-3">{{ $service['name'] }}</h4>
                    <p class="text-muted mb-4">{{ $service['desc'] }}</p>
                    
                    <ul class="list-unstyled mb-4">
                        @foreach($service['features'] as $feature)
                        <li class="py-1">
                            <i class="fa fa-check-circle me-2" style="color: var(--plumber-green);"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="mt-4 d-flex justify-content-between align-items-center">
                        <span class="fw-bold h5" style="color: var(--plumber-blue);">{{ $service['price'] }}</span>
                        <a href="tel:+971501234567" class="btn btn-sm @if($service['type'] == 'emergency') btn-danger @elseif($service['type'] == 'popular') btn-success @else btn-primary @endif">
                            <i class="fa fa-phone me-1"></i> Call Now
                        </a>
                    </div>
                    
                    @if($service['type'] == 'emergency')
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-danger">24/7 Emergency</span>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Common Problems -->
<section class="py-5" style="background-color: var(--plumber-water);">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--plumber-dark);">Common Plumbing Problems We Fix</h3>
            <p class="text-muted">Quick solutions for your plumbing emergencies</p>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="problem-card urgent">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="fa fa-exclamation-circle fa-2x" style="color: var(--plumber-red);"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Water Leakage & Pipe Bursts</h5>
                            <p class="mb-0">Emergency repair for leaking pipes, dripping faucets, and burst pipes causing water damage.</p>
                        </div>
                    </div>
                </div>
                
                <div class="problem-card">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="fa fa-tint fa-2x" style="color: var(--plumber-blue);"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Blocked Drains & Toilets</h5>
                            <p class="mb-0">Professional unclogging of sinks, showers, toilets, and main sewer lines using advanced equipment.</p>
                        </div>
                    </div>
                </div>
                
                <div class="problem-card">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="fa fa-fire fa-2x" style="color: var(--plumber-orange);"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Water Heater Issues</h5>
                            <p class="mb-0">Repair and maintenance for no hot water, strange noises, leaks, and heating problems.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="problem-card">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="fa fa-tint-slash fa-2x" style="color: var(--plumber-blue);"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Low Water Pressure</h5>
                            <p class="mb-0">Diagnosis and repair of low water pressure issues in showers, sinks, and throughout the property.</p>
                        </div>
                    </div>
                </div>
                
                <div class="problem-card">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="fa fa-toilet fa-2x" style="color: var(--plumber-green);"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Running Toilets</h5>
                            <p class="mb-0">Fix for constantly running toilets, weak flushes, and toilet installation/replacement.</p>
                        </div>
                    </div>
                </div>
                
                <div class="problem-card urgent">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="fa fa-gas-pump fa-2x" style="color: var(--plumber-red);"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Gas Line Issues</h5>
                            <p class="mb-0">Emergency gas line repair, leak detection, and installation for kitchen and heating systems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="tel:+971501234567" class="btn btn-primary btn-lg px-4">
                <i class="fa fa-wrench me-2"></i> Get Problem Fixed Now
            </a>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--plumber-dark);">Our Plumbing Projects</h2>
            <p class="text-muted">Professional plumbing work across Dubai</p>
        </div>

        <!-- Gallery Tabs -->
        <div class="d-flex justify-content-center gallery-tabs">
            <button class="gallery-tab active" data-category="all">All Projects</button>
            <button class="gallery-tab" data-category="residential">Residential</button>
            <button class="gallery-tab" data-category="commercial">Commercial</button>
            <button class="gallery-tab" data-category="emergency">Emergency</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="plumbingGallery">
            <!-- Gallery items will be dynamically loaded -->
        </div>

        <div class="text-center">
            <a href="tel:+971501234567" class="btn btn-primary px-4">
                <i class="fa fa-images me-2"></i> View More Projects
            </a>
        </div>
    </div>
</section>

<!-- Tools & Equipment -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--plumber-dark);">Advanced Tools & Equipment</h3>
            <p class="text-muted">We use modern equipment for precise diagnostics and efficient repairs</p>
        </div>
        
        <div class="row g-4">
            @php
            $tools = [
                ['name' => 'Leak Detection Camera', 'desc' => 'Pinpoint leaks without damaging walls/floors', 'icon' => 'fa-video'],
                ['name' => 'Drain Inspection Camera', 'desc' => 'Visual inspection inside pipes and drains', 'icon' => 'fa-camera'],
                ['name' => 'High-Pressure Jetting', 'desc' => 'Powerful cleaning for blocked drains', 'icon' => 'fa-water'],
                ['name' => 'Pipe Locator', 'desc' => 'Locate underground pipes accurately', 'icon' => 'fa-map-marker-alt'],
                ['name' => 'Water Pressure Gauge', 'desc' => 'Measure and diagnose pressure issues', 'icon' => 'fa-tachometer-alt'],
                ['name' => 'Pipe Freezing Kit', 'desc' => 'Freeze pipes for repair without shutting water', 'icon' => 'fa-snowflake'],
            ];
            @endphp
            
            @foreach($tools as $tool)
            <div class="col-md-6 col-lg-4">
                <div class="tool-card">
                    <div class="tool-icon">
                        <i class="fa {{ $tool['icon'] }}"></i>
                    </div>
                    <h6 class="fw-bold mb-2">{{ $tool['name'] }}</h6>
                    <p class="small text-muted mb-0">{{ $tool['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Brands Section -->
<section class="brands-section">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--plumber-dark);">Trusted Plumbing Brands</h3>
            <p class="text-muted">We work with top-quality plumbing materials and brands</p>
        </div>
        
        <div class="brand-grid">
            @php
            $plumbingBrands = [
                'Geberit', 'Grohe', 'Hansgrohe', 'Kohler', 'American Standard',
                'Roca', 'Toto', 'Jaquar', 'Cera', 'Hindware',
                'Aquaguard', 'Blanco', 'Franke', 'Duravit', 'Viega'
            ];
            @endphp
            
            @foreach($plumbingBrands as $brand)
            <div class="brand-item">
                <span class="fw-bold">{{ $brand }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: var(--plumber-dark);">Transparent Pricing</h2>
            <p class="text-muted">Clear pricing with service charge including diagnosis and labor</p>
        </div>
        
        <div class="row g-4">
            @php
            $pricingPlans = [
                [
                    'name' => 'Basic Service',
                    'price' => '150',
                    'unit' => 'Starting From',
                    'features' => ['Basic Diagnosis', 'Minor Repairs', '1-Hour Labor', '30-Day Warranty'],
                    'color' => '#2196f3',
                    'popular' => false
                ],
                [
                    'name' => 'Standard Package',
                    'price' => '300',
                    'unit' => 'Most Popular',
                    'features' => ['Complete Diagnosis', 'Medium Repairs', '2-Hour Labor', '6-Month Warranty', 'Parts Included*'],
                    'color' => '#4caf50',
                    'popular' => true
                ],
                [
                    'name' => 'Premium Service',
                    'price' => '500',
                    'unit' => 'Complete Solution',
                    'features' => ['Advanced Diagnosis', 'Major Repairs', '4-Hour Labor', '2-Year Warranty', 'All Parts Included', 'Free Follow-up'],
                    'color' => '#9c27b0',
                    'popular' => false
                ],
            ];
            @endphp
            
            @foreach($pricingPlans as $plan)
            <div class="col-md-6 col-lg-4">
                <div class="pricing-card @if($plan['popular']) popular @endif">
                    <div class="pricing-header">
                        <h4 class="fw-bold mb-2">{{ $plan['name'] }}</h4>
                        <div class="price-tag" style="color: {{ $plan['color'] }};">
                            AED {{ $plan['price'] }}
                            <small class="text-muted fw-normal d-block">{{ $plan['unit'] }}</small>
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
                            <i class="fa fa-calendar me-2"></i> Book This Service
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <div class="warranty-badge">
                <i class="fa fa-shield-alt me-2"></i> All Services Include 2-Year Warranty on Labor
            </div>
            <p class="text-muted mt-3">
                *Parts cost extra based on actual requirements. Free diagnosis with any repair service.
            </p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5" style="background-color: var(--plumber-water);">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold mb-3" style="color: var(--plumber-dark);">Plumbing FAQs</h3>
            <p class="text-muted">Common questions about our plumbing services</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="plumbingFAQ">
                    @php
                    $faqs = [
                        [
                            'question' => 'How quickly can you respond to plumbing emergencies?',
                            'answer' => 'We guarantee a 30-minute response time for emergency calls in Dubai. Our team is available 24/7 for all plumbing emergencies including water leaks, burst pipes, and gas leaks.'
                        ],
                        [
                            'question' => 'Do you charge for diagnosis?',
                            'answer' => 'Diagnosis is FREE if you proceed with the repair service. For emergency calls where no repair is needed, a standard AED 150 diagnosis fee applies.'
                        ],
                        [
                            'question' => 'What areas in Dubai do you cover?',
                            'answer' => 'We cover all areas of Dubai including Downtown, Marina, JBR, JLT, Emirates Hills, Arabian Ranches, Palm Jumeirah, and all other residential and commercial areas.'
                        ],
                        [
                            'question' => 'Are your plumbers certified and licensed?',
                            'answer' => 'Yes, all our plumbers are certified, licensed, and experienced professionals. We provide continuous training to ensure they\'re updated with the latest plumbing techniques and safety standards.'
                        ],
                        [
                            'question' => 'Do you offer warranty on your plumbing work?',
                            'answer' => 'We offer a 2-year warranty on all labor and 1-year warranty on parts. For major installations, we provide extended warranty options.'
                        ],
                        [
                            'question' => 'Can you work on weekends and holidays?',
                            'answer' => 'Yes, we operate 24/7 including weekends and all public holidays. Emergency services are always available without any extra charges.'
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
                        <div id="faq{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#plumbingFAQ">
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
                <h2 class="fw-bold mb-3" style="color: var(--plumber-dark);">Schedule Plumbing Service</h2>
                <p class="text-muted mb-4">
                    Fill the form and our plumbing expert will contact you within 15 minutes to schedule service.
                </p>
                
                <div class="row g-3">
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: var(--plumber-water);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-clock fa-2x" style="color: var(--plumber-blue);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Flexible Scheduling</h6>
                                    <p class="small text-muted mb-0">Choose your preferred date and time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: var(--plumber-water);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-shield-alt fa-2x" style="color: var(--plumber-green);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Warranty Protection</h6>
                                    <p class="small text-muted mb-0">2-year warranty on all plumbing work</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="p-3 rounded" style="background-color: var(--plumber-water);">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="fa fa-tools fa-2x" style="color: var(--plumber-orange);"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Expert Plumbers</h6>
                                    <p class="small text-muted mb-0">Certified and experienced professionals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <form id="plumbingBookingForm">
                            <div class="mb-3">
                                <label class="form-label">Service Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select Plumbing Service</option>
                                    <option>Emergency Plumbing</option>
                                    <option>Water Heater Repair</option>
                                    <option>Drain Cleaning</option>
                                    <option>Pipe Installation</option>
                                    <option>Bathroom Plumbing</option>
                                    <option>Kitchen Plumbing</option>
                                    <option>Gas Line Repair</option>
                                    <option>Other Plumbing</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Problem Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select Problem</option>
                                    <option>Water Leak</option>
                                    <option>Blocked Drain</option>
                                    <option>No Hot Water</option>
                                    <option>Low Water Pressure</option>
                                    <option>Running Toilet</option>
                                    <option>Burst Pipe</option>
                                    <option>Gas Leak</option>
                                    <option>Other Issue</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Property Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select Property</option>
                                    <option>Villa</option>
                                    <option>Apartment</option>
                                    <option>Office</option>
                                    <option>Commercial Building</option>
                                    <option>Restaurant</option>
                                    <option>Hotel</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Date</label>
                                    <input type="date" class="form-control" min="{{ date('Y-m-d') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Time</label>
                                    <select class="form-select">
                                        <option>Any Time</option>
                                        <option>Morning (8 AM - 12 PM)</option>
                                        <option>Afternoon (12 PM - 4 PM)</option>
                                        <option>Evening (4 PM - 8 PM)</option>
                                        <option>Urgent - ASAP</option>
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
                            
                            <button type="submit" class="btn btn-primary w-100 py-3">
                                <i class="fa fa-wrench me-2"></i> Schedule Plumbing Service
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
    const galleryData = {
        all: [
            { img: 'https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'residential', caption: 'Villa Plumbing Installation - Emirates Hills' },
            { img: 'https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'commercial', caption: 'Commercial Building Plumbing - Business Bay' },
            { img: 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'emergency', caption: 'Emergency Pipe Repair - Downtown Dubai' },
            { img: 'https://images.unsplash.com/photo-1600586111337-b2a7af3d2c53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'residential', caption: 'Bathroom Plumbing - Jumeirah' },
            { img: 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'commercial', caption: 'Hotel Plumbing System - Dubai Marina' },
            { img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', category: 'emergency', caption: 'Water Leak Repair - Palm Jumeirah' },
        ],
        residential: [
            { img: 'https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Villa Plumbing Installation' },
            { img: 'https://images.unsplash.com/photo-1600586111337-b2a7af3d2c53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Bathroom Plumbing Work' },
        ],
        commercial: [
            { img: 'https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Office Building Plumbing' },
            { img: 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Hotel Plumbing System' },
        ],
        emergency: [
            { img: 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Emergency Pipe Repair' },
            { img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', caption: 'Water Leak Emergency' },
        ]
    };

    const galleryGrid = document.getElementById('plumbingGallery');
    const tabs = document.querySelectorAll('.gallery-tab');

    function loadGallery(category) {
        galleryGrid.innerHTML = '';
        const items = category === 'all' ? galleryData.all : galleryData[category];
        
        items.forEach((item) => {
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
    document.getElementById('plumbingBookingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for booking! Our plumbing expert will contact you within 15 minutes.');
        this.reset();
    });
});
</script>


@endsection