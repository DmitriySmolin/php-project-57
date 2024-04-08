<?php $__env->startSection('content'); ?>
    <div class="grid col-span-full">
        <h1 class="mb-5"><?php echo e(__('views.task_status.index.header')); ?></h1>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Models\TaskStatus::class)): ?>
            <div>
                <?php if (isset($component)) { $__componentOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-button','data' => ['route' => ''.e(route('task_statuses.create')).'','text' => ''.e(__('views.task_status.index.create')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('task_statuses.create')).'','text' => ''.e(__('views.task_status.index.create')).'']); ?>
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
        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
            <tr>
                <th><?php echo e(__('views.task_status.index.id')); ?></th>
                <th><?php echo e(__('views.task_status.index.name')); ?></th>
                <th><?php echo e(__('views.task_status.index.created_at')); ?></th>
                <?php if(auth()->guard()->check()): ?>
                    <th><?php echo e(__('views.task_status.index.actions')); ?></th>
                <?php endif; ?>
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
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $status)): ?>
                                <?php if (isset($component)) { $__componentOriginalf6dac73e63bbf44706bb0ec50aef1094 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6dac73e63bbf44706bb0ec50aef1094 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-red','data' => ['route' => ''.e(route('task_statuses.destroy', $status->id)).'','confirm' => ''.e(__('views.actions.delete_confirm')).'','text' => ''.e(__('views.actions.delete')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-red'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('task_statuses.destroy', $status->id)).'','confirm' => ''.e(__('views.actions.delete_confirm')).'','text' => ''.e(__('views.actions.delete')).'']); ?>
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
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $status)): ?>
                                <?php if (isset($component)) { $__componentOriginal5daea5316faef6d36271d46477571114 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5daea5316faef6d36271d46477571114 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-blue','data' => ['route' => ''.e(route('task_statuses.edit', $status->id)).'','text' => ''.e(__('views.actions.edit')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-blue'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('task_statuses.edit', $status->id)).'','text' => ''.e(__('views.actions.edit')).'']); ?>
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
                            <?php endif; ?>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="mt-4">
            <?php echo e($taskStatuses->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox56/php-project-57/resources/views/task_status/index.blade.php ENDPATH**/ ?>