<?php
/* Generating Unix timestamps of any date, month, year, and GMT timestamp */
echo time() . "\n";
echo mktime( 0, 0, 0, 12, 1, 2018 ) . "\n";
date_default_timezone_set( "Asia/Dhaka" );
// echo mktime(0,0,0, date("12"), date("1"), date("2018")) . "\n";
echo mktime( 0, 0, 0, 12, 1, 2018 ) . "\n";
echo gmmktime( 0, 0, 0, 12, 1, 2018 ) . "\n";
// echo ( 18800 - 800 ) / ( 60 * 60 );

echo ( mktime( 0, 0, 0, 10, 19, 2023 ) - mktime( 0, 0, 0, 10, 12, 2023 ) ) / ( 24 * 60 * 60 );