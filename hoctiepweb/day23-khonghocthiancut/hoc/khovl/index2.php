<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
// Nạp file kết nối CSDL
include_once "connectdb.php";

$sqlSelect = "select * from myguest";

//sử dụng cơ chế prepared statement với các placeeholder(giống như các tham số của các phương thức khi khai báo hàm)
//bind params: gắn giá trị thực vào các placeholder

//đầu tiên là khởi tạo prepared
$stmt = $conn->prepare($sqlSelect);
$stmt->execute();

//trả lại mảng kết quả

//trả về dữ liệu dạng mảng với key là tên của cột trong bảng
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$all= $stmt->fetchAll();

echo "<pre>";
print_r($all);
echo "</pre>";
?>



<div class="container">
    <h1>Quản lý khách hàng</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($all as $k=>$v) {
                ?>
                <tr>
                    <th scope="col"><?php echo $v["id"]?></th>
                    <td><?php echo $v["firstname"]?></td>
                    <td><?php echo $v["lastname"]?></td>
                    <td><?php echo $v["email"]?></td>
                    <td><?php echo $v["thoigian"]?></td>

                     <td><?php echo $v["reg_date"]?></td>

                    <td>
                        <a href="edit.php?id=<?php echo $v["id"] ?>" class="btn btn-warning">Sửa</a>
                        <a href="delete.php?id=<?php echo $v["id"] ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>