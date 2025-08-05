<?php
// Calculate base path for cross-directory compatibility
$current_file = $_SERVER['SCRIPT_NAME'];
$path_parts = explode('/', trim($current_file, '/'));
$depth = count($path_parts) - 1;

// If we're in the root directory, don't add any path prefix
if ($depth == 0) {
    $base_path = "";
} else {
    $base_path = str_repeat('../', $depth);
}

// Footer image paths
$logo_path = $base_path . "assets/emirats logo.jpg";
$app_store_image = $base_path . "assets/footer/app-store.png";
$google_play_image = $base_path . "assets/footer/google-play.png";

// Debug: Enable these to check paths
echo "<!-- Debug: Current file: " . $current_file . " -->";
echo "<!-- Debug: Depth: " . $depth . " -->";
echo "<!-- Debug: Base path: '" . $base_path . "' -->";
echo "<!-- Debug: Logo path: " . $logo_path . " -->";
?>

<!-- Essential CSS Links for Footer -->
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<!-- Local CSS if needed -->


<?php

// Footer links
$home_link = $base_path . "index.php";
$gold_link = $base_path . "gold/index.php";
$diamond_link = $base_path . "diamond/index.php";
$about_link = $base_path . "about.php";
$contact_link = $base_path . "contact.php";
$privacy_link = $base_path . "privacy-policy.php";
$terms_link = $base_path . "terms-conditions.php";
$blog_link = $base_path . "blog.php";
$gallery_link = $base_path . "gallery.php";
?>

<!-- Emirates Gold Footer -->
<footer class="emirates-footer" style="background: linear-gradient(135deg, #2c1810 0%, #4a2c1a 100%); color: #f8f5f0; padding: 60px 0 20px 0;">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="row">
            <!-- Company Information -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-section">
                    <div class="footer-logo mb-3">
                        <a href="<?php echo $home_link; ?>">
                            <img src="assets/emirats logo.jpg" 
                                 alt="Emirates Gold Logo" 
                                 style="max-height: 80px; width: auto; max-width: 200px; object-fit: contain; display: block; margin: 0 auto;">
                            <div style="display: none; color: #d4af37; font-size: 24px; font-weight: bold; text-align: center;">Emirates Gold</div>
                        </a>
                    </div>
                    <h4 style="color: #d4af37; margin-bottom: 15px; font-family: 'Playfair Display', serif;">Emirates Gold & Diamonds</h4>
                    <p style="color: #e8dcc0; margin-bottom: 15px; line-height: 1.6;">
                        Creating Happiness Since 1944
                    </p>
                    <p style="color: #c4b896; line-height: 1.6; font-size: 14px;">
                        A legacy built on trust, purity, and craftsmanship. Now redefining elegance across generations — with gold, diamonds, silver and more.
                    </p>
                    
                    <!-- Social Media Links -->
                    <div class="social-links mt-3">
                        <h6 style="color: #d4af37; margin-bottom: 10px;">Follow Us</h6>
                        <div style="display: flex; gap: 15px;">
                            <a href="#" style="color: #d4af37; font-size: 20px; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#d4af37'">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" style="color: #d4af37; font-size: 20px; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#d4af37'">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" style="color: #d4af37; font-size: 20px; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#d4af37'">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" style="color: #d4af37; font-size: 20px; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#d4af37'">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-section">
                    <h5 style="color: #d4af37; margin-bottom: 20px; font-weight: 600;">Quick Links</h5>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 8px;">
                            <a href="<?php echo $home_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Home</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="<?php echo $about_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">About Us</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="<?php echo $gold_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Gold Collections</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="<?php echo $diamond_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Diamond Collections</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="<?php echo $gallery_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Gallery</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="<?php echo $blog_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Services -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-section">
                    <h5 style="color: #d4af37; margin-bottom: 20px; font-weight: 600;">Services</h5>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 8px;">
                            <a href="#" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Custom Jewelry</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="#" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Jewelry Repair</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="#" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Gold Exchange</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="#" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Appraisal</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="#" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Insurance</a>
                        </li>
                        <li style="margin-bottom: 8px;">
                            <a href="#" style="color: #c4b896; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Consultation</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-section">
                    <h5 style="color: #d4af37; margin-bottom: 20px; font-weight: 600;">Contact Information</h5>
                    
                    <!-- Address -->
                    <div style="margin-bottom: 15px;">
                        <h6 style="color: #e8dcc0; margin-bottom: 8px; font-size: 14px; font-weight: 600;">Head Office Address</h6>
                        <p style="color: #c4b896; margin: 0; font-size: 13px; line-height: 1.5;">
                            EMIRATES GOLD JEWELS LLP<br>
                            NO 476 G and H INDIAN ARCADE<br>
                            Court Road, Puttur<br>
                            DAKSHINA KANNADA KARNATAKA-574201
                        </p>
                    </div>
                    
                    <!-- Contact Details -->
                    <div style="margin-bottom: 15px;">
                        <div style="margin-bottom: 8px;">
                            <i class="fas fa-phone" style="color: #d4af37; margin-right: 8px; width: 15px;"></i>
                            <span style="color: #c4b896; font-size: 14px;">+91 8234 567 890</span>
                        </div>
                        <div style="margin-bottom: 8px;">
                            <i class="fas fa-envelope" style="color: #d4af37; margin-right: 8px; width: 15px;"></i>
                            <span style="color: #c4b896; font-size: 14px;">info@emiratesgold.com</span>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <i class="fas fa-clock" style="color: #d4af37; margin-right: 8px; width: 15px;"></i>
                            <span style="color: #c4b896; font-size: 14px;">Mon - Sat: 10:00 AM - 8:00 PM</span>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <hr style="border-color: #4a2c1a; margin: 40px 0 20px 0;">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="footer-bottom-links">
                    <a href="<?php echo $privacy_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 12px; margin-right: 15px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Privacy Policy</a>
                    <a href="<?php echo $terms_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 12px; margin-right: 15px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Terms & Conditions</a>
                    <a href="<?php echo $contact_link; ?>" style="color: #c4b896; text-decoration: none; font-size: 12px; transition: color 0.3s;" onmouseover="this.style.color='#d4af37'" onmouseout="this.style.color='#c4b896'">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <p style="color: #8b7355; font-size: 12px; margin: 0;">
                    © <?php echo date('Y'); ?> Emirates Gold & Diamonds. All rights reserved | Made by <a href="https://www.pjntech.com/" style="color: #d4af37; text-decoration: none;">PJN Technologies</a>
                </p>
            </div>
        </div>
        
        <!-- Back to Top Button -->
        <div style="position: fixed; bottom: 30px; right: 30px; z-index: 1000;">
            <button onclick="scrollToTop()" style="background: linear-gradient(135deg, #d4af37 0%, #f4e99b 100%); border: none; border-radius: 50%; width: 50px; height: 50px; color: #2c1810; font-size: 18px; cursor: pointer; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3); transition: all 0.3s ease; display: none;" id="backToTop" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <i class="fas fa-chevron-up"></i>
            </button>
        </div>
    </div>
