<?php

$students = [
    "rahim",
    "karim",
    "monir",
    12345,
];

$students[3] = "shafiq"; //for modifying array or replacing element

/* $n = count( $students );
for ( $i = 0; $i < $n; $i++ ) {
echo $students[$i] . "\n";
} */

/* Array pop - for removing last element */
$student = array_pop( $students );
echo $student . "\n";

/* Array shift - for removing first element of array */
$student = array_shift( $students );
echo $student . "\n";

/* Array push - for adding element in last position of array */
array_push( $students, "Jamal" );

/* Array unshift - for adding element in first position of array */
array_unshift( $students, "Kamal" );

echo PHP_EOL;

$n = count( $students );
for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";
}