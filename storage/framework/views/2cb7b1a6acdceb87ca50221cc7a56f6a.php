<?php $__env->startSection('content'); ?>
    <div class="grid col-span-full">
        <h1 class="mb-5"><?php echo e(__('views.task_status.create.header')); ?></h1>

        <form method="POST" action="<?php echo e(route('task_statuses.store')); ?>" accept-charset="UTF-8" class="w-50"><input
                name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
            <div class="flex flex-col">
                <div>
                    <label for="name"><?php echo e(__('views.task_status.create.label')); ?></label>
                </div>
                <div class="mt-2">
                    <input class="rounded border-gray-300 w-1/3" name="name" type="text" id="name">
                </div>
                <div class="mt-2">
                    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"
                           value="<?php echo e(__('views.task_status.create.button')); ?>">
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox56/php-project-57/resources/views/task_status/create.blade.php ENDPATH**/ ?>