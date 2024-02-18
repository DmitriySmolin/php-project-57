<nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900 shadow-md">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <!--Title-->
        <a href="{{ route('home') }}" class="flex items-center">
            <span
                class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ __('header.app_name') }}
            </span>
        </a>

        <!--Menu-->
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <x-li-header route="{{ route('tasks.index') }}" text="{{ __('header.tasks') }}"/>
                <x-li-header route="{{ route('task_statuses.index') }}" text="{{ __('header.statuses') }}"/>
                <x-li-header route="{{ route('task_statuses.index') }}" text="{{ __('header.labels') }}"/>
            </ul>
        </div>

        <!--Buttons-->
        <div class="flex items-center lg:order-2">
            @auth
                <x-link-button route="{{ route('logout') }}" text="{{ __('header.logout') }}" class="ml-2"
                               data-method="POST"/>
            @else
                <x-link-button route="{{ route('login') }}" text="{{ __('header.login') }}"/>
                <x-link-button route="{{ route('register') }}" text="{{ __('header.register') }}" class="ml-2"/>
            @endauth
        </div>
    </div>
</nav>
