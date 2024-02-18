<div>
    <select {{ $attributes->merge(['class' => 'rounded border-gray-300']) }} name="{{ $name }}">
        <option selected="selected" value="">{{ $default }}</option>
        @foreach (json_decode(htmlspecialchars_decode($items)) as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>
