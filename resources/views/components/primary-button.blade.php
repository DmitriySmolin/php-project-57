<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-500 rounded font-bold text-white hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-700 ml-3']) }}>
    {{ $slot }}
</button>
