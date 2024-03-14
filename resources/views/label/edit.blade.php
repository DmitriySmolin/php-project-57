@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.label.edit.header') }}</h1>

        {{ Form::model($label, ['route' => ['labels.update', $label], 'method' => 'PATCH', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <x-input-name label="{{ __('views.label.edit.name') }}" />
            <x-textarea-description label="{{ __('views.label.edit.description') }}" />
            <x-submit-button caption="{{ __('views.label.edit.button') }}" />
        </div>
        {{ Form::close() }}
    </div>
@endsection
