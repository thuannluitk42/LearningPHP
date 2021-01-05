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
// echo "Mang in hoa";
// $age = array("thuan"=>"23","hoang"=>"24","quynh"=>"24");
// print ("<pre>");
// print_r(array_change_key_case($age,CASE_UPPER));
// print ("</pre>");

/* Chu in thuong */
// echo "Mang in thuong";
// $age2 = array("THUAN"=>"23","HOANG"=>"24","QUYNH"=>"24");
// print ("<pre>");
// print_r(array_change_key_case($age2,CASE_LOWER));
// print ("</pre>");

/* Cú pháp: bool array_combine ( array $keys , array $values )

Trong đó:

$keys là mảng sẽ được chuyển đổi thành key
$values là mảng sẽ được chuyển đổi thành values
Lưu ý: Hai mảng truyền vào phải có tổng số phần tử bằng nhau thì hàm này mới chuyển đổi được.

# Return Valules
Hàm này sẽ trả về mảng đã chuyển đổi nếu trộn thành công và FALSE nếu trộn thất bại */

// $name=array("Thuan","Hoang","Quynh");
// $age=array(23,24,24);

// $combine = array_combine($name, $age);

// print("<pre>");
// print_r($combine);
// print("</pre>");

/* Hàm array_count_values() trong php dùng để đếm số lần trùng lặp giá trị của các phần tử trong mảng. 
Kết quả của nó sẽ trả về một mảng với key chính là giá trị của các phần tử và value chính là 
số lần trùng lặp (xuất hiện). */
// $name=array("Thuan","Hoang","Quynh","Hoang","Quynh","Hoang","Quynh","Hoang","Quynh","Thuan","Hoang","Quynh","Hoang","Quynh","Thuan");

// print("<pre>");
// print_r(array_count_values($name));
// print("</pre>");

/* Hàm array_dift() sẽ so sánh sự khác nhau giữa hai hay nhiều mảng, 
hàm trả về những phần tử tồn tại trong mảng đầu tiên mà không tồn tại trong các mảng tiếp theo. */

$array1 = array(
    "php",
    "js",
    "css",
    "python"
);
$array2 = array(
    "php",
    "js",
    "javascript",
    "html"
);
$result = array_diff($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";


?>









<?php include "inc/footer.php"; ?>