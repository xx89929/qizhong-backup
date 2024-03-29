<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <!-- 百度JS接口说明 -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="海南企众官网，公司注册，公司变更，公司注销，记账报税，公司建站" />
    <meta name="keywords" content="海南企众官网，海南公司注册，海南公司变更，海南公司注销，海南记账报税，海南公司建站" />
    <title>{{$web_title}}</title>
    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap_index.css') }}" rel="stylesheet">
    <link href="{{url('css/style.css') }}" rel="stylesheet">
    <link rel="Shortcut Icon" href="{{url('image/logo_icon.png')}}" type="image/x-icon">
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
    @include('home.layouts.qq-kefu')

<script src="{{url('js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="{{url('js/lazyload.js') }}"></script>
<script src="{{url('js/Headroom.js') }}"></script>
<script src="{{url('js/jQuery.headroom.js') }}"></script>
<script src="{{url('js/bootstrap.min.js') }}"></script>
<script src="{{url('js/common.js') }}"></script>
<script src="{{url('js/scrollreveal.js') }}"></script>
<script src="{{url('js/setreveal.js') }}"></script>
</body>
</html>