<style>
    /* Custom navbar styling */
    .ftco_navbar {
        padding: 10px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        min-height: 85px;
        position: fixed !important;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 99999999;
        background-color: white !important;
        transition: all 0.3s ease;
    }
     /* Adjust body padding to prevent content from hiding under fixed navbar */
    body {
        padding-top: 85px !important;
    }
    /* Navbar scrolled state */
    .ftco_navbar.scrolled {
        padding: 5px 0;
        min-height: 70px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }
    
    .navbar-brand {
        height: 80px;
        display: flex;
        align-items: center;
        padding: 0;
        transition: all 0.3s ease;
    }
    
    .scrolled .navbar-brand {
        height: 70px;
    }
    
    .navbar-brand img {
        transition: transform 0.3s ease;
        height: 120px;
        width: auto;
        object-fit: contain;
    }
    
    .scrolled .navbar-brand img {
        height: 100px;
    }
    
    .navbar-brand img:hover {
        transform: scale(1.05);
    }
    
    /* Navbar links styling */
    .navbar-nav .nav-link {
        color: black !important;
        font-weight: 500;
        padding: 8px 15px !important;
        margin: 0 5px;
        border-radius: 4px;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .navbar-nav .nav-link:hover {
        color: var(--primary) !important;
        transform: translateY(-2px);
    }
    
    .navbar-nav .nav-link.active {
        color: white !important;
        background-color:var(--primary);
    }
    
    /* Underline effect on hover using primary color */
    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background-color:var(--primary);
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    
    .navbar-nav .nav-link:hover::after {
        width: 70%;
    }
    
    .navbar-toggler {
        border: 1px solid rgba(39, 65, 127, 0.3);
        padding: 5px 10px;
        color:var(--primary);
    }
    
    .navbar-toggler:focus {
        box-shadow: 0 0 0 2px rgba(39, 65, 127, 0.25);
    }
    
    /* Ensure navbar container aligns items properly */
    .navbar > .container {
        display: flex;
        align-items: center;
        min-height: 80px;
        transition: min-height 0.3s ease;
    }
    
    .scrolled .navbar > .container {
        min-height: 70px;
    }
    
    /* Services Dropdown Styling */
    .services-dropdown {
        position: relative;
    }
    
    .services-dropdown .dropdown-menu {
        border: none;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 10px 0;
        margin-top: 10px;
        min-width: 300px;
        border-top: 3px solid var(--primary);
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
        background-color: white;
    }
    
    .services-dropdown:hover .dropdown-menu,
    .services-dropdown.show .dropdown-menu {
        display: block;
        opacity: 1;
        animation: fadeIn 0.3s ease;
    }
    
    .services-dropdown .dropdown-item {
        padding: 12px 20px;
        color: black;
        font-weight: 500;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
        display: flex;
        align-items: center;
    }
    
    .services-dropdown .dropdown-item:hover {
        background-color: rgba(39, 65, 127, 0.08);
        color: var(--primary);
        border-left-color: var(--primary);
        transform: translateX(5px);
    }
    
    .services-dropdown .dropdown-item i {
        margin-right: 10px;
        color: var(--primary);
        font-size: 1.1rem;
        width: 20px;
        text-align: center;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .services-dropdown .nav-link {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .services-dropdown .nav-link i {
        margin-left: 5px;
        transition: transform 0.3s ease;
        color: black;
    }
    
    .services-dropdown:hover .nav-link i,
    .services-dropdown.show .nav-link i {
        transform: rotate(180deg);
        color: var(--primary);
    }
    
    /* Dropdown hover gap fix */
    .services-dropdown .dropdown-menu {
        margin-top: 15px;
    }
    
    /* Create an invisible gap area */
    .services-dropdown::after {
        content: '';
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        height: 20px;
        background: transparent;
        z-index: 1000;
    }
    
    /* Tesla charger item special styling */
    .services-dropdown .dropdown-item[href*="tesla-charging"] i {
        color: #6c757d;
    }
    
    .services-dropdown .dropdown-item[href*="tesla-charging"]:hover i {
        color: var(--primary);
    }
    
    /* Center alignment on mobile */
    @media (max-width: 991px) {
        .ftco_navbar {
            min-height: 70px;
        }
        
        .scrolled .ftco_navbar {
            min-height: 60px;
        }
        
        body {
            padding-top: 70px !important;
        }
        
        .navbar-brand {
            height: 70px;
        }
        
        .scrolled .navbar-brand {
            height: 60px;
        }
        
        .navbar-brand img {
            height: 60px;
        }
        
        .scrolled .navbar-brand img {
            height: 50px;
        }
        
        /* Center navbar items on mobile */
        .navbar-nav {
            padding-top: 20px;
            text-align: center !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        
        .navbar-nav .nav-item {
            width: 100%;
            text-align: center;
        }
        
        .navbar-nav .nav-link {
            margin: 5px 0;
            display: inline-block;
            text-align: center;
            width: auto;
            padding: 10px 20px !important;
            color: black !important;
        }
        
        /* Mobile dropdown styling */
        .services-dropdown .dropdown-menu {
            position: static !important;
            float: none !important;
            width: 100% !important;
            margin-top: 5px;
            box-shadow: none;
            border: 1px solid rgba(39, 65, 127, 0.1);
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.02);
        }
        
        .services-dropdown .dropdown-item {
            padding: 10px 15px;
            text-align: left;
            color: black;
        }
        
        /* Remove invisible gap on mobile */
        .services-dropdown::after {
            display: none;
        }
        
        /* Adjust container height on mobile */
        .navbar > .container {
            min-height: 70px;
        }
        
        .scrolled .navbar > .container {
            min-height: 60px;
        }
    }
    
    /* Extra small devices */
    @media (max-width: 576px) {
        .navbar-brand img {
            height: 50px;
        }
        
        .scrolled .navbar-brand img {
            height: 40px;
        }
        
        .navbar-nav .nav-link {
            padding: 8px 15px !important;
            font-size: 0.95rem;
        }
        
        body {
            padding-top: 60px !important;
        }
    }
    
    /* Ensure content doesn't overlap navbar */
    .ftco-section, .hero-section, .section {
        position: relative;
        z-index: 1;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-white ftco_navbar ftco-navbar-light py-2" id="ftco-navbar">
    <div class="container">
        <!-- Logo on the left -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo/wobglogo.png') }}" alt="ONECALL TECHNICAL SERVICES" class="d-inline-block align-top">
        </a>
        
        <!-- Mobile menu button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        
        <!-- Menu items on the right -->
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">About</a>
                </li>
                
                <!-- Services Dropdown -->
                <li class="nav-item services-dropdown">
                    <a href="/services" class="nav-link">
                        Services 
                        <i class="fa fa-chevron-down ms-1"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a href="/ac-ventilation" class="dropdown-item">
                            <i class="fa fa-wind"></i> AC and Ventilation in Dubai
                        </a>
                        <a href="/aluminum-glass-work" class="dropdown-item">
                            <i class="fa fa-window-restore"></i> Aluminum & Glass Works in Dubai
                        </a>
                        <a href="/cctv-cameras" class="dropdown-item">
                            <i class="fa fa-video"></i> CCTV Cameras in Dubai
                        </a>
                        <a href="/electric-work-in-dubai" class="dropdown-item">
                            <i class="fa fa-bolt"></i> Electric Work in Dubai
                        </a>
                        <a href="/gypsum-partition-ceiling-work-in-dubai" class="dropdown-item">
                            <i class="fa fa-grip-lines"></i> Gypsum Partition & Ceiling Work in Dubai
                        </a>
                        <a href="/painting" class="dropdown-item">
                            <i class="fa fa-paint-roller"></i> Painting Work in Dubai
                        </a>
                        <a href="/plumber-work-in-dubai" class="dropdown-item">
                            <i class="fa fa-faucet"></i> Plumber Work in Dubai
                        </a>
                        <a href="/tesla-charging" class="dropdown-item">
                            <i class="fa fa-charging-station"></i> Tesla Charger Installation in Dubai
                        </a>
                        <a href="/tiling-in-dubai" class="dropdown-item">
                            <i class="fa fa-th-large"></i> Tiling Work in Dubai
                        </a>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a href="/gallery" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="/contact-us" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Fix for dropdown hover gap and mobile behavior
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('ftco-navbar');
        const servicesDropdown = document.querySelector('.services-dropdown');
        const dropdownMenu = document.querySelector('.services-dropdown .dropdown-menu');
        const servicesLink = document.querySelector('.services-dropdown .nav-link');
        
        // Scroll event for navbar shrinking
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Desktop hover behavior with gap fix
        let dropdownTimeout;
        
        servicesDropdown.addEventListener('mouseenter', function() {
            clearTimeout(dropdownTimeout);
            this.classList.add('show');
            dropdownMenu.style.display = 'block';
            setTimeout(() => {
                dropdownMenu.style.opacity = '1';
            }, 10);
        });
        
        servicesDropdown.addEventListener('mouseleave', function(e) {
            // Check if mouse is moving to dropdown
            const relatedTarget = e.relatedTarget;
            const isMovingToDropdown = dropdownMenu.contains(relatedTarget);
            
            if (!isMovingToDropdown) {
                dropdownTimeout = setTimeout(() => {
                    this.classList.remove('show');
                    dropdownMenu.style.opacity = '0';
                    setTimeout(() => {
                        dropdownMenu.style.display = 'none';
                    }, 300);
                }, 150);
            }
        });
        
        // Dropdown menu hover behavior
        dropdownMenu.addEventListener('mouseenter', function() {
            clearTimeout(dropdownTimeout);
            servicesDropdown.classList.add('show');
            this.style.opacity = '1';
            this.style.display = 'block';
        });
        
        dropdownMenu.addEventListener('mouseleave', function() {
            dropdownTimeout = setTimeout(() => {
                servicesDropdown.classList.remove('show');
                this.style.opacity = '0';
                setTimeout(() => {
                    this.style.display = 'none';
                }, 300);
            }, 150);
        });
        
        // Mobile behavior
        servicesLink.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                e.stopPropagation();
                
                if (dropdownMenu.style.display === 'block') {
                    servicesDropdown.classList.remove('show');
                    dropdownMenu.style.opacity = '0';
                    setTimeout(() => {
                        dropdownMenu.style.display = 'none';
                    }, 300);
                } else {
                    servicesDropdown.classList.add('show');
                    dropdownMenu.style.display = 'block';
                    setTimeout(() => {
                        dropdownMenu.style.opacity = '1';
                    }, 10);
                }
            }
        });
        
        // Close dropdown when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth < 992 && 
                !e.target.closest('.services-dropdown') && 
                servicesDropdown.classList.contains('show')) {
                servicesDropdown.classList.remove('show');
                dropdownMenu.style.opacity = '0';
                setTimeout(() => {
                    dropdownMenu.style.display = 'none';
                }, 300);
            }
        });
        
        // Center mobile menu items
        function centerMobileMenu() {
            if (window.innerWidth < 992) {
                const navItems = document.querySelectorAll('.navbar-nav .nav-item:not(.services-dropdown)');
                navItems.forEach(item => {
                    const link = item.querySelector('.nav-link');
                    if (link) {
                        link.style.display = 'inline-block';
                        link.style.textAlign = 'center';
                        link.style.marginLeft = 'auto';
                        link.style.marginRight = 'auto';
                    }
                });
                
                // Center services dropdown trigger
                const servicesLink = document.querySelector('.services-dropdown .nav-link');
                if (servicesLink) {
                    servicesLink.style.display = 'inline-block';
                    servicesLink.style.textAlign = 'center';
                    servicesLink.style.marginLeft = 'auto';
                    servicesLink.style.marginRight = 'auto';
                }
            }
        }
        
        // Initialize and run on resize
        centerMobileMenu();
        window.addEventListener('resize', centerMobileMenu);
        
        // Add active state to current page
        const currentPage = window.location.pathname.split('/').pop();
        const navLinks = document.querySelectorAll('.nav-link:not(.services-dropdown .nav-link)');
        
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }
        });
        
        // Close mobile menu when clicking a link
        const mobileLinks = document.querySelectorAll('.navbar-nav .nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    const navbarToggler = document.querySelector('.navbar-toggler');
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    
                    if (navbarCollapse.classList.contains('show')) {
                        navbarToggler.click();
                    }
                    
                    // Close dropdown if open
                    if (servicesDropdown.classList.contains('show')) {
                        servicesDropdown.classList.remove('show');
                        dropdownMenu.style.opacity = '0';
                        setTimeout(() => {
                            dropdownMenu.style.display = 'none';
                        }, 300);
                    }
                }
            });
        });
    });
</script>