<!-- FAQ Section - Light Glassmorphism Design -->
<section class="py-5 position-relative" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <!-- Background Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: 0;">
        <div class="position-absolute" style="top: 15%; right: 10%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(77, 171, 247, 0.1) 0%, transparent 70%);"></div>
        <div class="position-absolute" style="bottom: 25%; left: 5%; width: 180px; height: 180px; background: radial-gradient(circle, rgba(153, 0, 0, 0.05) 0%, transparent 70%);"></div>
        <!-- Grid Pattern Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: linear-gradient(rgba(0,0,0,0.02) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.02) 1px, transparent 1px); background-size: 50px 50px;"></div>
    </div>

    <div class="container position-relative" style="z-index: 1;">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="service-badge px-4 py-2 mb-3 d-inline-block" 
                  style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border: none; color: white; font-size: 0.9rem; letter-spacing: 1px; border-radius: 20px;">
                <i class="bi bi-question-circle-fill me-2"></i>
                Need Help? We Have Answers
            </span>
            <h2 class="section-title mb-4 animated-element" style="color: #2c3e50; font-size: 2.8rem; font-weight: 800;">
                Frequently Asked <span style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Questions</span>
            </h2>
            <p class="lead-description mx-auto animated-element" style="max-width: 600px; color: #5d6d7e; font-size: 1.1rem; line-height: 1.8;">
                Get answers to common questions about our Dubai services
            </p>
        </div>

        <div class="row g-4 g-lg-5">
            <!-- Left Side - Image & Info -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <!-- Image Container -->
                    <div class="image-glass mb-4 overflow-hidden transform-hover" 
                         style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); position: relative;">
                        <!-- Glow Effect -->
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 30% 30%, rgba(77, 171, 247, 0.08) 0%, transparent 70%);"></div>
                        
                        <div class="position-relative overflow-hidden" style="height: 280px;">
                            <img src="{{ asset('images/workers/faqsimg.png') }}" 
                                 class="img-fluid w-100 h-100 object-fit-cover"
                                 alt="Professional technician repairing air conditioning system" 
                                 loading="lazy"
                                 style="transition: transform 0.6s ease;">
                            <div class="position-absolute bottom-0 start-0 end-0 p-4" 
                                 style="background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);">
                                <span class="badge rounded-pill px-3 py-2 mb-2" 
                                      style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: white; font-size: 0.85rem;">
                                    Certified Technician
                                </span>
                                <h4 class="text-white mb-0 fw-bold">Expert Service You Can Trust</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Info Cards -->
                    <div class="d-flex flex-column gap-3">
                        <!-- Expert Support Card -->
                        <div class="info-glass transform-hover" 
                             style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; padding: 1.25rem; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper me-3" 
                                     style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(77, 171, 247, 0.15), rgba(77, 171, 247, 0.08)); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-headset" style="color: var(--primary-light); font-size: 1.25rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1" style="color: #2c3e50;">Expert Support</h5>
                                    <p class="mb-0" style="color: #5d6d7e; font-size: 0.9rem;">Certified technicians available 24/7</p>
                                </div>
                            </div>
                        </div>

                        <!-- Transparent Pricing Card -->
                        <div class="info-glass transform-hover" 
                             style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; padding: 1.25rem; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper me-3" 
                                     style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(43, 205, 114, 0.15), rgba(43, 205, 114, 0.08)); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-cash-coin" style="color: var(--tesla-green); font-size: 1.25rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1" style="color: #2c3e50;">Transparent Pricing</h5>
                                    <p class="mb-0" style="color: #5d6d7e; font-size: 0.9rem;">No hidden fees, upfront quotes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - FAQs -->
            <div class="col-lg-8">
                <!-- FAQ Accordion -->
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ 1 -->
                    <div class="faq-glass mb-3" 
                         style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" 
                                    style="background: rgba(255, 255, 255, 0.9); color: #2c3e50; border: none; padding: 1.25rem;">
                                <span class="me-3" style="color: var(--primary); font-weight: 800; font-size: 1.1rem;">01</span>
                                How quickly can you respond to service requests?
                                <i class="bi bi-chevron-down ms-auto" style="color: var(--primary);"></i>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: rgba(255, 255, 255, 0.7); color: #5d6d7e; padding: 1.25rem; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                                <p>We offer <strong style="color: var(--primary);">same-day service</strong> for most requests. For emergencies, our team can often arrive within <strong style="color: var(--primary);">60-90 minutes</strong>. Standard appointments are scheduled within <strong style="color: var(--primary);">24 hours</strong>.</p>
                                <div class="d-flex gap-4 mt-3">
                                    <div class="text-center">
                                        <div style="color: var(--primary); font-weight: 800; font-size: 1.5rem;">60-90 mins</div>
                                        <div style="color: #7f8c8d; font-size: 0.9rem;">Emergency</div>
                                    </div>
                                    <div class="text-center">
                                        <div style="color: var(--primary); font-weight: 800; font-size: 1.5rem;">24 hours</div>
                                        <div style="color: #7f8c8d; font-size: 0.9rem;">Standard</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-glass mb-3" 
                         style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" 
                                    style="background: rgba(255, 255, 255, 0.9); color: #2c3e50; border: none; padding: 1.25rem;">
                                <span class="me-3" style="color: var(--primary); font-weight: 800; font-size: 1.1rem;">02</span>
                                What areas in Dubai do you cover?
                                <i class="bi bi-chevron-down ms-auto" style="color: var(--primary);"></i>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: rgba(255, 255, 255, 0.7); color: #5d6d7e; padding: 1.25rem; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                                <p>We serve <strong style="color: var(--primary);">all major areas across Dubai</strong> including:</p>
                                <div class="d-flex flex-wrap gap-2 mt-3">
                                    <span class="area-tag px-3 py-2" 
                                          style="background: rgba(77, 171, 247, 0.1); color: var(--primary); border: 1px solid rgba(77, 171, 247, 0.3); border-radius: 20px; font-size: 0.85rem;">
                                        Dubai Marina
                                    </span>
                                    <span class="area-tag px-3 py-2" 
                                          style="background: rgba(77, 171, 247, 0.1); color: var(--primary); border: 1px solid rgba(77, 171, 247, 0.3); border-radius: 20px; font-size: 0.85rem;">
                                        Jumeirah
                                    </span>
                                    <span class="area-tag px-3 py-2" 
                                          style="background: rgba(77, 171, 247, 0.1); color: var(--primary); border: 1px solid rgba(77, 171, 247, 0.3); border-radius: 20px; font-size: 0.85rem;">
                                        Downtown
                                    </span>
                                    <span class="area-tag px-3 py-2" 
                                          style="background: rgba(77, 171, 247, 0.1); color: var(--primary); border: 1px solid rgba(77, 171, 247, 0.3); border-radius: 20px; font-size: 0.85rem;">
                                        Deira
                                    </span>
                                    <span class="area-tag px-3 py-2" 
                                          style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: white; border: 1px solid var(--primary); border-radius: 20px; font-size: 0.85rem;">
                                        +25 more areas
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-glass mb-3" 
                         style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" 
                                    style="background: rgba(255, 255, 255, 0.9); color: #2c3e50; border: none; padding: 1.25rem;">
                                <span class="me-3" style="color: var(--primary); font-weight: 800; font-size: 1.1rem;">03</span>
                                Are your technicians certified and experienced?
                                <i class="bi bi-chevron-down ms-auto" style="color: var(--primary);"></i>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: rgba(255, 255, 255, 0.7); color: #5d6d7e; padding: 1.25rem; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                                <p>Yes! All our technicians are <strong style="color: var(--primary);">fully certified</strong> with:</p>
                                <div class="certification-list mt-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check-circle-fill me-2" style="color: var(--tesla-green);"></i>
                                        <span style="color: #5d6d7e;">DEWA/DC PRO certifications</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check-circle-fill me-2" style="color: var(--tesla-green);"></i>
                                        <span style="color: #5d6d7e;">Minimum 5 years of experience</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check-circle-fill me-2" style="color: var(--tesla-green);"></i>
                                        <span style="color: #5d6d7e;">Regular training updates</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-check-circle-fill me-2" style="color: var(--tesla-green);"></i>
                                        <span style="color: #5d6d7e;">Fully insured for your safety</span>
                                    </div>
                                </div>
                                <p class="mt-3" style="color: #5d6d7e;">We perform background checks and verify all certifications before hiring.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-glass mb-3" 
                         style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" 
                                    style="background: rgba(255, 255, 255, 0.9); color: #2c3e50; border: none; padding: 1.25rem;">
                                <span class="me-3" style="color: var(--primary); font-weight: 800; font-size: 1.1rem;">04</span>
                                What types of services do you offer?
                                <i class="bi bi-chevron-down ms-auto" style="color: var(--primary);"></i>
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: rgba(255, 255, 255, 0.7); color: #5d6d7e; padding: 1.25rem; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                                <p>We provide comprehensive technical services including:</p>
                                <div class="row g-3 mt-3">
                                    <div class="col-6">
                                        <div class="service-icon-card text-center p-3 transform-hover" 
                                             style="backdrop-filter: blur(5px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 12px; transition: all 0.3s ease;">
                                            <div class="fs-2 mb-2" style="color: var(--primary);">❄️</div>
                                            <div class="fw-bold" style="color: #2c3e50;">AC Services</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="service-icon-card text-center p-3 transform-hover" 
                                             style="backdrop-filter: blur(5px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 12px; transition: all 0.3s ease;">
                                            <div class="fs-2 mb-2" style="color: var(--primary);">⚡</div>
                                            <div class="fw-bold" style="color: #2c3e50;">Electrical</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="service-icon-card text-center p-3 transform-hover" 
                                             style="backdrop-filter: blur(5px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 12px; transition: all 0.3s ease;">
                                            <div class="fs-2 mb-2" style="color: var(--primary);">🚰</div>
                                            <div class="fw-bold" style="color: #2c3e50;">Plumbing</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="service-icon-card text-center p-3 transform-hover" 
                                             style="backdrop-filter: blur(5px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 12px; transition: all 0.3s ease;">
                                            <div class="fs-2 mb-2" style="color: var(--primary);">🏠</div>
                                            <div class="fw-bold" style="color: #2c3e50;">Appliance Repair</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="faq-glass mb-3" 
                         style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" 
                                    style="background: rgba(255, 255, 255, 0.9); color: #2c3e50; border: none; padding: 1.25rem;">
                                <span class="me-3" style="color: var(--primary); font-weight: 800; font-size: 1.1rem;">05</span>
                                Do you offer emergency services?
                                <i class="bi bi-chevron-down ms-auto" style="color: var(--primary);"></i>
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: rgba(255, 255, 255, 0.7); color: #5d6d7e; padding: 1.25rem; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                                <p>Yes, we provide <strong style="color: var(--primary);">24/7 emergency services</strong> for urgent issues including:</p>
                                <div class="emergency-list mt-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-exclamation-triangle-fill me-2" style="color: #e74c3c;"></i>
                                        <span style="color: #5d6d7e;">Electrical faults & power failures</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-exclamation-triangle-fill me-2" style="color: #e74c3c;"></i>
                                        <span style="color: #5d6d7e;">Major water leaks & pipe bursts</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-exclamation-triangle-fill me-2" style="color: #e74c3c;"></i>
                                        <span style="color: #5d6d7e;">AC breakdowns during peak summer</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-exclamation-triangle-fill me-2" style="color: #e74c3c;"></i>
                                        <span style="color: #5d6d7e;">Gas leaks & safety issues</span>
                                    </div>
                                </div>
                                <div class="alert-glass mt-3 p-3" 
                                     style="background: rgba(231, 76, 60, 0.08); border: 1px solid rgba(231, 76, 60, 0.2); border-radius: 10px;">
                                    <strong style="color: #e74c3c;">Note:</strong> Emergency rates apply outside regular business hours (8 AM - 10 PM).
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="faq-glass mb-3" 
                         style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" 
                                    style="background: rgba(255, 255, 255, 0.9); color: #2c3e50; border: none; padding: 1.25rem;">
                                <span class="me-3" style="color: var(--primary); font-weight: 800; font-size: 1.1rem;">06</span>
                                What is your warranty policy?
                                <i class="bi bi-chevron-down ms-auto" style="color: var(--primary);"></i>
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="background: rgba(255, 255, 255, 0.7); color: #5d6d7e; padding: 1.25rem; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                                <p>We offer comprehensive warranty coverage:</p>
                                <div class="row g-3 mt-3">
                                    <div class="col-md-4">
                                        <div class="warranty-card text-center p-4 transform-hover" 
                                             style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                                            <div style="color: var(--primary); font-weight: 800; font-size: 2rem; line-height: 1;">90 Days</div>
                                            <div style="color: #7f8c8d;">Labor Warranty</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="warranty-card text-center p-4 transform-hover" 
                                             style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                                            <div style="color: var(--primary); font-weight: 800; font-size: 2rem; line-height: 1;">1 Year</div>
                                            <div style="color: #7f8c8d;">Parts Warranty</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="warranty-card text-center p-4 transform-hover" 
                                             style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.9); border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 15px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);">
                                            <div style="color: var(--primary); font-weight: 800; font-size: 2rem; line-height: 1;">2 Years</div>
                                            <div style="color: #7f8c8d;">Installation Warranty</div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3" style="color: #5d6d7e;">All warranty details are provided in your service receipt.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ CTA -->
                <div class="cta-glass mt-4 transform-hover" 
                     style="backdrop-filter: blur(12px); background: linear-gradient(135deg, rgba(77, 171, 247, 0.15), rgba(255, 255, 255, 0.9)); border: 1px solid rgba(77, 171, 247, 0.2); border-radius: 20px; padding: 1.5rem; position: relative; overflow: hidden; box-shadow: 0 8px 25px rgba(77, 171, 247, 0.1);">
                    <!-- Glow Effect -->
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at center, rgba(77, 171, 247, 0.1) 0%, transparent 70%);"></div>
                    
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 mb-3 mb-md-0">
                            <h3 class="mb-2" style="color: #2c3e50;">Still have questions?</h3>
                            <p class="mb-0" style="color: #5d6d7e;">Contact our support team for personalized assistance</p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="tel:+971XXXXXXXXX" class="btn btn-lg fw-bold px-4 py-3" 
                               style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border: none; color: white; border-radius: 50px; box-shadow: 0 6px 20px rgba(77, 171, 247, 0.3);">
                                <i class="bi bi-telephone-fill me-2"></i>
                                Call Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>