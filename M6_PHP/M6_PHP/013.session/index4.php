<?php
//bắt buộc phải khởi tạo session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>truy cập vào từng session</h1>

<?php
//$_SESSION là 1 mảng
$_SESSION["user_name"]="anh";
$_SESSION["user_email"]="anhhihi@gmail.com";

$location ="sơn la";
$_SESSION["user_location"]=$location;
//xem tất cả session đang hoạt động
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

<div>
    <?php
    //kiểm tra 1 session có tồn tại không
    //
    if(isset($_SESSION["user_name"])) :
    ?>
    <p>username là: <?php echo $_SESSION["user_name"]?></p>
    <?php endif;?>

    <?php if(isset($_SESSION["user_email"])) : ?>
    <p>user_email là: <?php echo $_SESSION["user_email"]?></p>
    <?php endif;?>

    <?php if(isset($_SESSION["user_location"])) : ?>
        <p>user_location là: <?php echo $_SESSION["user_location"]?></p>
    <?php endif;?>

    
</div>
</body>
</html>