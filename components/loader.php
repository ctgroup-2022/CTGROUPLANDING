
<div id="ctLoader" class="ct-loader">
    <!-- Advanced floating background shapes -->
    <div class="ct-floating-shape ct-shape-1"></div>
    <div class="ct-floating-shape ct-shape-2"></div>
    <div class="ct-floating-shape ct-shape-3"></div>
    <div class="ct-floating-shape ct-shape-4"></div>
    
    <!-- Enhanced particles for background effect -->
    <?php for ($i = 0; $i < 25; $i++) : ?>
        <div class="ct-particle" style="
            top: <?= rand(5, 95) ?>vh; 
            left: <?= rand(2, 98) ?>vw;
            opacity: <?= (rand(2, 8) / 10) ?>;
            animation-delay: <?= rand(-8, 0) ?>s;
            animation-duration: <?= rand(6, 12) ?>s;
        "></div>
    <?php endfor; ?>

    <!-- Glowing orbs for extra visual appeal -->
    <div class="ct-glow-orb ct-orb-1"></div>
    <div class="ct-glow-orb ct-orb-2"></div>
    <div class="ct-glow-orb ct-orb-3"></div>

    <!-- Main Logo Container -->
    <div class="ct-logo-container">
        <!-- Logo with enhanced effects -->
        <div class="ct-logo">
            <div class="ct-letter ct-letter-c">
                <span class="ct-letter-inner">C</span>
                <div class="ct-letter-reflection"></div>
            </div>
            <div class="ct-letter ct-letter-t">
                <span class="ct-letter-inner">T</span>
                <div class="ct-letter-reflection"></div>
            </div>
        </div>
        
        <!-- Enhanced Tagline -->
        <div class="ct-tagline">
            <span class="ct-tagline-text">Pre Nursery to PHD</span>
            <div class="ct-tagline-glow"></div>
        </div>
    </div>
    
    <!-- Enhanced Loading Text with Icon -->
    <div class="ct-loading-section">
        <div class="ct-loading-text">
            <span class="ct-loading-icon">⚡</span>
            Loading Excellence
            <div class="ct-loading-dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        
        <!-- Enhanced Progress Bar -->
        <div class="ct-progress-container">
            <div class="ct-progress-bar">
                <div class="ct-progress-fill"></div>
                <div class="ct-progress-glow"></div>
            </div>
            <div class="ct-progress-text">0%</div>
        </div>
    </div>
</div>

