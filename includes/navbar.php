
<style>
/* ===== CT Educational Navbar Styles ===== */
:root {
    --ct-primary: #BB2226 !important;
    --ct-primary-dark: #8a181c !important;
    --ct-primary-light: #e83a3e !important;
    --ct-accent: #1AA8E2 !important;
    --ct-accent-dark: #0d7dae !important;
    --ct-yellow: #f6ba2f !important;
    --ct-yellow-dark: #e0a618 !important;
    --ct-dark: #191919 !important;
    --ct-light: #ffffff !important;
    --ct-gray-light: #f8f9fa !important;
    --ct-gray: #eaeaea !important;
    --ct-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
    --ct-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
    --ct-radius: 8px !important;
    --ct-font-heading: 'Outfit', sans-serif !important;
    --ct-font-body: 'Poppins', sans-serif !important;
}

/* Top Information Bar */
.ct-educational-topbar {
    background: var(--ct-dark) !important;
    padding: 8px 0 !important;
    border-bottom: 2px solid var(--ct-primary) !important;
    position: relative !important;
}

.ct-educational-topbar__wrapper {
    max-width: 1400px !important;
    margin: 0 auto !important;
    padding: 0 20px !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
}

.ct-educational-topbar__navigation {
    display: flex !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
    gap: 20px !important;
}

.ct-educational-topbar__navigation li a {
    color: var(--ct-light) !important;
    text-decoration: none !important;
    font-size: 12px !important;
    font-weight: 500 !important;
    font-family: var(--ct-font-body) !important;
    padding: 5px 10px !important;
    border-radius: var(--ct-radius) !important;
    transition: var(--ct-transition) !important;
    position: relative !important;
    overflow: hidden !important;
    white-space: nowrap !important;
}

.ct-educational-topbar__navigation li a::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: -100% !important;
    width: 100% !important;
    height: 100% !important;
    background: var(--ct-primary) !important;
    transition: var(--ct-transition) !important;
    z-index: -1 !important;
}

.ct-educational-topbar__navigation li a:hover::before {
    left: 0 !important;
}

.ct-educational-topbar__navigation li a:hover {
    color: var(--ct-light) !important;
    transform: translateY(-1px) !important;
}

.ct-educational-topbar__social-section {
    display: flex !important;
    align-items: center !important;
    gap: 15px !important;
}

.ct-educational-topbar__social-cluster {
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}

.ct-educational-topbar__social-cluster p {
    color: var(--ct-yellow) !important;
    font-size: 12px !important;
    margin: 0 !important;
    font-weight: 600 !important;
    font-family: var(--ct-font-body) !important;
}

.ct-educational-topbar__social-cluster a {
    color: var(--ct-light) !important;
    width: 28px !important;
    height: 28px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 50% !important;
    background: rgba(255, 255, 255, 0.1) !important;
    transition: var(--ct-transition) !important;
    position: relative !important;
    font-size: 12px !important;
}

.ct-educational-topbar__social-cluster a:hover {
    transform: translateY(-1px) scale(1.05) !important;
    background: var(--ct-primary) !important;
    box-shadow: 0 2px 8px rgba(187, 34, 37, 0.3) !important;
}

/* Main Navigation Bar */
.ct-educational-navbar {
    background: var(--ct-light) !important;
    box-shadow: var(--ct-shadow) !important;
    position: sticky !important;
    top: 0 !important;
    z-index: 1000 !important;
    transition: var(--ct-transition) !important;
}

.ct-educational-navbar.ct-scrolled {
    box-shadow: 0 8px 30px rgba(0,0,0,0.15) !important;
}

.ct-educational-navbar__wrapper {
    max-width: 1400px !important;
    margin: 0 auto !important;
    padding: 0 20px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    min-height: 70px !important;
    position: relative !important;
}

.ct-educational-navbar__brand-section {
    display: flex !important;
    align-items: center !important;
    text-decoration: none !important;
    transition: var(--ct-transition) !important;
    z-index: 1001 !important;
}

.ct-educational-navbar__brand-section img {
    max-height: 50px !important;
    width: auto !important;
    transition: var(--ct-transition) !important;
    filter: drop-shadow(0 2px 8px rgba(0,0,0,0.1)) !important;
}

.ct-educational-navbar__brand-section:hover {
    transform: scale(1.02) !important;
}

.ct-educational-navbar__brand-section:hover img {
    filter: drop-shadow(0 4px 12px rgba(187, 34, 37, 0.2)) !important;
}

/* Mobile Toggle Button */
.ct-educational-mobile-toggle {
    display: none !important;
    background: var(--ct-primary) !important;
    color: var(--ct-light) !important;
    border: none !important;
    width: 44px !important;
    height: 44px !important;
    border-radius: var(--ct-radius) !important;
    cursor: pointer !important;
    transition: var(--ct-transition) !important;
    position: relative !important;
    overflow: hidden !important;
    z-index: 1001 !important;
    font-size: 18px !important;
}

