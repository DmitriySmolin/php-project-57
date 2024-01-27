@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">Статусы</h1>
        @auth
            <div>
                <a href="https://php-task-manager-ru.hexlet.app/task_statuses/create"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Создать статус
                </a>
            </div>
        @endauth
        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b border-dashed text-left">
                <td>1</td>
                <td>новая</td>
                <td>16.11.2023</td>
                <td>
                    <a data-confirm="Вы уверены?" data-method="delete" class="text-red-600 hover:text-red-900"
                       href="https://php-task-manager-ru.hexlet.app/task_statuses/1">
                        Удалить </a>
                    <a class="text-blue-600 hover:text-blue-900"
                       href="https://php-task-manager-ru.hexlet.app/task_statuses/1/edit">
                        Изменить </a>
                </td>
            </tr>
            <tr class="border-b border-dashed text-left">
                <td>2</td>
                <td>завершена</td>
                <td>16.11.2023</td>
                <td>
                    <a data-confirm="Вы уверены?" data-method="delete" class="text-red-600 hover:text-red-900"
                       href="https://php-task-manager-ru.hexlet.app/task_statuses/2">
                        Удалить </a>
                    <a class="text-blue-600 hover:text-blue-900"
                       href="https://php-task-manager-ru.hexlet.app/task_statuses/2/edit">
                        Изменить </a>
                </td>
            </tr>
            <tr class="border-b border-dashed text-left">
                <td>3</td>
                <td>выполняется</td>
                <td>16.11.2023</td>
                <td>
                    <a data-confirm="Вы уверены?" data-method="delete" class="text-red-600 hover:text-red-900"
                       href="https://php-task-manager-ru.hexlet.app/task_statuses/3">
                        Удалить </a>
                    <a class="text-blue-600 hover:text-blue-900"
                       href="https://php-task-manager-ru.hexlet.app/task_statuses/3/edit">
                        Изменить </a>
                </td>
            </tr>
            <tr class="border-b border-dashed text-left">
                <td>4</td>
                <td>в архиве</td>
                <td>16.11.2023</td>
                <td>
                    <a data-confirm="Вы уверены?" data-method="delete" class="text-red-600 hover:text-red-900"
                       href="https://php-task-manager-ru.hexlet.app/task_statuses/4">
                        Удалить </a>
                    <a class="text-blue-600 hover:text-blue-900"
                       href="https://php-task-manager-ru.hexlet.app/task_statuses/4/edit">
                        Изменить </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
