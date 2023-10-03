<?php
/* Discussion of method overloading with call and callStatic magic methods */
class MotorCycle {
    private $parameters;
    function __construct( $displacement, $capacity, $mileage ) {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    function __isset( $name ) {
        if ( !isset( $this->parameters[$name] ) ) {
            echo "{$name} not found\n";
            return false;
        }
        return true;
    }

    function __unset( $name ) {
        print_r( $this->parameters );
        unset( $this->parameters[$name] );
        print_r( $this->parameters );
    }

    function __get( $name ) {
        echo $this->parameters[$name];
    }

    function __set( $name, $value ) {
        echo $this->parameters[$name] = $value;
    }

    function __call( $name, $arguments ) {
        if ( 'run' == $name ) {
            if ( $arguments ) {
                echo "I am running at {$arguments[0]}";
            } else {
                echo "I am running";
            }
        }
    }

    static function __callStatic( $name, $arguments ) {
        echo "Static Call\n";
    }
}

$pulsar = new MOtorCycle( '150cc', '16ltr', '40kmph' );
$pulsar->displacement = '135cc';
echo PHP_EOL;

MotorCycle::wash();

if ( isset( $pulsar->tiresize ) ) {
    echo "Found\n";
} else {
    echo "Not Found\n";
}

unset( $pulsar->mileage );
$pulsar->run( '100kmph' );