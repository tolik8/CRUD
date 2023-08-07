@extends('layouts.app')

@section('title', 'Create post')

@section('content')
    <a href="{{ route('posts.index') }}">
        <button type="button" class="btn btn-secondary mb-3">{{ __('main.back') }}</button>
    </a>

    <h3>{{ __('main.create') }}</h3>

    <form action="{{ route('posts.store') }}" method="post" class="form-control">
        @csrf

        <div>
            <label class="form-label" for="title">{{ __('main.title') }}</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="title"
                   placeholder="{{ __('main.title') }}" size="40">
            @error('title')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-floating mt-3">
            <textarea name="content" class="form-control" style="height: 200px" id="floatingTextarea">{{ old('content') }}</textarea>
            <label for="floatingTextarea">{{ __('main.content') }}</label>
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

        <button type="submit" class="btn btn-primary mt-3">{{ __('main.create') }}</button>
    </form>
@endsection
