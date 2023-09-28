<?php
/* Build a PHP function that takes a string, a search term, and a replacement term as input and replaces all occurrences of the search term with the replacement term. */
function replaceString( $inputString, $searchTerm, $replaceTerm ) {
    return str_replace( $searchTerm, $replaceTerm, $inputString );
}

$string = "Hello, World!";
$search = "World";
$replace = "Universe";
$newString = replaceString( $string, $search, $replace );
echo $newString;