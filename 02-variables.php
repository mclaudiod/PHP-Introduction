<?php include './includes/header.php';

// Variables - Can be changed once defined

$name = "Claudio";

$name = "Claudio2";

echo $name;

var_dump($name);

// Constants - Can't be changed once defined

define("constant", "This is the value of the constant");

echo constant;

const constant2 = "Hello2";

echo constant2;

// Ways of naming the variables or constants

$clientName = "Pedro";
$client_name = "Pedro";

include './includes/footer.php';