<!-- Professional Services Section -->
<section class="professional-services py-3">
    <div class="container">
        <!-- Services Row - Auto Size with Attractive Effects -->
        <div class="services-container">
            <!-- Electrician -->
            <div class="service-glow-card" data-service="electrician">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #990000 0%, #ff3333 100%);">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">Electrician</div>
            </div>
            
            <!-- A/C Service -->
            <div class="service-glow-card" data-service="ac">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">A/C Service</div>
            </div>
            
            <!-- UPS -->
            <div class="service-glow-card" data-service="ups">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #990000 0%, #ff3333 100%);">
                        <i class="fas fa-car-battery"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">UPS</div>
            </div>
            
            <!-- Painter -->
            <div class="service-glow-card" data-service="painter">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
                        <i class="fas fa-paint-roller"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">Painter</div>
            </div>
            
            <!-- Plumbing -->
            <div class="service-glow-card" data-service="plumbing">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #990000 0%, #ff3333 100%);">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">Plumbing</div>
            </div>
            
            <!-- CCTV -->
            <div class="service-glow-card" data-service="cctv">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">CCTV</div>
            </div>
            
            <!-- Tiling -->
            <div class="service-glow-card" data-service="tiling">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #990000 0%, #ff3333 100%);">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">Tiling</div>
            </div>
            
            <!-- Aluminum & Glass -->
            <div class="service-glow-card" data-service="aluminum">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
                        <i class="fas fa-glass-whiskey"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">Aluminum & Glass</div>
            </div>
            
            <!-- Gypsum Work -->
            <div class="service-glow-card" data-service="gypsum">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #990000 0%, #ff3333 100%);">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">Gypsum Work</div>
            </div>
            
            <!-- EV Charger -->
            <div class="service-glow-card" data-service="evcharger">
                <div class="service-glow-icon">
                    <div class="icon-wrapper" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
                        <i class="fas fa-charging-station"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="service-glow-title">EV Charger</div>
            </div>
        </div>
    </div>
</section>

<style>

.professional-services::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(135deg, #990000 0%, #000000 100%);
}

/* Services Container */
.services-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    padding: 10px 0;
}

/* Mobile-first responsive design */
.service-glow-card {
    flex: 0 0 calc(20% - 12px); /* 5 items per row on mobile */
    min-width: 0;
    text-align: center;
    padding: 12px 6px;
    border-radius: 16px;
    background: white;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.service-glow-card:hover {
    transform: translateY(-6px) scale(1.05);
    z-index: 10;
}

.service-glow-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: left 0.7s ease;
}

.service-glow-card:hover::before {
    left: 100%;
}

.service-glow-icon {
    position: relative;
    width: 60px;
    height: 60px;
    margin: 0 auto 8px;
}

.icon-wrapper {
    width: 100%;
    height: 100%;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    transition: all 0.4s ease;
}

.service-glow-card:hover .icon-wrapper {
    transform: rotateY(360deg);
    box-shadow: 0 8px 20px rgba(153, 0, 0, 0.35);
}

