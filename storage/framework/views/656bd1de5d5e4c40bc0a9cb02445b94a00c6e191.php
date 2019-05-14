<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo e(asset('favicon.ico')); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/reset.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <?php if(file_exists(public_path($css))): ?>
            <link href="<?php echo e(asset($css)); ?>" rel="stylesheet">
        <?php endif; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <?php if(file_exists(public_path($js))): ?>
            <script src="<?php echo e(asset($js)); ?>"></script>
        <?php endif; ?>
        <style>

        </style>
        <script>

        </script>
        <title><?php echo e(config('app.name')); ?></title>
    </head>
    <body>
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\OSPanel\domains\gator\resources\views/layouts/app.blade.php ENDPATH**/ ?>