<?php
/* Write a function that takes a string and a delimiter as input and splits the string into an array using the provided delimiter. */
function splitString( $inputString, $delimiter ) {
    return preg_split( $delimiter, $inputString );
}

$string = "Hello|World;Goodbye-Planet";
$delimiter = "/[|;,-]/";
$parts = splitString( $string, $delimiter );
print_r( $parts );