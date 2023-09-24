<?php
/* Develop a PHP script that takes a paragraph of text and generates an associative array where keys are unique words, and values are the frequency of each word in the text. */
function wordFrequency( $text ) {
    $words = str_word_count( strtolower( $text ), 1 );
    $wordCount = array_count_values( $words );
    arsort( $wordCount );
    return $wordCount;
}

$text = "This is a sample text. This text contains words, and it is a sample.";
$wordFrequency = wordFrequency( $text );
print_r( $wordFrequency );