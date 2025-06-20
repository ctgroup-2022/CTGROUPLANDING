<?php
// filepath: c:\xampp\htdocs\CTLanding\components\testimonials.php
?>
<section id="testimonials" class="ct-testimonials-section">
    <!-- Background decorative elements -->
    <div class="ct-testimonials-bg-element ct-bg-element-1"></div>
    <div class="ct-testimonials-bg-element ct-bg-element-2"></div>
    
    <div class="ct-testimonials-container">
        <!-- Section Header -->
        <div class="ct-testimonials-header" data-aos="fade-up">
            <span class="ct-testimonials-subtitle">Success Stories</span>
            <h2 class="ct-testimonials-title">What Our <span class="ct-text-highlight">Students</span> Say</h2>
            <p class="ct-testimonials-description">Hear directly from our alumni who have achieved remarkable success after graduating from CT Group</p>
        </div>
        
        <!-- Testimonial filtering tabs -->
        <div class="ct-testimonials-tabs" data-aos="fade-up" data-aos-delay="100">
            <button class="ct-tab-button active" data-filter="all">All Stories</button>
            <button class="ct-tab-button" data-filter="shahpur">Shahpur Campus</button>
            <button class="ct-tab-button" data-filter="maqsudan">Maqsudan Campus</button>
            <button class="ct-tab-button" data-filter="video">Video Testimonials</button>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="ct-testimonials-grid" data-aos="fade-up" data-aos-delay="200">
            <!-- Testimonial 1 -->
            <div class="ct-testimonial-item" data-campus="shahpur">
                <div class="ct-testimonial-card">
                    <div class="ct-quote-mark">"</div>
                    
                    <!-- Profile Section -->
                    <div class="ct-testimonial-profile">
                        <div class="ct-profile-image">
                            <img src="assets/images/testimonials/student1.jpg" alt="Amit Sharma" loading="lazy">
                            <div class="ct-profile-overlay"></div>
                        </div>
                        <div class="ct-profile-info">
                            <h4 class="ct-profile-name">Amit Sharma</h4>
                            <p class="ct-profile-position">Software Engineer at Google</p>
                            <span class="ct-profile-batch">B.Tech CSE, 2018 Batch</span>
                        </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="ct-testimonial-rating">
                        <div class="ct-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="ct-rating-text">5.0/5</span>
                    </div>
                    
                    <!-- Content -->
                    <div class="ct-testimonial-content">
                        <p>"CT Group provided me with the perfect environment to grow both technically and personally. The faculty mentorship and industry exposure through internships perfectly prepared me for my role at Google. The campus culture fostered innovation that has been instrumental in my career growth."</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="ct-testimonial-footer">
                        <div class="ct-campus-badge">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Shahpur Campus</span>
                        </div>
                        
                        <div class="ct-testimonial-actions">
                            <div class="ct-verification-badge">
                                <i class="fab fa-linkedin"></i>
                                <span>Verified</span>
                            </div>
                            <button class="ct-video-btn" data-bs-toggle="modal" data-bs-target="#videoModal1">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="ct-testimonial-item" data-campus="maqsudan">
                <div class="ct-testimonial-card">
                    <div class="ct-quote-mark">"</div>
                    
                    <!-- Profile Section -->
                    <div class="ct-testimonial-profile">
                        <div class="ct-profile-image">
                            <img src="assets/images/testimonials/student2.jpg" alt="Priya Malhotra" loading="lazy">
                            <div class="ct-profile-overlay"></div>
                        </div>
                        <div class="ct-profile-info">
                            <h4 class="ct-profile-name">Priya Malhotra</h4>
                            <p class="ct-profile-position">Investment Banker at Goldman Sachs</p>
                            <span class="ct-profile-batch">MBA Finance, 2019 Batch</span>
                        </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="ct-testimonial-rating">
                        <div class="ct-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="ct-rating-text">4.5/5</span>
                    </div>
                    
                    <!-- Content -->
                    <div class="ct-testimonial-content">
                        <p>"The industry-aligned curriculum and practical exposure at CT Group gave me a competitive edge in the finance sector. The placement support was exceptional and helped me land my dream job at Goldman Sachs. The global perspective I gained during my studies has been invaluable."</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="ct-testimonial-footer">
                        <div class="ct-campus-badge">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Maqsudan Campus</span>
                        </div>
                        
                        <div class="ct-testimonial-actions">
                            <div class="ct-verification-badge">
                                <i class="fab fa-twitter"></i>
                                <span>Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="ct-testimonial-item" data-campus="shahpur">
                <div class="ct-testimonial-card">
                    <div class="ct-quote-mark">"</div>
                    
                    <!-- Profile Section -->
                    <div class="ct-testimonial-profile">
                        <div class="ct-profile-image">
                            <img src="assets/images/testimonials/student3.jpg" alt="Rajat Singh" loading="lazy">
                            <div class="ct-profile-overlay"></div>
                        </div>
                        <div class="ct-profile-info">
                            <h4 class="ct-profile-name">Rajat Singh</h4>
                            <p class="ct-profile-position">Mechanical Engineer at Tata Motors</p>
                            <span class="ct-profile-batch">B.Tech Mechanical, 2020 Batch</span>
                        </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="ct-testimonial-rating">
                        <div class="ct-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="ct-rating-text">4.0/5</span>
                    </div>
                    
                    <!-- Content -->
                    <div class="ct-testimonial-content">
                        <p>"The hands-on training in state-of-the-art laboratories at CT Group was instrumental in building my practical skills. The industry visits and workshops helped me understand real-world applications and prepared me for the challenges of the automotive industry."</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="ct-testimonial-footer">
                        <div class="ct-campus-badge">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Shahpur Campus</span>
                        </div>
                        
                        <div class="ct-testimonial-actions">
                            <div class="ct-verification-badge">
                                <i class="fab fa-linkedin"></i>
                                <span>Verified</span>
                            </div>
                            <button class="ct-video-btn" data-bs-toggle="modal" data-bs-target="#videoModal2">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="ct-testimonial-item" data-campus="maqsudan">
                <div class="ct-testimonial-card">
                    <div class="ct-quote-mark">"</div>
                    
                    <!-- Profile Section -->
                    <div class="ct-testimonial-profile">
                        <div class="ct-profile-image">
                            <img src="assets/images/testimonials/student4.jpg" alt="Neha Gupta" loading="lazy">
                            <div class="ct-profile-overlay"></div>
                        </div>
                        <div class="ct-profile-info">
                            <h4 class="ct-profile-name">Neha Gupta</h4>
                            <p class="ct-profile-position">Data Scientist at Microsoft</p>
                            <span class="ct-profile-batch">M.Tech AI & ML, 2021 Batch</span>
                        </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="ct-testimonial-rating">
                        <div class="ct-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="ct-rating-text">5.0/5</span>
                    </div>
                    
                    <!-- Content -->
                    <div class="ct-testimonial-content">
                        <p>"The advanced AI and Machine Learning program at CT Group was perfectly aligned with industry needs. The research opportunities and mentorship from experienced faculty helped me secure my dream position at Microsoft. The collaborative learning environment was exceptional."</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="ct-testimonial-footer">
                        <div class="ct-campus-badge">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Maqsudan Campus</span>
                        </div>
                        
                        <div class="ct-testimonial-actions">
                            <div class="ct-verification-badge">
                                <i class="fab fa-linkedin"></i>
                                <span>Verified</span>
                            </div>
                            <button class="ct-video-btn" data-bs-toggle="modal" data-bs-target="#videoModal3">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 5 -->
            <div class="ct-testimonial-item" data-campus="shahpur">
                <div class="ct-testimonial-card">
                    <div class="ct-quote-mark">"</div>
                    
                    <!-- Profile Section -->
                    <div class="ct-testimonial-profile">
                        <div class="ct-profile-image">
                            <img src="assets/images/testimonials/student5.jpg" alt="Arjun Verma" loading="lazy">
                            <div class="ct-profile-overlay"></div>
                        </div>
                        <div class="ct-profile-info">
                            <h4 class="ct-profile-name">Arjun Verma</h4>
                            <p class="ct-profile-position">Product Manager at Amazon</p>
                            <span class="ct-profile-batch">MBA Technology, 2020 Batch</span>
                        </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="ct-testimonial-rating">
                        <div class="ct-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="ct-rating-text">4.5/5</span>
                    </div>
                    
                    <!-- Content -->
                    <div class="ct-testimonial-content">
                        <p>"The interdisciplinary approach at CT Group helped me bridge the gap between technology and business. The case study methodology and industry interactions prepared me for complex product management challenges at Amazon. An incredible learning journey!"</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="ct-testimonial-footer">
                        <div class="ct-campus-badge">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Shahpur Campus</span>
                        </div>
                        
                        <div class="ct-testimonial-actions">
                            <div class="ct-verification-badge">
                                <i class="fab fa-twitter"></i>
                                <span>Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 6 -->
            <div class="ct-testimonial-item" data-campus="maqsudan">
                <div class="ct-testimonial-card">
                    <div class="ct-quote-mark">"</div>
                    
                    <!-- Profile Section -->
                    <div class="ct-testimonial-profile">
                        <div class="ct-profile-image">
                            <img src="assets/images/testimonials/student6.jpg" alt="Sakshi Sharma" loading="lazy">
                            <div class="ct-profile-overlay"></div>
                        </div>
                        <div class="ct-profile-info">
                            <h4 class="ct-profile-name">Sakshi Sharma</h4>
                            <p class="ct-profile-position">Civil Engineer at L&T Construction</p>
                            <span class="ct-profile-batch">B.Tech Civil, 2019 Batch</span>
                        </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="ct-testimonial-rating">
                        <div class="ct-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="ct-rating-text">4.0/5</span>
                    </div>
                    
                    <!-- Content -->
                    <div class="ct-testimonial-content">
                        <p>"The practical exposure through live projects and industry partnerships at CT Group gave me real-world experience. The emphasis on sustainable construction practices and modern engineering techniques helped me excel in my career at L&T Construction."</p>
                    </div>
                    
                    <!-- Footer -->
                    <div class="ct-testimonial-footer">
                        <div class="ct-campus-badge">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Maqsudan Campus</span>
                        </div>
                        
                        <div class="ct-testimonial-actions">
                            <div class="ct-verification-badge">
                                <i class="fab fa-linkedin"></i>
                                <span>Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- View All Button -->
        <div class="ct-view-all-wrapper" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="ct-btn ct-btn-view-all">
                <span>View All Success Stories</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    
    <!-- Video Modals -->
    <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Amit Sharma - Google Success Story</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/your-video-id" title="Amit Sharma Testimonial" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="videoModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rajat Singh - Tata Motors Success Story</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/your-video-id" title="Rajat Singh Testimonial" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="videoModal3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Neha Gupta - Microsoft Success Story</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/your-video-id" title="Neha Gupta Testimonial" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== CT Testimonials Section - Consistent Light Theme ===== */
