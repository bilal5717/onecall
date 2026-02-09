@extends('layouts.app')

@section('title', 'About OneCall Technical Services | Professional Home Services in Dubai')
@section('meta_description', 'Learn about OneCall Technical Services - Dubai\'s trusted provider of electrical, plumbing, AC, and complete home maintenance solutions. 24/7 emergency services, skilled technicians, and customer satisfaction guaranteed.')
@section('meta_keywords', 'about OneCall Technical Services, Dubai home services, electrical services Dubai, plumbing services Dubai, AC maintenance Dubai, property maintenance Dubai, trusted technicians Dubai, home repair Dubai')

@section('content')

<style>
.about-hero {
    background: linear-gradient(#990000, rgba(0, 87, 179, 0.73)), url('{{ asset("images/bgimages/banner.jpg") }}');
    background-size: cover;
    background-position: top;
    min-height: 80vh;
}

.transition-smooth {
    transition: transform 0.5s ease-in-out;
}

.slider-btn {
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s ease;
}

.slider-btn:hover {
    background-color: var(--primary) !important;
    color: white !important;
    transform: scale(1.1);
}

.dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: var(--border);
    transition: background-color 0.3s ease;
}

.dot.active {
    background-color: var(--primary);
    transform: scale(1.2);
}

@media (max-width: 768px) {
    .slider-container {
        padding: 0 20px !important;
    }
}
</style>

<!-- Hero Section -->
<section class="about-hero d-flex align-items-center text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="fw-bold display-5 mb-4">About OneCall Technical Services</h1>
                <p class="fs-5 lh-lg mb-4">
                    Your trusted partner for professional technical services in Dubai. We provide reliable, affordable, and high-quality electrical, plumbing, AC, and complete home maintenance solutions for residential and commercial properties.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="tel:+971000000000" class="btn btn-primary px-4 py-2">
                        <i class="fa fa-phone me-2"></i>Call Now
                    </a>
                    <a href="https://wa.me/971000000000" class="btn btn-success px-4 py-2">
                        <i class="fa-brands fa-whatsapp me-2"></i>WhatsApp
                    </a>
                    <a href="#services" class="btn btn-outline-light px-4 py-2">
                        <i class="fa fa-tools me-2"></i>Our Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Content Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4" style="color: var(--primary);">Who We Are</h2>
                <p class="lead mb-4">
                    OneCall Technical Service Co is Dubai's premier technical services provider, delivering timely, economical, and professional solutions for homes and businesses.
                </p>
                <div class="mb-4">
                    <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Our Expertise</h5>
                    <p>
                        We specialize in electrical installations, A/C and ventilation services, Tesla charger installation, CCTV camera systems, plumbing repairs, tiling works, painting services, aluminium & glass work, and gypsum partition & ceiling installations.
                    </p>
                </div>
                <div class="mb-4">
                    <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Areas We Serve</h5>
                    <p>
                        We proudly serve all major areas across Dubai including JLT, Downtown, Deira, Business Bay, Al Barsha, JVC, Jumeirah, and surrounding communities. Our team is always ready for emergency calls and scheduled maintenance.
                    </p>
                </div>
                <a href="" class="btn btn-primary btn-lg px-4 py-3">
                    <i class="fa fa-clipboard-list me-2"></i>Explore All Services
                </a>
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('images/services/about2.jpg') }}" 
                     alt="OneCall Technical Services Technician in Dubai" 
                     class="img-fluid rounded shadow-lg" 
                     style="border: 5px solid var(--primary-light);">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Component -->
