<?php
session_start();
require_once "includes/connection.php";
include "includes/permission.php";
include "includes/header.php";
?>
<?php
    if(isset($_POST["btn_submit"])) {
        //lấy thông tin
        $username=$_POST["username"];
        $password=$_POST["password"];
        $fullname=$_POST["fullname"];
        $email=$_POST["email"];
        $permision=$_POST["permision"];
        $is_block =0;
        if(isset($_POST["is_block"])) {
            $is_block=$_POST["is_block"];
        }
        //kiểm tra đầy đủ thông tin
        if($username=="" || $password=="" || $fullname=="" ||$email=="" ||$permision=="" ) {
            echo "nhập đầy đủ thông tin đê";
        }
        else {
            //viết câu thêm thông tin user
            $sql = "insert into users (username,password,fullname,email,permision,is_block,createdate) values ('$username','$password','$fullname','$email','$permision','$is_block',now())";
            //THỰC THI CÂU SQL
            $result = mysqli_query($connection,$sql);
            if(!$result) {
                echo "thằng user này đã tồn tại, vui lòng không trùng username và emai";
            }else {
                header("Location:quanlythanhvien.php");
            }
        }
    }
?>
<form action="themthanhvien.php" method="post">
    <table>
        <tr>
            <td colspan="2">
                <h3>Thêm thành viên user</h3>
            </td>
        </tr>
        <tr>
            <td nowrap="nowrap">Username: </td>
            <td><input type="text" name="username" id="username" value=""> </td>
        </tr>
        <tr>
            <td nowrap="nowrap">Mật khẩu: </td>
            <td><input type="password" name="password" id="password" value=""> </td>
        </tr>
        <tr>
            <td nowrap="nowrap">Họ tên: </td>
            <td><input type="text" name="fullname" id="fullname" value=""> </td>
        </tr>
        <tr>
            <td nowrap="nowrap">Email: </td>
            <td><input type="email" name="email" id="email" value=""> </td>
        </tr>
        <tr>
            <td nowrap="nowrap">Quyền: </td>
            <td>
                <select id="permision" name="permision">
                    <option value="0">Thành viên</option>
                    <option value="1">Admin cấp 1</option>
                    <option value="2">Admin cấp 2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td nowrap="nowrap">Block người dùng: </td>
            <td><input type="checkbox" name="is_block" id="is_block" value="1"> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm thành viên"> </td>
        </tr>
    </table>
</form>

<?php include "includes/footer.php";?>