.ct-testimonials-section {
    position: relative !important;
    padding: 100px 0 !important;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%) !important;
    overflow: hidden !important;
}

.ct-testimonials-section::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background: 
        radial-gradient(circle at 25% 25%, rgba(187, 34, 37, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(248, 180, 0, 0.03) 0%, transparent 50%) !important;
    z-index: 0 !important;
}

.ct-testimonials-container {
    max-width: 1400px !important;
    margin: 0 auto !important;
    padding: 0 20px !important;
    position: relative !important;
    z-index: 1 !important;
}

/* Background Elements */
.ct-testimonials-bg-element {
    position: absolute !important;
    border-radius: 50% !important;
    background: rgba(187, 34, 37, 0.05) !important;
    z-index: 0 !important;
    animation: ctFloatElement 20s infinite linear !important;
}

.ct-bg-element-1 {
    width: 300px !important;
    height: 300px !important;
    top: 10% !important;
    right: -100px !important;
}

.ct-bg-element-2 {
    width: 200px !important;
    height: 200px !important;
    bottom: 20% !important;
    left: -50px !important;
    animation-delay: -10s !important;
}

@keyframes ctFloatElement {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-20px) rotate(90deg); }
    50% { transform: translateY(0px) rotate(180deg); }
    75% { transform: translateY(20px) rotate(270deg); }
}

