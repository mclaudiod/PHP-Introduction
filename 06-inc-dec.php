<?php include './includes/header.php';

// ++ equals in an increment of one to the number in question, depending on where in the code the increment is you can see or not the result when printed

$num1 = 30;
$num1++;

echo $num1++;

echo $num1;

echo ++$num1;

// In this case the increment is a defined quantity not only one, in this case 5

$num1 +=5;

echo $num1;

echo "<br>";

// -- equals in an decrement of one to the number in question, depending on where in the code the decrement is you can see or not the result when printed

$num2 = 30;
$num2--;

echo $num2--;

echo $num2;

echo --$num2;

// In this case the decrement is a defined quantity not only one, in this case 5

$num2 -=5;

echo $num2;

include './includes/footer.php';