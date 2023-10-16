<?php
$filename = "C://xampp//htdocs//Ostad//Module-5//File//data//f4.txt";
$students = array(
    array(
        'fname' => 'Rajesh',
        'lname' => 'Mondal',
        'age'   => 12,
        'class' => 7,
        'roll'  => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age'   => 11,
        'class' => 7,
        'roll'  => 13,
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age'   => 12,
        'class' => 7,
        'roll'  => 14,
    ),
);

// $data = serialize( $students );
// file_put_contents( $filename, $data );

$dataFromFile = file_get_contents( $filename );
$allStudents = unserialize( $dataFromFile );
print_r( $allStudents );

// array_push( $allStudents, $students );
// unset( $allStudents[1] );
// $data = serialize( $allStudents );
// file_put_contents( $filename, $data );