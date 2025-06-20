
<section id="home" class="ct-hero-section">
    <div class="ct-hero-slider">
        <div class="ct-hero-wrapper">
            <!-- Slide 1: Shahpur Campus -->
            <div class="ct-hero-slide ct-slide-active" data-bg="assets/images/campuses/shahpur-hero.jpg">
                <div class="ct-hero-overlay"></div>
                <div class="ct-hero-container">
                    <div class="ct-hero-row">
                        <div class="ct-hero-col">
                            <div class="ct-hero-content" data-aos="fade-up">
                                <span class="ct-hero-subtitle">Welcome to</span>
                                <h1 class="ct-hero-title">CT Group of Institutions</h1>
                                <h2 class="ct-hero-campus-title">Shahpur Campus</h2>
                                <p class="ct-hero-description">Pioneering Excellence in Education Since 1997. Building future leaders through innovative learning and comprehensive development programs.</p>
                                <div class="ct-hero-buttons">
                                    <a href="<?php echo SHAHPUR_URL ?? '#'; ?>" class="ct-hero-btn ct-btn-outline">
                                        <i class="fas fa-university"></i>
                                        <span>Explore Campus</span>
                                    </a>
                                    <a href="<?php echo SHAHPUR_APPLY_URL ?? '#'; ?>" class="ct-hero-btn ct-btn-primary">
                                        <i class="fas fa-graduation-cap"></i>
                                        <span>Apply Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2: Maqsudan Campus -->
            <div class="ct-hero-slide" data-bg="assets/images/campuses/maqsudan-hero.jpg">
                <div class="ct-hero-overlay"></div>
                <div class="ct-hero-container">
                    <div class="ct-hero-row">
                        <div class="ct-hero-col">
                            <div class="ct-hero-content" data-aos="fade-up">
                                <span class="ct-hero-subtitle">Welcome to</span>
                                <h1 class="ct-hero-title">CT Group of Institutions</h1>
                                <h2 class="ct-hero-campus-title">Maqsudan Campus</h2>
                                <p class="ct-hero-description">Transforming Education with Innovation. Empowering students with cutting-edge technology and world-class facilities.</p>
                                <div class="ct-hero-buttons">
                                    <a href="<?php echo MAQSUDAN_URL ?? '#'; ?>" class="ct-hero-btn ct-btn-outline">
                                        <i class="fas fa-university"></i>
                                        <span>Explore Campus</span>
                                    </a>
                                    <a href="<?php echo MAQSUDAN_APPLY_URL ?? '#'; ?>" class="ct-hero-btn ct-btn-primary">
                                        <i class="fas fa-graduation-cap"></i>
                                        <span>Apply Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation -->
        <div class="ct-hero-pagination">
            <span class="ct-pagination-bullet ct-active" data-slide="0"></span>
            <span class="ct-pagination-bullet" data-slide="1"></span>
        </div>
        
        <!-- Navigation arrows -->
        <div class="ct-hero-navigation">
            <button class="ct-hero-nav ct-nav-prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="ct-hero-nav ct-nav-next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
    
    <!-- Floating stats counter -->
    <div class="ct-stats-floating">
        <div class="ct-stats-container">
            <div class="ct-stats-row">
                <div class="ct-stats-col">
                    <div class="ct-counter-item">
                        <h3><span class="ct-counter" data-count="25">0</span>+</h3>
                        <p>Years of Excellence</p>
                    </div>
                </div>
                <div class="ct-stats-col">
                    <div class="ct-counter-item">
                        <h3><span class="ct-counter" data-count="20000">0</span>+</h3>
                        <p>Students</p>
                    </div>
                </div>
                <div class="ct-stats-col">
                    <div class="ct-counter-item">
                        <h3><span class="ct-counter" data-count="500">0</span>+</h3>
                        <p>Faculty Members</p>
                    </div>
                </div>
                <div class="ct-stats-col">
                    <div class="ct-counter-item">
                        <h3><span class="ct-counter" data-count="98">0</span>%</h3>
                        <p>Placement Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Down Indicator -->
    <div class="ct-scroll-indicator">
        <span>Scroll Down</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<style>
/* ===== Hero Section Styles ===== */
.ct-hero-section {
    position: relative !important;
    height: 100vh !important;
    min-height: 700px !important;
    overflow: hidden !important;
    margin-top: 0 !important; /* Fix: Remove any margin from navbar */
    padding-top: 0 !important; /* Fix: Remove any padding */
    top: 0 !important; /* Fix: Ensure it starts from top */
}

.ct-hero-slider {
    position: relative !important;
    width: 100% !important;
    height: 100% !important;
}

.ct-hero-wrapper {
    position: relative !important;
    width: 100% !important;
    height: 100% !important;
}

