<?php
//lambda là 1 hàm không ó tên
//có những hàm chỉ dùng 1 lần duy nhất sinh ra lambda

function tinhchuvihinhtron($r) {
    return $r*2*3.14;
}

function hello($name) {
    echo "<br> à nhoong" . $name;
}

hello("ánh");

//hàm ẩn danh kết thúc bằng dấu ;

$php = function () {
    return "PHP";
};

//khi mà gọi hàm ẩn danh gọi : tenHam();
hello($php());