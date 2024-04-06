<div>
    <?php echo e(Form::label('name', $label)); ?>

</div>
<div class="mt-2">
    <?php echo e(Form::text('name', null, ['class' => 'rounded border-gray-300 w-1/3'])); ?>

</div>
<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<div class="text-rose-600"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH /home/neox56/php-project-57/resources/views/components/input-name.blade.php ENDPATH**/ ?>