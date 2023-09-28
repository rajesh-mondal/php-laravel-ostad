<?php
/* Develop a PHP program that reads JSON data and converts it into CSV format. */
$jsonData = '[{"Name": "Alice", "Age": 25, "Location": "New York"}, {"Name": "Bob", "Age": 30, "Location": "San Francisco"}]';
$dataArray = json_decode( $jsonData, true );
$csvData = implode( "\n", array_map( 'str_getcsv', $dataArray ) );
echo $csvData;

// show some fatal error. need to solved.