@extends('layouts.app')

@section('title', __('pets.pets_list'))

@section('content')
    <h3>{{ __('pets.pets') }}</h3>

    <a href="{{ route('pets.create') }}">
        <button type="button" class="btn btn-primary mb-3">{{ __('main.create') }}</button>
    </a>

    @foreach ($pets as $el)
        <div class="alert alert-info">
            <h3>{{ $el->name }} ({{ $el->category->name }})</h3>
            <p>{{ __('pets.age') }} {{ $el->age }}</p>
            <p>{{ __('main.tags') }}
                @foreach ($el->tags as $tag)
                #{{ $tag->name }}
                @endforeach
            </p>
            <p><small>{{ __('main.created_at') }} {{ $el->created_at }}</small></p>
            @if (isset($el->updated_at) && $el->created_at !== $el->updated_at)
                <p><small>{{ __('main.updated_at') }} {{ $el->updated_at }}</small></p>
            @endif
            <a href="{{ route('pets.show', $el->id) }}"><button class="btn btn-info mx-1">{{ __('main.show') }}</button></a>
            <a href="{{ route('pets.edit', $el->id) }}"><button class="btn btn-success mx-1">{{ __('main.edit') }}</button></a>
            <form action="{{ route('pets.destroy', $el->id) }}" method="post" style="display: inline;">
                @csrf @method('delete')
                <button type="submit" class="btn btn-danger mx-1">{{ __('main.delete') }}</button>
            </form>
        </div>
    @endforeach
@endsection