<style>
/* CT Loader Styles - Enhanced Version */
.ct-loader {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
    align-items: center !important;
    background: linear-gradient(135deg, #f1f3f4 0%, #e8eaed 25%, #ffffff 50%, #f8f9fa 75%, #e9ecef 100%) !important;
    background-size: 400% 400% !important;
    animation: ctBackgroundShift 6s ease-in-out infinite !important;
    z-index: 99999 !important;
    overflow: hidden !important;
    font-family: 'Arial', 'Helvetica', sans-serif !important;
    pointer-events: auto !important;
}

@keyframes ctBackgroundShift {
    0% { background-position: 0% 50%; }
    25% { background-position: 100% 25%; }
    50% { background-position: 100% 75%; }
    75% { background-position: 0% 75%; }
    100% { background-position: 0% 50%; }
}

.ct-logo-container {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    z-index: 10 !important;
    position: relative !important;
    transform: translateY(-20px) !important;
}

.ct-logo {
    display: flex !important;
    gap: 2.5rem !important;
    justify-content: center !important;
    align-items: center !important;
    margin-bottom: 30px !important;
    perspective: 1000px !important;
}

.ct-letter {
    width: 130px !important;
    height: 130px !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    border-radius: 0px !important; /* Sharp edges as requested */
    box-shadow: 
        0 20px 40px rgba(41, 69, 136, 0.4),
        0 8px 20px rgba(0, 0, 0, 0.2),
        inset 0 2px 0 rgba(255, 255, 255, 0.1),
        inset 0 -2px 0 rgba(0, 0, 0, 0.1) !important;
    background: linear-gradient(145deg, #294588 0%, #1f3a73 50%, #294588 100%) !important;
    color: #ffffff !important;
    opacity: 0 !important;
    position: relative !important;
    overflow: hidden !important;
    border: 3px solid rgba(255, 255, 255, 0.2) !important;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
    transform-style: preserve-3d !important;
}

.ct-letter-inner {
    font-weight: 900 !important;
    font-size: 90px !important;
    font-family: 'Arial Black', 'Helvetica', sans-serif !important;
    text-shadow: 
        0 3px 6px rgba(0, 0, 0, 0.4),
        0 1px 0 rgba(255, 255, 255, 0.1) !important;
    z-index: 2 !important;
    position: relative !important;
    letter-spacing: -2px !important;
}

.ct-letter-reflection {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%) !important;
    transform: translateX(-100%) !important;
    transition: transform 0.8s ease !important;
    z-index: 1 !important;
}

.ct-letter::before {
    content: '' !important;
    position: absolute !important;
    top: -2px !important;
    left: -2px !important;
    right: -2px !important;
    bottom: -2px !important;
    background: linear-gradient(45deg, #294588, #BB2225, #F8B400, #294588) !important;
    border-radius: 0px !important;
    z-index: -1 !important;
    opacity: 0 !important;
    animation: ctBorderGlow 3s ease-in-out infinite !important;
}

@keyframes ctBorderGlow {
    0%, 100% { 
        opacity: 0;
        transform: scale(1);
    }
    50% { 
        opacity: 0.8;
        transform: scale(1.02);
    }
}

.ct-letter:hover .ct-letter-reflection {
    transform: translateX(100%) !important;
}

.ct-letter-c {
    transform: translateY(-80px) rotate(-15deg) scale(0.8) !important;
    animation: ctLetterFloat 4s ease-in-out infinite !important;
}

.ct-letter-t {
    transform: translateY(80px) rotate(15deg) scale(0.8) !important;
    animation: ctLetterFloat 4s ease-in-out infinite reverse !important;
}

@keyframes ctLetterFloat {
    0%, 100% {
        transform: translateY(0) rotate(0deg) scale(1);
        box-shadow: 0 20px 40px rgba(41, 69, 136, 0.4), 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    25% {
        transform: translateY(-15px) rotate(3deg) scale(1.05);
        box-shadow: 0 25px 50px rgba(41, 69, 136, 0.5), 0 12px 25px rgba(0, 0, 0, 0.25);
    }
    50% {
        transform: translateY(0) rotate(0deg) scale(1);
        box-shadow: 0 30px 60px rgba(41, 69, 136, 0.6), 0 15px 30px rgba(0, 0, 0, 0.3);
    }
    75% {
        transform: translateY(15px) rotate(-3deg) scale(1.05);
        box-shadow: 0 15px 30px rgba(41, 69, 136, 0.3), 0 5px 15px rgba(0, 0, 0, 0.15);
    }
}

/* Enhanced Tagline Styles */
.ct-tagline {
    position: relative !important;
    margin-bottom: 40px !important;
    opacity: 0 !important;
    transform: translateY(30px) scale(0.9) !important;
}

.ct-tagline-text {
    font-size: 1.4rem !important;
    font-weight: 700 !important;
    color: #294588 !important;
    text-transform: uppercase !important;
    letter-spacing: 4px !important;
    text-align: center !important;
    background: linear-gradient(135deg, #294588 0%, #BB2225 50%, #1a2e5c 100%) !important;
    background-size: 200% 200% !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    background-clip: text !important;
    position: relative !important;
    z-index: 2 !important;
    animation: ctTextShimmer 3s ease-in-out infinite !important;
    text-shadow: 0 2px 4px rgba(41, 69, 136, 0.3) !important;
}

@keyframes ctTextShimmer {
    0%, 100% { 
        background-position: 0% 50%;
    }
    50% { 
        background-position: 100% 50%;
    }
}

.ct-tagline-glow {
    position: absolute !important;
    bottom: -12px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: 120px !important;
    height: 4px !important;
    background: linear-gradient(90deg, transparent, #294588, #BB2225, #294588, transparent) !important;
    border-radius: 2px !important;
    animation: ctGlowPulse 2s ease-in-out infinite !important;
    box-shadow: 0 0 10px rgba(41, 69, 136, 0.5) !important;
}

@keyframes ctGlowPulse {
    0%, 100% { 
        width: 120px;
        opacity: 0.8;
        box-shadow: 0 0 10px rgba(41, 69, 136, 0.5);
    }
    50% { 
        width: 160px;
        opacity: 1;
        box-shadow: 0 0 20px rgba(41, 69, 136, 0.8);
    }
}

/* Enhanced Particles */
.ct-particle {
    position: absolute !important;
    width: 10px !important;
    height: 10px !important;
    background: radial-gradient(circle, rgba(41, 69, 136, 0.8) 0%, rgba(41, 69, 136, 0.2) 70%, transparent 100%) !important;
    border-radius: 50% !important;
    animation: ctParticleFloat 8s linear infinite !important;
    box-shadow: 0 0 15px rgba(41, 69, 136, 0.4) !important;
}

@keyframes ctParticleFloat {
    0% {
        transform: translateY(0) scale(0.5) rotate(0deg);
        opacity: 0;
    }
    10% {
        opacity: 1;
        transform: scale(1);
    }
    90% {
        opacity: 1;
    }
    100% {
        transform: translateY(-120vh) scale(0.3) rotate(720deg);
        opacity: 0;
    }
}

.ct-particle:nth-child(5n+1) {
    background: radial-gradient(circle, rgba(187, 34, 37, 0.7) 0%, rgba(187, 34, 37, 0.2) 70%, transparent 100%) !important;
    box-shadow: 0 0 15px rgba(187, 34, 37, 0.4) !important;
    animation-delay: -1s !important;
}

.ct-particle:nth-child(5n+2) {
    background: radial-gradient(circle, rgba(248, 180, 0, 0.7) 0%, rgba(248, 180, 0, 0.2) 70%, transparent 100%) !important;
    box-shadow: 0 0 15px rgba(248, 180, 0, 0.4) !important;
    animation-delay: -3s !important;
}

.ct-particle:nth-child(5n+3) {
    background: radial-gradient(circle, rgba(41, 69, 136, 0.9) 0%, rgba(41, 69, 136, 0.3) 70%, transparent 100%) !important;
    animation-delay: -5s !important;
    animation-duration: 10s !important;
}

.ct-particle:nth-child(5n+4) {
    width: 6px !important;
    height: 6px !important;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.2) 70%, transparent 100%) !important;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.6) !important;
    animation-delay: -7s !important;
}

/* Glowing Orbs */
.ct-glow-orb {
    position: absolute !important;
    border-radius: 50% !important;
    filter: blur(1px) !important;
    animation: ctOrbFloat 20s ease-in-out infinite !important;
    z-index: 1 !important;
}

.ct-orb-1 {
    width: 80px !important;
    height: 80px !important;
    background: radial-gradient(circle, rgba(41, 69, 136, 0.2) 0%, transparent 70%) !important;
    top: 20% !important;
    left: 15% !important;
    animation-delay: 0s !important;
}

.ct-orb-2 {
    width: 120px !important;
    height: 120px !important;
    background: radial-gradient(circle, rgba(187, 34, 37, 0.15) 0%, transparent 70%) !important;
    bottom: 25% !important;
    right: 20% !important;
    animation-delay: -10s !important;
}

.ct-orb-3 {
    width: 60px !important;
    height: 60px !important;
    background: radial-gradient(circle, rgba(248, 180, 0, 0.2) 0%, transparent 70%) !important;
    top: 70% !important;
    left: 70% !important;
    animation-delay: -15s !important;
}

@keyframes ctOrbFloat {
    0%, 100% { 
        transform: translate(0, 0) scale(1);
        opacity: 0.3;
    }
    25% { 
        transform: translate(30px, -50px) scale(1.2);
        opacity: 0.6;
    }
    50% { 
        transform: translate(-20px, -30px) scale(0.8);
        opacity: 0.4;
    }
    75% { 
        transform: translate(40px, 20px) scale(1.1);
        opacity: 0.5;
    }
}

/* Enhanced Loading Section */
.ct-loading-section {
    position: absolute !important;
    bottom: 80px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    text-align: center !important;
    z-index: 10 !important;
}

.ct-loading-text {
    color: #294588 !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    letter-spacing: 2px !important;
    text-transform: uppercase !important;
    margin-bottom: 20px !important;
    opacity: 0 !important;
    transform: translateY(20px) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 10px !important;
}

.ct-loading-icon {
    font-size: 18px !important;
    animation: ctIconSpin 2s linear infinite !important;
}

@keyframes ctIconSpin {
    0% { transform: rotate(0deg) scale(1); }
    50% { transform: rotate(180deg) scale(1.2); }
    100% { transform: rotate(360deg) scale(1); }
}

.ct-loading-dots {
    display: flex !important;
    gap: 5px !important;
    margin-left: 10px !important;
}

.ct-loading-dots span {
    width: 6px !important;
    height: 6px !important;
    background: #294588 !important;
    border-radius: 50% !important;
    animation: ctDotBounce 1.5s ease-in-out infinite !important;
}

.ct-loading-dots span:nth-child(1) { animation-delay: 0s; }
.ct-loading-dots span:nth-child(2) { animation-delay: 0.2s; }
.ct-loading-dots span:nth-child(3) { animation-delay: 0.4s; }

@keyframes ctDotBounce {
    0%, 60%, 100% { 
        transform: translateY(0) scale(1);
        opacity: 0.7;
    }
    30% { 
        transform: translateY(-10px) scale(1.3);
        opacity: 1;
    }
}

/* Enhanced Progress Bar */
.ct-progress-container {
    display: flex !important;
    align-items: center !important;
    gap: 15px !important;
    opacity: 0 !important;
    transform: translateY(10px) !important;
}

.ct-progress-bar {
    width: 250px !important;
    height: 6px !important;
    background: rgba(41, 69, 136, 0.2) !important;
    border-radius: 3px !important;
    overflow: hidden !important;
    position: relative !important;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1) !important;
}

.ct-progress-fill {
    width: 0% !important;
    height: 100% !important;
    background: linear-gradient(90deg, #294588 0%, #BB2225 50%, #F8B400 100%) !important;
    border-radius: 3px !important;
    transition: width 0.3s ease !important;
    position: relative !important;
    overflow: hidden !important;
}

.ct-progress-fill::after {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: -100% !important;
    width: 100% !important;
    height: 100% !important;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent) !important;
    animation: ctProgressShine 2s ease-in-out infinite !important;
}

@keyframes ctProgressShine {
    0% { left: -100%; }
    100% { left: 100%; }
}

.ct-progress-glow {
    position: absolute !important;
    top: -2px !important;
    left: 0 !important;
    width: 0% !important;
    height: 10px !important;
    background: linear-gradient(90deg, transparent, rgba(41, 69, 136, 0.6), transparent) !important;
    border-radius: 5px !important;
    filter: blur(3px) !important;
    transition: width 0.3s ease !important;
}

.ct-progress-text {
    color: #294588 !important;
    font-weight: 700 !important;
    font-size: 14px !important;
    min-width: 40px !important;
    text-align: right !important;
}

/* Enhanced floating shapes */
.ct-floating-shape {
    position: absolute !important;
    z-index: 0 !important;
    animation: ctFloatShape 25s infinite linear !important;
    filter: blur(0.5px) !important;
}

.ct-shape-1 {
    width: 200px !important;
    height: 200px !important;
    top: 5% !important;
    right: 10% !important;
    background: conic-gradient(from 0deg, rgba(41, 69, 136, 0.1), transparent, rgba(41, 69, 136, 0.1)) !important;
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% !important;
}

.ct-shape-2 {
    width: 150px !important;
    height: 150px !important;
    bottom: 10% !important;
    left: 8% !important;
    background: conic-gradient(from 45deg, rgba(187, 34, 37, 0.08), transparent, rgba(187, 34, 37, 0.08)) !important;
    border-radius: 50% 20% 80% 40% !important;
    animation-delay: -12s !important;
}

.ct-shape-3 {
    width: 100px !important;
    height: 100px !important;
    top: 60% !important;
    right: 25% !important;
    background: conic-gradient(from 90deg, rgba(248, 180, 0, 0.06), transparent, rgba(248, 180, 0, 0.06)) !important;
    border-radius: 20% 80% 20% 80% !important;
    animation-delay: -20s !important;
}

.ct-shape-4 {
    width: 120px !important;
    height: 120px !important;
    top: 30% !important;
    left: 30% !important;
    background: conic-gradient(from 180deg, rgba(41, 69, 136, 0.05), transparent, rgba(41, 69, 136, 0.05)) !important;
    border-radius: 60% 40% 30% 70% / 60% 30% 70% 40% !important;
    animation-delay: -8s !important;
}

@keyframes ctFloatShape {
    0%, 100% { 
        transform: translate(0, 0) rotate(0deg) scale(1);
        opacity: 0.3;
    }
    25% { 
        transform: translate(50px, -30px) rotate(90deg) scale(1.2);
        opacity: 0.6;
    }
    50% { 
        transform: translate(-30px, -50px) rotate(180deg) scale(0.8);
        opacity: 0.4;
    }
    75% { 
        transform: translate(30px, 40px) rotate(270deg) scale(1.1);
        opacity: 0.5;
    }
}

/* Animation states for JavaScript control */
.ct-letter.animate-in {
    opacity: 1 !important;
    transform: translateY(0) rotate(0deg) scale(1) !important;
    transition: all 1.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) !important;
}

