<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    mảng là 1 kiểu dữ liệu trong php chứa nhiều giá trị
    có 3 kiểu mảng:
    mảng chỉ số
    mảng kết hợp
    mảng đa chiều
</pre>

<?php
$qua=["chanh","cam","dao"];

//in ra cấu trúc mảng
echo "<pre>";
print_r($qua);
echo "</pre>";

//truy xuất vào từng phần tử của mảng
echo "<br>" . $qua[0];

//đếm số phần tử trong mảng
echo "<br> Số phần tử trong mảng là: " . count($qua);

//kiểm tra 1 biến có phải là mảng k
$checkArray = is_array($qua);
echo "<br> in ra: ";
var_dump($checkArray);

//kiểm tra mảng có rỗng hay k
$checkEmpty = empty($qua);
echo "<br> empty() trả về true nếu mảng rỗng";
var_dump($checkEmpty);

foreach ($qua as $key_qua => $value_qua) {
    echo "<br> Key: " . $key_qua;
    echo "<br> Value: " . $value_qua;
}

?>
</body>
</html>