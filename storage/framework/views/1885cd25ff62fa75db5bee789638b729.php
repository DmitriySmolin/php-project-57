<nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900 shadow-md">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <!--Title-->
        <a href="<?php echo e(route('home')); ?>" class="flex items-center">
            <span
                class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"><?php echo e(__('header.app_name')); ?></span>
        </a>

        <!--Menu-->
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <?php if (isset($component)) { $__componentOriginal451ac78eeb39307546b37631d4d5303d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal451ac78eeb39307546b37631d4d5303d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-header','data' => ['route' => ''.e(route('tasks.index')).'','text' => ''.e(__('header.tasks')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('li-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('tasks.index')).'','text' => ''.e(__('header.tasks')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal451ac78eeb39307546b37631d4d5303d)): ?>
<?php $attributes = $__attributesOriginal451ac78eeb39307546b37631d4d5303d; ?>
<?php unset($__attributesOriginal451ac78eeb39307546b37631d4d5303d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal451ac78eeb39307546b37631d4d5303d)): ?>
<?php $component = $__componentOriginal451ac78eeb39307546b37631d4d5303d; ?>
<?php unset($__componentOriginal451ac78eeb39307546b37631d4d5303d); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal451ac78eeb39307546b37631d4d5303d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal451ac78eeb39307546b37631d4d5303d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-header','data' => ['route' => ''.e(route('task_statuses.index')).'','text' => ''.e(__('header.statuses')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('li-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('task_statuses.index')).'','text' => ''.e(__('header.statuses')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal451ac78eeb39307546b37631d4d5303d)): ?>
<?php $attributes = $__attributesOriginal451ac78eeb39307546b37631d4d5303d; ?>
<?php unset($__attributesOriginal451ac78eeb39307546b37631d4d5303d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal451ac78eeb39307546b37631d4d5303d)): ?>
<?php $component = $__componentOriginal451ac78eeb39307546b37631d4d5303d; ?>
<?php unset($__componentOriginal451ac78eeb39307546b37631d4d5303d); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal451ac78eeb39307546b37631d4d5303d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal451ac78eeb39307546b37631d4d5303d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-header','data' => ['route' => ''.e(route('labels.index')).'','text' => ''.e(__('header.labels')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('li-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('labels.index')).'','text' => ''.e(__('header.labels')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal451ac78eeb39307546b37631d4d5303d)): ?>
<?php $attributes = $__attributesOriginal451ac78eeb39307546b37631d4d5303d; ?>
<?php unset($__attributesOriginal451ac78eeb39307546b37631d4d5303d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal451ac78eeb39307546b37631d4d5303d)): ?>
<?php $component = $__componentOriginal451ac78eeb39307546b37631d4d5303d; ?>
<?php unset($__componentOriginal451ac78eeb39307546b37631d4d5303d); ?>
<?php endif; ?>
            </ul>
        </div>

        <!--Buttons-->
        <div class="flex items-center lg:order-2">
            <?php if(auth()->guard()->check()): ?>
                <?php if (isset($component)) { $__componentOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-button','data' => ['route' => ''.e(route('logout')).'','text' => ''.e(__('header.logout')).'','class' => 'ml-2','dataMethod' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('logout')).'','text' => ''.e(__('header.logout')).'','class' => 'ml-2','data-method' => 'POST']); ?>
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





            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-button','data' => ['route' => ''.e(route('login')).'','text' => ''.e(__('header.login')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('login')).'','text' => ''.e(__('header.login')).'']); ?>
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
                <?php if (isset($component)) { $__componentOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb5b48b69fbd6989c24c2377cf6cf379 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link-button','data' => ['route' => ''.e(route('register')).'','text' => ''.e(__('header.register')).'','class' => 'ml-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('register')).'','text' => ''.e(__('header.register')).'','class' => 'ml-2']); ?>
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
            <?php endif; ?>
        </div>
    </div>
</nav>
<?php /**PATH /home/neox56/php-project-57/resources/views/sections/header.blade.php ENDPATH**/ ?>