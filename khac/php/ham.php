<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function myanh($a="anh") {
    echo  "helo" ." " . $a;
}
myanh();
?>

<hr>
<p>hàm với câu điều kiện</p>
<?php
function check($number = 0) {
    if($number>10) {
        echo "lớn hơn";
    }else {
        echo "nhỏ hơn hoặc bằng";
    }
}

//check();
//gọi hàm truyền tham số
check(12);
?>

<hr>
<p>hàm với vòng lặp</p>

<p>viết hàm in ra số từ 1 đến n,với n tự do</p>

<?php
function myin($so=0) {
    for ($i=0;$i<$so;$i++) {
        echo $i;
    }
}

//gọi hàm
myin(10);
?>

<hr>

<p>kiểm tra hàm đã tồn tại: function_exits('tên hàm')</p>

<?php
if(!function_exists('myinn')) {
    function myinn($so1 = 0)
    {
        for ($i = 0; $i < $so1; $i++) {
            echo $i;
        }
    }
}
?>
</body>
</html>