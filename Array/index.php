<?php include "inc/header.php"; ?>







<?php

/* Mang thuong  */
// $car = array("Suzuki","Yamaha","Honda");

// echo $car[0]."<br/>";

// $length = count($car);
// for($i = 0; $i<$length; $i++){
//     echo $car[$i]."<br/>";
// }

/* Mang key - value */

$age = array("Thuan"=>"23","Hoang"=>"24","Quynh"=>"24");

foreach ($age as $key=>$value){
    echo "Name = ".$key.", Age: = ".$value;
    echo "<br/>";
}

?>









<?php include "inc/footer.php"; ?>