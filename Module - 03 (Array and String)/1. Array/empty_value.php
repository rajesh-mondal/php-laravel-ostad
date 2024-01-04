<?php
/* Empty values */
$name = 0;

if ( isset( $name ) ) {
    echo "Name is set";
} else {
    echo "Not set";
}

echo PHP_EOL;

// Another way
if ( empty( $name ) ) {
    echo "Name is empty";
} else {
    echo "Not empty";
}

echo PHP_EOL;

// Set but not empty - best way
if(isset($name) && (is_numeric($name) || $name != '')){
    echo "Name is set and it's not empty";
}else{
    echo "Name is either not set or it's empty";
}