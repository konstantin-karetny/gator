<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo e(asset('favicon.ico')); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/bootstrap-toggle.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/fontawesome.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/reset.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <?php if(file_exists(public_path($css))): ?>
            <link href="<?php echo e(asset($css)); ?>" rel="stylesheet">
        <?php endif; ?>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap-popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap-toggle.min.js')); ?>"></script>
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
    <body class="<?php echo e($class); ?>">
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.msgs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\OSPanel\domains\gator\trunk\resources\views/layouts/app.blade.php ENDPATH**/ ?>