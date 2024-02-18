@props(['route', 'text', 'confirm'])

<a data-confirm="{{ $confirm }}" data-method="DELETE" href="{{ $route }}"
    {{ $attributes->merge(['class' => 'text-red-600 hover:text-red-900']) }}>
    {{ $text }}
</a>
