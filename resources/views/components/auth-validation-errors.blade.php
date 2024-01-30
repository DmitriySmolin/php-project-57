@props(['errors'])
<!--Validation Errors-->
@if ($errors->any())
    <div class="mb-4">
        <div class="font-medium text-red-600">
            Упс! Что-то пошло не так:
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
