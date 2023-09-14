<?php
$number = 17;
$remainder = $number % 2;
$result = match( $remainder ){
    0 => "Even",
    1 => "Odd"
};

echo "Number $number is $result";