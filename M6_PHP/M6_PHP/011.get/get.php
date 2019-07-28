<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    $_GET trong php có 2 tác dụng:
    1-lấy những tham số từ URL xuống
    2- lấy những dữ liệu post đi từ form có method của form là get
    =>
    1- www.abc.com?name=chungocanh&email=chungocanh25599@gmail.com&age=20
    những cái giá trị sau dấu ? trên URL được gọi là query string
    có thể lấy giá trị của những tham số từ URL xuống
    URL:
    http://localhost/anh1904e/M6_PHP/M6_PHP/011.get/get.php?name=chungocanh&email=chungocanh25599@gmail.com&age=20
    ===Nếu URL không có giá trị đằng sau ? hoặc không có ? thì $_GET là 1 mảng rỗng
</pre>
<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

/**
 * lấy từng giá trị trong $_GET thì sẽ lấy giá trị như trong 1 mảng
 * $_GET là 1 mảng
 */
if(isset($_GET["name"])) {
    echo "<br>" . $_GET["name"];
}
?>

</body>
</html>