/* Section Header */
.ct-testimonials-header {
    text-align: center !important;
    margin-bottom: 60px !important;
}

.ct-testimonials-subtitle {
    display: inline-block !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    color: var(--ct-primary) !important;
    text-transform: uppercase !important;
    letter-spacing: 2px !important;
    margin-bottom: 15px !important;
    padding: 8px 20px !important;
    background: rgba(187, 34, 37, 0.1) !important;
    border-radius: 30px !important;
    border: 1px solid rgba(187, 34, 37, 0.2) !important;
}

.ct-testimonials-title {
    font-size: 3rem !important;
    font-weight: 700 !important;
    color: var(--ct-dark) !important;
    margin-bottom: 20px !important;
    font-family: var(--ct-font-heading) !important;
    line-height: 1.2 !important;
}

.ct-text-highlight {
    color: var(--ct-primary) !important;
    position: relative !important;
}

.ct-text-highlight::after {
    content: '' !important;
    position: absolute !important;
    bottom: 5px !important;
    left: 0 !important;
    width: 100% !important;
    height: 8px !important;
    background: rgba(187, 34, 37, 0.2) !important;
    z-index: -1 !important;
}

.ct-testimonials-description {
    font-size: 1.1rem !important;
    color: var(--ct-neutral-gray) !important;
    max-width: 750px !important;
    margin: 0 auto !important;
    line-height: 1.6 !important;
}

