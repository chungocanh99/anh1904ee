<?php

//cách 3: sử dụng PDO để kết nối đến mysql

$servername="localhost";
$username="root";
$password="";
$dbname="ngay02thang03";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connect thành công";
}

catch (PDOException $e)
{
    echo "đm xem lại đi thất bại rồi" . $e->getMessage();
}
//echo "Demo test";