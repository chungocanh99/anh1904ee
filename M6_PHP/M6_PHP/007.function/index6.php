<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    truyền tham chiếu và truyền tham trị trong php
    truyền tham trị đơn giản là truyền giá trị cho tham số
    truyền tham chiếu có đặc điểm là khi khai báo tham số cho hàm trước nên tham số sẽ đặt 1 dấu & trước tên biến
    và sau khi tham chiếu biến truyền cho tham số
    hiểu đơn giản sẽ tham chiếu đến cùng ô nhớ với tham số
    dẫn tới là khi tham số thay đổi thì biến truyền cho tham số cũng sẽ bị thay đổi
</pre>

<?php
function truyenthamchieu(&$i) {
    $i=$i*10;
    echo "<br> giá trị của biến i " . $i;

}
$x=5;
truyenthamchieu($x);
echo "<br> giá trị của biến x là $x";
?>
</body>
</html>
