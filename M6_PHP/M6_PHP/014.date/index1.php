<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    timezone là múi giờ
    giờ việt nam múi giờ là: "Asia/Ho_Chi_Minh"
    Link các múi giờ của châu á: https://www.php.net/manual/en/timezones.asia.php
    Link các múi giờ của thế giới : https://www.php.net/manual/en/timezones.php
    Nếu muốn lấy giờ hiện tại chính xác thì cần đặt đúng giờ của zone đó
    ====
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    nếu muốn chuyển múi giờ thì cần thay đổi tham số trong hàm date_default_timezone_set()
    có 2 kiểu lấy giờ trong php:
    kiểu 1 là kiểu cho người đọc
    kiểu 2 là kiểu giờ của linux
</pre>
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "<br> Giờ cho người đọc: " .date("H:i:s d/m/Y");
echo "<br> Giờ của linux (timestamp) : " . time();
?>
</body>
</html>