.ct-hero-slide {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transition: all 1s ease-in-out !important;
    z-index: 1 !important;
}

.ct-hero-slide.ct-slide-active {
    opacity: 1 !important;
    visibility: visible !important;
    z-index: 2 !important;
}

.ct-hero-overlay {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background: linear-gradient(
        135deg, 
        rgba(0, 0, 0, 0.8) 0%, 
        rgba(187, 34, 37, 0.6) 50%, 
        rgba(0, 0, 0, 0.4) 100%
    ) !important;
    z-index: 3 !important;
}

.ct-hero-container {
    position: relative !important;
    z-index: 4 !important;
    max-width: 1400px !important;
    margin: 0 auto !important;
    padding: 0 20px !important;
    height: 100% !important;
    display: flex !important;
    align-items: center !important;
}

.ct-hero-row {
    width: 100% !important;
}

.ct-hero-col {
    max-width: 100% !important;
    width: 100% !important;
}

.ct-hero-content {
    color: #ffffff !important;
    max-width: 700px !important;
    position: relative !important;
    z-index: 5 !important;
}

.ct-hero-subtitle {
    display: inline-block !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    color: var(--ct-yellow) !important;
    text-transform: uppercase !important;
    letter-spacing: 2px !important;
    margin-bottom: 15px !important;
    padding: 8px 20px !important;
    background: rgba(248, 180, 0, 0.15) !important;
    border-radius: 30px !important;
    border: 1px solid rgba(248, 180, 0, 0.3) !important;
    backdrop-filter: blur(10px) !important;
    animation: fadeInUp 1s ease 0.2s both !important;
}

.ct-hero-title {
    font-size: 4rem !important;
    font-weight: 800 !important;
    line-height: 1.1 !important;
    margin-bottom: 15px !important;
    color: #ffffff !important;
    font-family: var(--ct-font-heading) !important;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3) !important;
    animation: fadeInUp 1s ease 0.4s both !important;
}

.ct-hero-campus-title {
    font-size: 2.8rem !important;
    font-weight: 700 !important;
    color: var(--ct-yellow) !important;
    margin-bottom: 25px !important;
    font-family: var(--ct-font-heading) !important;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3) !important;
    animation: fadeInUp 1s ease 0.6s both !important;
}

.ct-hero-description {
    font-size: 1.2rem !important;
    line-height: 1.6 !important;
    margin-bottom: 35px !important;
    color: rgba(255, 255, 255, 0.9) !important;
    font-weight: 400 !important;
    animation: fadeInUp 1s ease 0.8s both !important;
}

.ct-hero-buttons {
    display: flex !important;
    gap: 20px !important;
    flex-wrap: wrap !important;
    animation: fadeInUp 1s ease 1s both !important;
}

.ct-hero-btn {
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 15px 30px !important;
    border-radius: 8px !important;
    font-weight: 600 !important;
    font-size: 14px !important;
    text-decoration: none !important;
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
    transition: all 0.3s ease !important;
    position: relative !important;
    overflow: hidden !important;
    min-width: 180px !important;
    justify-content: center !important;
    border: 2px solid transparent !important;
}

.ct-hero-btn i {
    font-size: 16px !important;
    transition: all 0.3s ease !important;
}

.ct-hero-btn span {
    position: relative !important;
    z-index: 2 !important;
}

.ct-btn-primary {
    background: var(--ct-primary) !important;
    color: #ffffff !important;
    border-color: var(--ct-primary) !important;
}

.ct-btn-primary::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: -100% !important;
    width: 100% !important;
    height: 100% !important;
    background: var(--ct-primary-dark) !important;
    transition: all 0.4s ease !important;
    z-index: 1 !important;
}

.ct-btn-primary:hover::before {
    left: 0 !important;
}

.ct-btn-primary:hover {
    color: #ffffff !important;
    transform: translateY(-3px) !important;
    box-shadow: 0 10px 25px rgba(187, 34, 37, 0.4) !important;
}

.ct-btn-outline {
    background: rgba(255, 255, 255, 0.1) !important;
    color: #ffffff !important;
    border-color: rgba(255, 255, 255, 0.3) !important;
    backdrop-filter: blur(10px) !important;
}

.ct-btn-outline::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: -100% !important;
    width: 100% !important;
    height: 100% !important;
    background: rgba(255, 255, 255, 0.2) !important;
    transition: all 0.4s ease !important;
    z-index: 1 !important;
}

.ct-btn-outline:hover::before {
    left: 0 !important;
}

.ct-btn-outline:hover {
    color: #ffffff !important;
    transform: translateY(-3px) !important;
    box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2) !important;
    border-color: rgba(255, 255, 255, 0.5) !important;
}

/* Hero Navigation */
.ct-hero-pagination {
    position: absolute !important;
    bottom: 40px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    display: flex !important;
    gap: 12px !important;
    z-index: 6 !important;
}

