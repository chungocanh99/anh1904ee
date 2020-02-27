<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>hàm strlen() trả lại độ dài của chuỗi</p>

<?php
echo strlen("hello anh");
?>

<hr>
<p>đếm số từ trong 1 chuỗi: str_word_count()</p>
<?php
echo str_word_count("pi đẹp trai");
?>

<hr>
<p>đảo ngược 1 chuỗi: strrev()</p>
<?php
echo strrev("anh kute");
?>

<hr>
<p>tìm kiếm vị trí của từ trong chuỗi: strpos()</p>

<?php
echo strpos("helo anh","anh");
?>

<hr>
<p>str_replace(): thay thế từ trong 1 chuỗi</p>
<?php
echo str_replace("anh","pi","anh kute");
?>
</body>
</html>