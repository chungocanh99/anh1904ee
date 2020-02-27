<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    xử lý file trong php

    sử dụng hàm fopen() fread() fclose
    r mở 1 file chỉ để đọc. con trỏ bắt đầu từ đầu file
    r+ mở 1 file để đọc và ghi. con trỏ bắt đầu từ đầu flie
</pre>

<?php
$mylife = fopen("demo.txt","r") or die("không thể mở file");
echo fread($mylife,filesize("demo.txt"));
fclose($mylife);
?>

</body>
</html>