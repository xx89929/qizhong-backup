<nav class="navbar navbar-default navbar-fixed-top headroom headroom-show">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">海南企众实业</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right" role="navigation">
            <ul class="nav navbar-nav nav-alls">
                <li class="{{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('/').'/' ? 'active' : ''}}"><a href="/">首页</a></li>
                <li class="{{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('aboutus_index') ? 'active' : ''}}"><a href="{{route('aboutus_index')}}">关于我们</a></li>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        业务范围 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($bus_nav as $nav)
                        <li><a href="{{route('business_index',['id' => $nav->id])  }}">{{$nav->bus_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#contact">行业资讯</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
