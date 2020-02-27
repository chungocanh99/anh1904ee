<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>khai báo hằng: define()</p>
<?php
define("anh","that la kute",true);
echo anh;
?>

<hr>
<p>mảng hằng số</p>
<?php
define("xe", [
    "bmw",
    "honda",
    "wave"
]);

echo xe[2];
?>

<hr>

<p>1 hằng gọi trong 1 hàm</p>

<?php
define("pi","rat la kute =))");
function mypi() {
    echo pi;
}

mypi();
?>
</body>
</html>