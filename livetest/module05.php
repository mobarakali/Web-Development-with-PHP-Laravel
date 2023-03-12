<?php
/*
Create a PHP class called Car that has three private properties: $make, $model, and $year. 
Define a constructor method to set the values of these properties when a new object is created.
 Also, define six additional methods: 
 get_make(),
  get_model(),
   get_year(),
    set_make(),
     set_model(),
      and set_year().
       The get_ methods should allow us to retrieve the values of the private properties, while the set_ methods should allow us to update them. Finally, define a method called display_info() that echoes out the car's make, model, and year.

Create a Car object with the make, model, and year of a 2015 Toyota Corolla. Call the display_info() method to display the car's information.

Then, use the set_make() and set_model() methods to update the car's make and model to a 2015 Honda Civic. Call the display_info() method again to display the updated car information.
*/


class Car {
    // three private properties: $make, $model, and $year
    private $make;
    private $model;
    private $year;
    
    // Define a constructor method
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    
    // 3 get methodes to retrive value
    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }

    public function get_year() {
        return $this->year;
    }
    // 3 set methods to update value
    public function set_make($make) {
        $this->make = $make;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    // display_info() method to display the car's information.
    public function display_info() {
        echo "Car Make : " . $this->make . "\n";
        echo "Car Model: " . $this->model . "\n";
        echo "Car Year: " . $this->year . "\n";
    }
}

// Create a Car object with the $make, $model, and $year of a '2015' 'Toyota' 'Corolla'.
$my_car = new Car("Toyota", "Corolla", 2015);

// Display the car's information
$my_car->display_info();  
// Output:
// Car Make : Toyota
// Car Model: Corolla
// Car Year: 2005


// Update the car's make and model to a 2015 Honda Civic using set_make() and set_model()
$my_car->set_make("Honda");
$my_car->set_model("Civic");

// Display the updated car information
$my_car->display_info();