.ct-pagination-bullet {
    width: 12px !important;
    height: 12px !important;
    border-radius: 50% !important;
    background: rgba(255, 255, 255, 0.4) !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    border: 2px solid transparent !important;
}

.ct-pagination-bullet.ct-active {
    background: var(--ct-yellow) !important;
    border-color: rgba(255, 255, 255, 0.3) !important;
    transform: scale(1.2) !important;
}

.ct-hero-navigation {
    position: absolute !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    z-index: 6 !important;
}

.ct-hero-nav {
    width: 50px !important;
    height: 50px !important;
    border-radius: 50% !important;
    background: rgba(255, 255, 255, 0.1) !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    color: #ffffff !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    backdrop-filter: blur(10px) !important;
    font-size: 18px !important;
}

.ct-nav-prev {
    left: 30px !important;
}

.ct-nav-next {
    right: 30px !important;
}

.ct-hero-nav:hover {
    background: rgba(255, 255, 255, 0.2) !important;
    border-color: rgba(255, 255, 255, 0.4) !important;
    transform: scale(1.1) !important;
}

/* Stats Floating */
.ct-stats-floating {
    position: absolute !important;
    bottom: 0 !important;
    left: 0 !important;
    width: 100% !important;
    background: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(20px) !important;
    border-top: 1px solid rgba(187, 34, 37, 0.1) !important;
    z-index: 5 !important;
    padding: 20px 0 !important;
    transform: translateY(100%) !important;
    transition: all 0.6s ease !important;
    opacity: 0 !important;
}

.ct-stats-floating.ct-show {
    transform: translateY(0) !important;
    opacity: 1 !important;
}

.ct-stats-container {
    max-width: 1400px !important;
    margin: 0 auto !important;
    padding: 0 20px !important;
}

.ct-stats-row {
    display: grid !important;
    grid-template-columns: repeat(4, 1fr) !important;
    gap: 20px !important;
}

.ct-stats-col {
    text-align: center !important;
}

.ct-counter-item h3 {
    font-size: 2.5rem !important;
    font-weight: 800 !important;
    color: var(--ct-primary) !important;
    margin-bottom: 5px !important;
    font-family: var(--ct-font-heading) !important;
}

.ct-counter-item p {
    font-size: 14px !important;
    color: var(--ct-dark) !important;
    margin: 0 !important;
    font-weight: 500 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
}

/* Scroll Indicator */
.ct-scroll-indicator {
    position: absolute !important;
    bottom: 120px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    color: rgba(255, 255, 255, 0.8) !important;
    text-align: center !important;
    z-index: 6 !important;
    cursor: pointer !important;
    animation: bounce 2s infinite !important;
}

.ct-scroll-indicator span {
    display: block !important;
    font-size: 12px !important;
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
    margin-bottom: 8px !important;
    font-weight: 500 !important;
}

.ct-scroll-indicator i {
    font-size: 16px !important;
    animation: bounceDown 2s infinite !important;
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0 !important;
        transform: translateY(30px) !important;
    }
    to {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateX(-50%) translateY(0) !important;
    }
    40% {
        transform: translateX(-50%) translateY(-10px) !important;
    }
    60% {
        transform: translateX(-50%) translateY(-5px) !important;
    }
}

@keyframes bounceDown {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0) !important;
    }
    40% {
        transform: translateY(-8px) !important;
    }
    60% {
        transform: translateY(-4px) !important;
    }
}

/* Responsive Design */
@media (max-width: 1199px) {
    .ct-hero-title {
        font-size: 3.5rem !important;
    }
    
    .ct-hero-campus-title {
        font-size: 2.4rem !important;
    }
    
    .ct-hero-description {
        font-size: 1.1rem !important;
    }
}

@media (max-width: 991px) {
    .ct-hero-section {
        min-height: 600px !important;
        height: 100vh !important;
    }
    
    .ct-hero-title {
        font-size: 3rem !important;
    }
    
    .ct-hero-campus-title {
        font-size: 2rem !important;
    }
    
    .ct-hero-description {
        font-size: 1rem !important;
        margin-bottom: 25px !important;
    }
    
    .ct-hero-buttons {
        gap: 15px !important;
    }
    
    .ct-hero-btn {
        padding: 12px 24px !important;
        font-size: 13px !important;
        min-width: 160px !important;
    }
    
    .ct-stats-row {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
    }
    
    .ct-counter-item h3 {
        font-size: 2rem !important;
    }
    
    .ct-counter-item p {
        font-size: 12px !important;
    }
    
    .ct-hero-navigation {
        display: none !important;
    }
}

