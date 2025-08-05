

function getProductsByType($type) {
    // Database connection
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'emirates';
    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_errno) {
        return [];
    }

    $products = [];

    if ($type === 'gold') {
        // All gold tables in the database
        $goldTables = [
            'gold_bangles', 'gold_bracelets', 'gold_chain', 'gold_earring',
            'gold_haarams', 'gold_kadaas', 'gold_mangalsutra', 'gold_necklaces',
            'gold_pendants', 'gold_ring'
        ];
        foreach ($goldTables as $table) {
            $sql = "SELECT id, name, code, weight, description, image FROM $table";
            $result = $mysqli->query($sql);
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $products[] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'code' => $row['code'],
                        'weight' => $row['weight'],
                        'description' => $row['description'],
                        'price' => 0, // No price in DB, set to 0 or update as needed
                        'image' => $row['image'],
                        'type' => $type,
                        'table' => $table
                    ];
                }
            }
        }
    } elseif ($type === 'diamond') {
        // All diamond tables in the database
        $diamondTables = [
            'diamond_bangles', 'diamond_bracelets', 'diamond_earring', 'diamond_necklaces',
            'diamond_pendants', 'diamond_rings'
        ];
        foreach ($diamondTables as $table) {
            $sql = "SELECT id, name, code, weight, description, image FROM $table";
            $result = $mysqli->query($sql);
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $products[] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'code' => isset($row['code']) ? $row['code'] : '',
                        'weight' => isset($row['weight']) ? $row['weight'] : '',
                        'description' => $row['description'],
                        'price' => 0, // No price in DB, set to 0 or update as needed
                        'image' => $row['image'],
                        'type' => 'diamond',
                        'table' => $table
                    ];
                }
            }
        }
    }
    $mysqli->close();
    return $products;
}
