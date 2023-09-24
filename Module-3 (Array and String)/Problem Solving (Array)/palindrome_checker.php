<?php
/* Build a PHP function that checks whether a given string is a palindrome (reads the same backward as forward) and returns true or false. */
function isPalindrome( $str ) {
    $str = str_replace( ' ', '', $str );
    $str = strtolower( $str );
    return $str === strrev( $str );
}

$text = "A man a plan a canal Panama";
$isPalindrome = isPalindrome( $text );
echo $isPalindrome ? 'Palindrome' : 'Not a Palindrome';