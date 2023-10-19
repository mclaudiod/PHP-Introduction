<?php include './includes/header.php';

// in_array - Search elements in an array

$cart = ["Tablet", "PC", "TV"];

var_dump(in_array("Tablet", $cart));

// Sort elements of an array

$num = array(1,3,4,5,1,2);

sort($num); // From higest to lowest
rsort($num); // From lowest to highest

echo "<pre>";
var_dump($num);
echo "</pre>";

// Sort an associative array

$client = array (
    "balance" => 200,
    "type" => "Premium",
    "name" => "Claudio"
);

echo "<pre>";
var_dump($client);
echo "</pre>";

asort($client); // Sorts by values (alphabetical order)
arsort($client); // Sorts by values (inverse alphabetical order)
ksort($client); // Sorts by the keys (alphabetical order)
krsort($client); // Sorts by the keys (inverse alphabetical order)

echo "<pre>";
var_dump($client);
echo "</pre>";

include './includes/footer.php';