<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$i = 0;
while ($i <= 10) {
    $j = $i;
    while ($j <= 10) {
        echo "*";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
</body>
</html>