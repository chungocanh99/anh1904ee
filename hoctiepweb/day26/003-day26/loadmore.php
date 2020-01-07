<?php
include "connect.php";

if(isset($_POST["start"]) && isset($_POST["limit"])) {
    $start =$_POST["start"];
    $limit =$_POST["limit"];

    $sqlSelect = "select * from posts order by id asc limit $start,$limit";

    $stmt =$conn->prepare($sqlSelect);

    $stmt->execute();

    $resutl = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data=$stmt->fetchAll();

    echo json_encode($data);
}
else {
    echo "dữ liệu không hợp lệ";
}
exit;