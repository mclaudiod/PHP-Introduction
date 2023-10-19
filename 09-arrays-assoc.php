<?php include './includes/header.php';

// Associative Arrays

$client = [
    "name" => "Claudio",
    "balance" => 200,
    "information" => [
        "type" => "Premium"
    ]
];

echo "<pre>";
var_dump($client);
echo "</pre>";

echo $client["name"];

echo $client["information"]["type"];

$client["code"] = 216544832;

echo "<pre>";
var_dump($client);
echo "</pre>";

include './includes/footer.php';