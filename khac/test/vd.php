<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$n1 = "";
$n2 = "";
$pt = "";

}
?>

<div class="content">
    <h1> Lấy chòm sao</h1>
    <form action="#" method="post" name="main-form">
        <div class="row">
            <span>Ngày sinh</span>
            <input type="text" name="d" value="<?php echo $day; ?>">
        </div>

        <div class="row">
            <span>Tháng sinh</span>
            <input type="text" name="m" value="<?php echo $pt; ?>">
        </div>



        <div class="row">
            <input type="submit" name="submit" value="Lấy chòm sao">
        </div>

        <div class="row">
            <p>
                <?php
                if($flag==true) {
                    echo "Kết quả: " . " " . $n1 . " " . $pt . " " . $n2 . " = " .$result ;
                } else {
                    echo $result;
                }
                ?>
            </p>
        </div>
    </form>
</div>
</body>
</html>