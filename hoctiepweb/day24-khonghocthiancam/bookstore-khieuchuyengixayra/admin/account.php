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
    <h1>Quản lý admin</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"># </th>
                    <th scope="col">username </th>
                    <th scope="col">avatar </th>
                    <th scope="col">useremail </th>
                    <th scope="col">created </th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($all as $k=>$v) { ?>
                <tr>
                    <th scope="row"><?php echo $v["id"]?></th>
                    <td><?php echo $v["username"]?></td>
                    <td><?php echo $v["avatar"]?></td>
                    <td><?php echo $v["useremail"]?></td>
                    <td><?php echo $v["created"]?></td>


                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>