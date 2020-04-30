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
?>
<div class="container">
    <div class="row">
        <h3> Quản lý thành viên</h3>
        <table class="table">
            <caption>Danh sách thành viên đã đăng ký</caption>
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên đăng nhập</th>
                <th>Họ tên</th>
                <th>Địa chỉ email</th>
                <th>Cấp độ</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $stt = 1 ;
            $sql = "SELECT * FROM users";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            $query = mysqli_query($connection,$sql);
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $stt++ ?></th>
                    <td><?php echo $data["username"]; ?></td>
                    <td><?php echo $data["name"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td>
                        <?php
                        if ($data["level"] == 1) {
                            echo "Administrator";
                        }else{
                            echo "Member";
                        }
                        ?>
                    </td>
                    <td><a href="chinhsua.php?id=<?php echo $data["id"]; ?>">Sửa</a> <a href="xoa.php?id=<?php echo $data["id"]; ?>">Xóa</a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

</div><!-- /.container -->

</body>
</html>