<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e($item->id ? route('src.update', $item->id) : route('src.store')); ?>" method="POST">
            <div class="form-group row">
                <div class="header col-sm">
                    <h1><?php echo app('translator')->getFromJson('app.src'); ?> - <?php echo app('translator')->getFromJson('app.' . ($item->id ? 'edit' : 'create')); ?></h1>
                </div>
                <div class="btns col-sm text-sm-right">
                    <a class="btn btn-primary" href="<?php echo e(route('src.index')); ?>"> Back</a>
                    <button type="submit" class="btn btn-success"><?php echo app('translator')->getFromJson('app.save'); ?></button>
                </div>
            </div>
            <div class="form-group row required">
                <label for="name" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.name'); ?></label>
                <div class="col-sm-10">
                    <input class="form-control" id="name" name="name" value="<?php echo e($item->name); ?>" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="alias" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.alias'); ?></label>
                <div class="col-sm-10">
                    <input class="form-control" id="alias" name="alias" value="<?php echo e($item->alias); ?>" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="url" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.url'); ?></label>
                <div class="col-sm-10">
                    <input class="form-control" id="url" name="url" value="<?php echo e($item->url); ?>" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="request_items_quantity" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.request_items_quantity'); ?></label>
                <div class="col-sm-10">
                    <input class="form-control" id="request_items_quantity" name="request_items_quantity" value="<?php echo e($item->request_items_quantity ?: config('app.meme.src.default_request_items_quantity')); ?>" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="filter_min_votes" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.filter_min_votes'); ?></label>
                <div class="col-sm-10">
                    <input class="form-control" id="filter_min_votes" name="filter_min_votes" value="<?php echo e($item->filter_min_votes); ?>" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="favicon" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.favicon'); ?></label>
                <div class="col-sm-10">
                    <input class="form-control" id="favicon" name="favicon" value="<?php echo e($item->favicon); ?>" required>
                </div>
            </div>
            <input name="id" type="hidden" value="<?php echo e($item->id); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field($item->id ? 'PUT' : 'POST'); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\resources\views/meme/src/edit.blade.php ENDPATH**/ ?>