<?php
//khởi tạo session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
<pre>
    1 cookie được sử dụng để xác định 1 người dùng.
    1 cookie là 1 file nhỏ mà server nhúng trên máy tính của người dùng
    mỗi lần máy tính yêu cầu mở trang với trình duyệt, nó sẽ gửi coookie qua
    cookie lưu ở máy của client nên khi đóng trình duyệt thì cookie vẫn còn tồn tại và tồn tại bạn lâu là do bạn set
</pre>
<p>setcookie($name,$value,$expire,$path,$domain);</p>
<pre>
    name: tên cookie
    value: giá trị
    expire: thời gian sống
    path: đường dẫn lưu trữ
    domain: tên của domain

    để xóa cookie: sét thời gian sống của  nó < thời điêm hiện tại
</pre>
<?php
setcookie("user","Chử ngọc ánh","time() + 120");
$_COOKIE["user"];
?>
</body>
</html>