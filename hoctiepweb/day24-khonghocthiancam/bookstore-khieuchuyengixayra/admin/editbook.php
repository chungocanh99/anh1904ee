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
include_once "../config/connectdb.php";

if(isset($_GET["id"]) && ($_GET["id"] >0)) {
$id=(int)$_GET["id"];

$sqlSelect = "select * from books where id=$id";

$stmt = $conn->prepare($sqlSelect);
$stmt->execute();

//trả lại kết quả
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$all=$stmt->fetchAll();

echo "<pre>";
    print_r($all);
    echo "</pre>";

$user=isset($all[0]) ? $all[0] : 0;
}
else {
echo "<br>Không thấy id đâu cả";
}

if (!isset($user["id"])) {
echo "<br> không thấy bản ghi có id tương ứng"; exit;
}
?>

<div class="container">
    <h1>Tạo mới sách</h1>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $user["id"]?>">
                </div>

                <div class="form-group">
                    <label>tên sách</label>
                    <input type="text" class="form-control" name="book_name" value="<?php echo $user["book_name"]?>">
                </div>

                <div class="form-group">
                    <label>giới thiệu sách</label>
                    <input type="text" class="form-control" name="book_intro" value="<?php echo $user["book_intro"]?>">
                </div>

                <div class="form-group">
                    <label>ảnh đại diện</label>
                    <input type="text" class="form-control" name="book_thumbnail" value="<?php echo $user["book_thumbnail"]?>">
                </div>

                <div class="form-group">
                    <label>ảnh sách</label>
                    <input type="text" class="form-control" name="book_images" value="<?php echo $user["book_images"]?>">
                </div>

                <div class="form-group">
                    <label>giá niêm yết sách</label>
                    <input type="text" class="form-control" name="book_price" value="<?php echo $user["book_price"]?>">
                </div>

                <div class="form-group">
                    <label>giá bán</label>
                    <input type="text" class="form-control" name="book_sell" value="<?php echo $user["book_sell"]?>">
                </div>

                <div class="form-group">
                    <label>tác giả</label>
                    <input type="text" class="form-control" name="book_author" value="<?php echo $user["book_author"]?>">
                </div>

                <div class="form-group">
                    <label>nhà xuất bản</label>
                    <input type="text" class="form-control" name="book_publisher" value="<?php echo $user["book_publisher"]?>">
                </div>

                <div class="form-group">
                    <label>thời gian tạo</label>
                    <input type="text" class="form-control" name="created" value="<?php echo $user["created"]?>">
                </div>

                <div class="form-group">
                    <label>số lần đọc</label>
                    <input type="text" class="form-control" name="book_hit" value="<?php echo $user["book_hit"]?>">
                </div>

                <div class="form-group">
                    <label>số lượt mua</label>
                    <input type="text" class="form-control" name="book_buy" value="<?php echo $user["book_buy"]?>">
                </div>

                <div class="form-group">
                    <label>trạng thái</label>
                    <input type="text" class="form-control" name="book_status" value="<?php echo $user["book_status"]?>">
                </div>

                <div class="form-group">
                    <label>mô tả</label>
                    <input type="text" class="form-control" name="book_desc" value="<?php echo $user["book_desc"]?>">
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật data</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>