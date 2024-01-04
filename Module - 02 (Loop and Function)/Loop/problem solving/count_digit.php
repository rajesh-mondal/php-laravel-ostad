<?php
/* Count Digits in a Number (Like $numbers = 12345) */
$number = 123456;
$i = 0;

while ( $number > 0 ) {
    $number = (int) ( $number / 10 );
    $i++;
}

echo "The number of digits in the given number is: $i";