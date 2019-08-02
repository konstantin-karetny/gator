<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e($item->id ? route('meme.update', $item->id) : route('meme.store')); ?>" method="POST">
            <div class="form-group row">
                <div class="header col-sm">
                    <h1><?php echo app('translator')->getFromJson('app.meme'); ?> - <?php echo app('translator')->getFromJson('app.' . ($item->id ? 'edit' : 'create')); ?></h1>
                </div>
                <div class="btns col-sm text-sm-right">
                    <a class="btn btn-primary" href="<?php echo e(route('meme.index')); ?>"> Back</a>
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
                <label for="body" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.body'); ?></label>
                <div class="col-sm-10">
                    <input class="form-control" id="body" name="body" value="<?php echo e($item->body); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.description'); ?></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" value="<?php echo e($item->description); ?>"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="poster" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.poster'); ?></label>
                <div class="col-sm-10">
                    <input class="form-control" id="poster" name="poster" value="<?php echo e($item->poster); ?>">
                </div>
            </div>
            <input name="id" type="hidden" value="<?php echo e($item->id); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field($item->id ? 'PUT' : 'POST'); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\trunk\resources\views/meme/meme/edit.blade.php ENDPATH**/ ?>