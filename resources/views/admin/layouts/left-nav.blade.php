<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree"  lay-filter="tree_nav">
            <li class="layui-nav-item">
                <a class="" href="javascript:;">在线核名管理</a>
                <dl class="layui-nav-child">
                    <dd class="{{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('lookup') ? 'layui-this' : ''}}"><a href="{{route('lookup')}}">核名统计列表</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a class="" href="javascript:;">预约服务管理</a>
                <dl class="layui-nav-child">
                    <dd class="{{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('chooseup') ? 'layui-this' : ''}}"><a href="{{route('chooseup')}}">预约服务列表</a></dd>
                </dl>
            </li>

            <li class="layui-nav-item">
                <a class="" href="javascript:;">网站前台管理</a>
                <dl class="layui-nav-child">
                    <dd class="{{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('bus_index') ? 'layui-this' : ''}}"><a href="{{route('bus_index')}}">业务范围列表</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">解决方案</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">列表一</a></dd>
                    <dd><a href="javascript:;">列表二</a></dd>
                    <dd><a href="">超链接</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">云市场</a></li>
            <li class="layui-nav-item"><a href="">发布商品</a></li>
        </ul>
    </div>
</div>