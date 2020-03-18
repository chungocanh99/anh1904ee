<html>
<head>
    <title>Ví dụ 1: hello world</title>
    <link href = "https://fonts.googleapis.com/css?family=Lato:100" rel = "stylesheet" type = "text/css">
    <style>
        * {
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
        }
        body {
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">{{$hello_str}}</div>
    </div>
</div>
</body>
</html>