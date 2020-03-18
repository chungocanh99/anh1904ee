<?php
/*
 * có 2 cách kết nối đến CSDL trong php
 * cách 1: MySQLi
 * cách 2: PDO
 */

//cách 2 kết nối đến csdl bằng msqli như theo hướng hàm
//biến 1: IP máy chủ mysql
//trên máy tính local thì nhập là localhost

$mysqlSever = "localhost";

//biến 2: username để kết nối đến máy chủ csdl mysql
$mysqlUser = "root";
//biến 3: password
$mysqlPassword = "";
//biến 4: tên cơ sở dữ liệu có sẵn
$mysqlDatabaseName = "ngay02thang03";

//tiếp theo tạo 1 kết nối đến csdl
$connection = new mysqli($mysqlSever,$mysqlUser,$mysqlPassword,$mysqlDatabaseName);
/*
 * kiểm tra xem kết nối đến csdl có lỗi không
*/

if(!$connection) {
    die("kết nối lỗi" . mysqli_connect_error());
}
echo "<br> kết nối đến csdl thành công";
