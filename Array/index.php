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

// $array1 = array(
//     "php",
//     "js",
//     "css",
//     "python"
// );
// $array2 = array(
//     "php",
//     "js",
//     "javascript",
//     "html"
// );
// $result = array_diff($array1, $array2);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

/* Hàm array_diff_assoc() trong php có tác dụng lấy ra các phần tử ở mảng thứ nhất 
 * không nằm ở tất cả các mảng còn lại. 
Ví dụ giá trị 'freetuts.net' chỉ có ở mảng B mà không có ở mảng A thì nó được lấy. */

// $array1 = array(
//     'name'      => 'Cường',
//     'website'   => 'freetuts.net',
//     'phone'     => '0979 306 603'
// );

// $array2 = array(
//     'name'      => 'Cường',
//     'website'   => 'https://freetuts.net',
//     'phone'     => '0979 306 603'
// );


// echo "<pre>";
// print_r(array_diff_assoc($array1, $array2));
// echo "</pre>";

/* Hàm array_diff_key() trong php có tác dụng lấy các phần tử không giống nhau ở hai mảng. 
Ví dụ mảng A có 10 phần tử và mảng B có 5 phần tử, trong đó có  3 phần tử giống nhau thì 
kết quả trả về sẽ là danh sách các phần tử nhưng bỏ đi 3 phần tử giống nhau đó. */

// $mang1 = array('freetuts', 'freetuts.net', 'thehalfheart');
// $mang2 = array('freetuts.net', 'thehalfheart');

// echo "<pre>";
// print_r(array_diff_key($mang1, $mang2));
// echo "</pre>";

/* Hàm array_intersect() trong PHP trả về giao điểm của hai mảng. 
Nói cách khác, nó trả về các phần tử giống nhau của hai mảng */

$name1=array("Java","PHP","C++","VBA");
$name2=array("PHP","HTML","CSS","Java");

echo "<pre>";
print_r(array_intersect($name1,$name2));
echo "</pre>";
?>









<?php include "inc/footer.php"; ?>