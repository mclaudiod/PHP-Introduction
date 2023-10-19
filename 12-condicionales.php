<?php include './includes/header.php';

$loggedin = true;
$admin = false;

if($loggedin || $admin) {
    echo "User logged in correctly";
} else {
    echo "User not logged in";
};

// || = or
// && = and

// Nested If

$client = [
    "name" => "Claudio",
    "balance" => 0,
    "information" => [
        "type" => "Premium"
    ]
];

echo "<br>";

if(!empty($client)) {
    echo "The array is not empty";

    if($client["balance"] > 0) {
        echo "The client can make purchases";
    } else {
        echo "The client can't make purchases";
    };
} else {
    echo "The array is empty";
};

// ! negates the condition, makes it the opposite

// Else if

echo "<br>";

if($client["balance"] > 0) {
    echo "The client's balance is positive";
} else if($client["information"]["type"] === "Premium") {
    echo "The client is Premium";
} else {
    echo "The client has not been defined, their balance is not positive or they are not premium";
};

// Switch

$technology = "PHP";

switch ($technology) {
    case "PHP":
        echo "PHP is an exelent language";
        break;

    case "JavaScript":
        echo "Great, the language of the web";
        break;

    case "HTML":
        echo "Uhm...";
        break;
        
    default:
        echo "Some language I don't recognize";
        break;
};

include './includes/footer.php';