</footer>

<!-- Footer JavaScript -->
<script>
// Back to Top Button Functionality
window.onscroll = function() {
    var backToTopButton = document.getElementById("backToTop");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
};

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Add smooth scrolling to all footer links
document.addEventListener('DOMContentLoaded', function() {
    const footerLinks = document.querySelectorAll('.emirates-footer a[href^="#"]');
    footerLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>

<!-- Bootstrap JavaScript for Interactive Components -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery if needed for compatibility -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<style>
/* Responsive Footer Styles */
.footer-logo img {
    max-height: 80px !important;
    width: auto !important;
    max-width: 200px !important;
    object-fit: contain !important;
    display: block !important;
    margin: 0 auto !important;
}

.footer-logo {
    text-align: center !important;
    margin-bottom: 15px !important;
}

@media (max-width: 768px) {
    .emirates-footer {
        padding: 40px 0 20px 0 !important;
    }
    
    /* 2x2 Grid Layout for Mobile */
    .emirates-footer .row {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        grid-template-rows: auto auto !important;
        grid-gap: 20px !important;
        margin: 0 !important;
    }
    
    .emirates-footer .col-lg-4:first-child {
        grid-column: 1 / -1 !important; /* Full width for company info */
        text-align: center !important;
        margin-bottom: 20px !important;
        order: 1 !important;
    }
    
    .emirates-footer .col-lg-2:nth-child(2) {
        grid-column: 1 !important;
        grid-row: 2 !important;
        order: 2 !important;
    }
    
    .emirates-footer .col-lg-2:nth-child(3) {
        grid-column: 2 !important;
        grid-row: 2 !important;
        order: 3 !important;
    }
    
    .emirates-footer .col-lg-4:last-child {
        grid-column: 1 / -1 !important; /* Full width for contact info */
        grid-row: 3 !important;
        text-align: center !important;
        order: 4 !important;
    }
    
    .footer-logo img {
        max-height: 60px !important;
        margin: 0 auto 15px auto !important;
    }
    
    .social-links div {
        justify-content: center !important;
    }
    
    .footer-bottom-links {
        text-align: center !important;
        margin-bottom: 15px;
    }
    
    .footer-bottom-links a {
        display: inline-block;
        margin: 5px 10px !important;
    }
    
    /* 2x2 Grid for Footer Bottom */
    .emirates-footer .row.align-items-center {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        grid-template-rows: auto auto !important;
        grid-gap: 15px !important;
        text-align: center !important;
    }
    
    .emirates-footer .row.align-items-center .col-md-6:first-child {
        grid-column: 1 / -1 !important;
        grid-row: 1 !important;
    }
    
    .emirates-footer .row.align-items-center .col-md-6:last-child {
        grid-column: 1 / -1 !important;
        grid-row: 2 !important;
        text-align: center !important;
    }
    
    #backToTop {
        bottom: 20px !important;
        right: 20px !important;
        width: 45px !important;
        height: 45px !important;
        font-size: 16px !important;
    }
}

@media (max-width: 480px) {
    /* Enhanced 2x2 Grid for Very Small Screens */
    .emirates-footer .row {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        grid-template-rows: auto auto auto !important;
        grid-gap: 15px !important;
        margin: 0 !important;
    }
    
    .emirates-footer .col-lg-4:first-child {
        grid-column: 1 / -1 !important;
        grid-row: 1 !important;
        text-align: center !important;
        order: 1 !important;
    }
    
    .emirates-footer .col-lg-2:nth-child(2) {
        grid-column: 1 !important;
        grid-row: 2 !important;
        order: 2 !important;
    }
    
    .emirates-footer .col-lg-2:nth-child(3) {
        grid-column: 2 !important;
        grid-row: 2 !important;
        order: 3 !important;
    }
    
    .emirates-footer .col-lg-4:last-child {
        grid-column: 1 / -1 !important;
        grid-row: 3 !important;
        text-align: center !important;
        order: 4 !important;
    }
    
    .emirates-footer h4 {
        font-size: 18px !important;
        text-align: center !important;
    }
    
    .emirates-footer h5 {
        font-size: 16px !important;
        text-align: center !important;
        margin-bottom: 15px !important;
    }
    
    .emirates-footer p,
    .emirates-footer li a {
        font-size: 13px !important;
    }
    
    .emirates-footer ul {
        text-align: center !important;
    }
    
    .footer-section {
        text-align: center !important;
        padding: 12px !important;
        background: rgba(255,255,255,0.05) !important;
        border-radius: 8px !important;
        margin-bottom: 8px !important;
    }
    
    .container {
        padding: 0 10px;
    }
    
    .footer-bottom-links a {
        display: block !important;
        margin: 8px 0 !important;
        padding: 5px !important;
    }
    
    /* Enhanced 2x2 Grid for Footer Bottom on Mobile */
    .emirates-footer .row.align-items-center {
        display: grid !important;
        grid-template-columns: 1fr !important;
        grid-template-rows: auto auto !important;
        grid-gap: 10px !important;
        text-align: center !important;
    }
    
    .emirates-footer .row.align-items-center .col-md-6 {
        grid-column: 1 !important;
        text-align: center !important;
    }
    
    .footer-bottom-links {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        grid-template-rows: auto auto !important;
        grid-gap: 8px !important;
        justify-items: center !important;
    }
    
    .footer-bottom-links a:nth-child(1) {
        grid-column: 1 !important;
        grid-row: 1 !important;
    }
    
    .footer-bottom-links a:nth-child(2) {
        grid-column: 2 !important;
        grid-row: 1 !important;
    }
    
    .footer-bottom-links a:nth-child(3) {
        grid-column: 1 / -1 !important;
        grid-row: 2 !important;
    }
}

/* Hover Effects */
.footer-section ul li a:hover {
    transform: translateX(5px);
    transition: transform 0.3s ease;
}

.social-links a:hover {
    transform: translateY(-2px);
    transition: transform 0.3s ease;
}

/* Loading Animation for Back to Top Button */
#backToTop {
    animation: fadeInUp 0.5s ease-in-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
