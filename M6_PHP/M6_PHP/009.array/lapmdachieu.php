<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
lặp mảng đa chiều
    yêu cầu: in ra được tên của các thành phố
</pre>

<?php
$arr3 = array();
$arr3["japan"]=array("name"=>"nhật bản","city"=>array("tokyo"));
$arr3["china"]=array("name"=>"tàu khựa","city"=>array("bắc kinh","thượng hải"));
$arr3["vn"]=array("name"=>"việt nam","city"=>array("hà nội", "hồ chí minh","sơn la"));
/*echo "<pre>";
print_r($arr3);
echo "</pre>";
*/
foreach ($arr3 as $keyCountry => $country)  {
    foreach ($country as $keyCities => $cities) {
        if($keyCities == "city") {
            foreach ($cities as $keyCity => $city) {
                echo "<br> " .$city;
            }
        }
    }
}


?>
</body>
</html>