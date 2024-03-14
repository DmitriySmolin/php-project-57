@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task_status.edit.header') }}</h1>

        {{ Form::model($taskStatus, ['route' => ['task_statuses.update', $taskStatus], 'method' => 'PATCH', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <x-input-name label="{{ __('views.task_status.edit.name') }}" />
            <x-submit-button caption="{{ __('views.task_status.create.button') }}" />
        </div>
        {{ Form::close() }}
    </div>
@endsection
