<section class="minimal-ads-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Ad Box 1 -->
            <div class="col-lg-4">
                <div class="minimal-ad-box light-theme reveal-on-scroll">
                    <div class="vector-illustration">
                        <img src="{{ asset('images/services/tes.png') }}" 
                             alt="EV Charging" 
                             class="vector-img" loading="lazy">
                    </div>
                    <div class="ad-content">
                        <div class="ad-category">EV Charging</div>
                        <h3 class="ad-title">Tesla Charger Installation</h3>
                        <p class="ad-description">
                            Professional installation of Tesla Wall Connectors with smart features.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ad Box 2 -->
            <div class="col-lg-4">
                <div class="minimal-ad-box baby-blue-theme reveal-on-scroll">
                    <div class="vector-illustration">
                        <img src="{{ asset('images/services/acvector.png') }}" 
                             alt="AC Service" 
                             class="vector-img" loading="lazy">
                    </div>
                    <div class="ad-content">
                        <div class="ad-category">Cooling Solution</div>
                        <h3 class="ad-title">AC Maintenance & Repair</h3>
                        <p class="ad-description">
                            Complete AC service, maintenance, and ventilation solutions.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ad Box 3 -->
            <div class="col-lg-4">
                <div class="minimal-ad-box light-theme reveal-on-scroll">
                    <div class="vector-illustration">
                        <img src="{{ asset('images/services/paintvec.png') }}" 
                             alt="Wall Painting Service" 
                             class="vector-img" loading="lazy">
                    </div>
                    <div class="ad-content">
                        <div class="ad-category">Painting</div>
                        <h3 class="ad-title">Professional Wall Painting</h3>
                        <p class="ad-description">
                            High-quality interior and exterior wall painting with a smooth, long-lasting finish.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ────────────────────────────────────────────────
   Minimal Ads – 3D Pop-out Vector Style
───────────────────────────────────────────────── */

.minimal-ads-section {
    background: var(--white, #ffffff);
}

.minimal-ad-box {
    --card-radius: 20px;
    border-radius: var(--card-radius);
    height: 260px;               /* increased a bit for overflow space */
    padding: 28px 28px 28px 28px;
    position: relative;
    overflow: visible;           /* ← crucial for 3D pop-out */
    border: 1px solid rgba(0,0,0,0.07);
    background: #fff;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), 
                box-shadow 0.4s ease;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    flex-direction: column;
}

.minimal-ad-box:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 24px 50px rgba(0,0,0,0.14);
}

/* Themes */
.light-theme       { background: #ffffff; }
.baby-blue-theme   { 
    background: linear-gradient(145deg, #f0f9ff 0%, #e0f2fe 100%);
    border-color: rgba(37, 99, 235, 0.16);
}

/* Vector – now pops out */
.vector-illustration {
    position: absolute;
    inset: auto  1%  45% auto;     /* negative values = overflow right & bottom */
    width: 60%;
    height: 140%;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    pointer-events: none;
    z-index: 1;
}

.vector-img {
    height: 50%;
    width: auto;
    object-fit: contain;
    transform: translate(15%, 10%) rotate(-3deg);   /* slight 3D tilt */
    filter: drop-shadow(0 12px 30px rgba(0,0,0,0.16))
            drop-shadow(8px 0 20px rgba(0,0,0,0.08));
    transition: transform 0.55s cubic-bezier(0.34, 1.56, 0.64, 1),
                filter 0.5s ease;
                z-index: 9999;
}

.minimal-ad-box:hover .vector-img {
    transform: translate(22%, -5%) rotate(-1deg) scale(1.06);
    filter: drop-shadow(0 20px 50px rgba(0,0,0,0.22))
            drop-shadow(12px 0 30px rgba(0,0,0,0.12));
}

/* Content area – more space for overflowing image */
.ad-content {
    position: relative;
    z-index: 2;
    height: 100%;
    padding-right: 48%;           /* increased because image overflows more */
    display: flex;
    flex-direction: column;
}

.ad-category {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.9px;
    padding: 6px 13px;
    border-radius: 30px;
    display: inline-block;
    margin-bottom: 12px;
}

.light-theme .ad-category     { background: rgba(37, 99, 235, 0.09); color: #2563eb; }
.baby-blue-theme .ad-category { background: rgba(37, 99, 235, 0.13); color: #1d4ed8; }

.ad-title {
    font-size: 1.32rem;
    font-weight: 800;
    line-height: 1.3;
    margin-bottom: 10px;
    color: #111827;
}

.ad-description {
    font-size: 0.9rem;
    line-height: 1.58;
    color: #4b5563;
    flex-grow: 1;
}

/* Scroll animation (unchanged) */
.reveal-on-scroll {
    opacity: 0;
    transform: translateY(35px);
    transition: opacity 0.8s ease-out, transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
}

.reveal-on-scroll.active {
    opacity: 1;
    transform: translateY(0);
}

/* ───── Responsive – protect overflow on small screens ───── */
@media (max-width: 1200px) {
    .vector-illustration { inset: auto -10% -20% auto; width: 58%; }
    .vector-img { transform: translate(12%, 8%) rotate(-3deg); }
    .ad-content { padding-right: 45%; }
}

@media (max-width: 991px) {
    .minimal-ad-box { height: 240px; padding: 24px; }
    .vector-illustration { inset: auto -8% -18% auto; width: 55%; }
    .ad-content { padding-right: 42%; }
}

@media (max-width: 768px) {
    .minimal-ad-box { height: 220px; padding: 20px; }
    .vector-illustration { inset: auto -5% -15% auto; width: 52%; }
    .vector-img { transform: translate(10%, 5%) rotate(-2deg) scale(1.02); }
    .ad-content { padding-right: 38%; }
}

@media (max-width: 576px) {
    .minimal-ad-box { height: 210px; padding: 18px; }
    .vector-illustration { inset: auto -20px -60px auto; width: 65%; }
    .vector-img { transform: translate(5%, 0%) rotate(0deg) scale(1); }
    .ad-content { padding-right: 35%; }
}

@media (max-width: 460px) {
    .vector-illustration { display: none; }   /* hide overflow on tiny screens */
    .ad-content { padding-right: 0; }
}
</style>

<script>
// Same scroll observer as before
document.addEventListener('DOMContentLoaded', () => {
    const els = document.querySelectorAll('.reveal-on-scroll');
    if (!('IntersectionObserver' in window)) {
        els.forEach(el => el.classList.add('active'));
        return;
    }
    const obs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2, rootMargin: '0px 0px -60px 0px' });
    els.forEach(el => obs.observe(el));
});
</script>