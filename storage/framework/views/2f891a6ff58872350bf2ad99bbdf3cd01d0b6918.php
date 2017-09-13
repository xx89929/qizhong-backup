

<?php $__env->startSection('content'); ?>

<!-----------------------Banner----------------------->
<?php echo $__env->make('home.index.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--------------------Look-Up-------------------->
<?php echo $__env->make('home.layouts.lookup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!----------------Our-Services--------------->
<?php echo $__env->make('home.index.our-serveices', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-----------------------Our-Advantage------------------>
<?php echo $__env->make('home.index.our-advantage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!----------------company-regist--------------->
<?php echo $__env->make('home.index.company-regist', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-----------------------jizhang------------------>
<?php echo $__env->make('home.index.jizhang', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-----------------------WebExample------------------>
<?php echo $__env->make('home.index.web_exp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-----------------------OurTeam------------------>
<?php echo $__env->make('home.index.us_team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-----------------------Price-List------------------>
<?php echo $__env->make('home.index.price-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!----------------choose-us-div--------------->
<?php echo $__env->make('home.layouts.chooseup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>