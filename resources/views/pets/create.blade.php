@extends('layouts.app')

@section('title', __('pets.add_a_pet'))

@section('content')
    <a href="{{ route('pets.index') }}"><button type="button" class="btn btn-secondary mb-3">{{ __('home.back') }}</button></a>

    <h3>{{ __('pets.add_a_pet') }}</h3>

    <form action="{{ route('pets.store') }}" method="post" class="form-control">
        @csrf

        <p>
            <label class="form-label" for="name">{{ __('pets.pet_name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="{{ __('pets.pet_name') }}" size="40">
        </p>
        <p>
            <label class="form-label" for="age">{{ __('pets.age') }}</label>
            <input type="text" class="form-control" name="age" value="{{ old('age') }}" id="age" placeholder="{{ __('pets.age') }}" size="5">
        </p>
        <div>
            <label class="form-label" for="select-id">{{ __('home.category') }}</label>
            <select name="category_id" class="form-select" id="select-id">
                @foreach($categories as $el)
                    <option {{ $el->id === (int)(old('category_id')) ? ' selected' : '' }} value="{{ $el->id }}">{{ $el->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-floating mt-3">
            <textarea name="description" class="form-control" id="floatingTextarea">{{ old('description') }}</textarea>
            <label for="floatingTextarea">{{ __('home.description') }}</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">{{ __('home.create') }}</button>
    </form>
@endsection
