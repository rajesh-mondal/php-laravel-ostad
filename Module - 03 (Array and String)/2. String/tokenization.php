<?php
/* Breaking strings into fragments - Tokenization */
$string = "Hello World, How are You?";
$string2 = "Quick brown fox jumps over the lazy dog";

$parts = explode( " ", $string );
print_r( $parts );
echo PHP_EOL;

$original = join( " ", $parts );
echo $original . "\n";

// $parts2 = str_split( $string );
// print_r( $parts2 );

$parts3 = strtok( $string, ", " );
while ( $parts3 !== false ) {
    echo $parts3 . "\n"; // iterator
    $parts3 = strtok( " ," );
}

$parts4 = preg_split( "/ |,/", $string2 );
print_r( $parts4 );