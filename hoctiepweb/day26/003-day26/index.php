<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<?php
include_once "connect.php";

$sqlSelect = "select * from posts order by id asc limit 0,20";

$stmt = $conn->prepare($sqlSelect);
$stmt->execute();

//trả lại kết quả ra mảng

$result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
$data=$stmt->fetchAll();

echo "<pre>";
print_r($data);
echo "</pre>";

?>

<div class="container">
    <h2>basic ajax</h2>

    <table id="ajaxtable" class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Intro</th>
        </tr>
        </thead>

        <tbody>

        <?php foreach($data as $item) { ?>
            <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["title"] ?></td>
                <td><?php echo $item["intro"] ?></td>
            </tr>
        <?php } ?>


        </tbody>


    </table>

    <button id="loadmore" class="btn btn-success">Xem thêm</button>
</div>

<script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $("#loadmore").on("click",function () {

            var start=$("#ajaxtable tbody > tr").length;

            var dataPost={};
            dataPost.start= start;
            dataPost.limit=20;

            $.ajax ({
                //đích gửi dữ liệu
                url:"loadmore.php",
                //dữ liệu gửi đi
                data:dataPost,
                //cách gửi dữ liệu
                type:"POST",
                //kiểu data trả về
                dataType:"json",
                beforeSend: function () {
                    alert("trước khi gửi đi");
                },
                success: function (res) {
                    console.log(res);

                    if(parseInt(res.length) > 0) {
                        var html="";

                        for(i=0;i<res.length;i++) {
                            console.log(res[i]);
                            html+='<tr>'+
                                '<td>' + res[i].id+'</td>'+
                                '<td>' + res[i].title+'</td>'+
                                '<td>' + res[i].intro+'</td>'+
                                '</tr>';
                        }

                        console.log(html);

                        $("#ajaxtable tbody").append(html);
                    }
                    else {
                        alert("hết dữ liệu");
                        $("#loadmore").hide();
                    }
                },
                error: function () {
                    alert("có lỗi");
                },
                complete:function () {
                    alert("hoàn thành quá trình ajax");
                }

            });
        });
    });
</script>
</body>
</html>