<?php 
declare(strict_types=1);
include './includes/header.php';

function authenticatedUser(bool $authenticated): string {
    if($authenticated) {
        return "The User has been authenticated";
    } else {
        return "The User couldn't be authenticated";
    };
};

$user = authenticatedUser(true);
echo $user;

// If you are not returning something in the function you should use "void" instead of "string" in that example, you can define various types of values too with the "string|int" syntax and "?string" makes it valid to return a null value

include './includes/footer.php';