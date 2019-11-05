<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/23/2019
 * Time: 7:23 PM
 */
//khai báo class
class Student {

    /**
     * khai báo các thuộc tính của class
     * thuộc tính chỉ tính chất đặc điểm của class
     *
     */

    public $name = "chu ngoc anh";

    public $age = 20;

    public $location="son la";

    public $point=9;

    /**
     * phương thức
     */
    public function printInfo() {//in thông tin của sv
        echo "<br>" . __METHOD__;
        echo "<br>Tên: " . $this->name;
        echo "<br>Tuổi: " . $this->age;
        echo "<br>Quê: " . $this->location;
        echo "<br>Điểm tổng kết:" . $this->point;
    }
}
//khởi tạo đối tượng từ class
$anh = new Student();

/**
 * muốn in ra cấu trúc của 1 đối tượng
 */

echo "<pre>";
print_r($anh);
echo "</pre>";

// gọi đến 1 method trong class
$anh->printInfo();

