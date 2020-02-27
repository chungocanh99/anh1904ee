<?php

class Xe {
    /**
     * khai báo các thuộc tính bên trong class
     * thuộc tính chỉ ra tính chất đặc điểm cho 1 đối tượng
     * thuộc tính: tên, model, khối lượng, giá, năm sản xuất, nhà sx
     */
    public $name;
    public $model;
    public $weight;
    public $price;
    public $year_publish;
    public $manufacture;
    /**
     * phương thức khởi tạo: được gọi ngay khi sử dụng
     * từ khóa new để tạo 1 đối tượng
     */
    public function __construct($name,$model,$weight,$price,$year_publish,$manufacture) {
        echo "<br> phương thức khởi tạo được tự động gọi khi sử dụng từ khóa new để khởi tạo đối tượng";
        /*
         * lấy giá trị từ tham số truyền vào gán cho các thuộc tính
         * chú ý: bên trong class muốn gọi đến chính class đó sử dụng từ khóa $this
         */

        $this->name=$name;
        $this->model=$model;
        $this->weight=$weight;
        $this->price=$price;
        $this->year_publish=$year_publish;
        $this->manufacture=$manufacture;
    }
    /*
     * phương thức in ra các thông tin của xe
     */
    public function getInfo() {
        echo "<br> getInfo";
        echo "<br>" . $this->name;
        echo "<br>" . $this->model;
        echo "<br>" . $this->weight;
        echo "<br>" . $this->price;
        echo "<br>" . $this->year_publish;
        echo "<br>" . $this->manufacture;
    }

    /*
     * chú ý phương thức khởi tạo sẽ được tự động gọi khi khởi tạo đối tượng
     */
}
$xe1 = new Xe("dream","thai","50kg","20000000","2019","thailand");

//gọi đến phương thức getInfo
$xe1->getInfo();

