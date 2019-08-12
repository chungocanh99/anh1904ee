<?php
/**
 * khai báo 4 hằng số kết nối cơ sở dữ liệu
 */
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","appcrud");

/**
 * kết nối cơ sở dữ liệu
 */
$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection) {
    die("không thể kết nối đến cơ sở dữ liệu");
}
echo "kết nối đến cơ sở dữ liệu thành công";