<?php include './includes/header.php';

$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = "30";

var_dump($num1 > $num2);
echo "<br>";

var_dump($num1 < $num2);
echo "<br>";

var_dump($num1 >= $num2);
echo "<br>";

var_dump($num1 <= $num2);
echo "<br>";

// == only looks if the content is the same in the variables while === looks if the contents and the type of variable are the same

var_dump($num2 == $num3);
echo "<br>";

var_dump($num2 == $num4);
echo "<br>";

var_dump($num2 === $num4);
echo "<br>";

// -1 if the left is less, 0 if they are equal, 1 if left is higher

var_dump($num1 <=> $num2);
echo "<br>";

var_dump($num2 <=> $num3);
echo "<br>";

var_dump($num2 <=> $num1);
echo "<br>";

include './includes/footer.php';