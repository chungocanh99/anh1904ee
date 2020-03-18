<?php

include_once "connectdb.php";

if(isset($_GET["id"]) && ($_GET["id"] >0)) {
    $id=(int)$_GET["id"];

    $sqlSelect = "select * from myguest where id=$id";

    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute();

    //trả lại kết quả
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all=$stmt->fetchAll();

    echo "<pre>";
    print_r($all);
    echo "</pre>";

    $user=isset($all[0]) ? $all[0] : 0;
}
else {
    echo "<br>Không thấy id đâu cả";
}

if (!isset($user["id"])) {
    echo "<br> không thấy bản ghi có id tương ứng"; exit;
}
?>


<div class="page-wrap">
    <form name="myguest" action="remove.php" method="post">

        <input type="hidden" name="id" value="<?php echo $user["id"]?>">
        <p>
            <label>firstname</label>
            <input name="firstname" type="text" value="<?php echo $user["firstname"]?>"disabled>
        </p>

        <p>
            <label>lastname</label>
            <input name="lastname" type="text" value="<?php echo $user["lastname"]?>"disabled>
        </p>

        <p>
            <label>email</label>
            <input name="email" type="email" value="<?php echo $user["email"]?>"disabled>
        </p>


        <p>
            <input type="submit" name="submit" value="Xóa data">
        </p>

    </form>
</div>