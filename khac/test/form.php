<?php

//echo $_POST["un"] . "<br>";
//echo $_POST["pw"];

$userName=$_POST["username"];
$password=$_POST["pw"];

$result=($userName == "anh" && $password == "123") ? "Đăng nhập thành công" : "Đăng nhập thất bại";

echo $result;
?>