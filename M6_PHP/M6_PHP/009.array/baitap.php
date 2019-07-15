<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
lặp mảng đa chiều
    Yêu cầu : in được ra tên của các quốc gia và thành phố của nó
</pre>


<?php
$arr3 = array();
$arr3["japan"]=array("name"=>"nhật bản","city"=>array("tokyo"));
$arr3["china"]=array("name"=>"trung quốc","city"=>array("bắc kinh","thượng hải"));
$arr3["vn"]=array("name"=>"việt nam","city"=>array("hà nội", "hồ chí minh","sơn la"));


foreach($arr3 as $keyCountry => $country) {
    foreach ($country as $keyNames => $names) {
        if ($keyNames == "name") {
            echo "<li>" . $names;
        } else
            foreach ($country as $keyCities => $cities) {
                if ($keyCities == "city") {
                    foreach ($cities as $keyCity => $city) {
                        echo "<li>" . $city;

                    }
                }
            }
    }
}





?>
</body>
</html>