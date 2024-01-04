<?php

require 'checkingAccount.php';

class PremiumAccount extends CheckingAccount {
    public $minimumBalance = 10000;
}

$premiumAccount = new PremiumAccount();
echo $premiumAccount->minimumBalance . PHP_EOL;
echo $premiumAccount->deposit( 20000 );