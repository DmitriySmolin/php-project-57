<x-guest-layout>
    <h2 class="text-center">
        <a href="{{ route('home') }}">{{ config('app.name', 'Менеджер задач') }}</a>
    </h2>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>
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
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('views.auth.email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autofocus autocomplete="username"/>
            {{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('views.auth.password')"/>

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password"/>

            {{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                       name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('views.auth.remember_me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('password.request') }}">
                    {{ __('views.auth.forgot_your_password') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('views.auth.log_in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
