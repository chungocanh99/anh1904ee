<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    php có 3 phạm vi biến:
    - local
    - global
    - static
    biến gọi bên ngoài 1 hàm có phạm vi global chỉ có thể được truy cập bên ngoài 1 hàm
        biến gọi trong vòng 1 hàm có phạm vi local chỉ có thể truy cập chức năng trong đó

</pre>

<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>



</body>
</html>