<?php

//tạo chuỗi ngẫu nhiên

function randomString($n) {
    $characters = '0123456789abcdefghijkmlnopkrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i=0;$i<$n;$i++) {
        $index = rand(0,strlen($characters)-1);
        $randomString .=$characters[$index];
    }
    return $randomString;
}