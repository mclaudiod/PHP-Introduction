<?php include "./includes/header.php" ?>

<?php

echo "Hello World";

?>

<br>

<?php

echo ("Hello World");

print("Hello World");

print "Hello World";

print_r("Hello World");

var_dump("Hello World");

// print and echo are more or less the same; they are both language constructs that display strings. The differences are subtle: print has a return value of 1 so it can be used in expressions whereas echo has a void return type; echo can take multiple parameters, although such usage is rare; echo is slightly faster than print. (Personally, I always use echo, never print.)

// var_dump prints out a detailed dump of a variable, including its type and the type of any sub-items (if it's an array or an object). print_r prints a variable in a more human-readable form: strings are not quoted, type information is omitted, array sizes aren't given, etc.

// var_dump is usually more useful than print_r when debugging, in my experience. It's particularly useful when you don't know exactly what values/types you have in your variables.

include "./includes/footer.php" ?>