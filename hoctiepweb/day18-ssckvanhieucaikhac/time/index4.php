<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    chuyển đổi qua lại giữa 2 định dạng thời gian
    - 1 là người đọc: 12:00:00 01/01/2000
    - định dạng 2 là timestamp 946724400

    thực hành strtotime()
</pre>

<?php
$time1 = "12:00:00 01/01/2000";

echo "<br> Thời gian 1: 12:00:00 01/01/2000";

$time2 = strtotime($time1);
echo "<br> demo strtotime: " . $time2;

//chuyển đổi ngược lại dùng date()
echo "<br> chuyển ngược lại xem đúng không: " .date("H:i:s d/m/Y",$time2);

?>
</body>
</html>