/* Testimonial Tabs */
.ct-testimonials-tabs {
    display: flex !important;
    justify-content: center !important;
    flex-wrap: wrap !important;
    margin-bottom: 50px !important;
    padding: 20px !important;
    background: #ffffff !important;
    border-radius: 15px !important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08) !important;
    border: 1px solid rgba(0, 0, 0, 0.05) !important;
}

.ct-tab-button {
    background: transparent !important;
    border: none !important;
    padding: 12px 25px !important;
    margin: 5px !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    color: var(--ct-neutral-gray) !important;
    cursor: pointer !important;
    position: relative !important;
    transition: all 0.3s ease !important;
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
    border-radius: 25px !important;
}

.ct-tab-button::before {
    content: '' !important;
    position: absolute !important;
    bottom: 0 !important;
    left: 50% !important;
    width: 0 !important;
    height: 3px !important;
    background: var(--ct-primary) !important;
    transition: all 0.3s ease !important;
    transform: translateX(-50%) !important;
}

.ct-tab-button.active,
.ct-tab-button:hover {
    color: var(--ct-primary) !important;
    background: rgba(187, 34, 37, 0.05) !important;
}

.ct-tab-button.active::before {
    width: 80% !important;
}

/* Testimonials Grid */
.ct-testimonials-grid {
    display: grid !important;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)) !important;
    gap: 30px !important;
    margin-bottom: 60px !important;
}

/* Testimonial Item */
.ct-testimonial-item {
    transition: all 0.3s ease !important;
}

.ct-testimonial-card {
    background: #ffffff !important;
    border: 1px solid rgba(0, 0, 0, 0.08) !important;
    border-radius: 20px !important;
    padding: 30px !important;
    position: relative !important;
    overflow: hidden !important;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
    height: 100% !important;
    display: flex !important;
    flex-direction: column !important;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08) !important;
}

.ct-testimonial-card::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 4px !important;
    background: linear-gradient(90deg, var(--ct-primary) 0%, var(--ct-yellow) 100%) !important;
    transform: scaleX(0) !important;
    transform-origin: left !important;
    transition: transform 0.5s ease !important;
}

.ct-testimonial-card:hover::before {
    transform: scaleX(1) !important;
}

.ct-testimonial-card:hover {
    transform: translateY(-10px) !important;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    border-color: rgba(187, 34, 37, 0.2) !important;
}

/* Quote Mark */
.ct-quote-mark {
    position: absolute !important;
    top: 20px !important;
    right: 25px !important;
    font-size: 60px !important;
    font-family: 'Georgia', serif !important;
    opacity: 0.1 !important;
    color: var(--ct-primary) !important;
    line-height: 1 !important;
    transform: rotate(180deg) !important;
    z-index: 0 !important;
}

