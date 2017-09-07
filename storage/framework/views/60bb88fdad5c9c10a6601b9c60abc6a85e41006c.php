<?php if(count($errors)): ?>
    <div id="myAlert" class="alert alert-danger text-center">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <strong>失败！</strong><?php echo e($error); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div id="myAlert" class="alert alert-success text-center">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>成功！</strong><?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div id="myAlert" class="alert alert-danger text-center">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>失败！</strong><?php echo e(session('error')); ?>

    </div>
<?php endif; ?>
