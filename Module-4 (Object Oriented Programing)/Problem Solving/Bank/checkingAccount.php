<?php

require 'account.php';

class CheckingAccount extends Account {
    public function transfer( $amount ) {
        echo "Transfering $amount from checking account\n";
    }
}

$checkingAccount = new CheckingAccount();
$checkingAccount->deposit( 100 );
$checkingAccount->withdraw( 50 );
$checkingAccount->transfer( 50 );