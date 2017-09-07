<script src="<?php echo e(url('ckeditor/ckeditor.js')); ?>"></script>
<script src="<?php echo e(url('ckeditor/config.js')); ?>"></script>
<script src="<?php echo e(url('ckeditor/samples/js/sample.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(url('ckeditor/samples/css/samples.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('ckeditor/samples/toolbarconfigurator')); ?>">

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
</script>
