//khởi tạo chức năng session
session_start();
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    session trong php:
    1 session là cách để lưu trữ thông tin trong biến mà được sử dụng
    trên toàn bộ các trang trên cùng 1 trang web
    thông tin được lưu trữ trên session được lưu trữ trên server

    ứng dụng của session:
    1- làm giỏ hàng trong php để lưu trữ các sản phẩm mà khách hàng muốn mua
    2- làm chức năng đăng nhập và đăng xuất trong php

</pre>

<?php
//khởi tạo session
$_SESSION["username"]="anh";
$_SESSION["password"]="123";
$_SESSION["user_role"]="administrator";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//in ra 1 session cụ thể
echo "<br>" . $_SESSION["username"];

//thay đổi giá trị lưu trữ trong 1 session
$_SESSION["username"] = "pi";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
</body>
</html>