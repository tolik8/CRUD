@extends('layouts.app')

@section('title', 'Pets List')

@section('content')
    <a href="{{ route('pets.index') }}"><button type="button" class="btn btn-secondary mb-3">{{ __('home.back') }}</button></a>

    <h3>{{ __('pets.pet') }}</h3>

    <div class="alert alert-info">
        <h3>{{ $pet->name }} ({{ $pet->category()->first()->name }})</h3>
        <p>{{ __('pets.age') }} {{ $pet->age }}</p>
        <p>{{ __('home.description') }} {{ $pet->description }}</p>
        <p><small>{{ __('home.created_at') }} {{ $pet->created_at }}</small></p>
        @if($pet->created_at != $pet->updated_at)
            <p><small>{{ __('home.updated_at') }} {{ $pet->updated_at }}</small></p>
        @endif
    </div>
@endsection
