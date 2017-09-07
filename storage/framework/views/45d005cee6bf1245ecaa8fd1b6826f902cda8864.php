<div class="col-md-2">
    <div id="navbar-item">
        <ul class="nav nav-pills nav-stacked item-nav text-center">
            <li class="item-brand"><a href="#">海南企众</a></li>
            <?php $__currentLoopData = $bus_nav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="<?php echo e(Request::getSchemeAndHttpHost().Request::getPathinfo() == route('business_index',['id' => $nav->id]) ? 'active' : ''); ?>"><a  href="<?php echo e(route('business_index',['id' => $nav->id])); ?>"><?php echo e($nav->bus_name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>