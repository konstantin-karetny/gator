<?php $__env->startSection('content'); ?>
    <div class="panel-body">
        <form action="<?php echo e(url('task')); ?>" method="POST" class="form-horizontal">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
              <label for="task" class="col-sm-3 control-label">Task</label>
              <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-offset-3 col-sm-6">
                  <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>Save
                  </button>
              </div>
          </div>
        </form>
    </div>
    <?php if(count($tasks) > 0): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                          <th>Task</th>
                          <th>&nbsp;</th>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="table-text">
                                <div><?php echo e($task->name); ?></div>
                            </td>
                            <td>
                                <form action="<?php echo e(url('task/'.$task->id)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>

                                    <button type="submit" id="delete-task-<?php echo e($task->id); ?>" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.gator.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\gator\resources\views/tasks/index.blade.php ENDPATH**/ ?>