@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task_status.edit.header') }}</h1>

        {{ Form::model($taskStatus, ['route' => ['task_statuses.update', $taskStatus], 'method' => 'PATCH', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <div>
                {{ Form::label('name', __('views.task_status.edit.label')) }}
            </div>
            <x-input-name />
            <div class="mt-2">
                {{ Form::submit(__('views.task_status.edit.button'), ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded']) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection
