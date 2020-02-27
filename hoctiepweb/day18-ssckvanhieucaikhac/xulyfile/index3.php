<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    tạo và ghi nội dung vào 1 file trong php
</pre>

<?php
$mylife = fopen("write.txt","w");
$content = "
    Dòng số 1
    Dòng số 2
    Dòng số 3
";

fwrite($mylife,$content);
fclose($mylife);
?>

</body>
</html>