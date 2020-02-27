<?php
/*
 * đơn kế thừa thì dùng extends
 *
 * đa kế thừa dùng trait
 *
 * bài toán: smartphone kế thừa từ phone phổ thông gồm gọi và nhắn
 * nhưng smartphone muốn tích hợp máy tính vào trong chính nó
 * để có thể gửi và nhận email, word,game,camera
 *
 */

class SmartPhone {
    public $name;
    public function goiDien() {
        echo "<br> Gọi điện";
    }
    public function guiSMS() {
        echo "<br> Gửi sms";
    }
}
trait Computer {
    public function sendEmail() {
        echo "<br> sendEmail";
    }
    public function playGame() {
        echo "<br> chơi game";
    }
    public function word() {
        echo "<br> Soạn thảo văn bản";

    }
}

trait Radio
{
    public function ngheDaiRadio()
    {
        echo "<br> Nghe đài radio";

    }
}
trait Camera {
    public function chupanh() {
        echo "<br> chụp ảnh";

    }
}
class Dienthoai extends SmartPhone {
    // kế thừa từ các trait bằng từ khóa use
    use Computer,Radio,Camera;
}

$iphone = new Dienthoai();
$iphone->goiDien();
$iphone->chupanh();

