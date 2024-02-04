<?php $__env->startSection('content'); ?>
    <div class="grid col-span-full">
        <h1 class="mb-5"><?php echo e(__('views.task_status.create.header')); ?></h1>

        <?php echo e(Form::open(['route' => 'task_statuses.store', 'method' => 'POST', 'class' => 'w-50'])); ?>

            <div class="flex flex-col">
                <div>
                    <?php echo e(Form::label('name', __('views.task_status.create.label'))); ?>

                </div>
                <div class="mt-2">
                    <?php echo e(Form::text('name', null, ['class' => 'rounded border-gray-300 w-1/3'])); ?>

                </div>
                <div class="mt-2">
                    <?php echo e(Form::submit(__('views.task_status.create.button'), ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'])); ?>

                </div>
            </div>
        <?php echo e(Form::close()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox56/php-project-57/resources/views/task_status/create.blade.php ENDPATH**/ ?>