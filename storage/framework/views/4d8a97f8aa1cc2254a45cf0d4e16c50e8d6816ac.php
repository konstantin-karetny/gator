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
                <label for="permanent" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.permanent'); ?></label>
                <div class="col-sm-10 col-form-input">
                    <input id="permanent" class="form-control" name="permanent" type="checkbox" data-toggle="toggle" data-on="<?php echo app('translator')->getFromJson('app.yes'); ?>" data-off="<?php echo app('translator')->getFromJson('app.no'); ?>" data-onstyle="success" data-offstyle="danger" value="1"<?php echo e($item->permanent ? ' checked' : ''); ?>>
                </div>
            </div>
            <div class="form-group row required">
                <label for="src_id" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.src'); ?></label>
                <div class="col-sm-10 col-form-input">
                    <select id="src_id" class="form-control" name="src_id" required>
                        <?php $__currentLoopData = $srcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $src): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($src->id); ?>"<?php echo e($src->id == $item->src_id ? ' selected' : ''); ?>><?php echo e($src->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="form-group row required">
                <label for="original_id" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.original_id'); ?></label>
                <div class="col-sm-10 col-form-input">
                    <input id="original_id" class="form-control" name="original_id" value="<?php echo e($item->original_id); ?>" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="name" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.name'); ?></label>
                <div class="col-sm-10 col-form-input">
                    <input id="name" class="form-control" name="name" value="<?php echo e($item->name); ?>" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="type_id" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.type'); ?></label>
                <div class="col-sm-10 col-form-input">
                    <select id="type_id" class="form-control" name="type_id" value="<?php echo e($item->type_id); ?>" required>
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type->id); ?>"<?php echo e($type->id == $item->type_id ? ' selected' : ''); ?>><?php echo app('translator')->getFromJson('app.' . $type->alias); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="form-group row required">
                <label for="body" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.body'); ?></label>
                <div class="col-sm-10 col-form-input">
                    <input id="body" class="form-control" name="body" value="<?php echo e($item->body); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="preview" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.preview'); ?></label>
                <div class="col-sm-10 col-form-input">
                    <input id="preview" class="form-control" name="preview" value="<?php echo e($item->preview); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label"><?php echo app('translator')->getFromJson('app.description'); ?></label>
                <div class="col-sm-10 col-form-input">
                    <textarea id="description" class="form-control" name="description"><?php echo e($item->description); ?></textarea>
                </div>
            </div>
            <input name="id" type="hidden" value="<?php echo e($item->id); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field($item->id ? 'PUT' : 'POST'); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\trunk\resources\views/meme/meme/edit.blade.php ENDPATH**/ ?>