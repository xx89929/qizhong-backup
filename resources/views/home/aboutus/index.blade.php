@extends('home.layouts.home')
@section('content')
<!-----------------------Banner----------------------->
@include('home.aboutus.banner')

<!--------------------Look-Up-------------------->
@include('home.layouts.lookup')
<div class="about_centent about_div_1">
<div class="container">

        <div class="col-md-6">
            <ul class="list-unstyled">
                <li class="col-md-12 col-xs-12">
                    <div class="text-center">
                        <h1>我们是谁</h1>
                    </div>
                </li>
                <li class="col-md-12 col-xs-12">
                    <div class="about-imgages_gly col-md-2 col-xs-2">
                        <span class="glyphicon glyphicon-cloud pull-right" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-xs-10">
                        <h4>我们是海南企众实业有限公司</h4>
                    </div>
                </li>
                <li class="col-md-12 col-xs-12">
                    <div class="about-imgages_gly col-md-2 col-xs-2">
                        <span class="glyphicon glyphicon-th pull-right" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-xs-10">
                        <h4>我们是一站式企业管理公司</h4>
                    </div>
                </li>
                <li class="col-md-12 col-xs-12">
                    <div class="about-imgages_gly col-md-2 col-xs-2">
                        <span class="glyphicon glyphicon-th-list pull-right" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-xs-10">
                        <h4>我们是以诚信为本，提供便捷、安全、稳定、优质服务的创新型公司</h4>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-md-6">
            <img class="img-responsive" src="{{url('image/aboutus_go1.png')}}">
        </div>
    </div>
</div>

<div class="about_centent about_div_2">
    <div class="container">
        <div class="col-md-6">
            <img class="img-responsive" src="{{url('image/aboutus_go2.png')}}">
        </div>

        <div class="col-md-6">
            <ul class="list-unstyled">
                <li class="col-md-12 col-xs-12">
                    <div class="text-center">
                        <h1>我们做什么</h1>
                    </div>
                </li>
                <li class="col-md-12 col-xs-12">
                    <div class="about-imgages_gly col-md-2 col-xs-2">
                        <span class="glyphicon glyphicon-search pull-right" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-xs-10">
                        <h4>我们专注于工商代理、记账报税、企业建站</h4>
                    </div>
                </li>
                <li class="col-md-12 col-xs-12">
                    <div class="about-imgages_gly col-md-2 col-xs-2">
                        <span class="glyphicon glyphicon-briefcase pull-right" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-xs-10">
                        <h4>我们的服务价格透明，不会收取客服任何额外费用</h4>
                    </div>
                </li>
                <li class="col-md-12 col-xs-12">
                    <div class="about-imgages_gly col-md-2 col-xs-2">
                        <span class="glyphicon glyphicon-blackboard pull-right" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 col-xs-10">
                        <h4>我们的服务让您的企业一帆风顺</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@include('home.layouts.chooseup')

@endsection
