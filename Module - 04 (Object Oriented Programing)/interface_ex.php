<?php
/*  A practical example of an interface */
class DistrictCollection implements IteratorAggregate, Countable {
    private $districts;
    function __construct() {
        $this->districts = array();
    }

    function add( $district ) {
        array_push( $this->districts, $district );
    }

    function getDistricts() {
        return $this->districts;
    }

    function getIterator() {
        return new ArrayIterator( $this->districts );
    }

    function count() {
        return count( $this->districts );
    }
}

$districts = new DistrictCollection();
$districts->add( "Rajshahi" );
$districts->add( "Bogra" );
$districts->add( "Sylhet" );
$districts->add( "Chittagong" );
$districts->add( "Comilla" );

// foreach ( $districts as $district ) {
//     echo "$district\n";
// }

echo count( $districts ) . "\n";