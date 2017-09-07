
<?php if(session('success')): ?>
    <div class="bg-success text-center">
        <h1><?php echo e(session('success')); ?></h1>
    </div>

<?php endif; ?>

<?php if(session('error')): ?>
    <div class="bg-danger text-center">
        <h1><?php echo e(session('error')); ?></h1>
    </div>
<?php endif; ?>