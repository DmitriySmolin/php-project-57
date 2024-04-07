@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task_status.create.header') }}</h1>

        {{ Form::open(['route' => 'task_statuses.store', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <x-input-name label="{{ __('views.task_status.create.name') }}"/>
            <x-submit-button caption="{{ __('views.task_status.create.button') }}"/>
        </div>
        {{ Form::close() }}
    </div>
@endsection
