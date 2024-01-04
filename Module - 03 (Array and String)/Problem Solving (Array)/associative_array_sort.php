<?php
/* Build a PHP function that sorts an associative array of student names and their respective grades in descending order of grades. Output the sorted array. */
$students = [
    'Alice'   => 85,
    'Bob'     => 92,
    'Charlie' => 78,
];

arsort( $students );
print_r( $students );