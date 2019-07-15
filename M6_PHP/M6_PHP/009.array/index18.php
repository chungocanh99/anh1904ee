<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$colors=array("xanh lá cây","vàng","xanh nước biển","đen");
echo "<pre>";
print_r($colors);
echo"</pre>";

/**
 * array_push() thêm 1 phần tử vào cuối mảng
 */
array_push($colors,"trắng");
echo "<pre>";
print_r($colors);
echo"</pre>";
?>
</body>
</html>