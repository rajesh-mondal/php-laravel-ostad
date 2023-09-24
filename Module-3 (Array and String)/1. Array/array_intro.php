<?php

$students = [
    "rahim",
    "karim",
    "monir",
    12345,
];

echo $students[1]; // access perticuler element from an array

var_dump( $students ); // check variable type

echo count( $students ); // count element (array length)

// access all elements
$n = count( $students );
for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";
}
