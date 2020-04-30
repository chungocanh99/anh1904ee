<?php
session_start();
//tiến hành ktra xe người dùng đã đăng nhập hay chưa
//nếu chưa bắt nó ra đăng nhập lại

if(!isset($_SESSION["username"])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Hê lô! Bạn có username là <?php echo $_SESSION["username"]; ?> đã đăng nhập thành công rồi lè</h2>

</body>
</html>