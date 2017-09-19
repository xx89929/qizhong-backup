<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <!-- 百度JS接口说明 -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>{{$web_title}}</title>
    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap_index.css') }}" rel="stylesheet">
    <link href="{{url('css/my_css.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    @include('home.layouts.nav')
        @yield('content')
    @include('home.layouts.footer')

<script src="{{url('js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{url('js/lazyload.js') }}"></script>
<script src="{{url('js/Headroom.js') }}"></script>
<script src="{{url('js/jQuery.headroom.js') }}"></script>
<script src="{{url('js/bootstrap.min.js') }}"></script>
<script src="{{url('js/my_js.js') }}"></script>
<script src="{{url('js/scrollreveal.js') }}"></script>
<script src="{{url('js/setreveal.js') }}"></script>
</body>
</html>