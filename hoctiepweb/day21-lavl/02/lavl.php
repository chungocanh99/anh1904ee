<?php
//closure chính là hàm ẩn danh nhưng mà có thể sử dụng những biến ngoài
//khi mà mình khai báo hàm ẩn danh

function hello($name) {
    echo "<br> hê lô " . $name;
}

hello("ánh");

$abc = "phiên 1";
$bcd = "phiên 2";

$php = function () use ($abc,$bcd) {
    return "Php" . $abc . $bcd;
};

//gọi hàm ẩn danh: tenHam();
hello($php());