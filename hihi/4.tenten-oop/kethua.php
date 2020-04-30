<?php
class cha {
    public  $mat = "đen";
    public $da = "vang";

    function __construct()
    {
        echo "đây là lớp cha";
        echo "<br>";
    }
    function run() {
        echo "cha chạy xa";
    }

}
class con extends cha {
    function __construct()
    {
        echo "đây là thằng con kế thừa thằng cha";
        echo "overide là nạp chồng, ghi đè thuộc tính, trong lớp con chỉ cần đặt tên phương thức và 
        thuộc tính trùng với lớp cha là sẽ ghi đè được lớp cha";
        echo "để thằng cha khỏi bị ghi đè dùng từ khóa parent + ::";

    }
    function run() {
        parent::run();
        echo "con chạy ngắn";
    }

}
$con = new con;
$con->run();
//echo "thằng con có mắt giống thằng cha".$con->mat;
?>