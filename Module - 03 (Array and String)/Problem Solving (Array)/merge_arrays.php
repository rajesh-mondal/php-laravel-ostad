<?php
/* Write a PHP function that takes two numeric arrays as input and merges them into a single array, removing any duplicates. */
function mergeArrays( $array1, $array2 ) {
    return array_values( array_unique( array_merge( $array1, $array2 ) ) );
}

$numbers1 = [1, 2, 3];
$numbers2 = [3, 4, 5];
$mergedArray = mergeArrays( $numbers1, $numbers2 );
print_r( $mergedArray );