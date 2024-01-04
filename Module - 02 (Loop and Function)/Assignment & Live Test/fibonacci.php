<?php

function generateFibonacci( $count ) {
    $first = 0;
    $second = 1;

    echo "First $count Fibonacci numbers: \n";

    for ( $i = 3; $i <= $count + 2; $i++ ) {
        $fibonacci = $first + $second;
        $first = $second;
        $second = $fibonacci;

        echo $fibonacci . " ";
    }
}

generateFibonacci( 15 );

/* Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function. */