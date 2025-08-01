<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - Emirates Gold & Diamonds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .product-detail-container {
            padding: 50px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 80vh;
        }
        .product-image-container {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .product-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }
        .product-details-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .product-title {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .product-category {
            background: linear-gradient(135deg, #87CEEB, #4682B4);
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            display: inline-block;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .product-info {
            font-size: 1.1rem;
            line-height: 1.8;
        }
        .info-label {
            font-weight: 600;
            color: #4682B4;
        }
        .back-btn {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            display: inline-block;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            background: linear-gradient(135deg, #495057, #343a40);
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
        .enquiry-btn {
            background: linear-gradient(135deg, #87CEEB, #4682B4);
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 8px;
            display: inline-block;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        .enquiry-btn:hover {
            background: linear-gradient(135deg, #4682B4, #2F4F4F);
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<?php include_once 'header.php'; ?>

<div class="product-detail-container">
    <div class="container">
        <a href="bridel.php" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back to Bridal Collection
        </a>

        <?php
        require_once 'config/database.php';

        $product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $table_name = isset($_GET['table']) ? $_GET['table'] : '';

        // Validate table name for security
        $allowed_tables = [
            'gold_ring', 'gold_bangles', 'gold_bracelets', 'gold_chain', 'gold_earring',
            'gold_haarams', 'gold_kadaas', 'gold_mangalsutra', 'gold_necklaces', 'gold_pendants',
            'diamond_bangles', 'diamond_bracelets', 'diamond_earring', 'diamond_necklaces',
            'diamond_pendants', 'diamond_rings'
        ];

        if (!in_array($table_name, $allowed_tables) || $product_id <= 0) {
            echo '<div class="alert alert-danger">Invalid product information.</div>';
            echo '<a href="bridel.php" class="btn btn-primary">Return to Bridal Collection</a>';
        } else {
            try {
                $stmt = $pdo->prepare("SELECT * FROM $table_name WHERE id = ?");
                $stmt->execute([$product_id]);
                $product = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($product) {
                    // Fix image path
                    if (!empty($product['image'])) {
                        if (strpos($table_name, 'gold_') === 0) {
                            $filename = basename($product['image']);
                            $product['image'] = 'gold/img/gold_ring/' . $filename;
                        } else {
                            $product['image'] = 'diamond/' . $product['image'];
                        }
                    }

                    // Determine category
                    $category_map = [
                        'gold_ring' => 'Gold Rings', 'gold_bangles' => 'Gold Bangles',
                        'gold_bracelets' => 'Gold Bracelets', 'gold_chain' => 'Gold Chains',
                        'gold_earring' => 'Gold Earrings', 'gold_haarams' => 'Gold Haarams',
                        'gold_kadaas' => 'Gold Kadaas', 'gold_mangalsutra' => 'Gold Mangalsutra',
                        'gold_necklaces' => 'Gold Necklaces', 'gold_pendants' => 'Gold Pendants',
                        'diamond_bangles' => 'Diamond Bangles', 'diamond_bracelets' => 'Diamond Bracelets',
                        'diamond_earring' => 'Diamond Earrings', 'diamond_necklaces' => 'Diamond Necklaces',
                        'diamond_pendants' => 'Diamond Pendants', 'diamond_rings' => 'Diamond Rings'
                    ];
                    $category = $category_map[$table_name] ?? 'Jewelry';
                    ?>

                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="product-image-container">
                                <img src="<?php echo htmlspecialchars($product['image']); ?>" 
                                     alt="<?php echo htmlspecialchars($product['name']); ?>" 
                                     class="product-image"
                                     onerror="this.onerror=null; this.src='assets/emirats logo.jpg'; this.style.objectFit='contain'; this.style.backgroundColor='#f8f9fa'; this.style.padding='20px';">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="product-details-card">
                                <span class="product-category"><?php echo htmlspecialchars($category); ?></span>
                                <h1 class="product-title"><?php echo htmlspecialchars($product['name']); ?></h1>
                                
                                <div class="product-info">
                                    <p><span class="info-label">Product Code:</span> <?php echo htmlspecialchars($product['code']); ?></p>
                                    
                                    <?php if (!empty($product['weight']) && $product['weight'] !== '--'): ?>
                                        <p><span class="info-label">Weight:</span> <?php echo htmlspecialchars($product['weight']); ?></p>
                                    <?php endif; ?>
                                    
                                    <?php if (!empty($product['description'])): ?>
                                        <p><span class="info-label">Description:</span> <?php echo htmlspecialchars($product['description']); ?></p>
                                    <?php endif; ?>
                                </div>

                                <a href="#" class="enquiry-btn" onclick="openEnquiryForm('<?php echo htmlspecialchars($product['name']); ?>', '<?php echo htmlspecialchars($product['code']); ?>')">
                                    <i class="fas fa-envelope"></i> Enquire Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php
                } else {
                    echo '<div class="alert alert-warning">Product not found.</div>';
                    echo '<a href="bridel.php" class="btn btn-primary">Return to Bridal Collection</a>';
                }
            } catch (PDOException $e) {
                echo '<div class="alert alert-danger">Database error occurred.</div>';
                echo '<a href="bridel.php" class="btn btn-primary">Return to Bridal Collection</a>';
            }
        }
        ?>
    </div>
</div>

<?php include_once 'footer.php'; ?>

<script>
function openEnquiryForm(productName, productCode) {
    // Try to find existing enquiry modal
    const existingModal = document.querySelector('[data-elementor-id="11346"]');
    if (existingModal) {
        // Populate form if fields exist
        const productField = document.querySelector('input[name="form_fields[field_ff54e22]"]');
        if (productField) {
            productField.value = `Enquiry for ${productName} (${productCode})`;
        }
        existingModal.style.display = 'block';
        existingModal.classList.add('elementor-popup-modal');
    } else {
        // Fallback: Alert with contact information
        const message = `Enquiry for: ${productName}\nProduct Code: ${productCode}\n\nPlease contact us:\nPhone: +91 XXX XXX XXXX\nEmail: info@emiratesgold.com`;
        alert(message);
    }
}
</script>

</body>
</html>
