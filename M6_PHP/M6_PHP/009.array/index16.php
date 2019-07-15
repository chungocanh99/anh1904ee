<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    array_values() chuyển mảng thành 1 mảng tuần tự bằng cách lấy ra tất cả các value trong mảng đó
</pre>
<?php
$arr2=array();
$arr2["hn"]="hà nội";
$arr2["sl"]="sơn la";
$arr2["hy"]="hưng yên";
$arr2["tb"]="thái bình";
echo "<pre>";
print_r($arr2);
echo "</pre>";

$newArray=array_values($arr2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
</body>
</html>