<?php
class Planet {
    static function echoName() {
        echo static::getName();
    }

    static function getName() {
        return "Planet\n";
    }
}

class Earth extends Planet {
    static function getName() {
        return "Earth\n";
    }
}

Planet::echoName();
Earth::echoName();