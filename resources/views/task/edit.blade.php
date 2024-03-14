@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task.edit.header') }}</h1>

        {{ Form::model($task, ['route' => ['tasks.update', $task], 'method' => 'PATCH', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <div>
                {{ Form::label('name', __('views.task.edit.name')) }}
            </div>
            <x-input-name />
            <div class="mt-2">
                {{ Form::label('description', __('views.task.edit.description')) }}
            </div>
            <div>
                {{ Form::textarea('description', null, ['class' => 'rounded border-gray-300 w-1/3 h-32', 'cols' => '50', 'rows' => '10']) }}
            </div>
            <div class="mt-2">
                {{ Form::label('status_id', __('views.task.edit.status')) }}
            </div>
            <x-filter name="status_id" placeholder="{{ __('views.task.edit.placeholder') }}"
                      items="{{ json_encode($taskStatuses->pluck('name', 'id')) }}" class="w-1/3" />
            <div class="mt-2">
                {{ Form::label('assigned_to_id', __('views.task.edit.assigned_to')) }}
            </div>
            <x-filter name="assigned_to_id" placeholder="{{ __('views.task.edit.placeholder') }}"
                      items="{{ json_encode($users->pluck('name', 'id')) }}" class="w-1/3" />
            <div class="mt-2">
                {{ Form::label('labels', __('views.task.edit.labels')) }}
            </div>
            <x-filter name="labels[]" id="labels" placeholder="" multiple="multiple"
                      items="{{ json_encode($labels->pluck('name', 'id')) }}" class="w-1/3 h-32" />
            <x-submit-button caption="{{ __('views.task.edit.button') }}" />
        </div>
        </form>
    </div>
@endsection
