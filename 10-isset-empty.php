<?php include './includes/header.php';

$clients1 = [
    "name" => "Claudio",
    "balance" => 200
];

$clients2 = array();

$clients3 = array("Pedro", "Juan", "Karen");

// Empty - Checks if an array is empty

var_dump(empty($clients1));

var_dump(empty($clients3));

var_dump(empty($clients2));

// Isset - Checks if an array is created or if a property is defined

echo "<br>";

var_dump(isset($clients4));

var_dump(isset($clients1));

var_dump(isset($clients2));

var_dump(isset($clients3));

// Isset - Checks if a property of an associative array exists

var_dump(isset($clients1["name"]));

var_dump(isset($clients1["code"]));

include './includes/footer.php';