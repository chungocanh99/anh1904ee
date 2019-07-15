<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Mảng kết hợp là mảng mà key là 1 chuỗi và số hoặc chuỗi
</pre>
<?php
$arr2 = array();
$arr2["hn"]="hà nội";
$arr2["sl"]="sơn la";
$arr2["nt"]="nha trang";
$arr2["dn1"]="đà nẵng";
echo "<pre>";
print_r($arr2["hn"]);
echo "</pre>";

/**
 * truy xuất vào mảng kết hợp
 */
echo "<br>" .$arr2["hn"];
echo "<br>" .$arr2["sl"];
echo "<br>" .$arr2["nt"];
echo "<br>" .$arr2["dn1"];

// thay đổi giá trị của phần tử
$arr2["sl"]="sơn la có tao nè";
echo "<pre>";
print_r($arr2["sl"]);
echo "</pre>";
?>
</body>
</html>