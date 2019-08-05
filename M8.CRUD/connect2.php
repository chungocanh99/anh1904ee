<?php
$servername = "localhost";
$username = "root";
$password = "";
$dataname="db2";

//tạo 1 kết nối đến csdl
$connection = new mysqli($servername,$username,$password,$dataname);
if($connection -> connect_error)
{
    die("không thể kết nối đến csdl");
}
echo "Kết nối đến csdl thành công";