.ct-educational-mobile-toggle::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: -100% !important;
    width: 100% !important;
    height: 100% !important;
    background: var(--ct-primary-dark) !important;
    transition: var(--ct-transition) !important;
}

.ct-educational-mobile-toggle:hover::before,
.ct-educational-mobile-toggle.active::before {
    left: 0 !important;
}

.ct-educational-mobile-toggle i {
    position: relative !important;
    z-index: 2 !important;
    transition: var(--ct-transition) !important;
}

.ct-educational-mobile-toggle:hover,
.ct-educational-mobile-toggle.active {
    transform: scale(1.05) !important;
    box-shadow: 0 4px 12px rgba(187, 34, 37, 0.3) !important;
}

.ct-educational-mobile-toggle.active i {
    transform: rotate(90deg) !important;
}

/* Navigation Menu Container */
.ct-educational-navbar__menu-wrapper {
    display: flex !important;
    align-items: center !important;
    gap: 20px !important;
}

.ct-educational-navbar__navigation {
    display: flex !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
    gap: 2px !important;
    align-items: center !important;
}

.ct-educational-navbar__nav-item {
    position: relative !important;
}

.ct-educational-navbar__nav-link {
    color: var(--ct-dark) !important;
    text-decoration: none !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    font-family: var(--ct-font-body) !important;
    padding: 10px 16px !important;
    border-radius: var(--ct-radius) !important;
    transition: var(--ct-transition) !important;
    position: relative !important;
    overflow: hidden !important;
    white-space: nowrap !important;
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
}

.ct-educational-navbar__nav-link::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background: rgba(187, 34, 37, 0.08) !important;
    opacity: 0 !important;
    transition: var(--ct-transition) !important;
    z-index: -1 !important;
}

.ct-educational-navbar__nav-link::after {
    content: '' !important;
    position: absolute !important;
    bottom: 0 !important;
    left: 50% !important;
    width: 0 !important;
    height: 3px !important;
    background: var(--ct-primary) !important;
    transition: var(--ct-transition) !important;
    transform: translateX(-50%) !important;
    border-radius: 2px !important;
}

.ct-educational-navbar__nav-link:hover::before,
.ct-educational-navbar__nav-item.ct-active .ct-educational-navbar__nav-link::before {
    opacity: 1 !important;
}

.ct-educational-navbar__nav-link:hover::after,
.ct-educational-navbar__nav-item.ct-active .ct-educational-navbar__nav-link::after {
    width: 70% !important;
}

.ct-educational-navbar__nav-link:hover,
.ct-educational-navbar__nav-item.ct-active .ct-educational-navbar__nav-link {
    color: var(--ct-primary) !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 3px 10px rgba(187, 34, 37, 0.15) !important;
}

/* Apply Button Styles */
.ct-educational-apply-button {
    background: var(--ct-primary) !important;
    color: var(--ct-light) !important;
    padding: 10px 20px !important;
    border-radius: var(--ct-radius) !important;
    text-decoration: none !important;
    font-weight: 700 !important;
    font-family: var(--ct-font-body) !important;
    font-size: 13px !important;
    transition: var(--ct-transition) !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 6px !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    position: relative !important;
    overflow: hidden !important;
    border: 2px solid transparent !important;
    cursor: pointer !important;
    animation: ctEducationalPulse 3s infinite !important;
    white-space: nowrap !important;
}

.ct-educational-apply-button::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: -100% !important;
    width: 100% !important;
    height: 100% !important;
    background: var(--ct-primary-dark) !important;
    transition: var(--ct-transition) !important;
}

.ct-educational-apply-button:hover::before {
    left: 0 !important;
}

.ct-educational-apply-button i,
.ct-educational-apply-button span {
    position: relative !important;
    z-index: 2 !important;
}

.ct-educational-apply-button:hover {
    color: var(--ct-light) !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 6px 16px rgba(187, 34, 37, 0.3) !important;
    border-color: var(--ct-light) !important;
    animation-play-state: paused !important;
}

/* Pulse Animation */
@keyframes ctEducationalPulse {
    0% {
        box-shadow: 0 0 0 0 rgba(187, 34, 37, 0.7) !important;
    }
    70% {
        box-shadow: 0 0 0 6px rgba(187, 34, 37, 0) !important;
    }
    100% {
        box-shadow: 0 0 0 0 rgba(187, 34, 37, 0) !important;
    }
}

/* Modal Styles */
.ct-educational-modal-overlay {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background: rgba(0, 0, 0, 0.75) !important;
    z-index: 9999 !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transition: all 0.3s ease !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    backdrop-filter: blur(8px) !important;
}

.ct-educational-modal-overlay.ct-modal-active {
    opacity: 1 !important;
    visibility: visible !important;
}

