<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    mảng là 1 kiểu dữ liệu có thể nhận nhiều giá trị
    3 kiểu mảng:
    - 1 là mảng chỉ số(tất cả các key đều là số)
    - 2 là mảng kết hợp ( khi có 1 key là chuỗi)
    - 3 là mảng đa chiều ( mảng lồng mảng, mỗi 1 ptu trong mảng là 1 mảng con)

</pre>

<?php

    $mobiles = ["iphone","oppo","samsung"];

    //in ra cấu trúc của cả mảng
    echo "<pre>";
    print_r($mobiles);
    echo "</pre>";

    //truy  xuất vào từng phần tử trong mảng
    echo "<br>" .$mobiles[0];
    echo "<br>" .$mobiles[1];
    echo "<br>" .$mobiles[2];

    //đếm số ptu trong mảng

    echo "<br> Tổng số phần tử trong mảng" . count($mobiles);

    //kiểm tra 1 biến có phải là 2 mảng không

    $checkArray = is_array($mobiles);

    echo "<br> hàm is_array để kiểm tra mảng";
    var_dump($checkArray);

    //kiểm tra xem mảng có rỗng hay không
    $checkEmpty = empty($mobiles);
    echo "<br> empty trả về tru nếu rỗng, false nếu không rỗng";
    var_dump($checkEmpty);

    foreach ($mobiles as $key_mobiles => $value_mobile) {
        echo "<br> key: " .$key_mobiles;
        echo "<br> value: " . $value_mobile;
    }
?>
</body>
</html>