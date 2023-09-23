<?php
/* Extracting some data from an array while keeping the original array intact */
$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );

$random = array( "a" => 12, "b" => 45, "c" => 34, "d" => 77, "e" => 77, "f" => 31, 12 => 18, "g" => 87 );

// $someFruits = array_slice( $fruits, 2, 2 );
// $someFruits = array_slice( $fruits, -5, -1 );
$someFruits = array_slice( $fruits, 2, 3, true ); // with original key

print_r( $someFruits );

// $randomData = array_slice($random, 3);
$randomData = array_slice($random, 2, -2, true);

print_r($randomData);