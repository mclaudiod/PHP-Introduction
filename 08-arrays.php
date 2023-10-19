<?php include './includes/header.php';

$cart = ["Tablet", "TV", "PC"];

// Access to one element of the array

echo $cart[1];

// Adds one element to the index 3 of the array

$cart[3] = "New Product";

// Adds one element at the end of the array

array_push($cart, "Headphones");

// Add one element to the start of the array

array_unshift($cart, "Smartwatch");

// Useful to see the contents of an array

echo "<pre>";
var_dump($cart);
echo "</pre>";

$clients = array("Client1", "Client2", "Client3");

echo "<pre>";
var_dump($clients);
echo "</pre>";

echo $clients[1];

// <pre> is used to show code as unformatted

include './includes/footer.php';