<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="webhi";


//tạo 1 kết nối đến csdl
$connection = mysqli_connect($servername,$username,$password,$database);
if(!$connection)
{
    die("không thể kết nối đến csdl");
}
echo "Kết nối đến csdl thành công";
