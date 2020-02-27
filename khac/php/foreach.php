<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>vòng lặp foreach: lặp mảng

    cấu trúc
    foreach($bien as $key => $value) {
       code
    }

    hoặc:
    nếu không muốn lặp key của mảng
    foreach ($bien as $value) {
       code
    }
</pre>
<?php
//khởi tạo mảng có key tự tăng

$data = [
        "a",
        "b",
        "c",
        "d"
];

//lặp cả key lẫn value của mảng
foreach ($data as $key => $value) {
    echo "in ra key = $key và giá trị = $value" . "<br>";

}

echo "______________________________________________________________<br>";

//lặp mỗi value

foreach ($data as $value){
    echo "đây là giá trị = $value" . "<br>";
}
?>

<hr>
<p>foreach lồng</p>
<?php
$dataa = [0 => 1, 1 => [3 => 4, 5 => 6]];
foreach ($dataa as $val) {
    if (is_array($val)) {
        foreach ($val as $v) {
            echo $v . "<br/>";
        }
    } else
        echo $val . "<br>";
}
?>

<hr>

<?php
$tuoi=["anh"=>"20","pi"=>7];
foreach ($tuoi as $x => $value){
    echo "$x = $value<br>";
}
?>
</body>
</html>