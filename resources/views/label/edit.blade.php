@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.label.edit.header') }}</h1>

        {{ Form::model($label, ['route' => ['labels.update', $label], 'method' => 'PATCH', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <div>
                {{ Form::label('name', __('views.label.edit.name')) }}
            </div>
            <x-input-name />
            <div class="mt-2">
                {{ Form::label('description', __('views.label.edit.description')) }}
            </div>
            <div class="mt-2">
                {{ Form::textarea('description', null, ['class' => 'rounded border-gray-300 w-1/3 h-32', 'cols' => '50', 'rows' => '10']) }}
            </div>
            @error('description')
            <div class="text-rose-600">{{ $message }}</div>
            @enderror
            <x-submit-button caption="{{ __('views.label.edit.button') }}" />
        </div>
        {{ Form::close() }}
    </div>
@endsection
