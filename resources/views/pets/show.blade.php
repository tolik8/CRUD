@extends('layouts.app')

@section('title', 'Pets List')

@section('content')
    <a href="{{ route('pets.index') }}"><button type="button" class="btn btn-secondary mb-3">{{ __('home.back') }}</button></a>

    <h3>{{ __('pets.pet') }}</h3>

    <div class="alert alert-info">
        <h3>{{ $data->name }}</h3>
        <p>{{ __('pets.age') }} {{ $data->age }}</p>
        <p><small>{{ __('home.created_at') }} {{ $data->created_at }}</small></p>
        @if($data->created_at != $data->updated_at)
            <p><small>{{ __('home.updated_at') }} {{ $data->updated_at }}</small></p>
        @endif
    </div>
@endsection
