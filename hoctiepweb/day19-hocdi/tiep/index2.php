<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/22/2020
 * Time: 5:43 PM
 */
class Demo {
    public static $pro1;
    public $pro2;
    public function method1() {
        echo "<br> method1";
        $this->pro2="abc";
    }
    public static function method2() {
        echo "<br> method2";
        //chú ý trong phương thức static không được dùng $this
        //muốn truy cập đến thuộc tính static
        self::$pro1="anh1234";
    }
}
/**
 * gọi đến các thuộc tính và phương thức static mà không cần khởi tạo đối tượng
 * gọi static bằng cách ClassName::PropertyName
 * ClassName::MethodName
 *
 * mục đích chính gọi đến thuộc tính và method nhanh chóng
 * mà không cần khởi tạo đối tượng
 */
Demo::$pro1="abc";
Demo::method2();