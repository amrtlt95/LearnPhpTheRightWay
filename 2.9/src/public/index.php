<?php

use App\WashingMachine;
use App\Appliance;
use App\DishWasher;

require_once __DIR__ . '/../vendor/autoload.php';


// $appliance1 = new Appliance("GenericBrand");
// $appliance1->turnOn();
// $appliance1->turnOff();


// // Step 2: Create WashingMachine instance
// $wm = new WashingMachine("LG", 7); // 7kg load
// $wm->turnOn();       // Should call parent + any overridden behavior
// $wm->wash();         // Should print washing message
// $wm->turnOff();
// $wm->wash();         // Should prompt to turn on first


// // Step 3 verification
// $dw = new DishWasher("Serie 6", "Bosch", "Eco");
// $dw->turnOn();
// $dw->washDishes();  // Expect: Washing dishes in Eco mode.
// $dw->turnOff();
// $dw->washDishes();  // Expect: Turn on first!



// // Step 4: Visibility challenge
// $dw = new DishWasher("Serie 6", "Bosch", "Eco");
// $dw->turnOn();
// $dw->washDishes(); // Should print washing message

// echo $dw->getBrand() . "\n"; // Accessing brand via public method

// // Try to access $brand directly (will fail if private)
// // echo $dw->brand; // Uncommenting this should cause an error



$dw = new DishWasher("Serie 6", "Bosch", "Eco");

// // Turn on the appliance
// $dw->turnOn();          // Expect: Bosch appliance is now ON.

// // Use dishwasher
// $dw->washDishes();      // Expect: Washing dishes in Eco mode.

// // Turn off the appliance
// $dw->turnOff();         // Expect: Bosch appliance is now OFF.

// // Try using dishwasher while off
// $dw->washDishes();      // Expect: Turn on first!

// Direct access from outside the class
// echo $dw->isOn; // ❌ Should cause Fatal error
// // echo $dw->brand; // ❌ Should cause Fatal error
// echo $dw->model; // ❌
// echo $dw->mode;  // ❌

var_dump($dw  instanceof DishWasher); // true
var_dump($dw  instanceof Appliance);   // true
