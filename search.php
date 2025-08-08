<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emirates";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search_query = isset($_GET['s']) ? trim($_GET['s']) : '';
$results = [];

if (!empty($search_query)) {
    // List of all diamond and gold product tables
    $diamond_tables = [
        'diamond_rings',
        'diamond_bangles',
        'diamond_bracelets',
        'diamond_earring',
        'diamond_necklaces',
        'diamond_pendants'
    ];
    $gold_tables = [
        'gold_rings',
        'gold_bangles',
        'gold_bracelets',
        'gold_earring',
        'gold_necklaces',
        'gold_pendants'
    ];

    // Only use tables that exist in the database
    $existing_tables = [];
    $all_tables = array_merge($diamond_tables, $gold_tables);
    $show_tables_result = $conn->query("SHOW TABLES");
    if ($show_tables_result) {
        while ($row = $show_tables_result->fetch_array()) {
            $existing_tables[] = $row[0];
        }
    }

    $valid_diamond_tables = array_intersect($diamond_tables, $existing_tables);
    $valid_gold_tables = array_intersect($gold_tables, $existing_tables);
    $valid_all_tables = array_merge($valid_diamond_tables, $valid_gold_tables);

    // Build UNION query to search all products
    $union_sql = [];
    foreach ($valid_diamond_tables as $table) {
        $union_sql[] = "SELECT id, name, code, weight, image, 'diamond' as type, '$table' as source FROM $table WHERE name LIKE '%$search_query%' OR code LIKE '%$search_query%'";
    }
    foreach ($valid_gold_tables as $table) {
        $union_sql[] = "SELECT id, name, code, weight, image, 'gold' as type, '$table' as source FROM $table WHERE name LIKE '%$search_query%' OR code LIKE '%$search_query%'";
    }
    
    if (count($union_sql) > 0) {
        $sql = implode(" UNION ALL ", $union_sql) . " ORDER BY name ASC LIMIT 50";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        }
    }
}

// Map for detail pages
$detail_pages = [
    // Diamond
    'diamond_rings' => 'diamond/diamond_rings_product.php',
    'diamond_bangles' => 'diamond/diamond_bangles_product.php',
    'diamond_bracelets' => 'diamond/diamond_bracelets_product.php',
    'diamond_earring' => 'diamond/diamond_earring_product.php',
    'diamond_necklaces' => 'diamond/diamond_necklaces_product.php',
    'diamond_pendants' => 'diamond/diamond_pendants_product.php',
    // Gold
    'gold_rings' => 'gold/gold_rings_product.php',
    'gold_bangles' => 'gold/gold_bangles_product.php',
    'gold_bracelets' => 'gold/gold_bracelets_product.php',
    'gold_earring' => 'gold/gold_earring_product.php',
    'gold_necklaces' => 'gold/gold_necklaces_product.php',
    'gold_pendants' => 'gold/gold_pendants_product.php'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - Muliya Gold & Diamonds</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
        }
        .search-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .search-header {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .search-form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .search-input {
            flex: 1;
            padding: 12px 16px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        .search-button {
            padding: 12px 24px;
            background: #d4af37;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        .search-button:hover {
            background: #bfa133;
        }
        .results-count {
            color: #666;
            margin-bottom: 20px;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        .product-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .product-info {
            padding: 20px;
        }
        .product-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }
        .product-code {
            color: #666;
            margin-bottom: 5px;
        }
        .product-weight {
            color: #666;
            margin-bottom: 15px;
        }
        .product-type {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 15px;
        }
        .type-diamond {
            background: #e3f2fd;
            color: #1976d2;
        }
        .type-gold {
            background: #fff3e0;
            color: #f57c00;
        }
        .view-button {
            display: inline-block;
            padding: 8px 16px;
            background: #d4af37;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .view-button:hover {
            background: #bfa133;
        }
        .no-results {
            text-align: center;
            padding: 60px 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .no-results h3 {
            color: #666;
            margin-bottom: 10px;
        }
        .no-results p {
            color: #999;
        }
        .back-home {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        .back-home:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <?php include_once 'header.php'; ?>

    <div class="search-container">
        <div class="search-header">
            <h1>Search Results</h1>
            
            <form class="search-form" method="GET" action="search.php">
                <input type="text" name="s" class="search-input" 
                       placeholder="Search for gold jewellery, diamond jewellery and more" 
                       value="<?php echo htmlspecialchars($search_query); ?>">
                <button type="submit" class="search-button">Search</button>
            </form>

            <?php if (!empty($search_query)): ?>
                <div class="results-count">
                    <?php if (count($results) > 0): ?>
                        Found <?php echo count($results); ?> product<?php echo count($results) != 1 ? 's' : ''; ?> for "<?php echo htmlspecialchars($search_query); ?>"
                    <?php else: ?>
                        No products found for "<?php echo htmlspecialchars($search_query); ?>"
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($search_query)): ?>
            <?php if (count($results) > 0): ?>
                <div class="products-grid">
                    <?php foreach ($results as $product): ?>
                        <div class="product-card">
                            <?php 
                            $img_path = '';
                            if ($product['image']) {
                                if (preg_match('/^https?:\/\//', $product['image'])) {
                                    $img_path = $product['image'];
                                } elseif ($product['type'] == 'diamond') {
                                    $img_path = 'diamond/' . ltrim($product['image'], '/');
                                } elseif ($product['type'] == 'gold') {
                                    $img_path = 'gold/' . ltrim($product['image'], '/');
                                } else {
                                    $img_path = $product['image'];
                                }
                            } else {
                                $img_path = 'assets/no-image.png';
                            }
                            ?>
                            <img src="<?php echo htmlspecialchars($img_path); ?>" 
                                 alt="<?php echo htmlspecialchars($product['name']); ?>" 
                                 class="product-image"
                                 onerror="this.src='assets/no-image.png';">
                            
                            <div class="product-info">
                                <div class="product-name"><?php echo htmlspecialchars($product['name']); ?></div>
                                <div class="product-code">Code: <?php echo htmlspecialchars($product['code']); ?></div>
                                <div class="product-weight">Weight: <?php echo htmlspecialchars($product['weight']); ?></div>
                                
                                <div class="product-type type-<?php echo $product['type']; ?>">
                                    <?php echo ucfirst($product['type']); ?>
                                </div>
                                
                                <?php 
                                $detail_page = isset($detail_pages[$product['source']]) ? $detail_pages[$product['source']] : '#';
                                ?>
                                <a href="<?php echo $detail_page . '?id=' . urlencode($product['id']); ?>" 
                                   class="view-button">View Details</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="no-results">
                    <h3>No products found</h3>
                    <p>Try searching with different keywords or browse our collections.</p>
                    <a href="index.php" class="back-home">Back to Home</a>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="no-results">
                <h3>Enter a search term</h3>
                <p>Search for gold jewellery, diamond jewellery and more.</p>
            </div>
        <?php endif; ?>
    </div>

    <?php include_once 'footer.php'; ?>
</body>
</html>
