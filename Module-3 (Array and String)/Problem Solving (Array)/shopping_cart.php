<?php
/*  Create a PHP shopping cart using an array to store products (associative arrays with name and price). Implement functionality to add, remove, and display items in the cart */
$cart = [];

// Add item to the cart
function addToCart( $cart, $product, $price ) {
    $cart[] = ['product' => $product, 'price' => $price];
    return $cart;
}

$cart = addToCart( $cart, 'Laptop', 800 );
$cart = addToCart( $cart, 'Smartphone', 400 );

// Remove an item from the cart
function removeFromCart( $cart, $index ) {
    if ( isset( $cart[$index] ) ) {
        unset( $cart[$index] );
        return array_values( $cart );
    }
    return $cart;
}

$cart = removeFromCart( $cart, 0 );

// Display items in the cart
foreach ( $cart as $item ) {
    echo $item['product'] . ': $' . $item['price'] . "\n";
}