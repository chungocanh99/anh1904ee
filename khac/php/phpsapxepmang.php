<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    sắp xếp mảng:
    sort(): sắp xếp mảng theo thứ tự tăng dần
    rsort(): giảm dần
    trong mảng kết hợp: tăng dần theo giá trị: asort(),arsort()
    trong mảng kết hợp: tăng dần theo key: ksort(),krsort()
</pre>
<?php
$qua=["chanh","dao","quat","tao","le"];
sort($qua);

$dem=count($qua);
for($x=0;$x<$dem;$x++) {
    echo $qua[$x];
    echo"<br>";
}
?>

<hr>
<?php
$qua1=["chanh","dao","quat","tao","le"];
rsort($qua1);

$dem1=count($qua1);
for($x1=0;$x1<$dem1;$x1++) {
    echo $qua1[$x1];
    echo"<br>";
}
?>

<hr>
<?php
$hoa=["hong"=>"112","huong duong"=>"20","loa ken"=>34];
asort($hoa);
foreach ($hoa as $y => $y_value) {
    echo "key=" . $y . ", Value= " . $y_value;
    echo "<br>";
}
?>

<hr>
<?php
$hoa1=["hong"=>"112","occho"=>"20","loa ken"=>34];

ksort($hoa1);
foreach ($hoa1 as $z => $z_value) {
    echo "key=" . $z . ", Value= " . $z_value;
    echo "<br>";
}
?>
</body>
</html>