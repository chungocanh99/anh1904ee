<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$arr1 = array("hà nội","sơn la","nha trang","đà nẵng");
echo "<pre>";
print_r($arr3);
echo "</pre>";

/**
 * truy xuất vào các phần tử của mảng thông qua key
 */
echo "<br>" .$arr1[0];
echo "<br>" .$arr1[1];
echo "<br>" .$arr1[2];
echo "<br>" .$arr1[3];

/**
 * gán lại value cho 1 phần tử trong mảng
 * thông qua key
 */
$arr1[0]="thủ đô hà nội";
$arr1[1]="sơn la tươi đẹp";
echo "<pre>";
print_r($arr1);
echo "</pre>";

?>
</body>
</html>