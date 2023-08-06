@extends('layouts.app')

@section('title', 'Pets List')

@section('content')
    <h3>{{ __('pets.pet') }}</h3>

    <a href="{{ route('pets.index') }}">
        <button type="button" class="btn btn-secondary mb-3">{{ __('main.back') }}</button>
    </a>

    <div class="alert alert-info">
        <h3>{{ $pet->name }} ({{ $pet->category()->first()->name }})</h3>
        <p>{{ __('pets.age') }} {{ $pet->age }}</p>
        <p>
            {{ __('main.tags') }}
            @foreach ($tags as $tag)
            #{{ $tag->name }}
            @endforeach
        </p>
        <p>{{ __('main.description') }} {{ $pet->description }}</p>
        <p><small>{{ __('main.created_at') }} {{ $pet->created_at }}</small></p>
        @if (isset($el->updated_at) && $pet->created_at !== $pet->updated_at)
            <p><small>{{ __('main.updated_at') }} {{ $pet->updated_at }}</small></p>
        @endif
    </div>
@endsection
