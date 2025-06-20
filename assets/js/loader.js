// /**
//  * CT Loader Animation with Enhanced Effects
//  */
// document.addEventListener('DOMContentLoaded', function() {
//     const loader = document.getElementById('ctLoader');
//     const letterC = document.querySelector('.ct-letter-c');
//     const letterT = document.querySelector('.ct-letter-t');
//     const logo = document.querySelector('.ct-logo');
//     const tagline = document.querySelector('.ct-tagline');
//     const particles = document.querySelectorAll('.ct-particle');
//     const loadingText = document.querySelector('.ct-loading-text');
//     const floatingShapes = document.querySelectorAll('.ct-floating-shape');
    
//     // Don't run if elements aren't found
//     if (!loader || !letterC || !letterT) return;

//     // Prevent scrolling during loader
//     document.body.style.overflow = 'hidden';
    
//     // Set initial states
//     gsap.set([letterC, letterT], {
//         opacity: 0,
//         scale: 0.5,
//         rotation: 0
//     });
    
//     gsap.set(tagline, {
//         opacity: 0,
//         y: 30,
//         scale: 0.8
//     });
    
//     gsap.set(loadingText, {
//         opacity: 0,
//         y: 20
//     });

//     // Create the main animation timeline
//     const timeline = gsap.timeline({
//         onComplete: () => {
//             // After animation completes, hide the loader
//             setTimeout(() => {
//                 hideLoader();
//             }, 800);
//         }
//     });

//     // Animate letters with enhanced effects
//     timeline
//         .to(letterC, {
//             opacity: 1,
//             scale: 1,
//             y: 0,
//             rotation: 0,
//             duration: 1.2,
//             ease: 'elastic.out(1, 0.8)',
//             transformOrigin: 'center center'
//         })
//         .to(letterT, {
//             opacity: 1,
//             scale: 1,
//             y: 0,
//             rotation: 0,
//             duration: 1.2,
//             ease: 'elastic.out(1, 0.8)',
//             transformOrigin: 'center center'
//         }, '-=0.9')
//         .to(tagline, {
//             opacity: 1,
//             y: 0,
//             scale: 1,
//             duration: 1,
//             ease: 'power2.out'
//         }, '-=0.6')
//         .to(loadingText, {
//             opacity: 1,
//             y: 0,
//             duration: 0.8,
//             ease: 'power2.out'
//         }, '-=0.5')
//         .to(logo, {
//             scale: 1.05,
//             duration: 0.6,
//             ease: 'power2.inOut',
//             yoyo: true,
//             repeat: 1
//         }, '-=0.3')
//         .to([letterC, letterT], {
//             rotationY: 360,
//             duration: 1,
//             ease: 'power2.inOut',
//             stagger: 0.2
//         }, '-=0.5');

//     // Enhanced particle animations with stagger
//     gsap.to(particles, {
//         y: '-120vh',
//         x: '+=30',
//         rotation: 180,
//         opacity: 0,
//         duration: 8,
//         stagger: {
//             amount: 3,
//             from: 'random'
//         },
//         ease: 'none',
//         repeat: -1
//     });

//     // Floating shapes animation
//     gsap.to(floatingShapes, {
//         rotation: 360,
//         duration: 20,
//         ease: 'none',
//         repeat: -1
//     });

//     // Add shimmer effect to letters
//     gsap.to([letterC, letterT], {
//         boxShadow: '0 15px 35px rgba(41, 69, 136, 0.6), 0 5px 15px rgba(255, 255, 255, 0.2)',
//         duration: 2,
//         ease: 'power2.inOut',
//         yoyo: true,
//         repeat: -1,
//         stagger: 0.3
//     });

//     // Tagline text animation
//     gsap.to(tagline, {
//         backgroundPosition: '200% center',
//         duration: 3,
//         ease: 'power2.inOut',
//         repeat: -1,
//         yoyo: true
//     });

//     // Loading text animation
//     gsap.to(loadingText, {
//         opacity: 0.6,
//         duration: 1.5,
//         ease: 'power2.inOut',
//         yoyo: true,
//         repeat: -1
//     });

//     // Function to hide loader
//     function hideLoader() {
//         const hideTimeline = gsap.timeline({
//             onComplete: () => {
//                 loader.style.display = 'none';
//                 document.body.classList.add('loaded');
//                 document.body.style.overflow = '';
                
//                 // Trigger custom event for other scripts
//                 window.dispatchEvent(new CustomEvent('loaderComplete'));
//             }
//         });

//         hideTimeline
//             .to([letterC, letterT], {
//                 scale: 0.8,
//                 opacity: 0,
//                 y: -50,
//                 duration: 0.6,
//                 ease: 'power2.in',
//                 stagger: 0.1
//             })
//             .to(tagline, {
//                 opacity: 0,
//                 y: 30,
//                 scale: 0.8,
//                 duration: 0.5,
//                 ease: 'power2.in'
//             }, '-=0.5')
//             .to(loadingText, {
//                 opacity: 0,
//                 y: 20,
//                 duration: 0.4,
//                 ease: 'power2.in'
//             }, '-=0.4')
//             .to(loader, {
//                 opacity: 0,
//                 scale: 1.1,
//                 duration: 0.8,
//                 ease: 'power2.inOut'
//             }, '-=0.3');
//     }

//     // Fallback: Hide loader after maximum time
//     setTimeout(() => {
//         if (loader.style.display !== 'none') {
//             hideLoader();
//         }
//     }, 6000);

//     // Handle page visibility change
//     document.addEventListener('visibilitychange', function() {
//         if (document.hidden) {
//             // Pause animations when tab is not visible
//             gsap.globalTimeline.pause();
//         } else {
//             // Resume animations when tab becomes visible
//             gsap.globalTimeline.resume();
//         }
//     });

//     // Add click to skip functionality
//     loader.addEventListener('click', function() {
//         timeline.progress(1);
//     });

//     // Keyboard accessibility
//     document.addEventListener('keydown', function(e) {
//         if (e.key === 'Enter' || e.key === ' ') {
//             timeline.progress(1);
//         }
//     });

//     // Add loading progress simulation
//     let progress = 0;
//     const progressInterval = setInterval(() => {
//         progress += Math.random() * 15;
//         if (progress >= 100) {
//             progress = 100;
//             clearInterval(progressInterval);
//         }
        
//         // You can use this progress value to update a progress bar if needed
//         // console.log('Loading progress:', Math.round(progress) + '%');
//     }, 200);
// });

// // Export for other scripts if needed
// window.CTLoader = {
//     hide: function() {
//         const loader = document.getElementById('ctLoader');
//         if (loader) {
//             gsap.to(loader, {
//                 opacity: 0,
//                 duration: 0.5,
//                 onComplete: () => {
//                     loader.style.display = 'none';
//                     document.body.style.overflow = '';
//                 }
//             });
//         }
//     }
// };