.ct-educational-modal-content {
    background: #ffffff !important;
    border-radius: 16px !important;
    max-width: 900px !important;
    width: 90% !important;
    height: auto !important;
    max-height: 90vh !important;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15) !important;
    transform: scale(0.9) translateY(50px) !important;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1) !important;
    position: relative !important;
    overflow: hidden !important;
}

.ct-educational-modal-overlay.ct-modal-active .ct-educational-modal-content {
    transform: scale(1) translateY(0) !important;
}

/* Close Button */
.ct-educational-modal-close {
    position: absolute !important;
    top: 15px !important;
    right: 15px !important;
    background: rgba(255,255,255,0.9) !important;
    border: none !important;
    width: 32px !important;
    height: 32px !important;
    border-radius: 50% !important;
    cursor: pointer !important;
    transition: all 0.2s ease !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    z-index: 10 !important;
    color: #666 !important;
    font-size: 14px !important;
    backdrop-filter: blur(10px) !important;
}

.ct-educational-modal-close:hover {
    background: rgba(255,255,255,1) !important;
    color: #333 !important;
    transform: scale(1.1) !important;
}

/* Header Section */
.ct-modal-header {
    text-align: center !important;
    padding: 30px 30px 25px !important;
    border-bottom: 1px solid #f0f0f0 !important;
}

.ct-modal-title {
    font-size: 24px !important;
    font-weight: 700 !important;
    color: #1a1a1a !important;
    margin-bottom: 8px !important;
    font-family: var(--ct-font-heading) !important;
}

.ct-modal-subtitle {
    font-size: 14px !important;
    color: #666 !important;
    font-weight: 400 !important;
    margin: 0 !important;
}

/* Campus Comparison Section */
.ct-campus-comparison {
    padding: 25px 30px 20px !important;
}

.ct-comparison-grid {
    display: grid !important;
    grid-template-columns: 1fr 1fr !important;
    gap: 1px !important;
    background: #e8e8e8 !important;
    border-radius: 12px !important;
    overflow: hidden !important;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08) !important;
    position: relative !important;
}

.ct-campus-option {
    background: #ffffff !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    position: relative !important;
    border: 3px solid transparent !important;
    display: flex !important;
    flex-direction: column !important;
    height: 320px !important;
}

.ct-campus-option:hover {
    transform: translateY(-2px) !important;
}

.ct-campus-option.ct-selected {
    border-color: var(--ct-primary) !important;
    box-shadow: 0 8px 25px rgba(187, 34, 37, 0.12) !important;
}

.ct-campus-option.ct-selected::after {
    content: '✓' !important;
    position: absolute !important;
    top: 15px !important;
    right: 15px !important;
    background: var(--ct-primary) !important;
    color: white !important;
    width: 24px !important;
    height: 24px !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 12px !important;
    font-weight: bold !important;
    z-index: 5 !important;
}

/* Campus Image */
.ct-campus-image {
    width: 100% !important;
    height: 140px !important;
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    position: relative !important;
    overflow: hidden !important;
}

.ct-campus-image::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.1) 100%) !important;
}

/* Default campus images */
.ct-campus-option[data-campus="maqsudan"] .ct-campus-image {
    background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDQwMCAxNDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMTQwIiBmaWxsPSIjZjVmNWY1Ii8+CjxwYXRoIGQ9Ik0xMjAgNjBIMTQwVjEwMEgxMjBWNjBaTTE2MCA2MEgxODBWMTAwSDE2MFY2MFpNMjAwIDYwSDIyMFYxMDBIMjAwVjYwWk0yNDAgNjBIMjYwVjEwMEgyNDBWNjBaTTEwMCAxMDBIMjgwVjEyMEgxMDBWMTAwWiIgZmlsbD0iI0JCMjIyNiIvPgo8cGF0aCBkPSJNMTQwIDQwSDE2MFY2MEgxNDBWNDBaTTE4MCA0MEgyMDBWNjBIMTgwVjQwWk0yMjAgNDBIMjQwVjYwSDIyMFY0MFoiIGZpbGw9IiM5OTk5OTkiLz4KPHN2ZyBzdHlsZT0iZm9udDogYm9sZCAxNHB4IHNhbnMtc2VyaWY7IGZpbGw6ICM2NjY7Ij4KPHR0ZXh0IHg9IjUwJSIgeT0iNTAlIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkeT0iLjNlbSI+TWFxc3VkYW4gQ2FtcHVzPC90dGV4dD4KPC9zdmc+') !important;
}

