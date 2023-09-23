<?php
/* array range functions and stepping */

$numbers = range( 12, 20, 2 );
print_r( $numbers );

foreach ( range( 12, 20, 2 ) as $evenNumbers ) { // stepping 2 for printing even number
    echo $evenNumbers . "\n";
}

//another example
foreach ( range( 0, 50, 7 ) as $number ) { // print all numbers which are divided by 7
    if ( $number > 0 ) {
        echo $number . "\n";
    }
}

foreach ( range( 0, 60, 11 ) as $number ) { // print all numbers which are divided by 7
    if ( $number > 0 ) {
        echo $number . "\n";
    }
}