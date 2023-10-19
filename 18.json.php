<?php include './includes/header.php';

$products = [
    [
        "name" => "Tablet",
        "price" => 200,
        "available" => true
    ],
    [
        "name" => "24\" TV",
        "price" => 300,
        "available" => true
    ],
    [
        "name" => "Monitor",
        "price" => 400,
        "available" => false
    ]
];

echo "<pre>";
var_dump($products);

$json = json_encode($products, JSON_UNESCAPED_UNICODE);

$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</pre>";

// Encode converts an array to a string, and decode does the opposite

include './includes/footer.php';