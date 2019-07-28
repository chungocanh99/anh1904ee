<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    cookie được sử dụng để nhận diện người dùng
    cookie là file nhỏ được server nhúng vào máy tính của người dùng
    mỗi lần máy tính đó gửi request đến server nó cũng sẽ gửi cookie đến
    với php bạn có thể tạo và lấy giá trị của cookie
    để tạo mới cookie bạn sử dụng hàm setcookie()
    cú pháp:
    setcookie(name, value, expire, path, domain, secure, httponly);
    chỉ có tham số name đầu tiên là bắt buộc phải truyền vào
    còn các tham số sau đó như value, expire, path,... có thể truyền hoặc không
lưu thông tin trên server
</pre>
<?php
/**
 * thời gian 1 ngày là 86400 giây
 * cookie bên dưới sẽ sống trong 30 ngày
 */

$cookie_name="username";
$cookie_value="anh";

setcookie($cookie_name,$cookie_value,time() + (86400 * 30)); //86400=1day
?>

<?php
/**
 * xem tất cả các cookie
 */

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>

<?php
/**
 * truy cập vào 1 cookie
 */
if(!isset($_COOKIE["username"])) {
    echo '<br> cookie $_COOKie["username"] chưa được tạo';
} else {
    echo '<br> giá trị của $_COOKIE["username"] là: ' . $_COOKIE["username"];
}
?>
</body>
</html>