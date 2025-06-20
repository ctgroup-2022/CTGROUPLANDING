document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animations
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });
    
    // Initialize Swiper for Hero Slider
    const heroSlider = new Swiper('.hero-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    
    // Initialize Swiper for Testimonials
    const testimonialSlider = new Swiper('.testimonials-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },
    });
    
    // Navbar scroll behavior
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Stats counter animation
    const statsFloating = document.querySelector('.stats-floating');
    const counters = document.querySelectorAll('.counter');
    
    function startCounters() {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-count');
            let count = 0;
            const increment = target / 100;
            
            const updateCounter = () => {
                if (count < target) {
                    count += increment;
                    counter.textContent = Math.ceil(count);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }
    
    // Show stats counter once in viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                statsFloating.classList.add('show');
                startCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    observer.observe(statsFloating);
    
    // Smooth scrolling for navbar links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Scroll down button behavior
    const scrollDownBtn = document.querySelector('.scroll-down');
    if (scrollDownBtn) {
        scrollDownBtn.addEventListener('click', function() {
            const campusSection = document.querySelector('#campuses');
            if (campusSection) {
                campusSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
    
    // Apply Now button modal trigger
    const applyNowBtns = document.querySelectorAll('.apply-now-btn');
    const applyModal = new bootstrap.Modal(document.getElementById('applyNowModal'));
    
    applyNowBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            applyModal.show();
        });
    });
    
    // Campus option selection in modal
    const campusOptions = document.querySelectorAll('.campus-option');
    campusOptions.forEach(option => {
        option.addEventListener('click', function() {
            campusOptions.forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
        });
    });
    
    // Back to top button
    const backToTopBtn = document.querySelector('.back-to-top');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopBtn.classList.add('active');
        } else {
            backToTopBtn.classList.remove('active');
        }
    });
    
    backToTopBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Form validation
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Add your form validation and submission logic here
            
            // Example: Show success message
            alert('Thank you for your inquiry. We will contact you soon!');
            contactForm.reset();
        });
    }
    
    // GSAP animations
    gsap.registerPlugin(ScrollTrigger);
    
    // Stagger animations for campus cards
    gsap.utils.toArray('.campus-card').forEach((card, i) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top bottom-=100',
                toggleActions: 'play none none none'
            },
            y: 100,
            opacity: 0,
            duration: 0.8,
            delay: i * 0.2
        });
    });
    
    // Initialize preloader
    const preloader = document.getElementById('preloader');
    window.addEventListener('load', function() {
        setTimeout(function() {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }, 500);
    });
});