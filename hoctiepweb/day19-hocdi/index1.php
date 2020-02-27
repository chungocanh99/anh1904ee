<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/22/2020
 * Time: 3:41 PM
 */
class Xe {
    /**
     * khai báo các thuộc tính bên trong class
     * thuộc tính chỉ ra tính chất đặc điểm cho 1 đối tượng
     * thuộc tính: tên, model, khối lượng, giá, năm sản xuất, nhà sx
     */
    public $name;
    public $model;
    public $weight;
    public $price;
    public $year_publish;
    public $manufacture;

    /**
     *-> khai báo các phương thức bên trong class
     *chỉ ra hành động cụ thể của đối tượng
     * - khởi động
     * - lái xe
     * - dừng xe
     */

    public function start() {
        echo "<br> Khởi động xe";
    }
    public function drive() {
        echo "<br> Lái xe đi";
    }
    public function stop() {
        echo "<br> Dừng xe";
    }
}
//khởi tạo đối tượng từ class bằng từ khóa new
// muốn truy cập đến thuộc tính $tênđốitượng -> tên thuộc tính
//chú ý tên thuộc tính không có $
$wave = new Xe();
$wave->name= "wave tàu";
$wave->model="tàu";
$wave->weight="100kg";
$wave->price="30000000";
$wave->year_publish="2020";
$wave->manufacture="wave honda";

echo "<pre>";
print_r($wave);
echo "</pre>";

//gọi đến 1 phương thức trong class
$wave->drive();