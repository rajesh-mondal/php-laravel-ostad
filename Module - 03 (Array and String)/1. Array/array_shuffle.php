<?php
/* array suffling and random number */
$numbers = range( 40, 72 );
$random = mt_rand( 0, 32 );
// echo $random . "\n";

$random = mt_rand( 0, 32 );
// echo $numbers[$random];

/* head or tail check */
$luck = $numbers[$random];

if ( $luck % 2 == 0 ) {
    echo "Head";
} else {
    echo "Tail";
}

echo PHP_EOL;

/* array shuffle */
shuffle( $numbers );
print_r( $numbers );

$randomNumber = $numbers[3];
echo $randomNumber;