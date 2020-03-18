<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <div class="page_header">
        @yield('header')
        <!--thành phần động, sẽ thay tại mỗi trang view khác nhau-->
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
    @yield('content')
</div>
</body>
</html>