<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    thời gian trong php
    1-  thời gian con người có thể đọc được
    2- thời gian tính toán được (timestamp)
</pre>
<?php
//in ra thời gian hiện tại loại đầu tiên mà người đọc được
echo "<br> hàm date: " .date("H:i:s d/m/Y");
//in ra thời gian hiện tại dùng để tính toán timestamp
echo "<br> timestamp: " .time();
?>
</body>
</html>