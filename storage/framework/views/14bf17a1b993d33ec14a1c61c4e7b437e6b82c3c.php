<?php $__env->startSection('content'); ?>
    <div class="row items">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item col-12">
                <header>
                    <h1>
                        <?php echo e($item->name); ?>

                    </h1>
                </header>
                <div class="body">
                    <?php if($types[$item->type_id]->alias == 'video'): ?>
                        <video preload="auto" poster="<?php echo e($item->poster); ?>" controls loop muted>
                            <source src="<?php echo e($item->body); ?>" type="video/mp4">
                        </video>
                    <?php else: ?>
                        <img src="<?php echo e($item->body); ?>">
                    <?php endif; ?>
                </div>
                <?php if($item->tags): ?>
                    <ul class="tags">
                        <?php $__currentLoopData = $item->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="/">#<?php echo e($tag['key']); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
                <div class="src">
                    <a href="http://9gag.com/gag/<?php echo e($item->original_id); ?>" target="_blank">
                        <img src="<?php echo e($srcs[$item->src_id]->favicon); ?>"><!--
                     --><span>http://9gag.com/gag/<?php echo e($item->original_id); ?></span>
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($items->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\resources\views/meme/meme/indexfront.blade.php ENDPATH**/ ?>