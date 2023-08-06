@extends('layouts.app')

@section('title', __('pets.add_a_pet'))

@section('content')
    <h3>{{ __('pets.pets') }}</h3>

    <a href="{{ route('pets.index') }}">
        <button type="button" class="btn btn-secondary mb-3">{{ __('main.back') }}</button>
    </a>

    <h3>{{ __('pets.add_a_pet') }}</h3>

    <form action="{{ route('pets.store') }}" method="post" class="form-control">
        @csrf

        <div>
            <label class="form-label" for="name">{{ __('pets.pet_name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name"
                   placeholder="{{ __('pets.pet_name') }}" size="40">
            @error('name')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="mt-3">
            <label class="form-label" for="age">{{ __('pets.age') }}</label>
            <input type="text" class="form-control" name="age" value="{{ old('age') }}" id="age"
                   placeholder="{{ __('pets.age') }}" size="5">
            @error('age')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="mt-3">
            <label class="form-label" for="select-cat">{{ __('main.category') }}</label>
            <select name="category_id" class="form-select" id="select-cat">
                @foreach ($categories as $el)
                    <option value="{{ $el->id }}"
                        {{ $el->id === (int)(old('category_id')) ? ' selected' : '' }}>{{ $el->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label class="form-label" for="select-tags">{{ __('main.tags') }}</label>
            <select name="tags[]" class="form-select" id="select-tags" multiple aria-label="multiple select example" size="5">
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}"
                    {{ (collect(old('tags'))->contains($tag->id)) ? ' selected' : '' }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-floating mt-3">
            <textarea name="description" class="form-control" id="floatingTextarea">{{ old('description') }}</textarea>
            <label for="floatingTextarea">{{ __('main.description') }}</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{ __('main.create') }}</button>
    </form>
@endsection
