<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Các hàm xử lý mảng trong php
    1. đếm: count()
    2. kiểm tra 1 biến có phải 1 mảng không: is_array
    3. kiểm tra xem 1 mảng có rỗng không: empty

</pre>
<?php
$arr1=array("anh","huong","tuyet","thao");
/*
 * đếm số phần tử của mảng
 */
echo "<br> hàm count: " .count($arr1);
/**
 * kiểm tra 1 biến có phải 1 mảng hay không
 */
echo "<br> hàm is_array";
var_dump(is_array($arr1));

/**
 * kiểm tra xem 1 mảng có rỗng không
 * empty($aray1) trả về true nếu mảng rỗng và trả về false nếu mảng không rỗng
 * !empty($array1) trả về true nếu mảng có dữ liệu và trả về fale nếu mảng không có dữ liệu
 */
echo "<br>";
var_dump(!empty($arr1));
?>
</body>
</html>