<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    truyền tham chiếu và truyền tham trị trong php
</pre>

<?php
function truyenthamtri($i) {
    $i=$i*10;
    echo "<br> giá trị của biến i " . $i;

}
$x=5;
truyenthamtri($x);
echo "<br> giá trị của biến x là $x";
?>
</body>
</html>
