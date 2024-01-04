<?php
/* Decluttering an array */
$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );

$random = array( "a" => 12, "b" => 45, "c" => 34, "d" => 77, "e" => 77, "f" => 31, 12 => 18, "g" => 87 );

$newFruits = ['jackfruit', 'tamarind'];

$someFruits = array_splice( $fruits, 2, 2, $newFruits );

print_r( $someFruits );

print_r( $fruits ); 