@include('components.why-choose')
@include('components.testonomials')
@include('components.faqs')
<!-- Recent Projects Slider -->
<section class="py-5" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold" style="color: var(--text-dark);">Our Recent Projects</h2>
            <p class="lead mb-3" style="color: var(--text-light);">See our technical excellence across Dubai</p>
            
        </div>

        <div class="slider-container position-relative" style="padding: 0 40px;">
            <div class="slider-wrapper overflow-hidden">
                <div class="slides d-flex transition-smooth" id="slidesContainer">
                    @php
                    $projects = [
                        [
                            'img' => 'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'title' => 'Electrical Installation',
                            
                        ],
                        [
                            'img' => 'https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'title' => 'Plumbing Repair',
                           
                        ],
                        [
                            'img' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'title' => 'AC Maintenance',
                           
                        ],
                        [
                            'img' => 'https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'title' => 'Property Maintenance',
                           
                        ],
                        [
                            'img' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'title' => '24/7 Technical Support',
                           
                        ],
                        [
                            'img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'title' => 'Smart Home Setup',
                         
                        ]
                    ];
                    @endphp

                    @foreach($projects as $project)
                    <div class="slide position-relative me-4">
                        <div class="card border-0 rounded-4 overflow-hidden h-100" style="width: 280px; min-width: 280px;">
                            <img src="{{ $project['img'] }}" 
                                 alt="{{ $project['title'] }} - OneCall Technical Services Dubai" 
                                 class="card-img-top" 
                                 style="height: 200px; object-fit: cover;">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold mb-2" style="color: var(--primary);">
                                    {{ $project['title'] }}
                                </h5>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <button class="slider-btn position-absolute top-50 start-0 translate-middle-y rounded-circle border-0 d-flex align-items-center justify-content-center d-none d-md-flex" 
                    id="prevBtn" 
                    style="width: 50px; height: 50px; background-color: white; color: var(--primary); box-shadow: 0 4px 12px rgba(0,0,0,0.15); transform: translateX(-30px);">
                <span class="fs-4">‹</span>
            </button>
            <button class="slider-btn position-absolute top-50 end-0 translate-middle-y rounded-circle border-0 d-flex align-items-center justify-content-center d-none d-md-flex" 
                    id="nextBtn" 
                    style="width: 50px; height: 50px; background-color: white; color: var(--primary); box-shadow: 0 4px 12px rgba(0,0,0,0.15); transform: translateX(30px);">
                <span class="fs-4">›</span>
            </button>
            
            <div class="d-flex justify-content-center gap-2 mt-4 d-md-none">
                <div class="dot-indicators">
                    @for($i = 0; $i < ceil(count($projects)/2); $i++)
                    <span class="dot mx-1 {{ $i === 0 ? 'active' : '' }}"></span>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slidesContainer = document.getElementById('slidesContainer');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots = document.querySelectorAll('.dot');
    
    let currentPosition = 0;
    let slidesToShow = getSlidesToShow();
    const slides = document.querySelectorAll('.slide');
    const slideWidth = 280 + 16; // Card width + margin
    const maxSlides = slides.length;
    let maxPosition = (maxSlides - slidesToShow) * slideWidth;
    
    function getSlidesToShow() {
        if (window.innerWidth < 768) return 1;
        if (window.innerWidth < 992) return 2;
        if (window.innerWidth < 1200) return 3;
        return 4;
    }
    
    function updateSliderPosition() {
        slidesContainer.style.transform = `translateX(-${currentPosition}px)`;
        updateDots();
    }
    
    function updateDots() {
        const dotCount = Math.ceil(maxSlides / slidesToShow);
        const currentDot = Math.floor(currentPosition / (slideWidth * slidesToShow));
        
        dots.forEach((dot, index) => {
            if (index < dotCount) {
                dot.style.display = 'inline-block';
                dot.classList.toggle('active', index === currentDot);
            } else {
                dot.style.display = 'none';
            }
        });
    }
    
    function handleResize() {
        slidesToShow = getSlidesToShow();
        maxPosition = Math.max(0, (maxSlides - slidesToShow) * slideWidth);
        if (currentPosition > maxPosition) currentPosition = maxPosition;
        updateSliderPosition();
    }
    
    nextBtn.addEventListener('click', () => {
        if (currentPosition < maxPosition) {
            currentPosition += slideWidth * slidesToShow;
            if (currentPosition > maxPosition) currentPosition = maxPosition;
        } else {
            currentPosition = 0;
        }
        updateSliderPosition();
    });
    
    prevBtn.addEventListener('click', () => {
        if (currentPosition > 0) {
            currentPosition -= slideWidth * slidesToShow;
            if (currentPosition < 0) currentPosition = 0;
        } else {
            currentPosition = maxPosition;
        }
        updateSliderPosition();
    });
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentPosition = index * slideWidth * slidesToShow;
            if (currentPosition > maxPosition) currentPosition = maxPosition;
            updateSliderPosition();
        });
    });
    
    // Touch support
    let touchStartX = 0;
    slidesContainer.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    slidesContainer.addEventListener('touchend', (e) => {
        const touchEndX = e.changedTouches[0].screenX;
        const swipeThreshold = 50;
        
        if (touchStartX - touchEndX > swipeThreshold) {
            nextBtn.click();
        } else if (touchEndX - touchStartX > swipeThreshold) {
            prevBtn.click();
        }
    });
    
    // Initialize
    handleResize();
    window.addEventListener('resize', handleResize);
});
</script>
@endsection