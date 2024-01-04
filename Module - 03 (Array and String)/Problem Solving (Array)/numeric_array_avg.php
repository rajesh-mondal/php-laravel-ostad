<?php
/* Create a PHP function that takes a numeric array as input and returns the average (mean) of its elements. */

function calculateAverage( $numbers ) {
    $sum = array_sum( $numbers );
    $count = count( $numbers );
    return $count > 0 ? $sum / $count : 0;
}

$numericArray = [10, 20, 30, 40, 50];
$average = calculateAverage( $numericArray );
echo "Average: $average";