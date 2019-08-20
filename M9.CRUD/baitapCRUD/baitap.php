<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$location=10;
$gender=1;
?>
<form name="location" method="post" action="">
    <label>Địa điểm</label>
    <select name="location">
        <option value="1">Bắc ninh</option>
        <option value="2">Bắc giang</option>
        <option value="3">Quảng ninh</option>
        <option value="4">Hải phòng</option>
        <option value="5">Nam định</option>
        <option value="6">Thanh hóa</option>
        <option value="7">Nghệ an</option>
        <option value="8">Lào cai</option>
        <option value="9">Hà nam</option>
        <option value="10" <?php if ($location == 10) { echo "selected"; } else { echo ""; } ?>>hà nội</option>


    </select>
    <label>Giới tính</label>
    <input type="radio" name="gender" value="0">Nữ
    <input type="radio" name="gender" value="1" <?php if ($gender == 1) { echo "checked"; } else { echo ""; } ?> > Nam
</form>

</body>
</html>