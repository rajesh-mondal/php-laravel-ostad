<?php
/*
 * call by value
 * call by reference
 */
$name = "John Doe";

function change( &$name ) { // by reference
    $name = "New Name";
}

change( $name ); // by value
echo $name;