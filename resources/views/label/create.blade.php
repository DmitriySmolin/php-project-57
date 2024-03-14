@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.label.create.header') }}</h1>

        {{ Form::open(['route' => 'labels.store', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <x-input-name label="{{ __('views.label.create.name') }}" />
            <x-textarea-description label="{{ __('views.label.create.description') }}" />
            <x-submit-button caption="{{ __('views.label.create.button') }}" />
        </div>
        {{ Form::close() }}
    </div>
@endsection
