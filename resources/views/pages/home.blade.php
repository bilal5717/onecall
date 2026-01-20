@extends('layouts.app')

@section('title', 'Home Services in Dubai | Professional Plumber & Electrician Services')
@section('meta_description', 'Professional technical services in Dubai including plumbing, electrical work, AC repair, painting, and home maintenance. 24/7 emergency services available across all Dubai areas.')
@section('meta_keywords', 'home services dubai, plumber dubai, electrician dubai, ac repair dubai, painting services dubai, tesla charger installation dubai, cctv installation dubai, gypsum work dubai, aluminum glass work dubai, tiling dubai' , 'tech services' , 'tech services in dubai' , 'tech services in pakistan' , 'home services' , 'home service websites')

@section('content')

<!-- Schema Markup for Breadcrumbs -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "{{ url('/') }}"
    }, {
        "@type": "ListItem",
        "position": 2,
        "name": "Services",
        "item": "{{ url('/services') }}"
    }]
}
</script>

<!-- Hidden H1 for SEO (already visible in hero) -->
<h1 class="visually-hidden">OneCall Technical Services - Professional Home Services in Dubai</h1>

@include('components.hero-carousel')
@include('components.services-tabs')
@include('components.why-choose')


<!-- Add CSS for animations and effects -->
<style>
    .stat-card-glass {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
        cursor: pointer;
    }
    
    .stat-card-glass:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        background: rgba(255, 255, 255, 0.08) !important;
    }
    
    .stat-card-glass:hover .stat-icon-wrapper {
        transform: scale(1.1);
        box-shadow: 0 12px 25px rgba(153, 0, 0, 0.3) !important;
    }
    
    .stat-card-glass:nth-child(2):hover .stat-icon-wrapper {
        box-shadow: 0 12px 25px rgba(204, 0, 0, 0.3) !important;
    }
    
    .stat-card-glass:nth-child(4):hover .stat-icon-wrapper {
        box-shadow: 0 12px 25px rgba(208, 209, 210, 0.3) !important;
    }
    
    .additional-info-glass {
        transition: all 0.3s ease;
    }
    
    .additional-info-glass:hover {
        transform: translateY(-3px);
        border-color: var(--primary-light) !important;
        background: rgba(255, 255, 255, 0.05) !important;
    }
    
    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.5;
        }
        100% {
            transform: translate(-50%, -50%) scale(1.2);
            opacity: 0;
        }
    }
    
    /* Counter Animation */
    .counter {
        display: inline-block;
    }
    
    /* Stagger animation for stat cards */
    .stat-card-glass {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUpStat 0.6s ease forwards;
    }
    
    .stat-card-glass:nth-child(1) { animation-delay: 0.1s; }
    .stat-card-glass:nth-child(2) { animation-delay: 0.2s; }
    .stat-card-glass:nth-child(3) { animation-delay: 0.3s; }
    .stat-card-glass:nth-child(4) { animation-delay: 0.4s; }
    
    @keyframes fadeInUpStat {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .stat-icon-wrapper {
            width: 60px !important;
            height: 60px !important;
        }
        
        .stat-number {
            font-size: 1.8rem !important;
        }
        
        .stat-label {
            font-size: 0.85rem !important;
        }
        
        .stat-subtext {
            font-size: 0.75rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .stat-card-glass {
            padding: 1.5rem !important;
        }
        
        .stat-icon-wrapper {
            width: 50px !important;
            height: 50px !important;
        }
        
        .stat-number {
            font-size: 1.6rem !important;
        }
    }
</style>

<!-- JavaScript for counter animation -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const counterElements = document.querySelectorAll('.counter');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target'));
                    const duration = 1500; // 1.5 seconds
                    const increment = target / (duration / 16); // 60fps
                    let current = 0;
                    
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            counter.textContent = target + '+';
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(current) + '+';
                        }
                    }, 16);
                    
                    observer.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });
        
        counterElements.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>

