<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/23/2020
 * Time: 9:34 AM
 */

/*
 * lớp abstract KHÔNG khởi tạo tham số, chỉ khai báo tên hàm mà thôi
 * abstract không tạo được các đối tượng
 */

/*
 * interface không phải là 1 lớp
 * không thể định nghĩa các thuộc tính
 * không khởi tạo đối tượng
 * chỉ khai báo tên các phương thức, tên hàm, không đc viết nội dung bên trong
 * tất cả đều là public
 */

/*
 * abstract class là bản mô tả cho class,
 * abstract được sử dụng trong trường hợp các class kế thừa từ nó có cùng bản chất
 * interface là bản mô tả cho method
 * interface sử dụng trong TH các class kế thừa không cùng bản chất, nhưng giống hành động
 */
abstract class Dongvat
{
/*
 * abstract method có từ khóa abstract trước từ khóa function
 * nhớ là trong abstract method KHÔNG có code thực thi
 */

//tên loài
public abstract function tenloai();
//thông tin
public abstract function thongtin();

//method thông thường
public function khainiem() {
    echo "Từ \"animal\" xuất phát từ tiếng Latin animalis, có nghĩa là \"có thở\".[1] 
        Trong sử dụng ngôn ngữ giao tiếp hàng ngày, từ \"động vật\" thường bị sử dụng sai -
         từ \"động vật\" đó dùng để chỉ tất cả các thành viên của giới Animalia trừ con người. Theo nghĩa sinh học, 
        \"động vật\" dùng để chỉ tất cả các thành viên của giới Animalia, bao gồm cả con người.";
}
}