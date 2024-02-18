@props(['route', 'text'])

<a href="{{ $route }}" {{ $attributes->merge(['class' => 'text-blue-600 hover:text-blue-900']) }}>
    {{ $text }}
</a>
