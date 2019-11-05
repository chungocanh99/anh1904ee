<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/23/2019
 * Time: 8:03 PM
 */
/**
 * class(lớp)
 * object(đối tượng)
 * instance(thể hiện của 1 class) đối tượng cụ thể
 * class Người
 * đối tượng hay instance là ánh
 */

class Student {
    /**
     * thuộc tính trong hướng đối tượng là tính chất của class đó
     */
    public  $name;

    public $age;

    public $location;

    public $point;

    /**
     * phương thức đầu tiên của class
     * phương thức khởi tạo __construct()
     * phương thức này sẽ chạy ngay khi khởi tạo đối tượng từ class mà k cần gọi trực tiếp
     * Hàm nằm ngoài class
     * Phương thức method nằm trong class
     * method chính là hàm bên trong class
     */

    public function __construct($name_param,$age_param,$location_param)
    {
        // gán tham số truyền vào thuộc tính của class

        /**
         * trong class để gọi đến chính class thì ta dùng từ khóa $this để gọi thuộc tính $this->>tên thuộc tính nhưng tên thuộc tính bỏ $
         */

        $this->name=$name_param;
        $this->age=$age_param;
        $this->location=$location_param;

        /**
         * __METHOD__ là magic method cho ta biết phương thức nào đang đc gọi
         */
        echo "<br> __METHOD__" . __METHOD__;
    }
    /**
     * xây dựng phương thức khác
     */
    public function  printInfo() {
        echo "<br> __METHOD__". __METHOD__;
        echo "<br>Tên sinh viên: " .$this->name;
        echo "<br>tuổi sinh viên: " .$this->age;
        echo "<br>Quê sinh viên: " .$this->location;
    }

    /**
     * phương thức tính điểm trung bình
     * @param $point_arr_param
     * @return bool
     */

    public function caculatePoint($point_arr_param) {
        /**
         * is_array() kiểm tra biến có phải 1 mảng hay k
         * !empty() check k rỗng
         * empty() check rỗng
         * ! toán tử phủ định ngược lại
         */

        if(is_array($point_arr_param) && !empty($point_arr_param)) {
            $count=0;
            $total=0;
            foreach ($point_arr_param as $key => $value) {
                //$total = $total + value;
                $total +=$value;
                $count++;
            }
            $point=$total/$count;
            $this->point=$point;
        }
        return false;
    }
}//kết thúc class

/**
 * khởi tạo đối tượng cụ thể của class
 * sử dụng từ khóa new tên_class()
 */

$anh=new Student("chu ngoc anh",20,"son la");

echo "<br> Gọi đến method printInfo()";
/**
 * gọi 1 phương thức
 */
$anh->printInfo();

/**
 * gọi 1 số thuộc tính bên trong class
 */
echo "<br> In ra tên sinh viên bên ngoài class: " . $anh->name;
echo "<br> In ra tuổi sinh viên bên ngoài class: " . $anh->age;
echo "<br> In ra quê sinh viên bên ngoài class: " . $anh->location;

echo "<br> In ra cấu trúc của class";

/**
 * xem cấu trúc của 1 class sử dụng hàm print_r()
 */

echo "<pre>";
print_r($anh);
echo "</pre>";

// gọi đến phương thức caculatePoint()
$point = array(
    'java'=>1,
    'database'=>2,
    'php'=>3,
    'html'=>4,
    'oop'=>5,
    '.net'=>6
);
//gọi đến phương thức của class
$anh->caculatePoint($point);
echo "<br> Điểm trung bình: ".$anh->point;