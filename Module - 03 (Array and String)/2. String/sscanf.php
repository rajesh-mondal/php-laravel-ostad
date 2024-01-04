<?php
/* Using the sscanf function */
$name = "Rajesh Mondal 01711223344 rajesh@gmail.com";
$parts = sscanf( $name, "%s %s %11s %s" );
print_r( $parts );

sscanf( $name, "%s %s %11s %s", $fname, $lname, $mobile, $email );
echo $fname;

echo PHP_EOL;

// another example
$hexColor = "#FF2F44";
sscanf( $hexColor, "#%2x%2x%2x", $red, $green, $blue );
echo $green;