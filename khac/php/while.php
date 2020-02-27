<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>vòng lặp while:
    đầu tiên là tạo biến đếm vòng lặp và thiết lập giá trị cho nó,
    rồi đến vòng lặp while(tạo điều kiện cho nó),
    trong vòng lặp thì in ra màn hình câu gì đấy,
    và tăng giá trị cho biến
</p>
<?php
$x=2;
while($x<10) {
    echo "số thứ: $x <br>";
    $x++;
}
?>

<hr>

<p> vòng lặp dowhile:
    đầu tiên tạo biến và thiết lập giá trị,
    tiếp là vòng lặp dowhile,
    trong đó in ra câu gì đấy và tăng biến;
    và bên ngoài là điều kiện của while
</p>

<?php
$y=10;
do {
    echo "số thứ: $y <br>";
    $y++;
}while($y<20);
?>

<hr>
<p>vòng lặp for: tự biết</p>

<?php
for ($a=0;$a<10;$a++) {
    echo "số thứ: $a <br>";
}
?>

<hr>

<p>vòng lặp dowhile lồng nhau</p>

<?php
$i=0;
while($i<=10) {
    $j=$i;
    while($j<=10) {
        echo "*";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
</body>
</html>