<style type="text/css">
    #allmap{width:100%;height:500px;}
</style>

<div class="fudong-div">
    <ul class="list-unstyled kefu-ul">
        <li>
            <a class="pull-right"  target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3385434967&site=qq&menu=yes">
                <img class="kefu-hide" src="{{url('image/ll04.png')}}">
                <img class="kefu-show" src="{{url('image/l04.png')}}">
            </a>
        </li>

        <li>
            <a class="pull-right" href="#" data-toggle="modal" data-target="#myModal">
                <img class="kefu-hide" src="{{url('image/location_width_icon.png')}}">
                <img class="kefu-show" src="{{url('image/location_icon.png')}}">
            </a>
        </li>

        <li>
            <a class="pull-right" href="#" data-toggle="modal" data-target="#myModal">
                <img class="wx_ewm_big" src="{{url('image/weixin_pt.jpg')}}">
                <img class="wx_ewm_small" src="{{url('image/wx_gzpt.png')}}">
            </a>
        </li>

        <li>
            <a id="top_btn" class="pull-right" href="#">
                <img class="kefu-hide " src="{{url('image/ll06.png')}}">
                <img class="kefu-show" src="{{url('image/l06.png')}}">
            </a>
        </li>
    </ul>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                @include('home.layouts.baidu-map')
            </div>

        </div>
    </div>
</div>