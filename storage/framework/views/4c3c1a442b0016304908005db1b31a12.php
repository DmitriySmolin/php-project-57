<?php $__env->startSection('content'); ?>
    <div class="grid col-span-full">
        <h1 class="mb-5"><?php echo e(__('views.task_status.index.header')); ?></h1>
        <?php if(auth()->guard()->check()): ?>
            <div>
                <a href="<?php echo e(route('task_statuses.create')); ?>"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <?php echo e(__('views.task_status.index.create')); ?>

                </a>
            </div>
        <?php endif; ?>
        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
            <tr>
                <th><?php echo e(__('views.task_status.index.id')); ?></th>
                <th><?php echo e(__('views.task_status.index.name')); ?></th>
                <th><?php echo e(__('views.task_status.index.created_at')); ?></th>
                <?php if(auth()->guard()->check()): ?><th><?php echo e(__('views.task_status.index.actions')); ?></th><?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $taskStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b border-dashed text-left">
                    <td><?php echo e($status->id); ?></td>
                    <td><?php echo e($status->name); ?></td>
                    <td><?php echo e($status->created_at->format('d.m.Y')); ?></td>
                    <?php if(auth()->guard()->check()): ?>
                        <td>
                            <a data-confirm="__('views.task_status.index.delete_confirm')" data-method="delete" class="text-red-600 hover:text-red-900"
                               href="<?php echo e(route('task_statuses.destroy', $status->id)); ?>">
                                <?php echo e(__('views.task_status.index.delete')); ?>

                            </a>
                            <a class="text-blue-600 hover:text-blue-900"
                               href="<?php echo e(route('task_statuses.edit', $status->id)); ?>">
                                <?php echo e(__('views.task_status.index.edit')); ?>

                            </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox56/php-project-57/resources/views/task_status/index.blade.php ENDPATH**/ ?>