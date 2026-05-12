<?php
try {
    $uri = "mongodb://127.0.0.1:27017";
    $manager = new MongoDB\Driver\Manager($uri);
    $database = "steel_retail";
    
    // Check categories
    $query = new MongoDB\Driver\Query([]);
    $cursor = $manager->executeQuery("$database.categories", $query);
    $count = count($cursor->toArray());
    echo "Categories count: $count\n";

    // Check products
    $cursor = $manager->executeQuery("$database.products", $query);
    $count = count($cursor->toArray());
    echo "Products count: $count\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