.ct-campus-option[data-campus="shahpur"] .ct-campus-image {
    background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDQwMCAxNDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMTQwIiBmaWxsPSIjZjBmOGYwIi8+CjxjaXJjbGUgY3g9IjEwMCIgY3k9IjcwIiByPSIyMCIgZmlsbD0iIzRjYWY1MCIgb3BhY2l0eT0iMC4zIi8+CjxjaXJjbGUgY3g9IjE1MCIgY3k9IjUwIiByPSIxNSIgZmlsbD0iIzRjYWY1MCIgb3BhY2l0eT0iMC40Ii8+CjxjaXJjbGUgY3g9IjMwMCIgY3k9IjgwIiByPSIyNSIgZmlsbD0iIzRjYWY1MCIgb3BhY2l0eT0iMC4yNSIvPgo8cmVjdCB4PSIyMDAiIHk9IjYwIiB3aWR0aD0iODAiIGhlaWdodD0iNDAiIGZpbGw9IiNCQjIyMjYiLz4KPHN2ZyBzdHlsZT0iZm9udDogYm9sZCAxNHB4IHNhbnMtc2VyaWY7IGZpbGw6ICM2NjY7Ij4KPHR0ZXh0IHg9IjUwJSIgeT0iNTAlIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkeT0iLjNlbSI+U2hhaHB1ciBDYW1wdXM8L3R0ZXh0Pgo8L3N2Zz4=') !important;
}

/* Campus Content */
.ct-campus-content {
    padding: 20px !important;
    flex: 1 !important;
    display: flex !important;
    flex-direction: column !important;
    text-align: center !important;
}

.ct-campus-name {
    font-size: 18px !important;
    font-weight: 600 !important;
    color: #1a1a1a !important;
    margin-bottom: 6px !important;
    font-family: var(--ct-font-heading) !important;
}

.ct-campus-location {
    font-size: 12px !important;
    color: #666 !important;
    margin-bottom: 12px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 4px !important;
}

.ct-campus-description {
    font-size: 13px !important;
    color: #777 !important;
    line-height: 1.4 !important;
    margin-bottom: 15px !important;
    flex: 1 !important;
}

/* Campus Features */
.ct-campus-features {
    display: grid !important;
    grid-template-columns: 1fr 1fr !important;
    gap: 6px !important;
    margin-top: auto !important;
}

.ct-campus-feature {
    font-size: 11px !important;
    color: #555 !important;
    background: #f8f9fa !important;
    padding: 4px 8px !important;
    border-radius: 4px !important;
    text-align: center !important;
}

/* VS Divider */
.ct-vs-divider {
    position: absolute !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    background: white !important;
    border: 2px solid #e8e8e8 !important;
    border-radius: 50% !important;
    width: 36px !important;
    height: 36px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-weight: 700 !important;
    font-size: 11px !important;
    color: #666 !important;
    z-index: 5 !important;
}

/* Selection Status */
.ct-selection-status {
    text-align: center !important;
    padding: 15px 30px 0 !important;
    opacity: 0 !important;
    transform: translateY(20px) !important;
    transition: all 0.4s ease !important;
}

.ct-selection-status.ct-visible {
    opacity: 1 !important;
    transform: translateY(0) !important;
}

.ct-selection-message {
    background: #f0f8f0 !important;
    color: #2e7d32 !important;
    padding: 12px 16px !important;
    border-radius: 6px !important;
    font-size: 13px !important;
    font-weight: 500 !important;
    border: 1px solid #c8e6c9 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 6px !important;
}

/* Action Buttons */
.ct-action-section {
    padding: 20px 30px 25px !important;
    border-top: 1px solid #f0f0f0 !important;
}

.ct-action-buttons {
    display: flex !important;
    gap: 12px !important;
    justify-content: center !important;
}

.ct-action-button {
    padding: 12px 24px !important;
    border-radius: 6px !important;
    text-decoration: none !important;
    font-weight: 600 !important;
    font-size: 13px !important;
    transition: all 0.3s ease !important;
    cursor: pointer !important;
    border: none !important;
    min-width: 120px !important;
    text-align: center !important;
    opacity: 0.4 !important;
    pointer-events: none !important;
    transform: scale(0.95) !important;
}

.ct-action-button.ct-enabled {
    opacity: 1 !important;
    pointer-events: auto !important;
    transform: scale(1) !important;
}

.ct-action-button.ct-primary {
    background: var(--ct-primary) !important;
    color: white !important;
}

.ct-action-button.ct-primary:hover {
    background: var(--ct-primary-dark) !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 4px 12px rgba(187, 34, 37, 0.2) !important;
}

.ct-action-button.ct-secondary {
    background: transparent !important;
    color: var(--ct-primary) !important;
    border: 2px solid var(--ct-primary) !important;
}

.ct-action-button.ct-secondary:hover {
    background: var(--ct-primary) !important;
    color: white !important;
    transform: translateY(-1px) !important;
}

/* Animations */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.ct-campus-option {
    animation: slideIn 0.4s ease forwards !important;
}

.ct-campus-option:nth-child(1) {
    animation-delay: 0.1s !important;
}

