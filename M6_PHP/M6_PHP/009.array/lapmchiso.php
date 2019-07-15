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
print_r($arr1);
echo "</pre>";

/**
 * cú pháp rút gọn
 */
foreach ($arr1 as $value) {
    echo "<br>" .$value;
}

/**
 * cú pháp lặp mảng đầy đủ
 */

foreach ($arr1 as $key => $value) {
    echo "<br>" .$key . "-" . $value;

}

/**
 * cú pháp ít dùng
 */
foreach ($arr1 as $key => $value) {
    echo "<br>" .$key . "-" . $arr1[$key];
}
?>
</body>
</html>