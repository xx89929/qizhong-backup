
<?php $__env->startSection('content'); ?>
    <div class="add">
        <?php echo $__env->make('admin.business._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>