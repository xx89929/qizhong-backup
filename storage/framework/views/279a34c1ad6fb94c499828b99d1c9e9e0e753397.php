
<?php $__env->startSection('content'); ?>
<link href="<?php echo e(url('css/my_item_style.css')); ?>" rel="stylesheet">
<?php echo $__env->make('home.business.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('home.layouts.lookup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="item_index">
        <div class="container-fluid">
            <?php echo $__env->make('home.business.portion_left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-10">
                <div class="item_info" data-target="#navbar-item">
                    <div class="item-box" id="company_register">
                        <h1 class="text-center"><?php echo e($res->bus_name); ?></h1>
                        <p class="item_update text-center">更新时间：<?php echo e($res->updated_at); ?></p>
                        <?php echo $res->bus_content; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>