.ct-campus-option:nth-child(2) {
    animation-delay: 0.2s !important;
}

/* ===== RESPONSIVE DESIGN ===== */

/* Tablet and below (768px) */
@media (max-width: 768px) {
    /* Top Bar */
    .ct-educational-topbar {
        padding: 6px 0 !important;
    }
    
    .ct-educational-topbar__wrapper {
        padding: 0 15px !important;
    }
    
    .ct-educational-topbar__navigation {
        display: none !important;
    }
    
    .ct-educational-topbar__social-section {
        gap: 10px !important;
    }
    
    .ct-educational-topbar__social-cluster p {
        font-size: 11px !important;
    }
    
    .ct-educational-topbar__social-cluster a {
        width: 26px !important;
        height: 26px !important;
        font-size: 11px !important;
    }
    
    /* Main Navbar */
    .ct-educational-navbar__wrapper {
        padding: 0 15px !important;
        min-height: 60px !important;
    }
    
    .ct-educational-navbar__brand-section img {
        max-height: 40px !important;
    }
    
    .ct-educational-mobile-toggle {
        display: flex !important;
        width: 40px !important;
        height: 40px !important;
        font-size: 16px !important;
    }
    
    .ct-educational-navbar__menu-wrapper {
        position: fixed !important;
        top: 60px !important;
        left: 0 !important;
        width: 100% !important;
        height: calc(100vh - 60px) !important;
        background: var(--ct-light) !important;
        flex-direction: column !important;
        justify-content: flex-start !important;
        align-items: stretch !important;
        padding: 20px !important;
        gap: 0 !important;
        transform: translateX(-100%) !important;
        transition: transform 0.3s ease !important;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1) !important;
        z-index: 999 !important;
        overflow-y: auto !important;
    }
    
    .ct-educational-navbar__menu-wrapper.active {
        transform: translateX(0) !important;
    }
    
    .ct-educational-navbar__navigation {
        flex-direction: column !important;
        width: 100% !important;
        gap: 0 !important;
        margin-bottom: 20px !important;
    }
    
    .ct-educational-navbar__nav-item {
        width: 100% !important;
        margin-bottom: 8px !important;
    }
    
    .ct-educational-navbar__nav-link {
        width: 100% !important;
        padding: 15px 20px !important;
        font-size: 16px !important;
        border-radius: 8px !important;
        justify-content: flex-start !important;
        border: 1px solid #f0f0f0 !important;
        background: #fafafa !important;
    }
    
    .ct-educational-navbar__nav-link::after {
        display: none !important;
    }
    
    .ct-educational-apply-button {
        width: 100% !important;
        padding: 15px 20px !important;
        font-size: 14px !important;
        justify-content: center !important;
        margin-top: auto !important;
    }
    
    /* Modal */
    .ct-educational-modal-content {
        width: 95% !important;
        margin: 10px !important;
        max-height: 95vh !important;
        border-radius: 12px !important;
    }
    
    .ct-modal-header {
        padding: 25px 20px 20px !important;
    }
    
    .ct-modal-title {
        font-size: 20px !important;
    }
    
    .ct-modal-subtitle {
        font-size: 13px !important;
    }
    
    .ct-campus-comparison {
        padding: 20px !important;
    }
    
    .ct-comparison-grid {
        grid-template-columns: 1fr !important;
        gap: 12px !important;
        background: transparent !important;
    }
    
    .ct-campus-option {
        border: 1px solid #e8e8e8 !important;
        border-radius: 12px !important;
        height: auto !important;
        min-height: 280px !important;
    }
    
    .ct-vs-divider {
        display: none !important;
    }
    
    .ct-action-section {
        padding: 15px 20px 20px !important;
    }
    
    .ct-action-buttons {
        flex-direction: column !important;
        gap: 10px !important;
    }
    
    .ct-action-button {
        width: 100% !important;
        min-width: auto !important;
        padding: 14px 20px !important;
    }
    
    .ct-campus-image {
        height: 120px !important;
    }
    
    .ct-selection-status {
        padding: 12px 20px 0 !important;
    }
}

