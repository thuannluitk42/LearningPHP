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

// ;

// foreach ($age as $key=>$value){
//     echo "Name = ".$key.", Age: = ".$value;
//     echo "<br/>";
// }$age = array("Thuan"=>"23","Hoang"=>"24","Quynh"=>"24")

/* Mang 2 chieu: chua nhieu mang 1 chieu ben trong */

// $car = array(
    
//     array("Ludo","10","20"),
//     array("Kanziro","30","40"),
//     array("Shoju","50","60")
// );

// echo $car[0][0]."<br/>";
// echo $car[1][0];

/* Chu in hoa */
echo "Mang in hoa";
$age = array("thuan"=>"23","hoang"=>"24","quynh"=>"24");
print ("<pre>");
print_r(array_change_key_case($age,CASE_UPPER));
print ("</pre>");

/* Chu in thuong */
echo "Mang in thuong";
$age2 = array("THUAN"=>"23","HOANG"=>"24","QUYNH"=>"24");
print ("<pre>");
print_r(array_change_key_case($age2,CASE_LOWER));
print ("</pre>");

?>









<?php include "inc/footer.php"; ?>