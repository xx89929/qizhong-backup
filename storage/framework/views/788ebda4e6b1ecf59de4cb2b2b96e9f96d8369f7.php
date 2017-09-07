<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <!-- 百度JS接口说明 -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="<?php echo e(url('css/bootstrap_index.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('css/my_css.css')); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php echo $__env->make('home.layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('home.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script src="<?php echo e(url('js/jquery-3.2.1.slim.min.js')); ?>"></script>
<script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('js/my_js.js')); ?>"></script>
<script src="<?php echo e(url('js/scrollreveal.js')); ?>"></script>
<script src="<?php echo e(url('js/setreveal.js')); ?>"></script>
</body>
</html>