.ct-tagline.animate-in {
    opacity: 1 !important;
    transform: translateY(0) scale(1) !important;
    transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
}

.ct-loading-text.animate-in {
    opacity: 1 !important;
    transform: translateY(0) !important;
    transition: all 1s ease-out !important;
}

.ct-progress-container.animate-in {
    opacity: 1 !important;
    transform: translateY(0) !important;
    transition: all 0.8s ease-out 0.5s !important;
}

/* Removal animation */
.ct-loader.removing {
    opacity: 0 !important;
    transform: scale(1.05) !important;
    transition: all 1s ease-in-out !important;
    pointer-events: none !important;
}

/* Responsive design */
@media (max-width: 768px) {
    .ct-letter {
        width: 110px !important;
        height: 110px !important;
    }
    
    .ct-letter-inner {
        font-size: 75px !important;
    }
    
    .ct-logo {
        gap: 2rem !important;
    }
    
    .ct-tagline-text {
        font-size: 1.1rem !important;
        letter-spacing: 3px !important;
    }
    
    .ct-progress-bar {
        width: 200px !important;
    }
}

@media (max-width: 480px) {
    .ct-letter {
        width: 90px !important;
        height: 90px !important;
    }
    
    .ct-letter-inner {
        font-size: 60px !important;
    }
    
    .ct-logo {
        gap: 1.5rem !important;
    }
    
    .ct-tagline-text {
        font-size: 1rem !important;
        letter-spacing: 2px !important;
    }
    
    .ct-loading-text {
        font-size: 14px !important;
    }
    
    .ct-progress-bar {
        width: 160px !important;
    }
    
    .ct-loading-section {
        bottom: 60px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('ctLoader');
    const letterC = document.querySelector('.ct-letter-c');
    const letterT = document.querySelector('.ct-letter-t');
    const logo = document.querySelector('.ct-logo');
    const tagline = document.querySelector('.ct-tagline');
    const loadingText = document.querySelector('.ct-loading-text');
    const progressContainer = document.querySelector('.ct-progress-container');
    const progressFill = document.querySelector('.ct-progress-fill');
    const progressGlow = document.querySelector('.ct-progress-glow');
    const progressText = document.querySelector('.ct-progress-text');
    const particles = document.querySelectorAll('.ct-particle');
    const floatingShapes = document.querySelectorAll('.ct-floating-shape');
    const glowOrbs = document.querySelectorAll('.ct-glow-orb');
    
    // Don't run if elements aren't found
    if (!loader || !letterC || !letterT || !tagline || !loadingText) {
        console.error('Loader elements not found');
        return;
    }

    // Prevent scrolling during loader and store original overflow
    const originalOverflow = document.body.style.overflow;
    document.body.style.overflow = 'hidden';
    
    // Track if loader is being removed to prevent multiple removal attempts
    let isRemoving = false;
    
    // Progress tracking
    let currentProgress = 0;
    const targetProgress = 100;
    
    // Store all animation intervals and timeouts for cleanup
    const animationCleanup = {
        intervals: [],
        timeouts: [],
        animationFrames: []
    };
    
    // Enhanced progress animation
    function updateProgress(progress) {
        if (isRemoving) return;
        
        currentProgress = Math.min(progress, targetProgress);
        if (progressFill && progressGlow && progressText) {
            progressFill.style.width = currentProgress + '%';
            progressGlow.style.width = currentProgress + '%';
            progressText.textContent = Math.round(currentProgress) + '%';
            
            // Add color transitions based on progress
            if (currentProgress < 30) {
                progressFill.style.background = 'linear-gradient(90deg, #294588 0%, #3a5ba0 100%)';
            } else if (currentProgress < 70) {
                progressFill.style.background = 'linear-gradient(90deg, #294588 0%, #BB2225 50%, #294588 100%)';
            } else {
                progressFill.style.background = 'linear-gradient(90deg, #294588 0%, #BB2225 50%, #F8B400 100%)';
            }
        }
    }
    
    // Simulate realistic loading progress
    function simulateProgress() {
        const intervals = [
            {duration: 500, increment: 15},
            {duration: 800, increment: 25},
            {duration: 1200, increment: 35},
            {duration: 600, increment: 20},
            {duration: 400, increment: 5}
        ];
        
        let totalTime = 0;
        
        intervals.forEach((interval, index) => {
            const timeoutId = setTimeout(() => {
                const progressInterval = setInterval(() => {
                    if (isRemoving) {
                        clearInterval(progressInterval);
                        return;
                    }
                    
                    currentProgress += Math.random() * interval.increment;
                    updateProgress(currentProgress);
                    
                    if (currentProgress >= targetProgress) {
                        clearInterval(progressInterval);
                        if (index === intervals.length - 1) {
                            updateProgress(100);
                        }
                    }
                }, 100);
                
                animationCleanup.intervals.push(progressInterval);
                
                const clearTimeoutId = setTimeout(() => {
                    clearInterval(progressInterval);
                }, interval.duration);
                
                animationCleanup.timeouts.push(clearTimeoutId);
            }, totalTime);
            
            animationCleanup.timeouts.push(timeoutId);
            totalTime += interval.duration;
        });
    }
    
    // Enhanced animation sequence
    function startLoaderAnimation() {
        if (isRemoving) return;
        
        // Start progress simulation
        simulateProgress();
        
        // Animate loading text first
        const timeout1 = setTimeout(() => {
            if (!isRemoving && loadingText) {
                loadingText.classList.add('animate-in');
            }
        }, 300);
        animationCleanup.timeouts.push(timeout1);
        
        // Animate progress bar
        const timeout2 = setTimeout(() => {
            if (!isRemoving && progressContainer) {
                progressContainer.classList.add('animate-in');
            }
        }, 600);
        animationCleanup.timeouts.push(timeout2);
        
        // Animate C letter with enhanced effects
        const timeout3 = setTimeout(() => {
            if (!isRemoving && letterC) {
                letterC.classList.add('animate-in');
                // Add reflection sweep
                const timeout4 = setTimeout(() => {
                    if (!isRemoving) {
                        const reflection = letterC.querySelector('.ct-letter-reflection');
                        if (reflection) {
                            reflection.style.transform = 'translateX(100%)';
                        }
                    }
                }, 800);
                animationCleanup.timeouts.push(timeout4);
            }
        }, 1000);
        animationCleanup.timeouts.push(timeout3);
        
        // Animate T letter
        const timeout5 = setTimeout(() => {
            if (!isRemoving && letterT) {
                letterT.classList.add('animate-in');
                // Add reflection sweep
                const timeout6 = setTimeout(() => {
                    if (!isRemoving) {
                        const reflection = letterT.querySelector('.ct-letter-reflection');
                        if (reflection) {
                            reflection.style.transform = 'translateX(100%)';
                        }
                    }
                }, 800);
                animationCleanup.timeouts.push(timeout6);
            }
        }, 1400);
        animationCleanup.timeouts.push(timeout5);
        
        // Animate tagline
        const timeout7 = setTimeout(() => {
            if (!isRemoving && tagline) {
                tagline.classList.add('animate-in');
            }
        }, 1800);
        animationCleanup.timeouts.push(timeout7);
        
        // Add logo scale effect with 3D rotation
        const timeout8 = setTimeout(() => {
            if (!isRemoving && logo) {
                logo.style.transform = 'scale(1.1) rotateY(10deg)';
                logo.style.transition = 'transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                
                const timeout9 = setTimeout(() => {
                    if (!isRemoving && logo) {
                        logo.style.transform = 'scale(1) rotateY(0deg)';
                    }
                }, 800);
                animationCleanup.timeouts.push(timeout9);
            }
        }, 2300);
        animationCleanup.timeouts.push(timeout8);
        
        // Add enhanced 3D rotation effect
        const timeout10 = setTimeout(() => {
            if (!isRemoving && letterC && letterT) {
                letterC.style.transform = 'rotateY(360deg) rotateX(10deg)';
                letterC.style.transition = 'transform 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                
                const timeout11 = setTimeout(() => {
                    if (!isRemoving && letterT) {
                        letterT.style.transform = 'rotateY(360deg) rotateX(-10deg)';
                        letterT.style.transition = 'transform 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                        
                        const timeout12 = setTimeout(() => {
                            if (!isRemoving && letterC && letterT) {
                                letterC.style.transform = 'rotateY(0deg) rotateX(0deg)';
                                letterT.style.transform = 'rotateY(0deg) rotateX(0deg)';
                            }
                        }, 1200);
                        animationCleanup.timeouts.push(timeout12);
                    }
                }, 300);
                animationCleanup.timeouts.push(timeout11);
            }
        }, 3000);
        animationCleanup.timeouts.push(timeout10);
        
        // Add pulsing glow effect
        const timeout13 = setTimeout(() => {
            if (!isRemoving && letterC && letterT) {
                [letterC, letterT].forEach(letter => {
                    letter.style.boxShadow = `
                        0 20px 40px rgba(41, 69, 136, 0.6),
                        0 8px 20px rgba(0, 0, 0, 0.3),
                        0 0 30px rgba(41, 69, 136, 0.4),
                        inset 0 2px 0 rgba(255, 255, 255, 0.2)`;
                    letter.style.transition = 'box-shadow 0.6s ease';
                    
                    const timeout14 = setTimeout(() => {
                        if (!isRemoving && letter) {
                            letter.style.boxShadow = `
                                0 20px 40px rgba(41, 69, 136, 0.4),
                                0 8px 20px rgba(0, 0, 0, 0.2),
                                inset 0 2px 0 rgba(255, 255, 255, 0.1)`;
                        }
                    }, 600);
                    animationCleanup.timeouts.push(timeout14);
                });
            }
        }, 4000);
        animationCleanup.timeouts.push(timeout13);
        
        // Hide loader after animation
        const timeout15 = setTimeout(() => {
            if (!isRemoving) {
                removeLoader();
            }
        }, 6000);
        animationCleanup.timeouts.push(timeout15);
    }

    // Complete loader removal function
    function removeLoader() {
        if (isRemoving) return;
        isRemoving = true;
        
        // Clear all animations and timeouts immediately
        animationCleanup.intervals.forEach(interval => clearInterval(interval));
        animationCleanup.timeouts.forEach(timeout => clearTimeout(timeout));
        animationCleanup.animationFrames.forEach(frame => cancelAnimationFrame(frame));
        
        // Stop all CSS animations
        const allElements = loader.querySelectorAll('*');
        allElements.forEach(el => {
            if (el.style) {
                el.style.animationPlayState = 'paused';
                el.style.animationDuration = '0s';
                el.style.transitionDuration = '0s';
            }
        });
        
        // Create staggered fade out effect
        const elements = [
            {el: letterC, delay: 0},
            {el: letterT, delay: 100},
            {el: tagline, delay: 200},
            {el: loadingText, delay: 300},
            {el: progressContainer, delay: 350}
        ];
        
        elements.forEach(({el, delay}) => {
            if (el) {
                setTimeout(() => {
                    if (el && el.style) {
                        el.style.opacity = '0';
                        el.style.transform = el === letterC || el === letterT ? 
                            'translateY(-50px) scale(0.8) rotateY(180deg)' : 
                            'translateY(30px) scale(0.8)';
                        el.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                    }
                }, delay);
            }
        });
        
        // Start loader fade out
        setTimeout(() => {
            if (loader && loader.parentNode) {
                loader.classList.add('removing');
                
                // Complete removal from DOM
                setTimeout(() => {
                    try {
                        // Restore body overflow
                        document.body.style.overflow = originalOverflow;
                        document.body.classList.add('loaded');
                        
                        // Remove the loader element completely from DOM
                        if (loader && loader.parentNode) {
                            loader.parentNode.removeChild(loader);
                        }
                        
                        // Clear any remaining references
                        const loaderCheck = document.getElementById('ctLoader');
                        if (loaderCheck && loaderCheck.parentNode) {
                            loaderCheck.parentNode.removeChild(loaderCheck);
                        }
                        
                        // Trigger custom event for other scripts
                        window.dispatchEvent(new CustomEvent('loaderComplete', {
                            detail: { 
                                loadTime: Date.now() - startTime,
                                removed: true
                            }
                        }));
                        
                        console.log('CT Loader completely removed from DOM');
                        
                    } catch (error) {
                        console.error('Error removing loader:', error);
                        // Fallback: hide the loader if removal fails
                        if (loader) {
                            loader.style.display = 'none';
                            loader.style.visibility = 'hidden';
                            loader.style.opacity = '0';
                            loader.style.pointerEvents = 'none';
                            loader.style.zIndex = '-9999';
                        }
                        document.body.style.overflow = originalOverflow;
                    }
                }, 1000);
            }
        }, 800);
    }

    // Enhanced particle system with cleanup
    particles.forEach((particle, index) => {
        const randomDelay = Math.random() * 3000;
        const randomDuration = 8000 + Math.random() * 6000;
        const randomXMovement = (Math.random() - 0.5) * 200;
        
        const timeoutId = setTimeout(() => {
            function animateParticle() {
                if (isRemoving) return;
                
                particle.style.transform = `
                    translateY(-130vh) 
                    translateX(${randomXMovement}px) 
                    rotate(${Math.random() * 720}deg) 
                    scale(${0.3 + Math.random() * 0.4})`;
                particle.style.opacity = '0';
                
                const animationTimeout = setTimeout(() => {
                    if (isRemoving) return;
                    
                    particle.style.transform = 'translateY(0) translateX(0) rotate(0deg) scale(1)';
                    particle.style.opacity = particle.dataset.opacity || '0.6';
                    particle.style.transition = 'none';
                    
                    const nextTimeout = setTimeout(() => {
                        if (isRemoving) return;
                        
                        particle.style.transition = `all ${randomDuration}ms linear`;
                        animateParticle();
                    }, 100);
                    
                    animationCleanup.timeouts.push(nextTimeout);
                }, randomDuration);
                
                animationCleanup.timeouts.push(animationTimeout);
            }
            
            if (!isRemoving) {
                particle.style.transition = `all ${randomDuration}ms linear`;
                particle.dataset.opacity = particle.style.opacity;
                animateParticle();
            }
        }, randomDelay);
        
        animationCleanup.timeouts.push(timeoutId);
    });
    
    // Enhanced floating shapes animation with cleanup
    floatingShapes.forEach((shape, index) => {
        const duration = 25000 + Math.random() * 15000;
        const delay = index * -8000;
        
        function animateShape() {
            if (isRemoving) return;
            
            const randomScale = 0.8 + Math.random() * 0.6;
            const randomRotation = Math.random() * 360;
            const randomX = (Math.random() - 0.5) * 100;
            const randomY = (Math.random() - 0.5) * 80;
            
            shape.style.transform = `
                translate(${randomX}px, ${randomY}px) 
                rotate(${randomRotation}deg) 
                scale(${randomScale})`;
            shape.style.opacity = 0.2 + Math.random() * 0.4;
            
            const animationTimeout = setTimeout(() => {
                if (isRemoving) return;
                
                shape.style.transform = 'translate(0, 0) rotate(0deg) scale(1)';
                shape.style.opacity = '0.3';
                
                const nextTimeout = setTimeout(animateShape, 200);
                animationCleanup.timeouts.push(nextTimeout);
            }, duration);
            
            animationCleanup.timeouts.push(animationTimeout);
        }
        
        const initialTimeout = setTimeout(() => {
            if (!isRemoving) {
                shape.style.transition = `all ${duration}ms cubic-bezier(0.25, 0.46, 0.45, 0.94)`;
                animateShape();
            }
        }, delay);
        
        animationCleanup.timeouts.push(initialTimeout);
    });

    // Enhanced glowing orbs animation with cleanup
    glowOrbs.forEach((orb, index) => {
        const duration = 20000 + index * 5000;
        
        function animateOrb() {
            if (isRemoving) return;
            
            const movements = [
                'translate(50px, -80px) scale(1.3)',
                'translate(-60px, -40px) scale(0.7)',
                'translate(80px, 60px) scale(1.1)',
                'translate(-30px, 80px) scale(0.9)',
                'translate(0, 0) scale(1)'
            ];
            
            let currentMovement = 0;
            
            function nextMovement() {
                if (isRemoving) return;
                
                orb.style.transform = movements[currentMovement];
                orb.style.opacity = 0.3 + Math.random() * 0.4;
                
                currentMovement = (currentMovement + 1) % movements.length;
                
                const nextTimeout = setTimeout(nextMovement, duration / movements.length);
                animationCleanup.timeouts.push(nextTimeout);
            }
            
            nextMovement();
        }
        
        if (orb) {
            orb.style.transition = `all ${duration / 5}ms cubic-bezier(0.25, 0.46, 0.45, 0.94)`;
            const orbTimeout = setTimeout(animateOrb, index * 2000);
            animationCleanup.timeouts.push(orbTimeout);
        }
    });

    // Start the enhanced animation
    const startTime = Date.now();
    startLoaderAnimation();
    
    // Fallback: Remove loader after maximum time
    const fallbackTimeout = setTimeout(() => {
        if (!isRemoving) {
            console.log('Fallback: Removing loader after maximum time');
            removeLoader();
        }
    }, 10000);
    animationCleanup.timeouts.push(fallbackTimeout);

    // Enhanced click to skip functionality
    function handleSkip(e) {
        if (e) e.preventDefault();
        if (!isRemoving) {
            updateProgress(100);
            setTimeout(removeLoader, 300);
        }
    }
    
    loader.addEventListener('click', handleSkip);

    // Enhanced keyboard accessibility
    function handleKeydown(e) {
        if (e.key === 'Enter' || e.key === ' ' || e.key === 'Escape') {
            handleSkip(e);
        }
    }
    
    document.addEventListener('keydown', handleKeydown);

    // Enhanced page visibility handling
    function handleVisibilityChange() {
        if (isRemoving) return;
        
        const elements = [loader, ...particles, ...floatingShapes, ...glowOrbs];
        
        if (document.hidden) {
            elements.forEach(el => {
                if (el && el.style) {
                    el.style.animationPlayState = 'paused';
                }
            });
        } else {
            elements.forEach(el => {
                if (el && el.style) {
                    el.style.animationPlayState = 'running';
                }
            });
        }
    }
    
    document.addEventListener('visibilitychange', handleVisibilityChange);
    
    // Cleanup function to remove event listeners
    function cleanup() {
        loader.removeEventListener('click', handleSkip);
        document.removeEventListener('keydown', handleKeydown);
        document.removeEventListener('visibilitychange', handleVisibilityChange);
    }
    
    // Store cleanup function for later use
    window.ctLoaderCleanup = cleanup;
});

