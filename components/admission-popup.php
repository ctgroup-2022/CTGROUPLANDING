<div class="admission-popup" id="admissionPopup">
    <div class="admission-popup-content">
        <button type="button" class="popup-close" id="closeAdmissionPopup">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="popup-header">
            <div class="popup-badge">LIMITED TIME OFFER</div>
            <h3>Fast-Track Your <span class="highlight">Admission</span></h3>
            <p>Apply now and get an instant decision within 24 hours!</p>
        </div>
        
        <div class="popup-body">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="popup-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">
                                <h5>Instant Application Review</h5>
                                <p>No waiting for weeks - get feedback fast</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                            <div class="feature-text">
                                <h5>Application Fee Waiver</h5>
                                <p>Save ₹1,000 when you apply today</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="feature-text">
                                <h5>Special Scholarship Consideration</h5>
                                <p>Early applicants get priority evaluation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="popup-form">
                        <h4>Get Started Now</h4>
                        <form id="quickAdmissionForm">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                                <div class="field-animation"></div>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Mobile Number" required>
                                <div class="field-animation"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" required>
                                    <option value="" selected disabled>Interested Program</option>
                                    <option value="btech">B.Tech</option>
                                    <option value="mba">MBA</option>
                                    <option value="bca">BCA</option>
                                    <option value="mca">MCA</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="field-animation"></div>
                            </div>
                            <div class="form-buttons">
                                <button type="submit" class="btn btn-accent btn-block">
                                    <i class="fas fa-bolt"></i> Apply Instantly
                                </button>
                            </div>
                        </form>
                        <div class="form-footer">
                            <i class="fas fa-lock"></i> Your information is secure and will not be shared
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="countdown-timer">
            <div class="timer-label">Offer expires in:</div>
            <div class="timer-units">
                <div class="timer-unit">
                    <div class="timer-value" id="timerHours">24</div>
                    <div class="timer-label">Hours</div>
                </div>
                <div class="timer-separator">:</div>
                <div class="timer-unit">
                    <div class="timer-value" id="timerMinutes">00</div>
                    <div class="timer-label">Minutes</div>
                </div>
                <div class="timer-separator">:</div>
                <div class="timer-unit">
                    <div class="timer-value" id="timerSeconds">00</div>
                    <div class="timer-label">Seconds</div>
                </div>
            </div>
        </div>

        <div class="popup-footer">
            <div class="popup-actions">
                <button class="btn btn-outline-secondary cancel-btn" id="cancelAdmissionPopup">
                    <i class="fas fa-times"></i> Cancel
                </button>
                <button class="btn btn-outline-primary remind-btn" id="remindLaterBtn">
                    <i class="fas fa-bell"></i> Remind me later
                </button>
            </div>
        </div>
    </div>
</div>