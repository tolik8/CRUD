@extends('layouts.app')

@section('title', __('categories.edit_category'))

@section('content')

    <a href="{{ route('categories.index') }}">
        <button type="button" class="btn btn-secondary mb-3">{{ __('main.back') }}</button>
    </a>

    <h3>{{ __('categories.edit_category') }}</h3>

    <form action="{{ route('categories.update', $category->id) }}" method="post" class="form-control">
        @csrf @method('patch')

        <p>
            <label for="name" class="form-label">{{ __('main.category') }}</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $category->name) }}"
                   placeholder="{{ __('main.category') }}" size="40">
        </p>

        <button type="submit" class="btn btn-primary mt-3">{{ __('main.update') }}</button>
    </form>
@endsection