/* Profile Section */
.ct-testimonial-profile {
    display: flex !important;
    align-items: center !important;
    margin-bottom: 20px !important;
    position: relative !important;
    z-index: 1 !important;
}

.ct-profile-image {
    width: 70px !important;
    height: 70px !important;
    border-radius: 15px !important;
    overflow: hidden !important;
    margin-right: 20px !important;
    position: relative !important;
    border: 3px solid rgba(187, 34, 37, 0.1) !important;
    transition: all 0.3s ease !important;
    flex-shrink: 0 !important;
}

.ct-testimonial-card:hover .ct-profile-image {
    border-color: rgba(187, 34, 37, 0.3) !important;
    transform: scale(1.05) !important;
}

.ct-profile-image img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    transition: all 0.5s ease !important;
}

.ct-testimonial-card:hover .ct-profile-image img {
    transform: scale(1.1) !important;
}

.ct-profile-overlay {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background: linear-gradient(135deg, rgba(187, 34, 37, 0.1), transparent) !important;
    opacity: 0 !important;
    transition: opacity 0.3s ease !important;
}

.ct-testimonial-card:hover .ct-profile-overlay {
    opacity: 1 !important;
}

.ct-profile-info {
    flex: 1 !important;
}

.ct-profile-name {
    font-size: 1.3rem !important;
    font-weight: 700 !important;
    color: var(--ct-dark) !important;
    margin-bottom: 5px !important;
    line-height: 1.2 !important;
}

.ct-profile-position {
    font-size: 0.95rem !important;
    color: var(--ct-neutral-gray) !important;
    margin-bottom: 5px !important;
    font-weight: 500 !important;
}

.ct-profile-batch {
    font-size: 0.8rem !important;
    color: var(--ct-primary) !important;
    font-weight: 600 !important;
    background: rgba(187, 34, 37, 0.1) !important;
    padding: 3px 8px !important;
    border-radius: 12px !important;
    display: inline-block !important;
}

/* Rating */
.ct-testimonial-rating {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    margin-bottom: 20px !important;
    padding: 15px 0 !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
}

.ct-stars {
    display: flex !important;
    gap: 3px !important;
}

.ct-stars i {
    color: #ffc107 !important;
    font-size: 16px !important;
}

.ct-rating-text {
    font-size: 0.9rem !important;
    color: var(--ct-neutral-gray) !important;
    font-weight: 600 !important;
}

/* Content */
.ct-testimonial-content {
    flex: 1 !important;
    margin-bottom: 25px !important;
}

.ct-testimonial-content p {
    font-size: 1rem !important;
    line-height: 1.7 !important;
    color: var(--ct-neutral-gray) !important;
    font-style: italic !important;
    margin-bottom: 0 !important;
    position: relative !important;
    z-index: 1 !important;
}

/* Footer */
.ct-testimonial-footer {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    flex-wrap: wrap !important;
    gap: 15px !important;
    padding-top: 20px !important;
    border-top: 1px solid rgba(0, 0, 0, 0.05) !important;
}

.ct-campus-badge {
    display: flex !important;
    align-items: center !important;
    padding: 8px 15px !important;
    background: var(--ct-gray-light) !important;
    border-radius: 20px !important;
    font-size: 0.85rem !important;
    font-weight: 600 !important;
    color: var(--ct-dark) !important;
    border: 1px solid rgba(187, 34, 37, 0.1) !important;
    transition: all 0.3s ease !important;
}

.ct-campus-badge i {
    margin-right: 8px !important;
    color: var(--ct-primary) !important;
    font-size: 12px !important;
}

.ct-testimonial-card:hover .ct-campus-badge {
    background: rgba(187, 34, 37, 0.1) !important;
    border-color: rgba(187, 34, 37, 0.2) !important;
}

.ct-testimonial-actions {
    display: flex !important;
    align-items: center !important;
    gap: 15px !important;
}

.ct-verification-badge {
    display: flex !important;
    align-items: center !important;
    font-size: 0.8rem !important;
    color: var(--ct-neutral-gray) !important;
    font-weight: 500 !important;
}

