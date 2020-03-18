<?php

include_once "connectdb.php";
if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"])) {
    $firstname = $_POST["firstname"];
    $lastname= $_POST["lastname"];
    $email = $_POST["email"];
    $id=$_POST["id"];

    $sql_update = "update myguest set firstname='$firstname',lastname='$lastname',email='$email' where id=$id";

    echo $sql_update;

    $test = $conn->query($sql_update);

    if($test) {
        echo "<br> cập nhật thành công rồi";
    }
    else {
        echo "<br> thất bại rồi";

    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);

    header("Location: index2.php"); exit;
}
?>