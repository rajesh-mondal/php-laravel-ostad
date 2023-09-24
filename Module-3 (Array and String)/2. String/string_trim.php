<?php
/* String trimming */
$string = "  hello \n,";
// $string = trim( $string );
$string = trim( $string, ' ,' );
// $string = ltrim( $string, ' ,' );
// $string = rtrim( $string, ' ,' );
echo $string;
echo "Data";