.icon-wrapper i {
    font-size: 22px;
    color: white;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.pulse-effect {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(7, 7, 7, 0.3);
    opacity: 0;
    transition: all 0.4s ease;
}

.service-glow-card:hover .pulse-effect {
    width: 80px;
    height: 80px;
    opacity: 1;
    animation: pulse 1.5s infinite;
}

.service-glow-title {
    font-size: 11px;
    font-weight: 800;
    color: #222;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    transition: all 0.3s ease;
    position: relative;
    padding-top: 4px;
    line-height: 1.2;
    word-wrap: break-word;
}

.service-glow-title::after {
    content: '';
    position: absolute;
    top: 0;
    left: 25%;
    width: 50%;
    height: 2px;
    background: linear-gradient(135deg, #990000 0%, #000000 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.service-glow-card:hover .service-glow-title {
    color: #990000;
    font-size: 12px;
}

.service-glow-card:hover .service-glow-title::after {
    opacity: 1;
}

@keyframes pulse {
    0% {
        transform: translate(-50%, -50%) scale(0.8);
        opacity: 0.8;
    }
    100% {
        transform: translate(-50%, -50%) scale(1.2);
        opacity: 0;
    }
}

/* ================= RESPONSIVE BREAKPOINTS ================= */

/* Small Tablets (≥576px) */
@media (min-width: 576px) {
    .service-glow-card {
        flex: 0 0 calc(16.666% - 12px); /* 6 items per row */
    }
    
    .service-glow-icon {
        width: 65px;
        height: 65px;
    }
    
    .icon-wrapper i {
        font-size: 24px;
    }
    
    .service-glow-title {
        font-size: 11px;
    }
}

/* Medium Tablets (≥768px) */
@media (min-width: 768px) {
    .services-container {
        gap: 15px;
    }
    
    .service-glow-card {
        flex: 0 0 calc(12.5% - 15px); /* 8 items per row */
        padding: 15px 8px;
    }
    
    .service-glow-icon {
        width: 70px;
        height: 70px;
    }
    
    .icon-wrapper i {
        font-size: 26px;
    }
    
    .service-glow-title {
        font-size: 12px;
    }
}

/* Large Tablets (≥992px) */
@media (min-width: 992px) {
    .service-glow-card {
        flex: 0 0 calc(10% - 15px); /* 10 items per row - perfect for single line */
        max-width: 110px;
    }
    
    .service-glow-icon {
        width: 75px;
        height: 75px;
    }
    
    .icon-wrapper i {
        font-size: 28px;
    }
    
    .service-glow-title {
        font-size: 13px;
    }
}

/* Desktops (≥1200px) */
@media (min-width: 1200px) {
    .services-container {
        gap: 18px;
    }
    
    .service-glow-card {
        flex: 0 0 calc(10% - 18px);
        padding: 18px 10px;
        border-radius: 20px;
    }
    
    .service-glow-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 12px;
    }
    
    .icon-wrapper {
        border-radius: 20px;
    }
    
    .icon-wrapper i {
        font-size: 30px;
    }
    
    .service-glow-title {
        font-size: 14px;
        padding-top: 6px;
    }
}

/* Extra Large Screens (≥1400px) */
@media (min-width: 1400px) {
    .services-container {
        gap: 20px;
        padding: 20px 0;
    }
    
    .service-glow-card {
        flex: 0 0 calc(10% - 20px);
    }
}

/* Service-specific hover colors */
.service-glow-card[data-service="electrician"]:hover .service-glow-title {
    color: #990000;
}

.service-glow-card[data-service="ac"]:hover .service-glow-title {
    color: #000000;
}

.service-glow-card[data-service="ups"]:hover .service-glow-title {
    color: #990000;
}

.service-glow-card[data-service="painter"]:hover .service-glow-title {
    color: #000000;
}

.service-glow-card[data-service="plumbing"]:hover .service-glow-title {
    color: #990000;
}

.service-glow-card[data-service="cctv"]:hover .service-glow-title {
    color: #000000;
}

.service-glow-card[data-service="tiling"]:hover .service-glow-title {
    color: #990000;
}

.service-glow-card[data-service="aluminum"]:hover .service-glow-title {
    color: #000000;
}

.service-glow-card[data-service="gypsum"]:hover .service-glow-title {
    color: #990000;
}

.service-glow-card[data-service="evcharger"]:hover .service-glow-title {
    color: #000000;
}

/* Touch device optimizations */
@media (hover: none) and (pointer: coarse) {
    .service-glow-card:active {
        transform: translateY(-4px) scale(1.03);
        box-shadow: 0 8px 20px rgba(153, 0, 0, 0.2);
    }
    
    .service-glow-card:active .icon-wrapper {
        transform: rotateY(360deg);
    }
    
    .service-glow-card:active .pulse-effect {
        width: 80px;
        height: 80px;
        opacity: 1;
        animation: pulse 1.5s infinite;
    }
}

/* Prevent text selection */
.service-glow-card {
    -webkit-tap-highlight-color: transparent;
    user-select: none;
}
</style>
