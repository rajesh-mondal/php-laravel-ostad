<?php
/* global scope */
$name = "Earth";

function doSomething(){
    global $name;
    echo $name;
    // echo $GLOBALS['name'];
}

doSomething();

/* local scope */
function doSomething(){
    $name = "Earth"; // local scope
    echo $name;
}

doSomething();
// echo $name;

/* static scope */
function doSomething() {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i . "\n";
}

function doExtra() {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i . "\n";
}

doSomething();
doSomething();
doExtra();
doSomething();
doExtra();
doSomething();