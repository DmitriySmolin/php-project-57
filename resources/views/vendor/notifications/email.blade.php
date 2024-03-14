<x-mail::message>
    {{-- Greeting --}}
    # {{ __('email.greeting') }}

    {{-- Intro Lines --}}
    {{ __('email.confirm_email') }}

    {{-- Action Button --}}
    <x-mail::button :url="$actionUrl">
        {{ __('email.confirm_email_action') }}
    </x-mail::button>

    {{-- Outro Lines --}}
    {!! __('email.no_further_action', ['app_name' => config('app.name')]) !!}

    {{-- Salutation --}}
    {{ __('email.salutation') }}, <br>
    {{ config('app.name') }}

    {{-- Subcopy --}}
    <x-slot:subcopy>
        {!! __('email.copy_paste', ['actionText' => __('email.confirm_email_action')]) !!}
        <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
    </x-slot:subcopy>
</x-mail::message>
