<!-- Hero Section -->
<section class="tesla-hero" id="hero-slider">
    <div class="container h-100">
        <div class="row align-items-center tesla-hero-content h-100">
            <div class="col-lg-8 text-white">
                <!-- Service Badge -->
                <div class="service-badge animated-element" id="service-badge">
                    <i class="fa fa-bolt me-2"></i> Certified Tesla Charger Installer
                </div>
                
                <!-- Service Title -->
                <h1 class="display-5 fw-bold mb-4 animated-element" id="service-title">Tesla Charger Installation in Dubai</h1>
                
                <!-- CTA Buttons -->
                <div class="d-flex flex-wrap gap-3 animated-element">
                    <a href="tel:+971501234567" class="btn btn-primary btn-lg px-4" id="cta-button">
                        <i class="fa fa-charging-station me-2"></i> Get Free Quote
                    </a>
                    <a href="#booking" class="button-light btn-lg px-4">
                        <i class="fa fa-calendar me-2"></i> Book Service
                    </a>
                </div>
                
                <!-- Slider Dots Only -->
                <div class="slider-dots mt-4 animated-element">
                    <span class="slider-dot active" data-slide="0"></span>
                    <span class="slider-dot" data-slide="1"></span>
                    <span class="slider-dot" data-slide="2"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Service data with separate background and content images
    const services = [
        {
            id: 0,
            title: "Tesla Charger Installation in Dubai",
            badge: '<i class="fa fa-bolt me-2"></i> Certified Tesla Charger Installer',
            bgImage: "{{ asset('images/services/tesla2.jpeg') }}",
            ctaIcon: "fa-charging-station",
            bgColor: "#990000b2"
        },
        {
            id: 1,
            title: "Professional Plumbing Services",
            badge: '<i class="fa fa-wrench me-2"></i> Licensed Plumbing Contractor',
            bgImage: "{{ asset('images/services/plumber.jpeg') }}",
            ctaIcon: "fa-tools",
            bgColor: "#990000ad"
        },
        {
            id: 2,
            title: "Certified Electrical Services",
            badge: '<i class="fa fa-bolt me-2"></i> Master Electrician',
            bgImage: "{{ asset('images/bgimages/electrical.jpg') }}",
            ctaIcon: "fa-bolt",
            bgColor: "#ff6b35b6"
        }
    ];

    // DOM Elements
    const heroSection = document.getElementById('hero-slider');
    const serviceBadge = document.getElementById('service-badge');
    const serviceTitle = document.getElementById('service-title');
    const ctaButton = document.getElementById('cta-button');
    const dots = document.querySelectorAll('.slider-dot');
    const animatedElements = document.querySelectorAll('.animated-element');

    let currentSlide = 0;
    let slideInterval;
    let isAnimating = false;

    // Set initial slide immediately on page load
    function initializeFirstSlide() {
        const firstService = services[0];
        heroSection.style.background = `linear-gradient(${firstService.bgColor}, #33333346), 
                                       url('${firstService.bgImage}')`;
        heroSection.style.backgroundSize = 'cover';
        heroSection.style.backgroundPosition = 'center';
        heroSection.style.backgroundAttachment = 'fixed';
        
        // Ensure content matches
        serviceBadge.innerHTML = firstService.badge;
        serviceTitle.textContent = firstService.title;
        const ctaIcon = ctaButton.querySelector('i');
        ctaIcon.className = `fa ${firstService.ctaIcon} me-2`;
        dots[0].classList.add('active');
    }

    // Call initialization immediately
    initializeFirstSlide();

    // Rest of your animation functions remain the same...
    // Animation function
    function animateOut(elements) {
        return new Promise((resolve) => {
            elements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
            });
            
            setTimeout(resolve, 300);
        });
    }

    function animateIn(elements) {
        elements.forEach((element, index) => {
            setTimeout(() => {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }

    // Update slide function
    function updateSlide(slideIndex) {
        if (isAnimating) return;
        isAnimating = true;
        
        const service = services[slideIndex];
        
        // Animate elements out
        animateOut(animatedElements).then(() => {
            // Update all content
            serviceBadge.innerHTML = service.badge;
            serviceTitle.textContent = service.title;
            
            // Update CTA button icon
            const ctaIcon = ctaButton.querySelector('i');
            ctaIcon.className = `fa ${service.ctaIcon} me-2`;
            
            // Update background
            heroSection.style.background = `linear-gradient(${service.bgColor}, #33333346), 
                                           url('${service.bgImage}')`;
            heroSection.style.backgroundSize = 'cover';
            heroSection.style.backgroundPosition = 'center';
            heroSection.style.backgroundAttachment = 'fixed';
            
            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === slideIndex);
            });
            
            // Animate elements in
            animateIn(animatedElements);
            
            currentSlide = slideIndex;
            isAnimating = false;
        });
    }

    // Next slide function
    function nextSlide() {
        const nextIndex = (currentSlide + 1) % services.length;
        updateSlide(nextIndex);
    }

    // Auto-slide function
    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 7000);
    }

    // Stop auto-slide on hover
    function stopAutoSlide() {
        clearInterval(slideInterval);
    }

    // Dot click events
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            const slideIndex = parseInt(this.getAttribute('data-slide'));
            if (slideIndex !== currentSlide) {
                updateSlide(slideIndex);
                stopAutoSlide();
                startAutoSlide();
            }
        });
    });

    // Pause auto-slide on hover
    heroSection.addEventListener('mouseenter', stopAutoSlide);
    heroSection.addEventListener('mouseleave', startAutoSlide);

    // Initialize with initial animation
    setTimeout(() => {
        animateIn(animatedElements);
    }, 100);
    
    startAutoSlide();
});
</script>