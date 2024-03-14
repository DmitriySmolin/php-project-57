@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.label.create.header') }}</h1>

        {{ Form::open(['route' => 'labels.store', 'class' => 'w-50']) }}
        <div class="flex flex-col">
            <x-input-name label="{{ __('views.label.create.name') }}" />
            <div class="mt-2">
                {{ Form::label('description', __('views.label.create.description')) }}
            </div>
            <div class="mt-2">
                {{ Form::textarea('description', null, ['class' => 'rounded border-gray-300 w-1/3 h-32', 'cols' => '50', 'rows' => '10']) }}
            </div>
            @error('description')
            <div class="text-rose-600">{{ $message }}</div>
            @enderror
            <x-submit-button caption="{{ __('views.label.create.button') }}" />
        </div>
        {{ Form::close() }}
    </div>
@endsection