// Enhanced export for other scripts with complete removal capability
window.CTLoader = {
    hide: function(immediate = false) {
        const loader = document.getElementById('ctLoader');
        if (loader) {
            if (immediate) {
                // Immediate complete removal
                try {
                    document.body.style.overflow = '';
                    document.body.classList.add('loaded');
                    
                    if (loader.parentNode) {
                        loader.parentNode.removeChild(loader);
                    }
                    
                    if (window.ctLoaderCleanup) {
                        window.ctLoaderCleanup();
                    }
                    
                    console.log('CT Loader immediately removed from DOM');
                } catch (error) {
                    console.error('Error immediately removing loader:', error);
                    loader.style.display = 'none';
                    loader.style.visibility = 'hidden';
                    loader.style.opacity = '0';
                    loader.style.pointerEvents = 'none';
                    loader.style.zIndex = '-9999';
                }
            } else {
                // Gradual removal with animation
                loader.classList.add('removing');
                setTimeout(() => {
                    try {
                        document.body.style.overflow = '';
                        document.body.classList.add('loaded');
                        
                        if (loader.parentNode) {
                            loader.parentNode.removeChild(loader);
                        }
                        
                        if (window.ctLoaderCleanup) {
                            window.ctLoaderCleanup();
                        }
                        
                        console.log('CT Loader removed from DOM with animation');
                    } catch (error) {
                        console.error('Error removing loader with animation:', error);
                        loader.style.display = 'none';
                        loader.style.visibility = 'hidden';
                        loader.style.opacity = '0';
                        loader.style.pointerEvents = 'none';
                        loader.style.zIndex = '-9999';
                    }
                }, 1000);
            }
        }
    },
    show: function() {
        // This would reload the page or reinitialize the loader
        console.log('CT Loader show() called - consider page reload for full reinitialize');
        window.location.reload();
    },
    isRemoved: function() {
        return !document.getElementById('ctLoader');
    }
};
</script>