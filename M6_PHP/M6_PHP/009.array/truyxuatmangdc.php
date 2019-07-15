<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
mảng đa chiều là mảng mà phẩn tử trong mảng là 1 mảng
    mảng đa chiều là mảng lồng mảng
</pre>

<?php
$arr3 = array();
$arr3["japan"]=array("name"=>"nhật bản","city"=>array("tokyo"));
$arr3["china"]=array("name"=>"tàu khựa","city"=>array("bắc kinh","thượng hải"));
$arr3["vn"]=array("name"=>"việt nam","city"=>array("hà nội", "hồ chí minh","sơn la"));
echo "<pre>";
print_r($arr3);
echo "</pre>";

echo "<br>" .$arr3["china"]["name"];
echo "<br>" .$arr3["japan"]["name"];
echo "<br>" .$arr3["vn"]["name"];

echo "<br>" .$arr3["vn"]["city"][0];
echo "<br>" .$arr3["vn"]["city"][2];

?>
</body>
</html>