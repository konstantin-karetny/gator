<div class="container msgs">
    <div>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="alert alert-danger"><?php echo e($msg); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(Session::get('msg')): ?>
                <li class="alert alert-success"><?php echo e(Session::get('msg')); ?></li>
            <?php endif; ?>
        </ul>
    </div>
</div><?php /**PATH C:\OSPanel\domains\gator\resources\views/layouts/msgs.blade.php ENDPATH**/ ?>