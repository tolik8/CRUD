@extends('layouts.app')

@section('title', __('main.categories'))

@section('content')

    <a href="{{ route('categories.index') }}">
        <button type="button" class="btn btn-secondary mb-3">{{ __('main.back') }}</button>
    </a>

    <h3>{{ __('categories.add_category') }}</h3>

    <form action="{{ route('categories.store') }}" method="post" class="form-control">
        @csrf

        <p>
            <label class="form-label" for="name">{{ __('main.category') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name"
                   placeholder="{{ __('main.category') }}" size="40">
        </p>

        <button type="submit" class="btn btn-primary mt-3">{{ __('main.create') }}</button>
    </form>
@endsection
