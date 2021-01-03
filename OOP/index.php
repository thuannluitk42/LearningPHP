<?php include "inc/header.php"; ?>









<?php

class Person
{

    /* public $name = "Le Van Thuan"; */
    public $name;

    /* private $name; */
    
//     public function __construct()
//     {
//         echo "Constructor Created.<br/>";
//     }

    public function __construct($name)
    {
        $this->name = $name;
    }

//     public function personName()
//     {
//         echo "Person name is: " . $this->name;
//     }

    public function personDetails()
    {
        echo "Person name is: {$this->name}";
    }
}

   /*  $personOne = new Person(); */
        $personOne = new Person("Le Van Thuan");
    /* echo $personOne->name; */
    /* $personOne->name = "Le Van Thuan"; */
    /* $personOne->personName(); */
    $personOne->personDetails();

?>









<?php include "inc/footer.php"; ?>