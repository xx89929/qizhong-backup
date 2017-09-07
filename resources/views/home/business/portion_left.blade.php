<div class="col-md-2">
    <div id="navbar-item">
        <ul class="nav nav-pills nav-stacked item-nav text-center">
            <li class="item-brand"><a href="#">海南企众</a></li>
            @foreach($bus_nav as $nav)
                <li class="{{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('business_index',['id' => $nav->id]) ? 'active' : ''}}"><a  href="{{route('business_index',['id' => $nav->id])}}">{{$nav->bus_name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>