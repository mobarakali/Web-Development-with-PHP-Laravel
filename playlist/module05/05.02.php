<?php
// 2 Classes, Objects, Methods and Properties


// class Human{
//     public $name;
//     function sayHi(){
//         echo "Salam \n";
//         echo $this->sayName();
//     }

//     function sayName(){
//         echo "My name is {$this->name}\n";
//     }


// }

// $h1 = new Human();
// $h1 ->name = "Asad";
// $h1 -> sayHi();
// // $h1 -> sayName();

class Human{
    public $name;
    function sayHi(){
        echo "Salam! \n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name}\n\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof! \n";
    }
}

class Cat{
    function sayHi(){
        echo "Meaw! \n";
    }
}

$h1 = new Human();
$h1 -> name = "Asad";
$h1 -> sayHi(); 
// $h1 -> sayName();

$c1 = new Cat();
$c1->sayHi();

$d1 = new Dog();
$d1-> sayHi();