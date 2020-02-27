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
    khi bạn làm việc với 1 ứng dựng, mở nó ra, thay đổi nó, và đóng lại =>gọi là 1 phiên
    máy tính thì nó biết khi nào khởi động ứng dụng và kêt thúc, còn trên internet thì không

    => biến session giải quyết vấn đề này bằng cách lưu trữ thông tin người dùng sẽ được sử dụng trên nhiều trang
    mỗi client sẽ có sessionID khác nhau nên hoàn toàn không có thể xảy ra xung đột session
    ứng dụng thwujc tế trong việc sử dụng session thường làm chức năng đăng nhập, giỏ hàng

    xóa seesion: unset($bien)
    xóa tất cả session: session_destroy(); hoặc unset($_SESSION);

</pre>
<?php


//để thêm session
//$_SESSION["name"] ="value";
$_SESSION["user"] = "Chử ngọc ánh";
$_SESSION["age"]= "20 tuổi";
echo $_SESSION["user"] . "<br>";

//lấy giá trị: $_SESSION["name"]; phải kiểm tra em session có tồn tại không

if(isset($_SESSION["age"]) ) {
    echo $_SESSION["age"];

}

//xóa session: unset($bien);

?>
</body>
</html>