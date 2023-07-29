@extends('layouts.app')

@section('title', __('pets.add_a_pet'))

@section('content')
    <a href="{{ route('pets.index') }}"><button type="button" class="btn btn-secondary mb-3">{{ __('home.back') }}</button></a>

    <h3>{{ __('pets.add_a_pet') }}</h3>

    <form action="{{ route('pets.store') }}" method="post" class="form-control">
        @csrf

        <p><input type="text" name="name" placeholder="{{ __('pets.pet_name') }}" size="40"></p>
        <p><input type="text" name="age" placeholder="{{ __('pets.age') }}" size="5"></p>

        <button type="submit" class="btn btn-primary">{{ __('home.create') }}</button>
    </form>
@endsection