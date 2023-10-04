<?php

class Cart {
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateTotal() {
        $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount;
        return $subTotal;
    }
}

$cart = new Cart();

$cart->itemsTotal = 100;
$cart->shippingCost = 20;
$cart->discount = 10;

$subTotal = $cart->calculateTotal();
echo $subTotal;

// print_r( $cart );