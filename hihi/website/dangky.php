<?php include "includes/header.php"?>
<?php include_once "includes/connection.php"?>

<?php
    if(isset($_POST["btn_submit"]))  {
        //lấy thông tin từ các form bằng phương thức post
        $username = $_POST["username"];
        $password = $_POST["pass"];
        $name = $_POST["name"];
        $email = $_POST["email"];

        //kiểm tra điều kiện
        if($username =="" || $password=="" || $name=="" || $email=="") {
            echo "nhập đầy đủ đê";
        }else {
            //lưu trữ dữ liệu vào db
            $sql = "insert into users(username,password,fullname,email,createdate) values ('$username','$password','$name','$email',now())";
            //thực thi câu sql với biến connection lấy từ file connection.php
            mysqli_query($connection,$sql);
            echo "chúc mừng bạn đã đăng ký thành công";
            header("Location:dangnhap.php");
        }
    }
?>
<form action="dangky.php" method="post">
    <h1>Form Đăng Ký</h1>
    <div class="form-group">
        <label>Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Nhập username">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" id="pass" name="pass" class="form-control" placeholder="Nhập password">
    </div>
    <div class="form-group">
        <label>Họ tên</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Nhập name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Nhập email">
    </div>
    <input type="submit" name="btn_submit" class="btn btn-primary" value="Dang ky">
</form>
<?php include "includes/footer.php"?>