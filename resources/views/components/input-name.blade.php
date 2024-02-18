<div class="mt-2">
    {{ Form::text('name', null, ['class' => 'rounded border-gray-300 w-1/3']) }}
</div>
@error('name')
<div class="text-rose-600">{{ $message }}</div>
@enderror
