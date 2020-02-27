<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .content {
            margin:20px auto;
            width: 600px;
            border: 1px solid green;
            padding:10px;
            min-height: 200px;
        }
        .content h1 {
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>

<div class="content">
    <h1>do while</h1>
    <?php
        $i=1;
        do {
            echo  $i . "không học đâu" . "<br>";
            $i++;
        }
        while($i<=10);
    ?>


</div>
</body>
</html>