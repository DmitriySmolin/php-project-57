<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['route', 'text', 'confirm']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['route', 'text', 'confirm']); ?>
<?php foreach (array_filter((['route', 'text', 'confirm']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a data-confirm="<?php echo e($confirm); ?>" data-method="DELETE" href="<?php echo e($route); ?>"
    <?php echo e($attributes->merge(['class' => 'text-red-600 hover:text-red-900'])); ?>>
    <?php echo e($text); ?>

</a>
<?php /**PATH /home/neox56/php-project-57/resources/views/components/link-red.blade.php ENDPATH**/ ?>