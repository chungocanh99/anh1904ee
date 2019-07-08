<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    mảng là gì? mảng là kiểu dữ liệu trong PHP lưu trữ được nhiều giá trị
    trong php có 3  kiểu mảng:
    1- mảng chỉ số
    2- mảng kết hợp
    3- mảng đa chiều ( mảng lồng mảng)
    trong mảng gồm nhiều phần từ
    trong mảng 2 khái niệm cần nắm được
    key: là chỉ số của các phần tử trong mảng
    value: giá trị của phần tử trong mảng
    KHÔNG ECHO ĐƯỢC MẢNG
    phản tử trong mảng bao gồm cả key và value là 1 cặ

    mảng chỉ số là mảng mà có các key là các số
    chú ý mặc định key trong mảng bắt đầu bằng 0

</pre>

<?php
$arr1 = array("hà nội","sơn la","nha trang","đà nẵng");
echo "<pre>";
print_r($arr1);
echo "</pre>";
?>
</body>
</html>