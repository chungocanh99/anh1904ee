<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    array_values($array): đưa mảng về dạng tuần tự theo value
    array_keys($array): như trên đưa về key
    array_pop($array):trả về phần tử cuối cùng của mảng
    array_push($array): thêm 1 hoặc nhiều phần tử vào cuối mảng và trả về số lượng phần tử của mảng
    array_shift($array):xóa phần tử đầu tiên và trả về phần tử vừa xóa
    array_unshift($array,tenpt): thêm 1 hoặc nhiều phần từ vào đầu mảng và trả về số lượng phần tử của mảng sau khi thêm
    array_flip($array):chuyển key của mảng thành value và ngược lại
    array_reverse($array):đảo ngược lại vị trí của các phần tử trong mảng
    array_merger($array,$array1): gộp 2 hay nhiều mảng thành 1 mảng
    array_rand($array,$number): lấy key ngẫu nhiên trong mảng với number là số lượng muốn lấy
    array_search($kytu,$array): tìm kiếm giá trị của mảng và trả về key của phần tử đó
    array_slice($array,số bắt đầu, số chiều dài): lấy ra số chiều dài phần tử bắt đầu từ số bd trong mảng
    array_unique($array): loại bỏ các phần tử trùng nhau trong mảng và trả về mảng mới
    serialize($input): chuyển đổ 1 chuỗi, số, mảng, object thành 1 chuỗi được mã hóa
    unserialize($input): decode chuỗi ma hóa
    array_key_exits($tenkey,$array):kiểm tra mảng có tồn tại khóa $key không
    in_array($value,$array):kiểm tra mảng có tồn tại $value không
    array_diff($array1,$array2,...): trả về mảng chứa các phần tử trong mảng 1 nhưng KHÔNG Ở mảng 2
    array_diff_assoc($array1,$array2,.): trả về 1 mảng có key trong mảng 1 mà mảng 2 không có
    array_intersect($array1,$array2,..): trả về mảng các phần tử giống nhau về value giữa các mảng
    array_intersect_assoc($array1,2,3...): trả về mảng chứa key và và value giống nhau giữa các mảng
</pre>
<?php
$array=["tên là" => "chử ngọc ánh",
        "mô tả" => "một cái tên siêu kute",
        "thông tin cơ bản" => "rất yêu pi"
    ];
print_r(array_values($array)) ;
echo "<br>";
print_r(array_keys($array));
echo "<br>";
//print_r(array_pop($array));
echo "<br>";
print_r(array_push($array,"20 tuổi"));
echo "<br>";

print_r(array_shift($array));
echo "<br>";
print_r($a = serialize($array));
echo "<br>";
print_r(unserialize($a));
?>
</body>
</html>