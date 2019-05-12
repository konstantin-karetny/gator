<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/layouts/gator.css')); ?>" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/layouts/gator.js')); ?>"></script>
        <style>

        </style>
        <script>

        </script>
        <title>Gator</title>
    </head>
    <body>
        <?php echo $__env->make('layouts.gator.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\OSPanel\domains\gator\resources\views/layouts/gator/index.blade.php ENDPATH**/ ?>