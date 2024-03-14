@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task.edit.header') }}</h1>

        {{ Form::model($task, ['route' => ['tasks.update', $task], 'method' => 'PATCH', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <x-input-name label="{{ __('views.task.edit.name') }}" />
            <x-textarea-description label="{{ __('views.task.edit.description') }}" />
            <div class="mt-2">
                {{ Form::label('status_id', __('views.task.edit.status')) }}
            </div>
            <div>
                {{ Form::select('status_id', $taskStatuses, null, ['class' => 'rounded border-gray-300 w-1/3', 'placeholder' => __('views.task.create.placeholder')]) }}
            </div>
            @error('status_id')
            <div class="text-rose-600">{{ $message }}</div>
            @enderror
            <div class="mt-2">
                {{ Form::label('assigned_to_id', __('views.task.edit.assigned_to')) }}
            </div>
            <div>
                {{ Form::select('assigned_to_id', $users, null, ['class' => 'rounded border-gray-300 w-1/3', 'placeholder' => __('views.task.create.placeholder')]) }}
            </div>
            <div class="mt-2">
                {{ Form::label('labels', __('views.task.edit.labels')) }}
            </div>
            <div>
                {{ Form::select('labels', $labels, null, ['class' => 'rounded border-gray-300 w-1/3 h-32', 'name' => 'labels[]', 'placeholder' => '', 'multiple' => 'multiple']) }}
            </div>
            <x-submit-button caption="{{ __('views.task.edit.button') }}" />
        </div>
        </form>
    </div>
@endsection
