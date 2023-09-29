<?php
/* Public, Private Method and Propertise of classes */
class Fund {
    private $fund;

    // Constructor to initialize the fund with an optional initial amount
    function __construct( $initialFund = 0 ) {
        $this->fund = $initialFund;
    }

    public function addFund( $money ) {
        $this->fund += $money;
    }

    public function deductFund( $money ) {
        $this->fund -= $money;
    }

    public function getTotal() {
        echo "Total fund is {$this->fund}";
    }
}

$ourFund = new Fund( 100 );
$ourFund->getTotal();
echo PHP_EOL;

$ourFund->addFund( 10 );
$ourFund->deductFund( 7 );
$ourFund->getTotal();