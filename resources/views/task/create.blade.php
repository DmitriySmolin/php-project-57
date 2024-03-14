@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task.create.header') }}</h1>

        {{ Form::open(['route' => 'tasks.store', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <x-input-name label="{{ __('views.task.create.name') }}" />
            <x-textarea-description label="{{ __('views.task.create.description') }}" />
            <div class="mt-2">
                {{ Form::label('status_id', __('views.task.create.status')) }}
            </div>
            <div>
                {{ Form::select('status_id', $taskStatuses, null, ['class' => 'rounded border-gray-300 w-1/3', 'placeholder' => __('views.task.create.placeholder')]) }}
            </div>
            @error('status_id')
            <div class="text-rose-600">{{ $message }}</div>
            @enderror
            <div class="mt-2">
                {{ Form::label('assigned_to_id', __('views.task.create.assigned_to')) }}
            </div>
            <div>
                {{ Form::select('assigned_to_id', $users, null, ['class' => 'rounded border-gray-300 w-1/3', 'placeholder' => __('views.task.create.placeholder')]) }}
            </div>
            <div class="mt-2">
                {{ Form::label('labels', __('views.task.create.labels')) }}
            </div>
            <div>
                {{ Form::select('labels', $labels, null, ['class' => 'rounded border-gray-300 w-1/3 h-32', 'name' => 'labels[]', 'placeholder' => '', 'multiple' => 'multiple']) }}
            </div>
            <x-submit-button caption="{{ __('views.task.create.button') }}" />
        </div>
        {{ Form::close() }}
    </div>
@endsection
