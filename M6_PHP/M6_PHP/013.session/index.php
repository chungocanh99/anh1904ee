
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    *khởi tạo session: session_start();
    khai báo cho server biết phiên làm việc có sử dụng session
    * lưu trữ session: $_SESSION
    * thêm, sửa: $_SESSION['name']='value';
</pre>
<?php

session_start();
$_SESSION['user']='admin';
if(isset($_SESSION['user'])) {
    echo $_SESSION['user'];
}
$_SESSION['user'];
/*đối với mảng*/
$array=[1,3,2,5,6];
$_SESSION['arr']=$array;
if(isset($_SESSION['arr'])) {
    echo $_SESSION['arr'];
}
$_SESSION['arr'];

?>
</body>
</html>
