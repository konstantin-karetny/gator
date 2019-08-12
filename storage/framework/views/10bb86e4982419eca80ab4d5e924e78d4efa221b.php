<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="form-group row">
            <div class="header col-sm">
                <h1><?php echo app('translator')->getFromJson('app.memes'); ?></h1>
            </div>
            <div class="btns col-sm text-sm-right">
                <a class="btn btn-success" href="<?php echo e(route('meme.create')); ?>"><?php echo app('translator')->getFromJson('app.new'); ?></a>
            </div>
        </div>
        <table>
            <tr>
                <th>#</th>
                <th class="text-left"><?php echo app('translator')->getFromJson('app.name'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.src'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.type'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.permanent'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.edit'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.delete'); ?></th>
            </tr>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td class="text-left"><?php echo e($item->name); ?></td>
                    <td class="src">
                        <a href="<?php echo e($item->original_url); ?>" title="<?php echo e($item->src->name); ?>" target="_blank">
                            <img src="<?php echo e($item->src->logo_url); ?>">
                        </a>
                    </td>
                    <td>
                        <i class="fas fa-lg fa-<?php echo e($item->type->alias); ?>" title="<?php echo app('translator')->getFromJson('app.' . $item->type->alias); ?>"></i>
                    </td>
                    <td>
                        <?php if($item->permanent): ?>
                            <i class="far fa-lg fa-check-circle text-success" title="<?php echo app('translator')->getFromJson('app.yes'); ?>"></i>
                        <?php else: ?>
                            <i class="far fa-lg fa-times-circle text-danger" title="<?php echo app('translator')->getFromJson('app.no'); ?>"></i>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="fas fa-lg fa-edit" href="<?php echo e(route('meme.edit', $item->id)); ?>" title="<?php echo app('translator')->getFromJson('app.edit'); ?>"></a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('meme.destroy', $item->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="fas fa-lg fa-trash-alt text-danger btn-delete" onclick="return confirm('<?php echo app('translator')->getFromJson('app.sure'); ?>');" title="<?php echo app('translator')->getFromJson('app.delete'); ?>"></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php echo e($items->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\resources\views/meme/meme/index.blade.php ENDPATH**/ ?>