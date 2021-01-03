<?php include "inc/header.php"; ?>









<?php

class Person
{

    /* public $name = "Le Van Thuan"; */
    public $name;

    /* private $name; */
    public function personName()
    {
        echo "Person name is: " . $this->name;
    }
}

$personOne = new Person();
/* echo $personOne->name; */
$personOne->name = "Le Van Thuan";
$personOne->personName();

?>









<?php include "inc/footer.php"; ?>