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
<div class="container">
    <div class="row">
        <?php
        require_once("connection.php");

        if (isset($_POST["save"])) {
            $id_user = $_POST["id_user"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $level = $_POST["level"];
            $sql = "update users set name = '$name', email = '$email', level = '$level' where id = $id_user";
            mysqli_query($connection, $sql);
        }

        $id = "";
        $name = "";
        $email = "";
        $level = "";
        if (isset($_GET["id"])) {
            //thực hiện việc lấy thông tin user
            $id = $_GET["id"];
            $sql = "select * from users where id = $id";
            $query = mysqli_query($connection, $sql);
            while ( $data = mysqli_fetch_array($query) ) {
                $name = $data["name"];
                $email = $data["email"];
                $level = $data["level"];
            }
        }
        ?>
        <h3> Thông tin thành viên</h3>
        <form method="POST" name="fr_update">
            <table class="table">
                <caption>Danh sách thành viên đã đăng ký</caption>
                <input type="hidden" name="id_user" value="<?php echo $id; ?>">
                <tr><td>Họ tên : </td><td><input type="text" name="name" value="<?php echo $name; ?>" /></td></tr>
                <tr><td>Địa chỉ email : </td><td><input type="text" name="email" value="<?php echo $email; ?>"/></td></tr>
                <tr>
                    <td>Cấp độ : </td>
                    <td>
                        <select name="level">
                            <option value="1" <?php echo ($level == 1)?"selected":""; ?>>Administrator</option>
                            <option value="2" <?php echo ($level == 2)?"selected":""; ?>>Member</option>
                        </select>
                    </td>
                </tr>
                <tr><td colspan="2"><input type="submit" name="save" value="Lưu thông tin"></td></tr>
            </table>
        </form>
    </div>

</div><!-- /.container -->


</body>
</html>