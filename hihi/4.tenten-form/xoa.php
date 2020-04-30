<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Title</title>
</head>
<body>
<?php
require_once "connection.php";

if(isset($_GET["id"])) {
    //lấy id được gửi qua quanly.php
    $id = $_GET["id"];
    //thực thi câu lệnh sql xóa user
    $sql = "delete from users where id=$id";
    $query = mysqli_query($connection,$sql);
    //chuyển hướng trang web về quanly.php
    header("Location:quanly.php");
}
?>
</body>
</html>