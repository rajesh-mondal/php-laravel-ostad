<?php
/* Create a PHP function that takes an array of numbers and returns a new array containing only the unique values (removing duplicates). */
function getUniqueValues( $numbers ) {
    return array_values( array_unique( $numbers ) );
}

$numbers = [1, 2, 2, 3, 4, 4, 5];
$uniqueValues = getUniqueValues( $numbers );
print_r( $uniqueValues );