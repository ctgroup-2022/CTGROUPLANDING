<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Banner Section -->
<?php include 'components/hero-banner.php'; ?>

<!-- Campus Section -->
<?php include 'components/campus-section.php'; ?>

<!-- Institutions Section -->
<?php include 'components/institutions.php'; ?>
<!-- Stats Section -->
<?php include 'components/stats-section.php'; ?>

<!-- Testimonials Section -->
<?php include 'components/testimonials.php'; ?>

<?php include 'components/certifications.php'; ?>

<!-- Apply Now Modal -->
<!-- <div class="modal fade apply-modal" id="applyNowModal" tabindex="-1" aria-labelledby="applyNowModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyNowModalLabel">Choose Your Campus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="campus-option" data-url="<?php echo SHAHPUR_APPLY_URL; ?>">
                            <img src="assets/images/campuses/shahpur.jpg" alt="Shahpur Campus" class="img-fluid">
                            <h4>Shahpur Campus</h4>
                            <p>Our flagship campus with cutting-edge facilities and vibrant campus life.</p>
                            <a href="<?php echo SHAHPUR_APPLY_URL; ?>" class="btn btn-primary">Apply to Shahpur</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="campus-option" data-url="<?php echo MAQSUDAN_APPLY_URL; ?>">
                            <img src="assets/images/campuses/maqsudan.jpg" alt="Maqsudan Campus" class="img-fluid">
                            <h4>Maqsudan Campus</h4>
                            <p>Our urban campus with excellent connectivity and industry exposure.</p>
                            <a href="<?php echo MAQSUDAN_APPLY_URL; ?>" class="btn btn-primary">Apply to Maqsudan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->




<?php require_once 'includes/footer.php'; ?>