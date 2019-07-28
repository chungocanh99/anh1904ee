<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    cú pháp:
    mktime(hour,minute,second,month,day,year)
    hàm này sẽ tạo ra time ở dạng linux timestamp

    -> để chuyển thời gian dạng linux về dạng time đọc được thì sẽ sử dụng date("định dạng time","thời gian linux");
</pre>

<?php
$time1 = mktime(12,12,00,1,1,2000);
echo "<br> time1: " .$time1;
$human_time=date("Y-m-d H:i:s",$time1);
echo "<br> chuyển thời gian linux về thời gian đọc được: " . $human_time;

/**
 * hàm strtotime(time,now)
 * chuyển 1 thời gian đọc được về thời gian linux
 */
echo "<br> chuyển thời gian người đọc về lại dạng linux timestamp " .strtotime($human_time);

$time2=
?>
</body>
</html>