.ct-verification-badge i {
    margin-right: 5px !important;
    font-size: 14px !important;
}

.ct-verification-badge i.fa-linkedin {
    color: #0077b5 !important;
}

.ct-verification-badge i.fa-twitter {
    color: #1da1f2 !important;
}

.ct-video-btn {
    width: 40px !important;
    height: 40px !important;
    border-radius: 50% !important;
    background: linear-gradient(135deg, var(--ct-primary), var(--ct-primary-dark)) !important;
    border: none !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #ffffff !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 4px 12px rgba(187, 34, 37, 0.3) !important;
}

.ct-video-btn:hover {
    transform: scale(1.1) !important;
    box-shadow: 0 6px 20px rgba(187, 34, 37, 0.4) !important;
}

.ct-video-btn i {
    font-size: 14px !important;
    margin-left: 2px !important;
}

/* View All Button */
.ct-view-all-wrapper {
    text-align: center !important;
}

.ct-btn-view-all {
    display: inline-flex !important;
    align-items: center !important;
    padding: 15px 35px !important;
    background: var(--ct-primary) !important;
    color: #ffffff !important;
    border: none !important;
    border-radius: 30px !important;
    font-weight: 600 !important;
    font-size: 1rem !important;
    text-decoration: none !important;
    transition: all 0.3s ease !important;
    position: relative !important;
    overflow: hidden !important;
    z-index: 1 !important;
    box-shadow: 0 8px 25px rgba(187, 34, 37, 0.3) !important;
}

.ct-btn-view-all::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: -100% !important;
    width: 100% !important;
    height: 100% !important;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent) !important;
    transition: left 0.6s ease !important;
    z-index: -1 !important;
}

.ct-btn-view-all:hover::before {
    left: 100% !important;
}

.ct-btn-view-all:hover {
    background: var(--ct-primary-dark) !important;
    color: #ffffff !important;
    transform: translateY(-3px) !important;
    box-shadow: 0 12px 35px rgba(187, 34, 37, 0.4) !important;
}

.ct-btn-view-all i {
    margin-left: 10px !important;
    transition: transform 0.3s ease !important;
}

.ct-btn-view-all:hover i {
    transform: translateX(5px) !important;
}

/* Modal Styles */
.modal-content {
    border-radius: 15px !important;
    border: none !important;
    overflow: hidden !important;
}

.modal-header {
    background: var(--ct-primary) !important;
    color: #ffffff !important;
    border: none !important;
}

.modal-title {
    font-weight: 600 !important;
}

.btn-close {
    filter: brightness(0) invert(1) !important;
}

/* Responsive Design */
@media (max-width: 1199px) {
    .ct-testimonials-title {
        font-size: 2.5rem !important;
    }
    
    .ct-testimonials-grid {
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)) !important;
        gap: 25px !important;
    }
}

@media (max-width: 991px) {
    .ct-testimonials-section {
        padding: 80px 0 !important;
    }
    
    .ct-testimonials-header {
        margin-bottom: 50px !important;
    }
    
    .ct-testimonials-title {
        font-size: 2.2rem !important;
    }
    
    .ct-testimonials-grid {
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)) !important;
        gap: 20px !important;
    }
    
    .ct-testimonials-tabs {
        padding: 15px !important;
    }
    
    .ct-tab-button {
        padding: 10px 20px !important;
        font-size: 13px !important;
    }
}

@media (max-width: 767px) {
    .ct-testimonials-container {
        padding: 0 15px !important;
    }
    
    .ct-testimonials-title {
        font-size: 1.8rem !important;
    }
    
    .ct-testimonials-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .ct-testimonial-card {
        padding: 25px !important;
    }
    
    .ct-testimonial-profile {
        flex-direction: column !important;
        text-align: center !important;
        align-items: center !important;
    }
    
    .ct-profile-image {
        margin-right: 0 !important;
        margin-bottom: 15px !important;
    }
    
    .ct-testimonial-footer {
        flex-direction: column !important;
        align-items: stretch !important;
        gap: 10px !important;
    }
    
    .ct-testimonial-actions {
        justify-content: center !important;
    }
    
    .ct-testimonials-tabs {
        flex-direction: column !important;
        gap: 10px !important;
    }
    
    .ct-tab-button {
        margin: 5px 0 !important;
    }
}

