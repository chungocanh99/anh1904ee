<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    khi thuộc tính action="" của form thì form khi submit dữ liệu
    sẽ gửi đến url hiện tại
    $_POST là 1 mảng

</pre>



<form name="login" action="form.php" method="post">
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