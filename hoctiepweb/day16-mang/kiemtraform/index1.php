<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
  isset() kiểm tra 1 biến có tồn tại hay không
    nếu biến tồn tại isset() trả về true
    nếu biến không tồn tại isset() trả về false
    - hàm header("Location: url") để chuyển hướng url đến
    1 trang khác
    sau header nhớ dùng lệnh exit();

</pre>



<form name="login" action="process.php" method="post">
    <p>
        <label>Username</label>
        <input name="name" type="text" value="" placeholder="Nhập username">

    </p>
    <p>
        <label>Password</label>
        <input name="password" type="password" value="" placeholder="Nhập password">

    </p>
    <p>
        <input type="submit" name="submit" value="Login">
    </p>
</form>


</body>
</html>