<?php
include_once "connectdb.php";

if(isset($_POST["id"])) {
    $id =$_POST["id"];

    $sql = "delete from myguest where id=$id";

    echo $sql;

    $test = $conn->query($sql);

    if($test) {
        echo "<br> thành công rồi huhu";
    }
    else {
        echo "<br> thất bại rồi";
    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);

    header("Location:index2.php");exit;
}
?>