@extends('home.layouts.home')
<style type="text/css">
    #allmap{width:100%;height:500px;}
</style>
@section('content')
<!-----------------------Banner----------------------->
@include('home.aboutus.banner')

<!--------------------Look-Up-------------------->
@include('home.layouts.lookup')
<div class="container">

    <div class="address_top" id="allmap"></div>
    <div class="address_bottom">
        <address>
            <strong>海南企众实业有限公司</strong><br>
            海南省海口市龙华区国贸大道<br>
            华昌大厦601<br>
            <abbr title="Phone">P:</abbr> 0898-66766640
        </address>

        <address>
            <strong>企业邮箱</strong><br>
            <a href="mailto:#">3385434967@qq.com</a>
        </address>
    </div>
</div>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=XtBZlAmRRP5ATTj0LG95AhU8vDBSNiue"></script>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    map.enableScrollWheelZoom(true);
    map.centerAndZoom(new BMap.Point(110.323255,20.029742), 11);
    var local = new BMap.LocalSearch(map, {
        renderOptions:{map: map}
    });
    local.search("华昌大厦");
</script>

@endsection