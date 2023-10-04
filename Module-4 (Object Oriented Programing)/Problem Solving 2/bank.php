<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct( $accountNumber ) {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit( $amount ) {
        $this->balance += $amount;
        echo "Deposited $amount into account $this->accountNumber. New balance: $this->balance\n";
    }

    public function withdraw( $amount ) {
        if ( $this->balance >= $amount ) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNumber. New balance: $this->balance\n";
        } else {
            echo "Insufficient balance in account $this->accountNumber. Current balance: $this->balance\n";
        }
    }
}

$account = new BankAccount( "SB-1234" );
echo "Account Number: " . $account->getAccountNumber() . PHP_EOL;
echo "Initial Balance: " . $account->getBalance() . PHP_EOL;

$account->deposit( 1000 );
$account->withdraw( 600 );
$account->withdraw( 700 );
?>