@media (max-width: 480px) {
    .ct-testimonials-section {
        padding: 60px 0 !important;
    }
    
    .ct-testimonials-subtitle {
        font-size: 12px !important;
        padding: 6px 15px !important;
    }
    
    .ct-testimonials-title {
        font-size: 1.6rem !important;
    }
    
    .ct-testimonials-description {
        font-size: 1rem !important;
    }
    
    .ct-testimonial-card {
        padding: 20px !important;
    }
    
    .ct-profile-name {
        font-size: 1.1rem !important;
    }
    
    .ct-btn-view-all {
        padding: 12px 25px !important;
        font-size: 0.9rem !important;
    }
}

/* Animation Classes */
.ct-testimonial-item {
    opacity: 0 !important;
    transform: translateY(30px) !important;
    transition: all 0.6s ease !important;
}

.ct-testimonial-item.ct-animate {
    opacity: 1 !important;
    transform: translateY(0) !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Testimonial filtering
    const tabButtons = document.querySelectorAll('.ct-tab-button');
    const testimonialItems = document.querySelectorAll('.ct-testimonial-item');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active state
            tabButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Get filter value
            const filter = this.getAttribute('data-filter');
            
            // Filter testimonials with animation
            testimonialItems.forEach((item, index) => {
                item.style.transition = 'all 0.3s ease';
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    if (filter === 'all' || item.getAttribute('data-campus') === filter || 
                        (filter === 'video' && item.querySelector('.ct-video-btn'))) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        item.style.display = 'none';
                    }
                }, 200);
            });
        });
    });
    
    // Video modal handling
    const videoModals = document.querySelectorAll('[id^="videoModal"]');
    videoModals.forEach(modal => {
        modal.addEventListener('hidden.bs.modal', function () {
            const iframe = this.querySelector('iframe');
            if (iframe) {
                const src = iframe.src;
                iframe.src = '';
                setTimeout(() => {
                    iframe.src = src;
                }, 100);
            }
        });
    });
    
    // Animate testimonials on scroll
    if (typeof IntersectionObserver !== 'undefined') {
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('ct-animate');
                    }, index * 100);
                }
            });
        }, observerOptions);
        
        testimonialItems.forEach(item => {
            observer.observe(item);
        });
    }
    
    // Add hover effects for better interaction
    const testimonialCards = document.querySelectorAll('.ct-testimonial-card');
    
    testimonialCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const profileImage = this.querySelector('.ct-profile-image');
            const quote = this.querySelector('.ct-quote-mark');
            
            if (profileImage) {
                profileImage.style.transform = 'scale(1.05) rotate(2deg)';
            }
            
            if (quote) {
                quote.style.opacity = '0.2';
                quote.style.transform = 'rotate(180deg) scale(1.1)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const profileImage = this.querySelector('.ct-profile-image');
            const quote = this.querySelector('.ct-quote-mark');
            
            if (profileImage) {
                profileImage.style.transform = '';
            }
            
            if (quote) {
                quote.style.opacity = '0.1';
                quote.style.transform = 'rotate(180deg) scale(1)';
            }
        });
    });
    
    // Video button click tracking
    const videoButtons = document.querySelectorAll('.ct-video-btn');
    videoButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Add analytics tracking here if needed
            console.log('Video testimonial opened');
        });
    });
    
    // Enhanced rating display
    const ratingStars = document.querySelectorAll('.ct-stars');
    ratingStars.forEach(starContainer => {
        const stars = starContainer.querySelectorAll('i');
        stars.forEach((star, index) => {
            star.style.animationDelay = `${index * 0.1}s`;
            star.classList.add('star-animate');
        });
    });
    
    // Add CSS for star animation
    const style = document.createElement('style');
    style.textContent = `
        .star-animate {
            animation: starTwinkle 2s ease-in-out infinite;
        }
        
        @keyframes starTwinkle {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
    `;
    document.head.appendChild(style);
});
</script>