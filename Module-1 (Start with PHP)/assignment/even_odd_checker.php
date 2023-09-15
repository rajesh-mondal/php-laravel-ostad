<?php
/* Build a PHP program called even_odd_checker.php that checks whether a given number
is even or odd. Provide an input field where the user can enter a number.
Display a message indicating whether the number is even or odd. */
$number = 12;

$result = ( $number == 0 ) ? "zero" : (  ( $number % 2 == 0 ) ? "even" : "odd" );
echo "The number $number is $result.";