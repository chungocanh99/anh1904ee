<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    đếm số phần tử của mảng: count()
</p>
<?php
$xe = array("dream","wave","bmw");
echo $xe[2] ."<br>";
echo "số phần tử trong mảng là" . count($xe);
?>

<hr>
<p>in ra 1 mảng chỉ số với vòng for</p>
<?php
$qua=["dao","cam","chanh"];
$arr = count($qua);

for ($x=0;$x<$arr;$x++) {
    echo $qua[$x];
    echo "<br>";
}
?>

<hr>

<p>in ra mảng kết hợp với vòng foreach</p>

<?php
$hoa=["hong"=>"12","huong duong"=>"20","loa ken"=>34];

foreach ($hoa as $y => $y_value) {
    echo "key=" . $y . ", Value= " . $y_value;
    echo "<br>";
}
?>

<hr>

<p>in ra mảng đa chiều</p>
<?php
$city = array (
    array("hà nội",01,"sơn la"),
    array("đà nẵng",02,"khánh hòa"),
    array("hồ chí minh",03,"cần thơ")
);

for ($row = 0; $row <3 ; $row++) {
    echo "<p><b>Miền $row </b></p>";
    echo "<ul>";
    for ($col=0; $col < 3;$col++) {
        echo "<li>".$city[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>