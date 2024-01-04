<?php
include 'autoloader.php';
use app\Classes\Owner;
use app\Classes\LuxuryApartment;
use app\Classes\StandardApartment;

// Instantiate apartment objects
$standardApartment = new StandardApartment( "501", 1800, 2 );
$luxuryApartment = new LuxuryApartment( "502", 3000, 3, ["Swimming Pool", "Gym", "Parking"] );

// Set balcony for a standard apartment
$standardApartment->setBalcony( true );
$standardApartment->calculateRent();

// Instantiate owner objects
$owner1 = new Owner( "Robin", $standardApartment );
$owner2 = new Owner( "Shahrukh", $luxuryApartment );

// Display apartment details
echo "Standard Apartment Details:\n";
$standardApartment->displayApartmentDetails();
echo PHP_EOL;

echo "Luxury Apartment Details:\n";
$luxuryApartment->displayApartmentDetails();
echo "Amenities: " . $luxuryApartment->getAmenities() . "\n\n";

// Display owner details
echo "Owner Details:\n";
$owner1->displayOwnerDetails();
$owner2->displayOwnerDetails();