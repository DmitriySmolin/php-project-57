@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task_status.index.header') }}</h1>
        @can('create', App\Models\TaskStatus::class)
            <div>
                <x-link-button route="{{ route('task_statuses.create') }}"
                               text="{{ __('views.task_status.index.create') }}"/>
            </div>
        @endcan
        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
            <tr>
                <th>{{ __('views.task_status.index.id') }}</th>
                <th>{{ __('views.task_status.index.name') }}</th>
                <th>{{ __('views.task_status.index.created_at') }}</th>
                @auth
                    <th>{{ __('views.task_status.index.actions') }}</th>
                @endauth
            </tr>
            </thead>
            <tbody>
            @foreach ($taskStatuses as $status)
                <tr class="border-b border-dashed text-left">
                    <td>{{ $status->id }}</td>
                    <td>{{ $status->name }}</td>
                    <td>{{ $status->created_at->format('d.m.Y') }}</td>
                    @auth
                        <td>
                            @can('delete', $status)
                                <x-link-red route="{{ route('task_statuses.destroy', $status->id) }}"
                                            confirm="{{ __('views.actions.delete_confirm') }}"
                                            text="{{ __('views.actions.delete') }}"/>
                            @endcan
                            @can('update', $status)
                                <x-link-blue route="{{ route('task_statuses.edit', $status->id) }}"
                                             text="{{ __('views.actions.edit') }}"/>
                            @endcan
                        </td>
                    @endauth
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $taskStatuses->links() }}
        </div>
    </div>
@endsection
