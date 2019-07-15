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
 * array_pop() gỡ bỏ phần tử cuối mảng
 */
array_pop($colors);
echo "<pre>";
print_r($colors);
echo"</pre>";
?>
</body>
</html>