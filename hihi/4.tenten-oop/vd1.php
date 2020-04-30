<?php
class Vidu1 {
    public $thuoctinh1 = "hê lô, đây là thuộc tính";
}
$object = new Vidu1();
//var_dump($object);

//truy xuất thuộc tính trong class
echo $object->thuoctinh1;
echo "<br>";
?>



<?php
class vidu2 {
    public $thuoctinh1 = "hê lu, đây là thuộc tính";

//khai báo phương thức trong class
function myFunction()
{
    echo "hê lô, đây là phương thức";
}
}
$object = new vidu2();
$object->myFunction();
echo "<br>";

echo "<br>";

?>

<?php
class vidu3
{
    public $thuoctinh1 = "hê lu, đây là thuộc tính";

//khai báo phương thức trong class
    function myFunction()
    {
        echo "hê lô, đây là phương thức";
    }

    function my2()
    {
        //truy xuất đến thuốc tính @$thuoctinh1
        echo $this->thuoctinh1;
        echo "<br>";
        $this->myFunction();
    }

}
$object= new Vidu3();
$object->my2();
?>

