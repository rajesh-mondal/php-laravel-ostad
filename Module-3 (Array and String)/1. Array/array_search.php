<?php
/* Searching in indexed and associative arrays */
$fruits = array( 'a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango' );
$numbers = array( 11, 2, 56, 3, 4, 2, 77, 5 );

if ( in_array( 56, $numbers, true ) ) { // for element searching
    echo "56 is found. \n";
}

$offset = array_search( 56, $numbers ); // for position searching
echo $offset . "\n";

if ( key_exists( 'b', $fruits ) ) { // for searching a particuler key
    echo "Key b exists.";
}