@media (max-width: 767px) {
    .ct-hero-section {
        min-height: 500px !important;
    }
    
    .ct-hero-container {
        padding: 0 15px !important;
    }
    
    .ct-hero-title {
        font-size: 2.5rem !important;
        margin-bottom: 10px !important;
    }
    
    .ct-hero-campus-title {
        font-size: 1.8rem !important;
        margin-bottom: 20px !important;
    }
    
    .ct-hero-description {
        font-size: 0.95rem !important;
        margin-bottom: 20px !important;
    }
    
    .ct-hero-buttons {
        flex-direction: column !important;
        gap: 12px !important;
    }
    
    .ct-hero-btn {
        width: 100% !important;
        padding: 12px 20px !important;
        min-width: auto !important;
    }
    
    .ct-stats-floating {
        padding: 15px 0 !important;
    }
    
    .ct-stats-container {
        padding: 0 15px !important;
    }
    
    .ct-stats-row {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 10px !important;
    }
    
    .ct-counter-item h3 {
        font-size: 1.8rem !important;
    }
    
    .ct-counter-item p {
        font-size: 11px !important;
    }
    
    .ct-scroll-indicator {
        bottom: 100px !important;
    }
    
    .ct-hero-pagination {
        bottom: 25px !important;
        gap: 8px !important;
    }
    
    .ct-pagination-bullet {
        width: 10px !important;
        height: 10px !important;
    }
}

@media (max-width: 480px) {
    .ct-hero-title {
        font-size: 2.2rem !important;
    }
    
    .ct-hero-campus-title {
        font-size: 1.6rem !important;
    }
    
    .ct-hero-description {
        font-size: 0.9rem !important;
    }
    
    .ct-hero-btn {
        font-size: 12px !important;
        padding: 10px 18px !important;
    }
    
    .ct-counter-item h3 {
        font-size: 1.6rem !important;
    }
    
    .ct-counter-item p {
        font-size: 10px !important;
    }
}

/* Landscape mode for mobile */
@media (max-height: 500px) and (orientation: landscape) {
    .ct-hero-section {
        min-height: 100vh !important;
    }
    
    .ct-hero-title {
        font-size: 2rem !important;
    }
    
    .ct-hero-campus-title {
        font-size: 1.5rem !important;
    }
    
    .ct-hero-description {
        font-size: 0.85rem !important;
        margin-bottom: 15px !important;
    }
    
    .ct-stats-floating {
        display: none !important;
    }
    
    .ct-scroll-indicator {
        display: none !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Hero slider functionality
    const slides = document.querySelectorAll('.ct-hero-slide');
    const bullets = document.querySelectorAll('.ct-pagination-bullet');
    const prevBtn = document.querySelector('.ct-nav-prev');
    const nextBtn = document.querySelector('.ct-nav-next');
    const statsFloating = document.querySelector('.ct-stats-floating');
    const counters = document.querySelectorAll('.ct-counter');
    
    let currentSlide = 0;
    let slideInterval;
    
    // Set background images
    slides.forEach(slide => {
        const bgImage = slide.getAttribute('data-bg');
        if (bgImage) {
            slide.style.backgroundImage = `url(${bgImage})`;
        }
    });
    
    // Show stats after 2 seconds
    setTimeout(() => {
        if (statsFloating) {
            statsFloating.classList.add('ct-show');
            // Start counters
            animateCounters();
        }
    }, 2000);
    
    // Counter animation
    function animateCounters() {
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const increment = target / 100;
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    counter.textContent = Math.ceil(current);
                    current += increment;
                    setTimeout(updateCounter, 20);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }
    
    // Slide functions
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('ct-slide-active', i === index);
        });
        
        bullets.forEach((bullet, i) => {
            bullet.classList.toggle('ct-active', i === index);
        });
        
        currentSlide = index;
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    function startSlideshow() {
        slideInterval = setInterval(nextSlide, 5000);
    }
    
    function stopSlideshow() {
        clearInterval(slideInterval);
    }
    
    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopSlideshow();
            startSlideshow();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopSlideshow();
            startSlideshow();
        });
    }
    
    bullets.forEach((bullet, index) => {
        bullet.addEventListener('click', () => {
            showSlide(index);
            stopSlideshow();
            startSlideshow();
        });
    });
    
    // Scroll indicator
    const scrollIndicator = document.querySelector('.ct-scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', () => {
            const nextSection = document.querySelector('#about, .ct-about-section, section:nth-child(2)');
            if (nextSection) {
                nextSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
    
    // Pause slideshow on hover
    const heroSection = document.querySelector('.ct-hero-section');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', stopSlideshow);
        heroSection.addEventListener('mouseleave', startSlideshow);
    }
    
    // Start slideshow
    startSlideshow();
    
    // Touch support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    heroSection.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    heroSection.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            stopSlideshow();
            startSlideshow();
        }
    }
});
</script>