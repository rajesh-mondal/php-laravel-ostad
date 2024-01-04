<?php
/* List function - to get data from an array into a variable */
$color = array( 122, 233, 65 );
list( $red, $green, $blue ) = $color;

echo $blue . "\n";

/* another example */
$student = array( 'Rajesh', 'Mondal', '25', 'CSE' );
list( $fName, $lName, $age, $dept ) = $student;

echo $age;