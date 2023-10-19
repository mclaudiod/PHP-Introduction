<?php include './includes/header.php';

// While - Checks the condition before executing the code

$i = 0; // Initialiser

while ($i < 10) {
    echo $i . "<br>";

    $i++; // Increment
};

// Do While - Executes the code and then checks the condition

$i = 0;

do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

// For Loop

for($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
};

// Using the dot(.) you can concatenate

// Job enterview excercise: multiples of 3 print Fizz, of 5 print Buzz and of 3 and 5 print FIZZ BUZZ

for($i = 1; $i < 1000; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo $i . " - FIZZ BUZZ<br>";
    } else if($i % 3 === 0) {
        echo $i . " - Fizz<br>";
    } else if($i % 5 === 0) {
        echo $i . " - Buzz<br>";
    } else {
        echo $i . "<br>";
    };
};

// $i % 3 === 0 is for checking if the number in question is divisible between 3, basically if it's residue it's 0 it means it's a multiple of 3

// For Each

$clients = array("Pedro", "Juan", "Karen");

foreach($clients as $client) {
    echo $client . "<br>";
};


// These are for counting the amount of entries in an array
echo count($clients);
echo sizeof($clients);
echo "<br>";

// Another way of doing the same that For Each does with For

for($i = 0; $i < count($clients); $i++) {
    echo $clients[$i] . "<br>";
};

// With assosiative arrays

$client = [
    "name" => "Juan",
    "balance" => 200,
    "type" => "Premium"
];

foreach($client as $key => $valor) {
    echo $key . " - " . $valor . "<br>";
};

include './includes/footer.php';