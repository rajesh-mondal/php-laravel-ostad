<?php
/* Create a PHP script that reads CSV data and converts it into JSON format */
$csvData = "Name,Age,Location\nAlice,25,New York\nBob,30,San Francisco";
$dataArray = array_map( 'str_getcsv', explode( "\n", $csvData ) );
$jsonData = json_encode( $dataArray, JSON_PRETTY_PRINT );
echo $jsonData;