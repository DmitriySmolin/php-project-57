<?php $__env->startSection('content'); ?>
    <div class="grid col-span-full">
        <h2 class="mb-5">
            <?php echo e(__('views.task.show.header')); ?>

            <?php echo e($task->name); ?>

            <a href="<?php echo e(route('tasks.edit', $task->id)); ?>">⚙</a>
        </h2>
        <p><span class="font-black"><?php echo e(__('views.task.show.name')); ?></span> <?php echo e($task->name); ?></p>
        <p><span class="font-black"><?php echo e(__('views.task.show.status')); ?></span> <?php echo e($task->status->name); ?></p>
        <p><span class="font-black"><?php echo e(__('views.task.show.description')); ?></span> <?php echo e($task->description); ?></p>
        <p><span class="font-black"><?php echo e(__('views.task.show.labels')); ?></span></p>
        <div>
            <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-700 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                        </path>
                    </svg>
                    <?php echo e($label->name); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox56/php-project-57/resources/views/task/show.blade.php ENDPATH**/ ?>