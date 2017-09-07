<div class="sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="/admin">控制台</a></li>
        <li role="presentation" class="<?php echo e(Request::getSchemeAndHttpHost().Request::getPathinfo() == route('lookup') ? 'active' : ''); ?>"><a href="<?php echo e(route('lookup')); ?>">在线核名</a></li>
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                业务范围<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li role="presentation" class="<?php echo e(Request::getSchemeAndHttpHost().Request::getPathinfo() == route('bus_index') ? 'active' : ''); ?>"><a href="<?php echo e(route('bus_index')); ?>">业务显示</a></li>
                <li role="presentation" class="<?php echo e(Request::getSchemeAndHttpHost().Request::getPathinfo() == route('bus_create') ? 'active' : ''); ?>"><a href="<?php echo e(route('bus_create')); ?>">业务添加</a></li>
            </ul>
        </li>
        <li role="presentation"><a href="#">横幅添加</a></li>
    </ul>
</div>