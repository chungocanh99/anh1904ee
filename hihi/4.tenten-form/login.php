<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        form {
            width:400px;
            margin:50px auto;
        }
    </style>
</head>
<body>
<?php
    //gọi file connection.php kìa kìa
require_once ("connection.php");
//kiểm tra nếu người dùng đã ấn nút đăng nhập thì mới xử lý
if(isset($_POST["btn_submit"])) {
    //lấy ra thông tin người dùng
    $username = $_POST["username"];
    $password = $_POST["password"];

    //để tránh sql injection
    //làm sạch tông tin, xóa bỏ các tag html, ký tự đặc biệt

    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);

    if($username == "" || $password =="") {
        echo "nhập đầy đủ đê";
    } else {
        $sql = "select * from users where username='$username' and password ='$password'";
        $query = mysqli_query($connection,$sql);
        $num_rows = mysqli_num_rows($query);
        if($num_rows==0) {
            echo "tên đăng nhập hoặc mật khẩu sai lè rồi";
        } else {
            //tiến hành lưu tên vào sesstion
            $_SESSION["username"] = $username;
            header("Location: index.php");
        }
    }

}
?>
<form action="login.php" method="post">
    <h1>Form Đăng Nhập</h1>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Nhập username">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Nhập password">
    </div>

    <button type="submit" name="btn_submit" class="btn btn-primary" value="Dangnhap">Submit</button>

</form>
</body>
</html>