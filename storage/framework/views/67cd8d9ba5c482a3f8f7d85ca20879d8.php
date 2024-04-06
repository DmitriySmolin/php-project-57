<?php $__env->startSection('content'); ?>
    <div class="grid col-span-full">
        <h1 class="mb-5"><?php echo e(__('views.task.index.header')); ?></h1>

        <div class="w-full flex items-center">
            <div>
                <?php echo e(Form::open(['route' => 'tasks.index', 'method' => 'GET'])); ?>

                <div class="flex">
                    <div>
                        <?php echo e(Form::select('filter[status_id]', $taskStatusesById, Arr::get($filter, 'status_id'), ['class' => 'rounded border-gray-300', 'placeholder' =>  __('views.task.index.status')])); ?>

                    </div>
                    <div>
                        <?php echo e(Form::select('filter[created_by_id]', $usersById, Arr::get($filter, 'created_by_id'), ['class' => 'ml-2 rounded border-gray-300', 'placeholder' =>  __('views.task.index.created_by')])); ?>

                    </div>
                    <div>
                        <?php echo e(Form::select('filter[assigned_to_id]', $usersById, Arr::get($filter, 'assigned_to_id'), ['class' => 'ml-2 rounded border-gray-300', 'placeholder' =>  __('views.task.index.assigned_to')])); ?>

                    </div>
                    <div>
                        <?php echo e(Form::submit(__('views.task.index.apply'), ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2'])); ?>

                    </div>
                </div>
                <?php echo e(Form::close()); ?>

            </div>
            <?php if(auth()->guard()->check()): ?>
                <div class="ml-auto">
                    <?php if (isset($component)) { $__componentOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-button','data' => ['route' => ''.e(route('tasks.create')).'','text' => ''.e(__('views.task.index.create_task')).'','class' => 'ml-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('tasks.create')).'','text' => ''.e(__('views.task.index.create_task')).'','class' => 'ml-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb5b48b69fbd6989c24c2377cf6cf379)): ?>
<?php $attributes = $__attributesOriginalfb5b48b69fbd6989c24c2377cf6cf379; ?>
<?php unset($__attributesOriginalfb5b48b69fbd6989c24c2377cf6cf379); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb5b48b69fbd6989c24c2377cf6cf379)): ?>
<?php $component = $__componentOriginalfb5b48b69fbd6989c24c2377cf6cf379; ?>
<?php unset($__componentOriginalfb5b48b69fbd6989c24c2377cf6cf379); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
            <tr>
                <th><?php echo e(__('views.task.index.id')); ?></th>
                <th><?php echo e(__('views.task.index.status')); ?></th>
                <th><?php echo e(__('views.task.index.name')); ?></th>
                <th><?php echo e(__('views.task.index.created_by')); ?></th>
                <th><?php echo e(__('views.task.index.assigned_to')); ?></th>
                <th><?php echo e(__('views.task.index.created_at')); ?></th>
                <?php if(auth()->guard()->check()): ?>
                    <th><?php echo e(__('views.task.index.actions')); ?></th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b border-dashed text-left">
                    <td><?php echo e($task->id); ?></td>
                    <td><?php echo e($task->status->name); ?></td>
                    <td>
                        <?php if (isset($component)) { $__componentOriginal5daea5316faef6d36271d46477571114 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5daea5316faef6d36271d46477571114 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-blue','data' => ['route' => ''.e(route('tasks.show', $task->id)).'','text' => ''.e($task->name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-blue'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('tasks.show', $task->id)).'','text' => ''.e($task->name).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5daea5316faef6d36271d46477571114)): ?>
<?php $attributes = $__attributesOriginal5daea5316faef6d36271d46477571114; ?>
<?php unset($__attributesOriginal5daea5316faef6d36271d46477571114); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5daea5316faef6d36271d46477571114)): ?>
<?php $component = $__componentOriginal5daea5316faef6d36271d46477571114; ?>
<?php unset($__componentOriginal5daea5316faef6d36271d46477571114); ?>
<?php endif; ?>
                    </td>
                    <td><?php echo e($task->createdBy->name); ?></td>
                    <td><?php echo e(optional($task->assignedTo)->name); ?></td>
                    <td><?php echo e($task->created_at->format('d.m.Y')); ?></td>
                    <?php if(auth()->guard()->check()): ?>
                        <td>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $task)): ?>
                                <?php if (isset($component)) { $__componentOriginalf6dac73e63bbf44706bb0ec50aef1094 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6dac73e63bbf44706bb0ec50aef1094 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-red','data' => ['route' => ''.e(route('tasks.destroy', $task->id)).'','confirm' => ''.e(__('views.actions.delete_confirm')).'','text' => ''.e(__('views.actions.delete')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-red'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('tasks.destroy', $task->id)).'','confirm' => ''.e(__('views.actions.delete_confirm')).'','text' => ''.e(__('views.actions.delete')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6dac73e63bbf44706bb0ec50aef1094)): ?>
<?php $attributes = $__attributesOriginalf6dac73e63bbf44706bb0ec50aef1094; ?>
<?php unset($__attributesOriginalf6dac73e63bbf44706bb0ec50aef1094); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6dac73e63bbf44706bb0ec50aef1094)): ?>
<?php $component = $__componentOriginalf6dac73e63bbf44706bb0ec50aef1094; ?>
<?php unset($__componentOriginalf6dac73e63bbf44706bb0ec50aef1094); ?>
<?php endif; ?>
                            <?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal5daea5316faef6d36271d46477571114 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5daea5316faef6d36271d46477571114 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-blue','data' => ['route' => ''.e(route('tasks.edit', $task->id)).'','text' => ''.e(__('views.actions.edit')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-blue'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('tasks.edit', $task->id)).'','text' => ''.e(__('views.actions.edit')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5daea5316faef6d36271d46477571114)): ?>
<?php $attributes = $__attributesOriginal5daea5316faef6d36271d46477571114; ?>
<?php unset($__attributesOriginal5daea5316faef6d36271d46477571114); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5daea5316faef6d36271d46477571114)): ?>
<?php $component = $__componentOriginal5daea5316faef6d36271d46477571114; ?>
<?php unset($__componentOriginal5daea5316faef6d36271d46477571114); ?>
<?php endif; ?>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="mt-4">
            <?php echo e($tasks->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox56/php-project-57/resources/views/task/index.blade.php ENDPATH**/ ?>