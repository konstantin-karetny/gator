<?php $__env->startSection('content'); ?>
    <div class="<?php echo e($class); ?> container">
        <div class="row">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item col-12">
                    <header>
                        <h1>
                            <?php echo $item->name; ?>

                        </h1>
                    </header>
                    <div class="body">
                        <?php if($item->video): ?>
                            <video preload="auto" poster="<?php echo e($item->image); ?>" controls loop muted>
                                <source src="<?php echo e($item->video); ?>" type="video/mp4">
                            </video>
                        <?php else: ?>
                            <img src="<?php echo e($item->image); ?>">
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
                        <a href="<?php echo e($item->url); ?>" target="_blank">
                            <img src="https://assets-9gag-fun.9cache.com/s/fab0aa49/deda323611ca8f5cb81c52136e6b0948fad550c6/static/dist/core/img/favicon.ico"><!--
                         --><span>
                                <?php echo e($item->url); ?>

                            </span>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\trunk\resources\views/post/items.blade.php ENDPATH**/ ?>