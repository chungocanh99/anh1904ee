//khởi tạo chức năng session
session_start();
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
 hủy 1 phần tử trong mảng php sử dụng lệnh unset()

</pre>

<?php
$qua= [];
$qua[]="cam";
$qua[]="chanh";
$qua[]="dao";

echo "<pre>";
print_r($qua);
echo "</pre>";

//hủy phần tử có key là 1
unset($qua[1]);
echo "<pre>";
print_r($qua);
echo "</pre>";


?>
</body>
</html>