/* Mobile devices (480px and below) */
@media (max-width: 480px) {
    /* Top Bar */
    .ct-educational-topbar__wrapper {
        padding: 0 10px !important;
    }
    
    .ct-educational-topbar__social-cluster {
        gap: 6px !important;
    }
    
    .ct-educational-topbar__social-cluster p {
        display: none !important;
    }
    
    .ct-educational-topbar__social-cluster a {
        width: 24px !important;
        height: 24px !important;
        font-size: 10px !important;
    }
    
    /* Main Navbar */
    .ct-educational-navbar__wrapper {
        padding: 0 10px !important;
        min-height: 55px !important;
    }
    
    .ct-educational-navbar__brand-section img {
        max-height: 35px !important;
    }
    
    .ct-educational-mobile-toggle {
        width: 36px !important;
        height: 36px !important;
        font-size: 14px !important;
    }
    
    .ct-educational-navbar__menu-wrapper {
        top: 55px !important;
        height: calc(100vh - 55px) !important;
        padding: 15px !important;
    }
    
    .ct-educational-navbar__nav-link {
        padding: 12px 15px !important;
        font-size: 15px !important;
    }
    
    .ct-educational-apply-button {
        padding: 12px 15px !important;
        font-size: 13px !important;
    }
    
    /* Modal */
    .ct-educational-modal-content {
        width: 98% !important;
        margin: 5px !important;
        border-radius: 10px !important;
    }
    
    .ct-modal-header {
        padding: 20px 15px 15px !important;
    }
    
    .ct-modal-title {
        font-size: 18px !important;
    }
    
    .ct-modal-subtitle {
        font-size: 12px !important;
    }
    
    .ct-campus-comparison {
        padding: 15px !important;
    }
    
    .ct-campus-content {
        padding: 15px !important;
    }
    
    .ct-campus-name {
        font-size: 16px !important;
    }
    
    .ct-campus-description {
        font-size: 12px !important;
    }
    
    .ct-campus-image {
        height: 100px !important;
    }
    
    .ct-campus-features {
        grid-template-columns: 1fr !important;
        gap: 4px !important;
    }
    
    .ct-campus-feature {
        font-size: 10px !important;
        padding: 3px 6px !important;
    }
    
    .ct-action-section {
        padding: 12px 15px 15px !important;
    }
    
    .ct-action-button {
        padding: 12px 15px !important;
        font-size: 12px !important;
    }
    
    .ct-selection-status {
        padding: 10px 15px 0 !important;
    }
    
    .ct-selection-message {
        padding: 10px 12px !important;
        font-size: 12px !important;
    }
    
    .ct-educational-modal-close {
        width: 28px !important;
        height: 28px !important;
        top: 12px !important;
        right: 12px !important;
        font-size: 12px !important;
    }
}

/* Extra small devices (360px and below) */
@media (max-width: 360px) {
    .ct-educational-navbar__wrapper {
        padding: 0 8px !important;
    }
    
    .ct-educational-navbar__brand-section img {
        max-height: 30px !important;
    }
    
    .ct-educational-mobile-toggle {
        width: 32px !important;
        height: 32px !important;
        font-size: 12px !important;
    }
    
    .ct-modal-title {
        font-size: 16px !important;
    }
    
    .ct-campus-name {
        font-size: 14px !important;
    }
    
    .ct-campus-image {
        height: 80px !important;
    }
}

/* Landscape orientation on mobile */
@media (max-height: 500px) and (orientation: landscape) {
    .ct-educational-navbar__menu-wrapper {
        height: calc(100vh - 50px) !important;
        top: 50px !important;
    }
    
    .ct-educational-modal-content {
        max-height: 95vh !important;
        overflow-y: auto !important;
    }
    
    .ct-campus-option {
        height: auto !important;
        min-height: 200px !important;
    }
    
    .ct-campus-image {
        height: 80px !important;
    }
}
</style>

<header class="ct-educational-header">
    <!-- Top Information Bar -->
    <div class="ct-educational-topbar">
        <div class="ct-educational-topbar__wrapper">
            <ul class="ct-educational-topbar__navigation">
                <li><a href="#infrastructure">Infrastructure</a></li>
                <li><a href="#library">Library</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#placements">Placements</a></li>
            </ul>
            
            <div class="ct-educational-topbar__social-section">
                <div class="ct-educational-topbar__social-cluster">
                    <p>Connect:</p>
                    <a href="https://api.whatsapp.com/send?phone=919914504904" target="_blank" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="tel:01815055127" title="Call Us">
                        <i class="fa fa-phone"></i>
                    </a>
                </div>
                
                <div class="ct-educational-topbar__social-cluster">
                    <a href="https://www.instagram.com/ctgroupofinstitutions/" target="_blank" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/ctgroupshahpur" target="_blank" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCbnz-xueiXi4ksPb_Gbn3xg" target="_blank" title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://in.linkedin.com/company/ct-group-of-institutions" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.facebook.com/ctgroup.jalandhar/" target="_blank" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation Bar -->
    <nav class="ct-educational-navbar">
        <div class="ct-educational-navbar__wrapper">
            <a href="index.php" class="ct-educational-navbar__brand-section">
                <img src="assets/images/logo.webp" alt="CT Group of Institutions" loading="lazy">
            </a>
            
            <button class="ct-educational-mobile-toggle" id="ctEducationalNavToggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="ct-educational-navbar__menu-wrapper" id="ctEducationalMenuContainer">
                <ul class="ct-educational-navbar__navigation" id="ctEducationalNavMenu">
                    <li class="ct-educational-navbar__nav-item ct-active">
                        <a href="#home" class="ct-educational-navbar__nav-link">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    
                    <li class="ct-educational-navbar__nav-item">
                        <a href="#about" class="ct-educational-navbar__nav-link">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                    
                    <li class="ct-educational-navbar__nav-item">
                        <a href="#courses" class="ct-educational-navbar__nav-link">
                            <i class="fas fa-graduation-cap"></i> Courses
                        </a>
                    </li>
                    
                    <li class="ct-educational-navbar__nav-item">
                        <a href="#academics" class="ct-educational-navbar__nav-link">
                            <i class="fas fa-university"></i> Academics
                        </a>
                    </li>
                    
                    <li class="ct-educational-navbar__nav-item">
                        <a href="#research" class="ct-educational-navbar__nav-link">
                            <i class="fas fa-flask"></i> Research
                        </a>
                    </li>
                    
                    <li class="ct-educational-navbar__nav-item">
                        <a href="#contact" class="ct-educational-navbar__nav-link">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
                    
                    <li class="ct-educational-navbar__nav-item">
                        <a href="#scholarship" class="ct-educational-navbar__nav-link">
                            <i class="fas fa-award"></i> Scholarship
                        </a>
                    </li>
                </ul>
                
                <!-- Apply Button in Mobile Menu -->
                <button class="ct-educational-apply-button" id="ctEducationalApplyBtnMobile">
                    <i class="fas fa-graduation-cap"></i> <span>APPLY NOW</span>
                </button>
            </div>
        </div>
    </nav>
