<?php
if(isset($_SESSION["user_id"]) ==false) {
    //nếu àm user chưa đăng nhập thì bắt nó đăng nhập
    header("Location:http://localhost:8080/anh1904e/hihi/website/dangnhap.php");
}else {
    if(isset($_SESSION["permision"])==true) {
        //ngược lại nếu mà đã đăng nhập
        $permision = $_SESSION["permision"];
        //kiểm tra xem thằng đấy có phải là admin không
        if($permision=='0') {
            //nếu mà không phải là admin thì
            echo "không có quyền truy cập đâu lêu lêu<br>";
            echo "<a href='http://localhost:8080/anh1904e/hihi/website/'>Click về trang chủ đê</a>";
            exit();

        }
    }
}