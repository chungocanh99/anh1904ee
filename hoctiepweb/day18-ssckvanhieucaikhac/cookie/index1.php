<?php
$cookieName="username";
$cookieValue="anhkute";
$lifetime = time() + (86400*30);

setcookie($cookieName,$cookieValue,$lifetime,"/");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

//thay đổi nội dung của cookie
setcookie($cookieName,"12345",$lifetime,"/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    cookie:
    được sử dụng để nhận diện người dùng
    1 cookie là 1 file nhỏ mà server nhúng vào trong máy tính của người dùng
    mỗi lần cùng 1 máy tính gửi yêu cầu truy cập đến 1 trang trên trình duyệt
    nó sẽ gửi đi 1 cookie tương tự như những lần trước


    cú pháp tạo 1 cookie:
    setcookie(name,value,expire,path,domain,secure,httponly);
    expire: thời gian sống của cookie
    path: đường dẫn

    hàm setcookie phải đặt lên đầu

    hủy cookie thì set thời gian sống của nó là hiện tại time() - số bất kỳ
    $lifetie = time() - 86400;
</pre>

<?php


//in ra cookie truy cập vào 1 cookie
//echo "<br> username: " . $_COOKIE["username"];


?>
</body>
</html>