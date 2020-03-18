<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php
// Nạp file kết nối CSDL
include_once "../config/connectdb.php";

$sqlSelect = "select * from users";

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
    <h1>Đăng nhập admin</h1>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>


            </form>
            <?php
            header("Location:account.php");exit();
            ?>
        </div>
    </div>
</div>
</body>
</html>