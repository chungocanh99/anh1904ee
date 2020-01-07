<?php
namespace MVC\Models;

class Database {

    //thuộc tính chứa kết nối

    public $connect;

    //tạo ra hằng số chứa 4 thông số kết nối CSDL
    const  SERVER_NAME = "localhost";

    const USERNAME = "root";

    const PASSWORD = "";

    const DBNAME ="mvcdemo";

    public function connectDB() {
        if (! $this->connect ) {
            $this->connect = mysqli_connect(self::SERVER_NAME, self::USERNAME, self::PASSWORD, self::DBNAME);
        }

        //ngắt chương trình nếu kết nối lỗi

        if(!$this->connect) {
            die("conect failed: " . mysqli_connect_error());
        }
    }
}