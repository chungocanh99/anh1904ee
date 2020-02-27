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
$guest1->getBank();

echo "<pre>";
print_r($guest1);
echo "</pre>";

//khởi tạo mod
$mod1 = new Mod();
echo $mod1->getTinhtrangInfo();

/*
 * 3 nơi để truy cập
 * bên ngoài class
 * bên trong chính class đó
 * bên trong class kế thừa từ 1 class cha
 *
 * giới hạn public cho thuộc tính và phương thức thì có thể truy cập ở cả 3 nơi trên
 * private chỉ có thể truy cập trong chính class đó
 * protected giống private nhưng có thể truy cập từ các class con
 */


