<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Sắp xếp mảng theo thứ tự tăng dần: sort()
</pre>
<?php
$names=array("anh","huong","tuyet");
sort($names);
$clength = count($names);
for($x = 0; $x < $clength; $x++) {
    echo $names[$x];
    echo "<br>";
}
?>

<?php
$numbers=array(8,9,1,3,4,6,2);
sort($numbers);
$arrlength=count($numbers);
for($y=0;$y<$arrlength;$y++) {
    echo $numbers[$y];
    echo "<br>";
}
?>

<pre>
    mảng giảm dần theo thứ tự abc: rsort()
</pre>
<?php
$names=array("anh","huong","tuyet");
rsort($names);
$clength = count($names);
for($x = 0; $x < $clength; $x++) {
    echo $names[$x];
    echo "<br>";
}
?>

<pre>
    sắp xếp mảng tăng dần theo thứ tự: asort() -> theo value
    // tăng dần theo key: ksort()
    // mảng giảm dần, theo value: arsort()
    // mảng giảm dần, theo key: krsort()
</pre>
<?php
$age=array("anh"=>"20","huong"=>"19","tuyet"=>"25");
asort($age);
foreach ($age as $x=>$x_value) {
    echo "Key=" .$x . ", Value=" .$x_value;
    echo "<br>";
}
?>
</body>
</html>