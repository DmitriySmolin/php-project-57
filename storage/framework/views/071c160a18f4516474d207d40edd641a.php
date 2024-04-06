<?php $__env->startSection('content'); ?>
    <div class="grid col-span-full">
        <h1 class="mb-5"><?php echo e(__('views.label.edit.header')); ?></h1>

        <?php echo e(Form::model($label, ['route' => ['labels.update', $label], 'method' => 'PATCH', 'class' => 'w-50'])); ?>

        <div class="flex flex-col">
            <?php if (isset($component)) { $__componentOriginal83f1ff30eacabf0339f0b7150ac4cb73 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal83f1ff30eacabf0339f0b7150ac4cb73 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-name','data' => ['label' => ''.e(__('views.label.edit.name')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-name'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('views.label.edit.name')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal83f1ff30eacabf0339f0b7150ac4cb73)): ?>
<?php $attributes = $__attributesOriginal83f1ff30eacabf0339f0b7150ac4cb73; ?>
<?php unset($__attributesOriginal83f1ff30eacabf0339f0b7150ac4cb73); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal83f1ff30eacabf0339f0b7150ac4cb73)): ?>
<?php $component = $__componentOriginal83f1ff30eacabf0339f0b7150ac4cb73; ?>
<?php unset($__componentOriginal83f1ff30eacabf0339f0b7150ac4cb73); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginala31763ff1b17acc42925dfba18e345e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala31763ff1b17acc42925dfba18e345e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.textarea-description','data' => ['label' => ''.e(__('views.label.edit.description')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('textarea-description'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('views.label.edit.description')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala31763ff1b17acc42925dfba18e345e1)): ?>
<?php $attributes = $__attributesOriginala31763ff1b17acc42925dfba18e345e1; ?>
<?php unset($__attributesOriginala31763ff1b17acc42925dfba18e345e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala31763ff1b17acc42925dfba18e345e1)): ?>
<?php $component = $__componentOriginala31763ff1b17acc42925dfba18e345e1; ?>
<?php unset($__componentOriginala31763ff1b17acc42925dfba18e345e1); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal13113c9f32f6116c43cb9fbecee94495 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13113c9f32f6116c43cb9fbecee94495 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.submit-button','data' => ['caption' => ''.e(__('views.label.edit.button')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('submit-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['caption' => ''.e(__('views.label.edit.button')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal13113c9f32f6116c43cb9fbecee94495)): ?>
<?php $attributes = $__attributesOriginal13113c9f32f6116c43cb9fbecee94495; ?>
<?php unset($__attributesOriginal13113c9f32f6116c43cb9fbecee94495); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal13113c9f32f6116c43cb9fbecee94495)): ?>
<?php $component = $__componentOriginal13113c9f32f6116c43cb9fbecee94495; ?>
<?php unset($__componentOriginal13113c9f32f6116c43cb9fbecee94495); ?>
<?php endif; ?>
        </div>
        <?php echo e(Form::close()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox56/php-project-57/resources/views/label/edit.blade.php ENDPATH**/ ?>