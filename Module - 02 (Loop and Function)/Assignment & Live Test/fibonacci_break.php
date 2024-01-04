<?php

$first = 0;
$second = 1;

echo "First 10 Fibonacci numbers: \n";

for ( $i = 3; $i <= 12; $i++ ) {
    $fibonacci = $first + $second;
    $first = $second;
    $second = $fibonacci;

    if ( $fibonacci > 100 ) {
        break;
    }

    echo $fibonacci . " ";
}

/* Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement. */