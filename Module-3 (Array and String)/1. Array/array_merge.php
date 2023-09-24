<?php
/* Concatenating several arrays */
$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );
$random = array( "a" => 12, "b" => 45, "c" => 34, "d" => 77, "e" => 77, "f" => 31, 12 => 18, "g" => 87 );

$newFruits1 = array_slice( $fruits, 0, 3 );
$newFruits2 = array_slice( $fruits, 3, null, true );

$newFruits = array_merge( $newFruits1, $newFruits2 );

print_r( $newFruits1 );
print_r( $newFruits2 );
print_r( $newFruits );

// another way
$newFruitsPlus = $newFruits1 + $newFruits2;
print_r( $newFruitsPlus );

// another example

$r1 = array_slice( $random, 0, 2, true );
$r2 = array_slice( $random, 4, null, true );
$r3 = array( "j" => 45, "k" => 12 );

$randomDataCorrectWay = $r1 + $r3 + $r2;

print_r( $randomDataCorrectWay );