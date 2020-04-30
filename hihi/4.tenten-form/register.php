
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
require_once ("connection.php");
    if(isset($_POST["btn_submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        //kiểm tra điều kiện đối với các field không được rỗng
        if($username=="" || $password=="" || $name=="" || $email=="") {
            echo "nhập đầy đủ đê";
        } else {
            $sql = "insert into users(
                username,
                password,
                name,
                email
            ) values (
            '$username',
            '$password',
            '$name',
            '$email'
            )";

            //thực thi câu $sql với biến conn lấy từ file connection
            mysqli_query($connection,$sql);
            echo "đăng ký thành công rồi lè";
        }
    }
?>
    <form action="register.php" method="post">
        <h1>Form Đăng Ký</h1>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Nhập username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Nhập password">
        </div>
        <div class="form-group">
            <label>Họ tên</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Nhập email">
        </div>
        <button type="submit" name="btn_submit" class="btn btn-primary" value="Dangky">Submit</button>
    </form>
</body>
</html>