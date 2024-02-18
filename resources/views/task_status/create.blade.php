@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task_status.create.header') }}</h1>

        {{ Form::open(['route' => 'task_statuses.store', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <div>
                {{ Form::label('name', __('views.task_status.create.label')) }}
            </div>
            <x-input-name />
            <div class="mt-2">
                {{ Form::submit(__('views.task_status.create.button'), ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded']) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection
