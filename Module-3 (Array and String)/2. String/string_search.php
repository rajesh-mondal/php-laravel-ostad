<?php
/* Searching for strings within strings */
$string = "Quick brown Fox fox jumps over the lazy dog";
// echo strpos( $string, "fox", 13 ); // for case sensitive search
echo stripos( $string, "fox" ); // for case insensitive search

$offset = strpos( $string, "Quick" );
if ( $offset !== false ) {
    echo "\nWord was found\n";
} else {
    echo "\nWord was not found\n";
}

$string2 = "Quick brown Fox jumps over the lazy fox";
$offset2 = strripos( $string2, "Fox" ); // for reverse search
echo $offset2;