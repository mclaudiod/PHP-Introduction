<?php include './includes/header.php';

$clientName = "    Claudio Daniel Morales    ";

// Know extension of a string

echo strlen($clientName);

var_dump($clientName);

// Delete blank spaces

$text = trim($clientName);

echo strlen($text);

// Convert to uppercase

echo strtoupper($clientName);

// Convert to lowercase

echo strtolower($clientName);

$email1 = "email@email.com";

$email2 = "Email@email.com";

var_dump(strtolower($email1) === strtolower($email2));

echo str_replace("Daniel", "D.", $clientName);

// Check if a string exists or not

echo strpos($clientName, "Pedro");

$clientType = "Premium";

echo "<br>";

// Concatenate

echo "The Client " . $clientName . " is " . $clientType;

// Template String

echo "The Client {$clientName} is {$clientType}.";

include './includes/footer.php';