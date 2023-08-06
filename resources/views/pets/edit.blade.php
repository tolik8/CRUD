@extends('layouts.app')

@section('title', __('pets.edit_a_pet'))

@section('content')
    <h3>{{ __('pets.pet') }}</h3>

    <a href="{{ route('pets.index') }}">
        <button type="button" class="btn btn-secondary mb-3">{{ __('main.back') }}</button>
    </a>

    <h3>{{ __('pets.edit_a_pet') }}</h3>

    <form action="{{ route('pets.update', $pet->id) }}" method="post" class="form-control">
        @csrf @method('patch')

        <div>
            <label for="name" class="form-label">{{ __('pets.pet_name') }}</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $pet->name) }}"
                   placeholder="{{ __('pets.pet_name') }}" size="40">
            @error('name')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="mt-3">
            <label for="age" class="form-label">{{ __('pets.age') }}</label>
            <input type="text" class="form-control" name="age" id="age" value="{{ old('age', $pet->age) }}"
                   placeholder="{{ __('pets.age') }}" size="5">
            @error('age')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="mt-3">
            <label class="form-label" for="select-cat">{{ __('main.category') }}</label>
            <select name="category_id" class="form-select" id="select-cat">
                @foreach ($categories as $el)
                    <option
                        {{ $el->id === (int)old('category_id', $pet->category_id) ? ' selected' : '' }} value="{{ $el->id }}">{{ $el->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label class="form-label" for="select-tags">{{ __('main.tags') }}</label>
            <select name="tags[]" class="form-select" id="select-tags" multiple aria-label="multiple select example" size="5">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                        {{ (collect(old('tags'))->contains($tag->id))
                            || in_array($tag->id, $selectedTags, true) ? ' selected' : '' }}>{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-floating mt-3">
            <textarea name="description" class="form-control"
                      id="floatingTextarea">{{ old('description', $pet->description) }}</textarea>
            <label for="floatingTextarea">{{ __('main.description') }}</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{ __('main.update') }}</button>
    </form>
@endsection
