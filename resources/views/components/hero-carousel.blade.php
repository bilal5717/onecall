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
document.addEventListener('DOMContentLoaded', () => {

    /* =========================
       DATA CONFIG
    ========================= */
    const services = [
        {
            title: "Tesla Charger Installation in Dubai",
            badge: '<i class="fa fa-bolt me-2"></i> Certified Tesla Charger Installer',
            bgImage: "{{ asset('images/services/tesla2.jpeg') }}",
            ctaIcon: "fa-charging-station",
            bgOpacity: 0.5
        },
        {
            title: "Professional Plumbing Services",
            badge: '<i class="fa fa-wrench me-2"></i> Licensed Plumbing Contractor',
            bgImage: "{{ asset('images/services/plumber.jpeg') }}",
            ctaIcon: "fa-tools",
            bgOpacity: 0.4
        },
        {
            title: "Certified Electrical Services",
            badge: '<i class="fa fa-bolt me-2"></i> Master Electrician',
            bgImage: "{{ asset('images/bgimages/electrical.jpg') }}",
            ctaIcon: "fa-bolt",
            bgOpacity: 0.5
        },
        {
            title: "Professional Painting Services",
            badge: '<i class="fa fa-paint-brush me-2"></i> Expert Painter',
            bgImage: "{{ asset('images/bgimages/paintersbg.png') }}",
            ctaIcon: "fa-paint-brush",
            bgOpacity: 0.5
        }
    ];

    /* =========================
       DOM CACHE
    ========================= */
    const hero = document.getElementById('hero-slider');
    const badge = document.getElementById('service-badge');
    const title = document.getElementById('service-title');
    const ctaBtnIcon = document.querySelector('#cta-button i');
    const dots = document.querySelectorAll('.slider-dot');
    const animated = document.querySelectorAll('.animated-element');

    let current = 0;
    let interval = null;
    let isAnimating = false;

    /* =========================
       HELPERS
    ========================= */
    const getPrimaryRGBA = (opacity) => {
        const hex = getComputedStyle(document.documentElement)
            .getPropertyValue('--primary')
            .trim() || '#27417f';

        const r = parseInt(hex.slice(1, 3), 16);
        const g = parseInt(hex.slice(3, 5), 16);
        const b = parseInt(hex.slice(5, 7), 16);

        return `rgba(${r}, ${g}, ${b}, ${opacity})`;
    };

    const setBackground = ({ bgImage, bgOpacity }) => {
        hero.style.background = `
            linear-gradient(${getPrimaryRGBA(bgOpacity)}, rgba(0,0,0,0.8)),
            url('${bgImage}')
        `;
        hero.style.backgroundSize = 'cover';
        hero.style.backgroundPosition = 'center';
        hero.style.backgroundAttachment = 'fixed';
    };

    const animateOut = () =>
        new Promise(resolve => {
            animated.forEach(el => {
                el.style.opacity = 0;
                el.style.transform = 'translateY(20px)';
            });
            setTimeout(resolve, 300);
        });

    const animateIn = () => {
        animated.forEach((el, i) => {
            setTimeout(() => {
                el.style.opacity = 1;
                el.style.transform = 'translateY(0)';
            }, i * 100);
        });
    };

    /* =========================
       SLIDE UPDATE
    ========================= */
    const updateSlide = async (index) => {
        if (isAnimating || index === current) return;
        isAnimating = true;

        await animateOut();

        const service = services[index];

        badge.innerHTML = service.badge;
        title.textContent = service.title;
        ctaBtnIcon.className = `fa ${service.ctaIcon} me-2`;
        setBackground(service);

        dots.forEach((dot, i) =>
            dot.classList.toggle('active', i === index)
        );

        animateIn();
        current = index;
        isAnimating = false;
    };

    /* =========================
       AUTO SLIDER
    ========================= */
    const startAuto = () => {
        interval = setInterval(
            () => updateSlide((current + 1) % services.length),
            7000
        );
    };

    const stopAuto = () => clearInterval(interval);

    /* =========================
       EVENTS
    ========================= */
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            updateSlide(Number(dot.dataset.slide));
            stopAuto();
            startAuto();
        });
    });

    hero.addEventListener('mouseenter', stopAuto);
    hero.addEventListener('mouseleave', startAuto);

    /* =========================
       INIT
    ========================= */
    setBackground(services[0]);
    badge.innerHTML = services[0].badge;
    title.textContent = services[0].title;
    ctaBtnIcon.className = `fa ${services[0].ctaIcon} me-2`;
    dots[0].classList.add('active');

    setTimeout(animateIn, 150);
    startAuto();

});
</script>