<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    get chiều dài của 1 chuỗi
    strlen() hàm trả về chiều dài của 1 chuỗi
</pre>
<?php
echo strlen("chu ngoc anh");
?>

<pre>
    đếm số từ trong 1 chuỗi
    str_word_count()
</pre>
<?php
echo str_word_count("chu ngoc anh");
?>

<pre>
    đảo ngược 1 chuỗi
    strrev()
</pre>

<?php
echo strrev("chu ngoc anh");
?>

<pre>
    tìm kiếm văn bản cụ thể trong 1 chuỗi
    strpos(): trả về giá trị của từ xuất hiện đầu tiên
</pre>
<?php
    echo strpos("chu ngoc anh","anh");
?>
<pre>
    thay thế văn bản trong 1 string
    str_replace()
</pre>
<?php
    echo str_replace("hi","anh","say hi");
?>
</body>
</html>