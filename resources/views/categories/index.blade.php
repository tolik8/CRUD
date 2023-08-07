@extends('layouts.app')

@section('title', __('main.categories'))

@section('content')
    <h3>{{ __('main.categories') }}</h3>

    <a href="{{ route('categories.create') }}">
        <button type="button" class="btn btn-primary mb-3">{{ __('main.create') }}</button>
    </a>

    @foreach ($categories as $el)
        <div class="alert alert-info">
            <h3>{{ $el->name }}</h3>
            <p><small>{{ __('main.created_at') }} {{ $el->created_at }}</small></p>
            @if (isset($el->updated_at) && $el->created_at !== $el->updated_at)
                <p><small>{{ __('main.updated_at') }} {{ $el->updated_at }}</small></p>
            @endif
            <a href="{{ route('categories.edit', $el->id) }}"><button class="btn btn-success mx-1">{{ __('main.edit') }}</button></a>
            <form action="{{ route('categories.destroy', $el->id) }}" method="post" style="display: inline;">
                @csrf @method('delete')
                <button type="submit" class="btn btn-danger mx-1">{{ __('main.delete') }}</button>
            </form>
        </div>
    @endforeach
@endsection
