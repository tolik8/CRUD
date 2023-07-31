@extends('layouts.app')

@section('title', __('pets.edit_a_pet'))

@section('content')
    <a href="{{ route('pets.index') }}"><button type="button" class="btn btn-secondary mb-3">{{ __('home.back') }}</button></a>

    <h3>{{ __('pets.edit_a_pet') }}</h3>

    <form action="{{ route('pets.update', $data->id) }}" method="post" class="form-control">
        @csrf @method('patch')

        <p>
            <label for="name" class="form-label">{{ __('pets.pet_name') }}</label>
            <input type="text" name="name" id="name" value="{{ $data->name }}" placeholder="{{ __('pets.pet_name') }}" size="40" class="form-control">
        </p>
        <p>
            <label for="age" class="form-label">{{ __('pets.age') }}</label>
            <input type="text" name="age" id="age" value="{{ $data->age }}" placeholder="{{ __('pets.age') }}" size="5" class="form-control">
        </p>

        <button type="submit" class="btn btn-primary">{{ __('home.update') }}</button>
    </form>
@endsection
