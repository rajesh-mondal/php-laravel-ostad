<?php
/* This PHP script demonstrates the use of an abstract class with a final method. */
abstract class OurClass {
    final function doSomething() {
        echo "Doing Something";
    }
}

class MyClass extends OurClass {

}

$mc = new MyClass();
$mc->doSomething();