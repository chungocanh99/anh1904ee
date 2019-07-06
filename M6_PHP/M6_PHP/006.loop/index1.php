<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    BT1 : dùng vòng lặp for in ra các số từ 1 đến 20 nhưng chỉ in số lẻ
</pre>

<?php
for($i=0;$i<=20;$i++){
    if($i%2==0){
        echo 'Số chẵn là ' . $i . '<br/>';
    }
}
for($j=0;$j<=20;$j++){
    if($j%2!=0){
        echo 'Số lẻ là ' . $j . '<br/>';
    }
}
?>
</body>
</html>