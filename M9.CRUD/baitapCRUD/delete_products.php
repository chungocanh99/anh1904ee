<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
/**
 * nạp file kết nối csdl
 */
include_once "config.php";
/**
 * lấy id từ trên url xuống
 */
$id=(int) $_GET["id"];

var_dump($id);
$sqlSelect = "SELECT * FROM products WHERE id=".$id;

$result =$connection->query($sqlSelect);

$row = $result->fetch_assoc();

echo "<pre>";
print_r($row);
echo "</pre>";
?>

<?php
/**
 * kiểm tra xem dữ liệu có submit đi hay không
 */

if(isset($_POST) && !empty($_POST) &&($_POST["product_id"])) {
    $errors = array();
    if(!isset($_POST["product_id"]) || empty($_POST["product_id"])) {
        $errors[]="ID sản phẩm không hợp lệ";
    }

    if(empty($errors)) {
        $id=(int) $_POST["product_id"];

        $sqlDELETE = "DELETE FROM products WHERE id=$id";
        // thực hiện câu lệnh sql
    echo $sqlDELETE;
    $result = $connection->query($sqlDELETE);
        if ($result == true) {
            echo "<div class='alert alert-success'>
Xóa sản phẩm thành công ! <a href='index1.php'>Trang chủ</a>
</div>";
        } else {
            echo "<div class='alert alert-danger'>
xóa sản phẩm thất bại !
</div>";
        }
    } else {
        /**
         * chuyển mảng lỗi thành chuỗi = hàm implode()
         *
         */
        $errors_string = implode("<br>",$errors);
        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1> Xóa sản phẩm </h1>
            <form name="delete" action="" method="post">

                <input type="hidden" name="product_id" value="<?php echo $row["id"]?>">;

                <div class="form-group">
                    <label>Tên sản phẩm: <?php echo $row["product_title"]?></label>
                </div>
                <button type="submit" class="btn btn-danger">xóa sản phẩm</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
