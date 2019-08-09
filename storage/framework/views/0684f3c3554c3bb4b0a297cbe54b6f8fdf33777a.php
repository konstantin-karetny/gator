<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="form-group row">
            <div class="header col-sm">
                <h1><?php echo app('translator')->getFromJson('app.srcs'); ?></h1>
            </div>
            <div class="btns col-sm text-sm-right">
                <a class="btn btn-success" href="<?php echo e(route('src.create')); ?>"><?php echo app('translator')->getFromJson('app.new'); ?></a>
            </div>
        </div>
        <table>
            <tr>
                <th>#</th>
                <th><?php echo app('translator')->getFromJson('app.favicon'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.name'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.alias'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.url'); ?></th>
                <th><?php echo app('translator')->getFromJson('app.delete'); ?></th>
            </tr>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td class="favicon">
                        <img src="<?php echo e($item->favicon); ?>">
                    </td>
                    <td>
                        <a href="<?php echo e(route('src.edit', $item->id)); ?>" title="<?php echo app('translator')->getFromJson('app.edit'); ?>"><?php echo e($item->name); ?></a>
                    </td>
                    <td><?php echo e($item->alias); ?></td>
                    <td>
                        <a class="external_link" href="<?php echo e($item->url); ?>" target="_blank"><?php echo e($item->url); ?></a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('src.destroy', $item->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="fas fa-trash-alt text-danger btn-delete" onclick="return confirm('<?php echo app('translator')->getFromJson('app.sure'); ?>');" title="<?php echo app('translator')->getFromJson('app.delete'); ?>"></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php echo e($items->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\resources\views/meme/src/index.blade.php ENDPATH**/ ?>