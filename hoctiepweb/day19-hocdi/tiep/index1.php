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
    }
    public static function method2() {
        echo "<br> method2";
    }
}

$demo1 = new Demo();
$demo1->pro2="abc";
$demo1->method1();