<?php include "inc/header.php"; ?>







<?php

$car = array(
    "Suzuki",
    "Yamaha",
    "Honda"
);

echo $car[0]."<br/>";

$length = count($car);
for($i = 0; $i<$length; $i++){
    echo $car[$i]."<br/>";
}


?>









<?php include "inc/footer.php"; ?>