<?php
//associative array to string coversion - serialize, json
$student = array(
    'fname'   => 'Rajesh',
    'lname'   => 'Mondal',
    'age'     => '15',
    'class'   => '8',
    'section' => 'B',
);

print_r( $student );

echo $student['fname'] . " " . $student['lname'] . "\n";

printf( "%s %s \n", $student['fname'], $student['lname'] );

/* serializzed data */
$selialized = serialize( $student );

$newstudent = unserialize( $selialized );
print_r( $newstudent );

/* json convert */
$jsondata = json_encode( $student );
echo $jsondata;

$student2 = json_decode( $jsondata );
print_r( $student2 );