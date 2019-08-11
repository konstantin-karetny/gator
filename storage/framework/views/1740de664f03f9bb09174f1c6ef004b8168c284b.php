<?php $__env->startSection('content'); ?>
    <div class="row items">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="item col-12<?php echo e($item->liked ? ' liked' : ''); ?>">
                <header>
                    <h1><?php echo e($item->name); ?></h1>
                </header>
                <div class="body">
                    <?php if($item->type->alias == 'video'): ?>
                        <video preload="auto" poster="<?php echo e($item->preview); ?>" controls loop muted>
                            <source src="<?php echo e($item->body); ?>" type="video/mp4">
                        </video>
                    <?php else: ?>
                        <img src="<?php echo e($item->body); ?>">
                    <?php endif; ?>
                </div>
                <footer class="row">
                    <div class="col-6 text-left">
                        <div class="src">
                            <a href="<?php echo e($item->original_url); ?>" class="external-link" title="<?php echo app('translator')->getFromJson('app.src'); ?>" target="_blank">
                                <img src="<?php echo e($item->src->logo_url); ?>">
                                <span><?php echo e($item->src->name); ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="like">
                            <div class="btn-like fa-lg fa-heart <?php echo e($item->liked ? 'fas' : 'far'); ?>" onclick="IndexFront.<?php echo e($item->liked ? 'dis' : ''); ?>like(<?php echo e($item->getKey()); ?>)" title="<?php echo app('translator')->getFromJson($item->liked ? 'app.dislike' : 'app.like'); ?>"></div>
                            <div class="count"><?php echo e($item->likes()->count()); ?></div>
                        </div>
                        <div class="share">
                            <div class="btn-share fas fa-lg fa-share-alt" title="<?php echo app('translator')->getFromJson('app.share'); ?>"></div>
                        </div>
                        <div class="menu">
                            <div class="btn-menu fas fa-lg fa-ellipsis-h"></div>
                        </div>
                    </div>
                </footer>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($items->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\trunk\resources\views/meme/meme/indexfront.blade.php ENDPATH**/ ?>