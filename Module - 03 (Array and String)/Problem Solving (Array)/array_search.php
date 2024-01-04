<?php
/* Write a PHP script that searches for a specific element in an array and returns its index if found, or a message if not found. */
function findElementIndex( $array, $element ) {
    $index = array_search( $element, $array );
    return $index !== false ? $index : "Element not found";
}

$fruits = ['apple', 'banana', 'cherry'];
$searchElement = 'banana';
$result = findElementIndex( $fruits, $searchElement );
echo "Index of $searchElement: $result";