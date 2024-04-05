<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['route', 'text']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['route', 'text']); ?>
<?php foreach (array_filter((['route', 'text']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li>
    <a href="<?php echo e($route); ?>"
        <?php echo e($attributes->merge(['class' => 'block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0'])); ?>>
        <?php echo e($text); ?>

    </a>
</li>
<?php /**PATH /home/neox56/php-project-57/resources/views/components/li-header.blade.php ENDPATH**/ ?>