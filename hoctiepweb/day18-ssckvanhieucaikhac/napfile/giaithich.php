<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    nạp file trong php
    include, include_one,require, require_once
</pre>
<pre>
    ứng dụng của việc nạp file trong php:
    - chia nhỏ ứng dụng thành các file theo chức năng để dễ bảo trì và quản lý
    trong đó có 1 file chính và nạp các file con vào trong suốt quá trình chạy
</pre>
<pre>
    sự giống nhau: 4 hàm này đều dùng để nạp 1 file vào 1 file khác
    khác nhau:
    - include: quá trình nạp bị lỗi thì chương trình vẫn chạy tiếp
    - require: quá trình nạp bị lỗi thì chương trình dừng
    - include_once: giống include nhưng chỉ nạp file 1 lần ngay cả khi gọi nhiều lần
    - require_once: giống include nhưng chỉ nạp file 1 lần ngay cả khi gọi nhiều lần
</pre>
</body>
</html>