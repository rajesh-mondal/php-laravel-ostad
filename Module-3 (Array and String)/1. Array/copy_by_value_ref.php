<?php
/* Copy by value/deep copy */
$person = array( 'fname' => 'Hello', 'lname' => 'World' );
$newperson = $person;
$newperson['lname'] = 'Pluto';

print_r( $person );
print_r( $newperson );

/* Copy by reference/shallow copy */
$person = array( 'fname' => 'Hello', 'lname' => 'World' );
$newperson = &$person; // & sign for showing call by reference
$newperson['lname'] = 'Pluto';

print_r( $person );
print_r( $newperson );