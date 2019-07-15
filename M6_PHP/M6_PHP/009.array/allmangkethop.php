<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    mảng kết hợp là mảng mà key là 1 chuỗi và số hoặc chuỗi
</pre>
<?php
//cách 1
$arr2=array();
$arr2["hn"]="hà nội";
$arr2["sl"]="sơn la";
$arr2["nt"]="nha trang";
$arr2["dn1"]="đà nẵng";

//cách 2
$arr2=array("hn"=>"hà nội","sl"=>"sơn la","nt"=>"nha trang","dn1"=>"đà nẵng");

echo "<pre>";
print_r($arr2);
echo "</pre>";
?>
</body>
</html>