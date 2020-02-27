<?php
echo "file process.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";

if(isset($_POST["name"]) && isset($_POST["password"])) {
    if (($_POST["name"] != "" ) && ($_POST["password"] != ""));

    $name = $_POST["name"];
    $password = $_POST["password"];

    if($name == "anh" && $password=="123") {
        header("Location:success.php");
        exit();
    }
}
header("Location: index1.php?message=Name hay password không đúng");
exit();


?>