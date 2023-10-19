<?php
declare(strict_types=1);

// This means that is more strict with the things you define, for example it marks an error if you put an incorrect type of value

include './includes/header.php';

// Functions - = 0 is the default value that can be used if you don't declare the variable when you call for the function, int means that the value must be a integer

function add(int $num1 = 0, int $num2 = 0) {
    echo $num1 + $num2;
};

add(20,2);

add(num2: 2, num1: 20);

include './includes/footer.php';