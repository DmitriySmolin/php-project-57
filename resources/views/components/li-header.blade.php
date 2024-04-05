@props(['route', 'text'])

<li>
    <a href="{{ $route }}"
        {{ $attributes->merge(['class' => 'block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0']) }}>
        {{ $text }}
    </a>
</li>
