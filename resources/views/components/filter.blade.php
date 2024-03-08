<div>
    {{ Form::select($name, json_decode(htmlspecialchars_decode($items)), null, [$attributes->merge(['class' => 'rounded border-gray-300']), 'placeholder' => $default]) }}
</div>
@error($name)
<div class="text-rose-600">{{ $message }}</div>
@enderror
