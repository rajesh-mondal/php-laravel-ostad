<?php
/* How to write strings differently in PHP */
$name = "Rajesh";

$string = "my name is $name \n \t New Data \n";
echo $string;

/* Another way to write string */
/* herdoc */
$herdoc = <<<EOD
data 1
new line
    more text
my name is \t {$name}
EOD;

echo $herdoc . "\n";

/* nulldoc */
$nulldoc = <<<'EOD'
data 1
new line
    more text
my name is \t {$name}
EOD;

echo $nulldoc;