</header>

<!-- Minimalist Campus Selection Modal -->
<div class="ct-educational-modal-overlay" id="ctEducationalCampusModal">
    <div class="ct-educational-modal-content">
        <!-- Close Button -->
        <button class="ct-educational-modal-close" id="ctEducationalModalClose">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Header -->
        <div class="ct-modal-header">
            <h2 class="ct-modal-title">Choose Your Campus</h2>
            <p class="ct-modal-subtitle">Select your preferred campus location</p>
        </div>
        
        <!-- Campus Comparison -->
        <div class="ct-campus-comparison">
            <div class="ct-comparison-grid">
                <!-- VS Divider -->
                <div class="ct-vs-divider">VS</div>
                
                <!-- Maqsudan Campus -->
                <div class="ct-campus-option" data-campus="maqsudan">
                    <div class="ct-campus-image"></div>
                    <div class="ct-campus-content">
                        <h3 class="ct-campus-name">Maqsudan Campus</h3>
                        <p class="ct-campus-location">
                            <i class="fas fa-map-marker-alt"></i> Maqsudan, Jalandhar
                        </p>
                        <p class="ct-campus-description">
                            Modern infrastructure with advanced technology labs and comprehensive facilities.
                        </p>
                        <div class="ct-campus-features">
                            <div class="ct-campus-feature">Tech Labs</div>
                            <div class="ct-campus-feature">Smart Classes</div>
                            <div class="ct-campus-feature">Research Hub</div>
                            <div class="ct-campus-feature">Sports Complex</div>
                        </div>
                    </div>
                </div>
                
                <!-- Shahpur Campus -->
                <div class="ct-campus-option" data-campus="shahpur">
                    <div class="ct-campus-image"></div>
                    <div class="ct-campus-content">
                        <h3 class="ct-campus-name">Shahpur Campus</h3>
                        <p class="ct-campus-location">
                            <i class="fas fa-map-marker-alt"></i> Shahpur Kandi, Jalandhar
                        </p>
                        <p class="ct-campus-description">
                            Spacious green campus with specialized departments and student amenities.
                        </p>
                        <div class="ct-campus-features">
                            <div class="ct-campus-feature">Green Campus</div>
                            <div class="ct-campus-feature">Hostels</div>
                            <div class="ct-campus-feature">Medical Center</div>
                            <div class="ct-campus-feature">Industry Ties</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Selection Status -->
        <div class="ct-selection-status" id="ctSelectionStatus">
            <div class="ct-selection-message">
                <i class="fas fa-check-circle"></i>
                <span>Great choice! Select your next step.</span>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class="ct-action-section">
            <div class="ct-action-buttons">
                <a href="#" class="ct-action-button ct-primary" id="ctEducationalApplyNowBtn">
                    Apply Now
                </a>
                <a href="#" class="ct-action-button ct-secondary" id="ctEducationalDiscoverBtn">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Navigation elements
    const navbar = document.querySelector('.ct-educational-navbar');
    const navToggle = document.getElementById('ctEducationalNavToggle');
    const menuContainer = document.getElementById('ctEducationalMenuContainer');
    const navLinks = document.querySelectorAll('.ct-educational-navbar__nav-link');
    
    // Modal elements
    const modal = document.getElementById('ctEducationalCampusModal');
    const modalClose = document.getElementById('ctEducationalModalClose');
    const applyBtn = document.getElementById('ctEducationalApplyBtn');
    const applyBtnMobile = document.getElementById('ctEducationalApplyBtnMobile');
    const campusOptions = document.querySelectorAll('.ct-campus-option');
    const applyNowBtn = document.getElementById('ctEducationalApplyNowBtn');
    const discoverBtn = document.getElementById('ctEducationalDiscoverBtn');
    const selectionStatus = document.getElementById('ctSelectionStatus');
    
    let selectedCampus = null;
    
    const campusUrls = {
        maqsudan: {
            apply: 'https://apply.ctgroup.in',
            discover: 'https://maqsudan.ctgroup.in/home'
        },
        shahpur: {
            apply: 'https://enroll.ctgroup.in',
            discover: 'https://shahpur.ctgroup.in'
        }
    };
    
    // Scroll effect for navbar
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('ct-scrolled');
        } else {
            navbar.classList.remove('ct-scrolled');
        }
    });
    
    // Mobile menu toggle
    function toggleMobileMenu() {
        menuContainer.classList.toggle('active');
        navToggle.classList.toggle('active');
        document.body.style.overflow = menuContainer.classList.contains('active') ? 'hidden' : '';
    }
    
    function closeMobileMenu() {
        menuContainer.classList.remove('active');
        navToggle.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Event listeners for mobile menu
    navToggle.addEventListener('click', toggleMobileMenu);
    
    // Close mobile menu when clicking on nav links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    closeMobileMenu();
                    setTimeout(() => {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 300);
                    
                    // Update active navigation state
                    document.querySelectorAll('.ct-educational-navbar__nav-item').forEach(item => {
                        item.classList.remove('ct-active');
                    });
                    this.closest('.ct-educational-navbar__nav-item').classList.add('ct-active');
                }
            } else {
                closeMobileMenu();
            }
        });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!navbar.contains(e.target) && menuContainer.classList.contains('active')) {
            closeMobileMenu();
        }
    });
    
    // Close mobile menu on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            closeMobileMenu();
        }
    });
    
    // Modal functions
    function openModal() {
        modal.classList.add('ct-modal-active');
        document.body.style.overflow = 'hidden';
        resetSelection();
    }
    
    function closeModal() {
        modal.classList.remove('ct-modal-active');
        document.body.style.overflow = '';
        setTimeout(resetSelection, 300);
    }
    
    function resetSelection() {
        selectedCampus = null;
        campusOptions.forEach(option => {
            option.classList.remove('ct-selected');
        });
        selectionStatus.classList.remove('ct-visible');
        applyNowBtn.classList.remove('ct-enabled');
        discoverBtn.classList.remove('ct-enabled');
        applyNowBtn.href = '#';
        discoverBtn.href = '#';
    }
    
    function selectCampus(campus) {
        selectedCampus = campus;
        
        campusOptions.forEach(option => {
            option.classList.remove('ct-selected');
        });
        
        const selectedOption = document.querySelector(`[data-campus="${campus}"]`);
        selectedOption.classList.add('ct-selected');
        
        setTimeout(() => {
            selectionStatus.classList.add('ct-visible');
        }, 200);
        
        setTimeout(() => {
            applyNowBtn.classList.add('ct-enabled');
            discoverBtn.classList.add('ct-enabled');
            
            if (campusUrls[campus]) {
                applyNowBtn.href = campusUrls[campus].apply;
                discoverBtn.href = campusUrls[campus].discover;
            }
        }, 400);
    }
    
    // Modal event listeners
    if (applyBtn) {
        applyBtn.addEventListener('click', openModal);
    }
    
    if (applyBtnMobile) {
        applyBtnMobile.addEventListener('click', function() {
            closeMobileMenu();
            setTimeout(openModal, 300);
        });
    }
    
    modalClose.addEventListener('click', closeModal);
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (modal.classList.contains('ct-modal-active')) {
                closeModal();
            } else if (menuContainer.classList.contains('active')) {
                closeMobileMenu();
            }
        }
    });
    
    campusOptions.forEach(option => {
        option.addEventListener('click', function() {
            const campus = this.getAttribute('data-campus');
            selectCampus(campus);
        });
    });
    
    [applyNowBtn, discoverBtn].forEach(btn => {
        btn.addEventListener('click', function(e) {
            if (!this.classList.contains('ct-enabled')) {
                e.preventDefault();
            }
        });
    });
    
    // Touch handling for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    modal.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    modal.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 100) {
            // Swipe left to close modal
            closeModal();
        }
    });
    
    // Prevent scroll on modal open (mobile)
    modal.addEventListener('touchmove', function(e) {
        if (modal.classList.contains('ct-modal-active')) {
            if (e.target === modal) {
                e.preventDefault();
            }
        }
    });
});
</script>