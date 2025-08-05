<?php
// Process form submission
$message = '';
$message_type = '';

if ($_POST) {
    // Sanitize input data
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $enquiry_type = htmlspecialchars(trim($_POST['enquiry_type'] ?? ''));
    $message_text = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($message_text)) {
        $message = 'Please fill in all required fields.';
        $message_type = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Please enter a valid email address.';
        $message_type = 'error';
    } else {
        // Here you would typically send email or save to database
        // For now, we'll just show a success message
        $message = 'Thank you for your enquiry! We will get back to you soon.';
        $message_type = 'success';
        
        // Clear form data on success
        if ($message_type === 'success') {
            $name = $email = $phone = $subject = $enquiry_type = $message_text = '';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form - Emirates Gold International</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --gold-primary: #d4af37;
            --gold-secondary: #b8941f;
            --gold-light: #f4e99b;
            --brown-dark: #2c1810;
            --brown-light: #4a2c1a;
            --cream: #f8f5f0;
            --text-light: #c4b896;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--brown-dark) 0%, var(--brown-light) 100%);
            min-height: 100vh;
            padding: 20px 0;
        }

        .enquiry-popup {
            background: var(--cream);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        .popup-header {
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
            color: var(--brown-dark);
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .popup-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.05"/><circle cx="90" cy="40" r="0.5" fill="%23ffffff" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .popup-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        .popup-header p {
            margin: 10px 0 0 0;
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .logo-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            color: var(--brown-dark);
        }

        .popup-body {
            padding: 40px;
            background: var(--cream);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 600;
            color: var(--brown-dark);
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-control, .form-select {
            border: 2px solid #e0d5c7;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fff;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.15);
            outline: none;
        }

        .form-control::placeholder {
            color: #999;
        }

        .enquiry-btn {
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
            border: none;
            color: var(--brown-dark);
            font-weight: 600;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .enquiry-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.4);
            color: var(--brown-dark);
        }

        .enquiry-btn:active {
            transform: translateY(0);
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: var(--brown-dark);
            width: 35px;
            height: 35px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        .alert {
            border-radius: 10px;
            margin-bottom: 25px;
            border: none;
            font-weight: 500;
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
        }

        .alert-danger {
            background: linear-gradient(135deg, #f8d7da 0%, #f1b0b7 100%);
            color: #721c24;
        }

        .required {
            color: var(--gold-primary);
        }

        .input-group-text {
            background: var(--gold-light);
            border: 2px solid #e0d5c7;
            border-right: none;
            color: var(--brown-dark);
            border-radius: 10px 0 0 10px;
        }

        .input-group .form-control {
            border-left: none;
            border-radius: 0 10px 10px 0;
        }

        .input-group .form-control:focus {
            border-left: none;
        }

        /* Animation */
        .enquiry-popup {
            animation: slideInUp 0.5s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .popup-header {
                padding: 25px 20px;
            }
            
            .popup-header h2 {
                font-size: 2rem;
            }
            
            .popup-body {
                padding: 30px 20px;
            }
            
            .enquiry-popup {
                margin: 0 15px;
                border-radius: 15px;
            }
        }

        @media (max-width: 480px) {
            .popup-header h2 {
                font-size: 1.8rem;
            }
            
            .logo-icon {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="enquiry-popup">
            <!-- Close Button -->
            <button type="button" class="close-btn" onclick="closePopup()">
                <i class="fas fa-times"></i>
            </button>
            
            <!-- Header -->
            <div class="popup-header">
                <div class="logo-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h2>Enquiry Form</h2>
                <p>Emirates Gold International</p>
            </div>
            
            <!-- Body -->
            <div class="popup-body">
                <?php if (!empty($message)): ?>
                    <div class="alert alert-<?php echo $message_type === 'success' ? 'success' : 'danger'; ?>" role="alert">
                        <i class="fas fa-<?php echo $message_type === 'success' ? 'check-circle' : 'exclamation-triangle'; ?>"></i>
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Full Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control" id="name" name="name" 
                                           placeholder="Enter your full name" value="<?php echo $name ?? ''; ?>" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           placeholder="Enter your email" value="<?php echo $email ?? ''; ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input type="tel" class="form-control" id="phone" name="phone" 
                                           placeholder="Enter your phone number" value="<?php echo $phone ?? ''; ?>" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="enquiry_type" class="form-label">Enquiry Type</label>
                                <select class="form-select" id="enquiry_type" name="enquiry_type">
                                    <option value="">Select enquiry type</option>
                                    <option value="gold_jewelry" <?php echo ($enquiry_type ?? '') === 'gold_jewelry' ? 'selected' : ''; ?>>Gold Jewelry</option>
                                    <option value="diamond_jewelry" <?php echo ($enquiry_type ?? '') === 'diamond_jewelry' ? 'selected' : ''; ?>>Diamond Jewelry</option>
                                    <option value="custom_design" <?php echo ($enquiry_type ?? '') === 'custom_design' ? 'selected' : ''; ?>>Custom Design</option>
                                    <option value="repair_service" <?php echo ($enquiry_type ?? '') === 'repair_service' ? 'selected' : ''; ?>>Repair Service</option>
                                    <option value="gold_exchange" <?php echo ($enquiry_type ?? '') === 'gold_exchange' ? 'selected' : ''; ?>>Gold Exchange</option>
                                    <option value="appraisal" <?php echo ($enquiry_type ?? '') === 'appraisal' ? 'selected' : ''; ?>>Appraisal</option>
                                    <option value="general" <?php echo ($enquiry_type ?? '') === 'general' ? 'selected' : ''; ?>>General Enquiry</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" 
                               placeholder="Enter subject" value="<?php echo $subject ?? ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message <span class="required">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="5" 
                                  placeholder="Please describe your enquiry in detail..." required><?php echo $message_text ?? ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="enquiry-btn">
                        <i class="fas fa-paper-plane me-2"></i>
                        Send Enquiry
                    </button>
                </form>
                
                <div class="mt-4 text-center">
                    <p class="mb-2" style="color: var(--brown-dark); font-weight: 500;">
                        <i class="fas fa-phone-alt" style="color: var(--gold-primary);"></i>
                        Call us directly: <a href="tel:+918234567890" style="color: var(--gold-primary); text-decoration: none;">+91 82345 67890</a>
                    </p>
                    <p class="mb-0" style="color: var(--text-light); font-size: 0.9rem;">
                        We typically respond within 24 hours
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function closePopup() {
            // You can customize this function based on how you want to handle closing
            // For example, redirect to homepage or close modal if this is embedded
            window.history.back();
        }
        
        // Auto-hide success message after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.querySelector('.alert-success');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.transition = 'opacity 0.5s ease';
                    successAlert.style.opacity = '0';
                    setTimeout(function() {
                        successAlert.remove();
                    }, 500);
                }, 5000);
            }
        });
        
        // Form validation enhancement
        document.querySelector('form').addEventListener('submit', function(e) {
            const requiredFields = document.querySelectorAll('input[required], textarea[required]');
            let isValid = true;
            
            requiredFields.forEach(function(field) {
                if (!field.value.trim()) {
                    field.style.borderColor = '#dc3545';
                    isValid = false;
                } else {
                    field.style.borderColor = '#e0d5c7';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
            }
        });
        
        // Phone number formatting
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 10) {
                value = value.substring(0, 10);
            }
            e.target.value = value;
        });
    </script>
</body>
</html>
