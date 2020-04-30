<?php
class animal {
    public $cao;
    public $can;
    public function __construct($cao,$can)
    {
        //echo "đây là phương thức constructor";
        $this->can=$can;
        $this->cao=$cao;
    }
}
$animal = new animal(2,30);
echo "chiều cao là: ".$animal->cao;
echo "<br>";
echo "cân nặng là: ".$animal->can;

echo "<br>";
echo "<br>";
echo "<br>";

?>
<?php
class xe {
    public $hang;
    public $namsx;
    public function __construct($hang,$namsx)
    {
        echo "constructor";
        $this->hang=$hang;
        $this->namsx=$namsx;
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "destruct: hàm hủy";
    }

}
$xe = new xe('hi',1900);
?>
