<?php

class Student {
    public function demo1() {
        echo "demo1";
    }
}

class Student {
    public function demo2() {
        echo "demo2";
    }
}

/*
 * khi 2 thằng class, 2 function trùng tên nhau
 * sẽ xung đột lỗi
 * để giải quyết vấn đề trùng tên
 * người ta sử dụng namespace (không gian tên)
 */

$student = new Student();