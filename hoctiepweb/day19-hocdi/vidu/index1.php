<?php
//bài toán thực tế
/*
 * tạo ra 3 class nhìn kia kìa
 */
//nạp file vào trong file hiện tại
include_once "guest.php";
include_once "mod.php";
include_once "admin.php";


//khởi tạo khách
$guest1 = new Guest();
$guest1->name = "tao";
$guest1->age = "20";
$guest1->join = "25/05/2020";

//gọi phương thức
$guest1->viewArticle(); // đọc bài viết
$guest1->postComment();

echo "<pre>";
print_r($guest1);
echo "</pre>";

//khởi tạo mod
$mod1 = new Mod();
$mod1->name = "mod 1";
$mod1->viewArticle();

echo "<pre>";
print_r($mod1);
echo "</pre>";

$admin1 = new Admin();
echo "<pre>";
print_r($admin1);
echo "</pre>";
$admin1->viewArticle();

/*
 * kết luật: khi 1 class con kế thừa class
 * thì class con có thể sử dụng tất cả các thuộc tính và phương thức public
 * của class cha
 */



