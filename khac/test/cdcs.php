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


    if(isset($_POST["so1"]) && isset($_POST["so2"]) && isset($_POST["pt"])) {
        $n1 = $_POST["so1"];
        $n2 = $_POST["so2"];
        $pt = $_POST["pt"];

        $flag=true;

        if (is_numeric($n1) && is_numeric($n2)) {
            switch ($pt) {
                case "+":
                    $result = $n1 + $n2;
                    break;
                case "-":
                    $result = $n1 - $n2;
                    break;
                case "x":
                case "*":
                    $result = $n1 * $n2;
                    break;
                case ":";
                case "/":
                    $result = $n1 / $n2;
                    break;
                default:
                    $result = $n1 + $n2;
                    $pt = "+";
                    break;
            }


        } else {
            $result = "không thực hiện được";
            $flag=false;
        }
    }
?>

<div class="content">
    <h1>Mô phỏng máy tính bỏ túi</h1>
    <form action="#" method="post" name="main-form">
        <div class="row">
            <span>Số thứ nhất</span>
            <input type="text" name="so1" value="<?php echo $n1; ?>">
        </div>

        <div class="row">
            <span>Phép toán</span>
            <input type="text" name="pt" value="<?php echo $pt; ?>">
        </div>

        <div class="row">
            <span>Số thứ hai</span>
            <input type="text" name="so2" value="<?php echo $n2; ?>">
        </div>

        <div class="row">
            <input type="submit" name="submit" value="xem kết quả">
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