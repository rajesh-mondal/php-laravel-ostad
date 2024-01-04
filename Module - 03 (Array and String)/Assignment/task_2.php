<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers( $numbers ) {
    // Use array_filter to remove even numbers
    $filteredNumbers = array_filter( $numbers, function ( $number ) {
        return $number % 2 != 0;
    } );

    return $filteredNumbers;
}

$filteredNumbers = removeEvenNumbers( $numbers );

print_r( $filteredNumbers );