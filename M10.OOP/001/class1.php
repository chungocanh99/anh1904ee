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

    public $name;

    public $age;

    public $location;

    public $point;
}
//khởi tạo đối tượng từ class
$anh = new Student();

/**
 * muốn in ra cấu trúc của 1 đối tượng
 */
echo "<pre>";
print_r($anh);
echo "</pre>";