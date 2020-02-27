<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .content {
            margin:20px auto;
            width: 300px;
            border: 1px solid green;
            padding:10px;
        }
        .content h1 {
            text-align: center;
            color: red;
        }
        .content div.anh {
            margin: 20px 0;
            text-align: center;
        }
        .content div.anh img {
            margin: 10px 0;

        }
        .content div.anh a{
            display: inline-block;
            background-color: #ff5d1f;
            padding: 3px 10px;
            text-decoration: none;
            color: white;
        }
        .content div.anh a:hover{
            color: #0E0EFF;
        }
    </style>
</head>
<body>

<div class="content">
    <h1>do while</h1>

    <div class="anh">

        <?php
            $i=1;
            do {
                echo '<img src="images/anh-0'.$i.'.jpg"/>';
                $flagShow = 0;
                if(isset($_GET["show"])) {
                    $flagShow = $_GET["show"];
                    $i++;
                }
            }while($i<=4 && $flagShow==1);
        ?>


        <a href="baitap.php?show=1">Show All</a>
        <a href="baitap.php?show=0">Show Demo</a>
    </div>


</div>
</body>
</html>