<!-- Services Details Section -->
<section class="services-details py-5" aria-labelledby="services-details-heading">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column - Image -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="services-visual">
                    <figure class="services-image-wrapper">
                        <img src="{{ asset('images/bgimages/services.png') }}" 
                             alt="Technical Services Team in Dubai - Electrical, AC Repair, Plumbing, and Painting Services"
                             class="img-fluid"
                             width="600"
                             height="400"
                             loading="lazy">
                        <figcaption class="visually-hidden">Our professional technical services team at work in Dubai</figcaption>
                    </figure>
                    
                    <div class="service-tags mt-3">
                        <span class="service-tag" role="listitem">
                            <i class="fas fa-bolt" aria-hidden="true"></i>
                            <span>Electrical Services</span>
                        </span>
                        <span class="service-tag" role="listitem">
                            <i class="fas fa-snowflake" aria-hidden="true"></i>
                            <span>AC Repair</span>
                        </span>
                        <span class="service-tag" role="listitem">
                            <i class="fas fa-tint" aria-hidden="true"></i>
                            <span>Plumbing</span>
                        </span>
                        <span class="service-tag" role="listitem">
                            <i class="fas fa-paint-roller" aria-hidden="true"></i>
                            <span>Painting</span>
                        </span>
                    </div>
                    
                    <div class="areas-covered mt-4">
                        <h3 class="h5 mb-3">
                            <i class="fas fa-map-marker-alt me-2" aria-hidden="true"></i>
                            Areas We Serve in Dubai
                        </h3>
                        <div class="areas-grid" role="list">
                            <span role="listitem">Dubai Marina</span>
                            <span role="listitem">JLT</span>
                            <span role="listitem">Business Bay</span>
                            <span role="listitem">Al Barsha</span>
                            <span role="listitem">Deira</span>
                            <span role="listitem">Downtown</span>
                            <span role="listitem">JVC</span>
                            <span role="listitem">Arabian Ranches</span>
                            <span role="listitem">Palm Jumeirah</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Content -->
            <div class="col-lg-6">
                <div class="services-content">
                    <span class="section-badge">Our Services</span>
                    <h2 id="services-details-heading" class="section-title mb-4">
                        Professional <span class="highlight">Technical Services</span> in Dubai
                    </h2>
                    
                    <p class="lead-description mb-4">
                        At <strong>OneCall Technical Services</strong>, we take pride in offering a wide range of professional technical services in Dubai, designed to meet the needs of both residential and commercial clients.
                    </p>
                    
                    <div class="content-body">
                        <p>
                            Whether you require <strong>electrical work services in Dubai</strong>, <strong>AC repair and ventilation services</strong>, or specialized installations like <strong>Tesla charger installation in Dubai</strong> and <strong>CCTV camera installation</strong>, our trained technicians ensure high-quality results every time.
                        </p>
                        
                        <div class="callout-box d-flex align-items-center">
                            <i class="fas fa-check-circle mx-1" aria-hidden="true"></i>
                            <p>
                                We also provide expert <strong>plumbing services in Dubai</strong>, efficient drainage cleaning, and durable tiling works for kitchens, bathrooms, and flooring.
                            </p>
                        </div>
                        
                        <p>
                            Our <strong>painting services in Dubai</strong> are ideal for both interiors and exteriors, bringing a fresh, modern look to your property. For exterior and structural enhancements, we specialize in <strong>aluminium and glass works in Dubai</strong>, offering modern, custom-built aluminium windows, doors, partitions, and façades.
                        </p>
                        
                        <p class="mb-4">
                            For interiors, our <strong>gypsum partition and ceiling works in Dubai</strong> provide elegant and practical design solutions for homes and offices. Whether you need a quick <strong>home repair in Dubai</strong> or a full-scale renovation project, our team is ready to help with expertise and care.
                        </p>
                    </div>
                    
                    <div class="trust-badge" role="complementary">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                        <p>
                            <strong>Trust us for professional handyman and technical services in Dubai</strong> — where quality, safety, and customer satisfaction always come first.
                        </p>
                    </div>
                    
                    <div class="cta-actions mt-4">
                        <a href="tel:+971501234567" class="btn btn-primary" aria-label="Call Now for Technical Services">
                            <i class="fas fa-phone-alt me-2" aria-hidden="true"></i>
                            Call Now
                        </a>
                        <a href="/services" class="btn btn-outline-danger" aria-label="View All Our Services">
                            <i class="fas fa-list me-2" aria-hidden="true"></i>
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas Section - Small Glassmorphism Bubbles -->
<section class="service-areas py-5 position-relative" aria-labelledby="service-areas-heading" 
         style="background: linear-gradient(135deg, var(--tesla-silver) 0%, var(--tesla-dark) 100%);">
    
    <!-- Background Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: 0;">
        <div class="position-absolute" style="top: 10%; left: 5%; width: 150px; height: 150px; background: radial-gradient(circle, var(--primary-light) 0%, transparent 70%); opacity: 0.1;"></div>
        <div class="position-absolute" style="bottom: 15%; right: 8%; width: 200px; height: 200px; background: radial-gradient(circle, var(--secondary) 0%, transparent 70%); opacity: 0.08;"></div>
        <div class="position-absolute" style="top: 40%; right: 15%; width: 120px; height: 120px; background: radial-gradient(circle, var(--primary) 0%, transparent 70%); opacity: 0.05;"></div>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <!-- Section Header -->
        <div class="text-center mb-4">
            <span class="service-badge px-3 py-1 mb-2 d-inline-block" 
                  style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border: none; color: white; font-size: 0.8rem; letter-spacing: 0.5px; border-radius: 12px;">
                <i class="bi bi-geo-alt-fill me-1"></i>
                Full Dubai Coverage
            </span>
            <h2 id="service-areas-heading" class="mb-3 animated-element" 
                style="color: white; font-size: 2.2rem; font-weight: 700;">
                We Serve <span style="color: var(--primary-light);">All Over Dubai</span>
            </h2>
            <p class="lead-description mx-auto animated-element mb-4" 
               style="max-width: 700px; color: rgba(255, 255, 255, 0.85); font-size: 1rem; line-height: 1.6;">
                From Deira to Dubai Marina, Palm Jumeirah to Silicon Oasis - complete city-wide service coverage
            </p>
        </div>
        
        <!-- Areas Bubbles Grid -->
        <div class="areas-bubbles-grid mb-4">
            <div class="row g-2 justify-content-center" role="list">
                <!-- Dubai Marina -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-buildings-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Dubai Marina</span>
                    </div>
                </div>
                
                
                
                <!-- Jumeirah -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-house-heart-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Jumeirah</span>
                    </div>
                </div>
                
                <!-- Deira -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-shop-window"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Deira</span>
                    </div>
                </div>
                
                <!-- Palm Jumeirah -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-tree-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Palm Jumeirah</span>
                    </div>
                </div>
                
                <!-- JLT -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-building-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">JLT</span>
                    </div>
                </div>
                
                <!-- Silicon Oasis -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Silicon Oasis</span>
                    </div>
                </div>
                
                <!-- Motor City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Motor City</span>
                    </div>
                </div>
                
                <!-- Al Barsha -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-house-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Al Barsha</span>
                    </div>
                </div>
                
                <!-- Discovery Gardens -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Discovery Gardens</span>
                    </div>
                </div>
                
                <!-- International City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-globe-americas"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">International City</span>
                    </div>
                </div>
                
                <!-- Al Karama -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Al Karama</span>
                    </div>
                </div>
                
                <!-- Al Quoz -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-tools"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Al Quoz</span>
                    </div>
                </div>
                
                <!-- Dubai Sports City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Sports City</span>
                    </div>
                </div>
                
                <!-- Dubai Hills -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-tree"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Dubai Hills</span>
                    </div>
                </div>
                
                <!-- Arabian Ranches -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Arabian Ranches</span>
                    </div>
                </div>
                
                <!-- JVC -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-circle-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">JVC</span>
                    </div>
                </div>
                
                <!-- Business Bay -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Business Bay</span>
                    </div>
                </div>
                
                <!-- Al Sufouh -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-water"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Al Sufouh</span>
                    </div>
                </div>
                
                <!-- Al Satwa -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-buildings"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Al Satwa</span>
                    </div>
                </div>
                
                <!-- Al Wasl -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-geo-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Al Wasl</span>
                    </div>
                </div>
                
                <!-- Umm Suqeim -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-sun-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Umm Suqeim</span>
                    </div>
                </div>
                
                <!-- Al Nahda -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-brightness-high-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.75rem; font-weight: 500;">Al Nahda</span>
                    </div>
                </div>
                
                <!-- Dubai Silicon -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-motherboard-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Dubai Silicon</span>
                    </div>
                </div>
                
                <!-- Internet City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-wifi"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Internet City</span>
                    </div>
                </div>
                
                <!-- Media City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-camera-video-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.7rem; font-weight: 500;">Media City</span>
                    </div>
                </div>
                
                <!-- Knowledge Park -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-journal-bookmark-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.65rem; font-weight: 500;">Knowledge Park</span>
                    </div>
                </div>
                
                <!-- Healthcare City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-heart-pulse-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.65rem; font-weight: 500;">Healthcare City</span>
                    </div>
                </div>
                
                <!-- Creek Harbour -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-droplet-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.65rem; font-weight: 500;">Creek Harbour</span>
                    </div>
                </div>
                
                <!-- Festival City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-joystick"></i>
                        </div>
                        <span style="color: white; font-size: 0.65rem; font-weight: 500;">Festival City</span>
                    </div>
                </div>
                
                <!-- Design District -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-palette-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.65rem; font-weight: 500;">Design District</span>
                    </div>
                </div>
                
                <!-- Production City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-camera-reels-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.65rem; font-weight: 500;">Production City</span>
                    </div>
                </div>
                
                <!-- Outsource City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-laptop-fill"></i>
                        </div>
                        <span style="color: white; font-size: 0.65rem; font-weight: 500;">Outsource City</span>
                    </div>
                </div>
                
                <!-- Studio City -->
                <div class="col-4 col-sm-3 col-md-2 col-lg-auto">
                    <div class="mini-bubble p-2 text-center transform-hover" 
                         style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 20px; min-width: 80px;">
                        <div class="bubble-icon mb-1" style="color: var(--primary-light); font-size: 1rem;">
                            <i class="bi bi-film"></i>
                        </div>
                        <span style="color: white; font-size: 0.65rem; font-weight: 500;">Studio City</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Coverage Note -->
        <div class="coverage-note-glass mx-auto p-3 text-center mt-4" 
             style="max-width: 700px; backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 15px;">
            <div class="d-flex align-items-center justify-content-center mb-2">
                <div class="coverage-icon-wrapper me-2" 
                     style="width: 35px; height: 35px; background: linear-gradient(135deg, var(--primary-light), var(--secondary)); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-check-circle-fill text-white"></i>
                </div>
                <h4 class="h6 fw-bold mb-0" style="color: white;">City-Wide Coverage</h4>
            </div>
            <p class="mb-0" style="color: rgba(255, 255, 255, 0.85); font-size: 0.9rem;">
                <strong>Fast, Affordable & Professional:</strong> Same-day services available across all major Dubai locations with competitive pricing.
            </p>
        </div>

        <!-- More Areas -->
        <div class="additional-mini-bubbles mt-3">
            <div class="d-flex flex-wrap justify-content-center gap-1">
                <span class="micro-bubble px-2 py-1" 
                      style="background: rgba(255, 255, 255, 0.05); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; font-size: 0.7rem;">
                    Al Mankhool
                </span>
                <span class="micro-bubble px-2 py-1" 
                      style="background: rgba(255, 255, 255, 0.05); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; font-size: 0.7rem;">
                    Al Garhoud
                </span>
                <span class="micro-bubble px-2 py-1" 
                      style="background: rgba(255, 255, 255, 0.05); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; font-size: 0.7rem;">
                    Jebel Ali
                </span>
                <span class="micro-bubble px-2 py-1" 
                      style="background: rgba(255, 255, 255, 0.05); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; font-size: 0.7rem;">
                    Al Qusais
                </span>
                <span class="micro-bubble px-2 py-1" 
                      style="background: rgba(255, 255, 255, 0.05); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; font-size: 0.7rem;">
                    Muhaisnah
                </span>
                <span class="micro-bubble px-2 py-1" 
                      style="background: rgba(255, 255, 255, 0.05); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; font-size: 0.7rem;">
                    Al Warqa
                </span>
                <span class="micro-bubble px-2 py-1" 
                      style="background: rgba(255, 255, 255, 0.05); color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; font-size: 0.7rem;">
                    Academic City
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Add CSS for mini bubble animations -->
<style>
    .mini-bubble {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
        cursor: pointer;
    }
    
    .mini-bubble:hover {
        transform: translateY(-5px) scale(1.05) !important;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
        border: 1px solid rgba(255, 255, 255, 0.25) !important;
        background: linear-gradient(135deg, rgba(153, 0, 0, 0.12), rgba(0, 0, 0, 0.15)) !important;
    }
    
    .mini-bubble:hover .bubble-icon {
        color: var(--primary) !important;
        transform: scale(1.2);
        transition: all 0.3s ease;
    }
    
    .coverage-note-glass {
        transition: all 0.3s ease;
    }
    
    .coverage-note-glass:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
        border-color: var(--primary-light) !important;
    }
    
    .micro-bubble {
        transition: all 0.2s ease;
        cursor: pointer;
    }
    
    .micro-bubble:hover {
        background: linear-gradient(135deg, var(--primary), var(--primary-dark)) !important;
        color: white !important;
        border-color: var(--primary-light) !important;
        transform: scale(1.05);
    }
    
    /* Stagger animation for bubbles */
    .mini-bubble {
        opacity: 0;
        transform: translateY(10px);
        animation: fadeInUp 0.4s ease forwards;
    }
    
    /* Create staggered animation delays */
    .mini-bubble:nth-child(1) { animation-delay: 0.05s; }
    .mini-bubble:nth-child(2) { animation-delay: 0.1s; }
    .mini-bubble:nth-child(3) { animation-delay: 0.15s; }
    .mini-bubble:nth-child(4) { animation-delay: 0.2s; }
    .mini-bubble:nth-child(5) { animation-delay: 0.25s; }
    .mini-bubble:nth-child(6) { animation-delay: 0.3s; }
    .mini-bubble:nth-child(7) { animation-delay: 0.35s; }
    .mini-bubble:nth-child(8) { animation-delay: 0.4s; }
    .mini-bubble:nth-child(9) { animation-delay: 0.45s; }
    .mini-bubble:nth-child(10) { animation-delay: 0.5s; }
    .mini-bubble:nth-child(11) { animation-delay: 0.55s; }
    .mini-bubble:nth-child(12) { animation-delay: 0.6s; }
    .mini-bubble:nth-child(13) { animation-delay: 0.65s; }
    .mini-bubble:nth-child(14) { animation-delay: 0.7s; }
    .mini-bubble:nth-child(15) { animation-delay: 0.75s; }
    .mini-bubble:nth-child(16) { animation-delay: 0.8s; }
    .mini-bubble:nth-child(17) { animation-delay: 0.85s; }
    .mini-bubble:nth-child(18) { animation-delay: 0.9s; }
    .mini-bubble:nth-child(19) { animation-delay: 0.95s; }
    .mini-bubble:nth-child(20) { animation-delay: 1.0s; }
    .mini-bubble:nth-child(21) { animation-delay: 1.05s; }
    .mini-bubble:nth-child(22) { animation-delay: 1.1s; }
    .mini-bubble:nth-child(23) { animation-delay: 1.15s; }
    .mini-bubble:nth-child(24) { animation-delay: 1.2s; }
    .mini-bubble:nth-child(25) { animation-delay: 1.25s; }
    .mini-bubble:nth-child(26) { animation-delay: 1.3s; }
    .mini-bubble:nth-child(27) { animation-delay: 1.35s; }
    .mini-bubble:nth-child(28) { animation-delay: 1.4s; }
    .mini-bubble:nth-child(29) { animation-delay: 1.45s; }
    .mini-bubble:nth-child(30) { animation-delay: 1.5s; }
    .mini-bubble:nth-child(31) { animation-delay: 1.55s; }
    .mini-bubble:nth-child(32) { animation-delay: 1.6s; }
    .mini-bubble:nth-child(33) { animation-delay: 1.65s; }
    
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animated-element {
        opacity: 0;
        transform: translateY(15px);
        animation: fadeInUp 0.6s ease forwards;
    }
