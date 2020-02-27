//khởi tạo chức năng session
session_start();
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body
<p>hủy 1 session: unset()</p>
<p>hủy toàn bộ session: session_destroy()</p>
<?php
//khởi tạo session
$_SESSION["username"]="anh";
$_SESSION["password"]="123";
$_SESSION["user_role"]="administrator";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//hủy 1 session
unset($_SESSION["password"]);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
</body>
</html>