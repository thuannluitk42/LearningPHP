<?php include "inc/header.php"; ?>









<?php

// class Person
// {

    /* public $name = "Le Van Thuan"; */
//     public $name;
//     public $id;

    /* private $name; */
    
//     public function __construct()
//     {
//         echo "Constructor Created.<br/>";
//     }

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function personName()
//     {
//         echo "Person name is: " . $this->name;
//     }

//     public function personDetails()
//     {
//         echo "Person name is: {$this->name}";
//     }

//     public function setId($id) {
//         $this->id=$id;
//     }
    
    /**
     * Hàm hủy là hàm tự động gọi sau khi đối tượng bị hủy, nó thường được sử dụng để giải phóng bộ nhớ chương trình
     */
//     public function __destruct(){
//         /*
//          * Hàm empty() trong php dùng để kiểm tra một biến nào đó có giá trị rỗng hoặc chưa được khởi tạo hay không
//          * hàm empty() để validate dữ liệu
//          * 
//          * */
//         if(!empty($this->id)){
//             echo "Saving person";
//         }
//     }
// }

   /*  $personOne = new Person(); */
//         $personOne = new Person("Le Van Thuan");
    /* echo $personOne->name; */
    /* $personOne->name = "Le Van Thuan"; */
    /* $personOne->personName(); */
   /*  $personOne->personDetails(); */
//         $personOne->setId(12);
        /*
         * Hàm unset() sẽ loại bỏ một hoặc nhiều biến được truyền vào. 
         * Hàm unset() cũng có thể được sử dụng để loại bỏ một phần tử xác định trong mảng
         * Nếu một biến toàn cục bị unset() trong một hàm nào đó. biến đó sẽ chỉ bị loại bỏ trong phạm vi của hàm
         * Để xóa biến toàn cục trong hàm sử dụng mảng $GLOBALS
         * */
//         unset($personOne);

        
        // public
        // private
        // protected


        class UserData {
            public $user;
            public $userId;
//             public $age = "23";
//             private  $age = "23";
            protected  $age = "23";
            /*Hang so*/
//             const NAME="Le Van Thuan";
//             public static $age = "23";
            
            public function __construct($user,$userId) {
                $this->user = $user;
                $this->userId = $userId;
                
//                 echo "User name is {$this->$user} and User ID is {$this->$userId}";
            }
            
//             public function __destruct(){
// //                 unset($this->user);
// //                 unset($this->userId);
//                 echo "User name is {$this->$user} and User ID is {$this->$userId}";
//             }
            
            public function display(){
//                 echo "Full name is: ".UserData::NAME;
                echo "User name is {$this->user} and User ID is {$this->userId}";
                echo $this->age."Inside class";
            }

            
//             public static function display(){
//                 echo "Full name is: ".UserData::NAME."<br/>";
//                 echo "Age is: ".self::$age;
//             }
        }
        class Admin extends UserData{
            public $level;
            public function display(){

                echo "User name is {$this->user} and User ID is {$this->userId} and User Level is {$this->level}";
                echo $this->age."In the Sub class";
            }
            
        }

        $user = "Thuan";
        $userId ="42";

        $url = new UserData($user, $userId);
        echo "<br/>";
        $url->display();
//         UserData::display();
        echo "<br/>";
        
        $user = "ThuanK";
        $userId ="98";
        $ad = new Admin($user, $userId);
        $ad->level = "Imposter";
        $ad->display();


?>









<?php include "inc/footer.php"; ?>