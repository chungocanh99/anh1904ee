<?php session_start();
?>
<?php
    //đầu tiên nhớ là gọi đến connection
include_once "includes/connection.php";
//sau đó kiểm tra xem nếu người dùng đã ấn vào thằng đăng nhập thì mới xử lý
if(isset($_POST["btn_submit"])) {
    //lấy thông tin người dùng
    $username = $_POST["username"];
    $password = $_POST["password"];

    //làm sạch thông tin tránh sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);

    if($username =="" || $password =="") {
        echo "nhập đầy đủ vào đê";
    }else {
        $sql = "select * from users where username='$username' and password='$password'";
        echo $sql;
        $query = mysqli_query($connection,$sql);
        $num_rows = mysqli_num_rows($query);
        if($num_rows==0) {
            echo "tên đăng nhập hoặc mật khẩu không đúng";
        }else {
            //lấy ra thông tin người dùng và lưu vào session
            while($data = mysqli_fetch_array($query)) {
                $_SESSION["user_id"] = $data["id"];
                $_SESSION["username"] = $data["username"];
                $_SESSION["email"] = $data["email"];
                $_SESSION["fullname"] = $data["fullname"];
                $_SESSION["is_block"] = $data["is_block"];
                $_SESSION["permision"] = $data["permision"];
            }
            //thực thi hành động sau khi lưu thông tin vào session
            header("Location:index.php");
        }
    }
}
?>
<?php include "includes/header.php"?>
<form method="post" action="dangnhap.php">
    <fieldset>
        <legend>Đăng nhập</legend>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" size="30"> </td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="30"> </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="btn_submit" value="Dang nhap"> </td>
            </tr>

        </table>
    </fieldset>
</form>
<?php include "includes/footer.php"?>
