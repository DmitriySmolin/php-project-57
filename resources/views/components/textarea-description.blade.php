<div class="mt-2">
    {{ Form::label('description', $label) }}
</div>
<div class="mt-2">
    {{ Form::textarea('description', null, ['class' => 'rounded border-gray-300 w-1/3 h-32', 'cols' => '50', 'rows' => '10']) }}
</div>
@error('description')
<div class="text-rose-600">{{ $message }}</div>
@enderror