</style>

<!-- Additional sections -->
@include('components.service-cards')
@include('components.testonomials')
@include('components.faqs')

<!-- Local Business Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "OneCall Technical Services",
    "image": "{{ asset('images/logo/logo.png') }}",
    "@id": "{{ url('/') }}",
    "url": "{{ url('/') }}",
    "telephone": "+971501234567",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Dubai",
        "addressLocality": "Dubai",
        "addressRegion": "Dubai",
        "postalCode": "00000",
        "addressCountry": "AE"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 25.2048,
        "longitude": 55.2708
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
    },
    "sameAs": [
        "https://www.facebook.com/onecall",
        "https://www.instagram.com/onecall"
    ]
}
</script>

@endsection


@push('scripts')
<script>
    // SEO-friendly URL for service areas
    const serviceAreas = [
        "Deira", "Bur Dubai", "Karama", "Satwa", "Business Bay", 
        "Downtown Dubai", "Dubai Marina", "Jumeirah", "JLT", "JVC",
        "JVT", "Palm Jumeirah", "Al Barsha", "Al Quoz", "Al Nahda",
        "Discovery Gardens", "Mirdif", "Arabian Ranches", "Dubai Silicon Oasis", "DIP",
        "Dubai Sports City", "Motor City", "Damac Hills", "The Greens", "The Springs",
        "Meadows", "Emirates Hills", "Academic City", "Al Safa", "Al Rashidiya",
        "Al Warqa", "Al Mizhar", "Meydan", "Dubai Hills", "Umm Suqeim", "International City"
    ];

    // Create area badges with SEO-friendly links
    function createAreaBadges() {
        const container = document.querySelector('.area-badges');
        if (!container) return;
        
        serviceAreas.forEach(area => {
            const badge = document.createElement('a');
            badge.href = `/services/areas/${area.toLowerCase().replace(/\s+/g, '-')}`;
            badge.className = 'area-badge';
            badge.textContent = area;
            badge.setAttribute('aria-label', `Services in ${area}`);
            container.appendChild(badge);
        });
    }

    // Lazy loading for images
    function lazyLoadImages() {
        const images = document.querySelectorAll('img[loading="lazy"]');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => {
            if (img.dataset.src) {
                imageObserver.observe(img);
            }
        });
    }

    // Smooth scrolling with accessibility support
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const target = document.querySelector(targetId);
            if (target) {
                target.setAttribute('tabindex', '-1');
                target.focus();
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Initialize when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        createAreaBadges();
        lazyLoadImages();
        
        // Add current year for copyright
        const yearSpan = document.querySelector('#current-year');
        if (yearSpan) {
            yearSpan.textContent = new Date().getFullYear();
        }
    });

    // Performance: Defer non-critical JavaScript
    if ('requestIdleCallback' in window) {
        window.requestIdleCallback(() => {
            // Load non-critical functionality here
        });
    }
</script>
@endpush