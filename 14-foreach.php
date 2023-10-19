<?php include './includes/header.php';

// For Each in a real example

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

// We close the php code so we can add format to the way we present the information that we are obtaining through php

foreach($products as $product) { ?>
    <li>
        <p>Product: <?php echo $product["name"]; ?> </p>
        <p>Price: <?php echo "$ " . $product["price"]; ?> </p>
        <p><?php echo($product["available"]) ? "Available" : "Not Available"; ?></p>
        <?php if($product["available"]) {
            echo "<p>Available</p>";
        } else {
            echo "<p>Not Available</p>";
        };
        ?>
    </li>
    <?php
};

include './includes/footer.php';