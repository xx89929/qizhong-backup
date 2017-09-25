<style type="text/css">
    #allmap{width:100%;height:500px;!important;}
</style>


<div class="address_top" id="allmap"></div>

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