<nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900 shadow-md">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <!--Title-->
        <a href="<?php echo e(route('home')); ?>" class="flex items-center">
            <span
                class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"><?php echo e(config('app.name', 'Менеджер задач')); ?></span>
        </a>

        <!--Buttons-->
        <div class="flex items-center lg:order-2">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                    Выход
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                      style="display: none;">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                </form>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Вход
                </a>
                <a href="<?php echo e(route('register')); ?>"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                    Регистрация
                </a>
            <?php endif; ?>
        </div>

        <!--Menu-->
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="<?php echo e(route('task_statuses.index')); ?>"
                       class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                        Задачи
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('task_statuses.index')); ?>"
                       class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                        Статусы
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('task_statuses.index')); ?>"
                       class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                        Метки
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/neox56/php-project-57/resources/views/sections/header.blade.php ENDPATH**/ ?>