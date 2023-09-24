<?php
/* indexed and associative array sorting */
$fruits = array( 'a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango' );
$numbers = array( 11, 2, 56, 3, 4, 2, 77, 5 );

sort( $numbers ); // rsort - reverse of sort
//arsort( $numbers ); //reverse of asort is arsort

ksort( $fruits ); // sorting based on key

print_r( $numbers );
print_r( $fruits );

foreach ( $numbers as $number ) {
    echo $number . "\n";
}

$random = array( "apple", "Apple", "banana", "Banana", "Pineapple" );
sort( $random, SORT_STRING | SORT_FLAG_CASE );
print_r( $random );