<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// cách khai báo mảng kiểu 1
/**
 * áp dụng cho mảng chỉ số
 * mảng chỉ số sẽ tự tạo key khi truyền value của phần tử
 */

$cities=array("hà nội", "sơn la","nha trang","đà nẵng");
echo "<pre>";
print_r($cities);
echo "</pre>";

//cách số 2
/**
 * khai báo key cho mảng chỉ sổ
 */
$cities=array(0=>"hà nội",1=>"sơn la",2=>"nha trang",3=>"đà nẵng");
echo "<pre>";
print_r($cities);
echo "</pre>";

//cách số 3
$cities=array();
$cities[]="hà nội";
$cities[]="sơn la";
$cities[]="nha trang";
$cities[]="đà nẵng";
echo "<pre>";
print_r($cities);
echo "</pre>";

//cách số 4
$cities=array();
$cities[0]="hà nội";
$cities[1]="sơn la";
$cities[2]="nha trang";
$cities[3]="đà nẵng";
echo "<pre>";
print_r($cities);
echo "</pre>";

?>
</body>
</html>