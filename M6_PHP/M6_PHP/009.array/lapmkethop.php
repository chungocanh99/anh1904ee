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
$arr2 = array();
$arr2["hn"]="hà nội";
$arr2["sl"]="sơn la";
$arr2["nt"]="nha trang";
$arr2["dn1"]="đà nẵng";
echo "<pre>";
print_r($arr2["hn"]);
echo "</pre>";

foreach ($arr2 as $value) {
    echo "<br>" .$value;
}
foreach ($arr2 as $key => $value) {
    echo "<br>" . $key . "-" .$value;
}
//cú pháp ít dùng
foreach ($arr2 as $key => $value) {
    echo "<br>" .$key . "-" .$arr2[$key];
}
?>
</body>
</html>