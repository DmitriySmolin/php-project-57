@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task.index.header') }}</h1>

        <div class="w-full flex items-center">
            <div>
                {{ Form::open(['route' => 'tasks.index', 'method' => 'GET']) }}
                <div class="flex">
                    <div>
                        <select class="rounded border-gray-300" name="filter[status_id]">
                            <option selected="selected" value="">{{ __('views.task.index.status') }}</option>
                            @foreach ($taskStatuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select class="ml-2 rounded border-gray-300" name="filter[created_by_id]">
                            <option selected="selected" value="">{{ __('views.task.index.created_by') }}</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select class="ml-2 rounded border-gray-300" name="filter[assigned_to_id]">
                            <option selected="selected" value="">{{ __('views.task.index.assigned_to') }}</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2"
                               type="submit" value="{{ __('views.task.index.apply') }}">
                    </div>

                </div>
                {{ Form::close() }}
            </div>

            <div class="ml-auto">
                <a href="{{ route('tasks.create') }}"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                    {{ __('views.task.index.create_task') }}
                </a>
            </div>
        </div>

        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
            <tr>
                <th>{{ __('views.task.index.id') }}</th>
                <th>{{ __('views.task.index.status') }}</th>
                <th>{{ __('views.task.index.name') }}</th>
                <th>{{ __('views.task.index.created_by') }}</th>
                <th>{{ __('views.task.index.assigned_to') }}</th>
                <th>{{ __('views.task.index.created_at') }}</th>
                @auth
                    <th>{{ __('views.task.index.actions') }}</th>
                @endauth
            </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr class="border-b border-dashed text-left">
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->status->name }}</td>
                    <td>
                        <a class="text-blue-600 hover:text-blue-900" href="{{ route('tasks.show', $task->id) }}">
                            {{ $task->name }}
                        </a>
                    </td>
                    <td>{{ $task->createdBy->name }}</td>
                    <td>{{ $task->assignedTo->name }}</td>
                    <td>{{ $task->created_at->format('d.m.Y') }}</td>
                    @auth
                        <td>
                            <a data-confirm="{{ __('views.task.index.delete_confirm') }}" data-method="DELETE" href="{{ route('tasks.destroy', $task->id) }}"
                               class="text-red-600 hover:text-red-900">
                                {{ __('views.task.index.delete') }}
                            </a>
                            <a href="{{ route('tasks.edit', $task->id) }}"
                               class="text-blue-600 hover:text-blue-900">
                                {{ __('views.task.index.edit') }}
                            </a>
                        </td>
                    @endauth
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $tasks->links() }}
        </div>
    </div>
@endsection
