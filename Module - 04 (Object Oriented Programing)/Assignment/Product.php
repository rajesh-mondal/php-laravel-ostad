<?php
// Define a Product class
class Product {
    // Properties to store product information
    private $id;
    private $name;
    private $price;

    // Constructor to initialize properties
    public function __construct( $id, $name, $price ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to get the formatted price
    public function getFormattedPrice() {
        return '$' . number_format( $this->price, 2 );
    }

    // Method to show product details
    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: $this->id\n";
        echo "- Name: $this->name\n";
        echo "- Price: " . $this->getFormattedPrice() . "\n";
    }
}

// Create a Product object and display its details
$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails();