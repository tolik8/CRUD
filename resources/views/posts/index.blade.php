@extends('layouts.app')

@section('title', __('main.posts'))

@section('content')
    <h3>{{ __('main.posts') }}</h3>

    <a href="{{ route('posts.create') }}">
        <button type="button" class="btn btn-primary mb-3">{{ __('main.create') }}</button>
    </a>

    @foreach ($posts as $el)
        <div class="alert alert-info">
            <h3>{{ $el->title }} ({{ $el->category->name }})</h3>
            <p>{{ __('main.tags') }}
                @foreach ($el->tags as $tag)
                #{{ $tag->name }}
                @endforeach
            </p>
            <p><small>{{ __('main.created_at') }} {{ $el->created_at }}</small></p>
            @if (isset($el->updated_at) && $el->created_at != $el->updated_at)
                <p><small>{{ __('main.updated_at') }} {{ $el->updated_at }}</small></p>
            @endif
            <a href="{{ route('posts.show', $el->id) }}"><button class="btn btn-info mx-1">{{ __('main.show') }}</button></a>
            <a href="{{ route('posts.edit', $el->id) }}"><button class="btn btn-success mx-1">{{ __('main.edit') }}</button></a>
            <form action="{{ route('posts.destroy', $el->id) }}" method="post" style="display: inline;">
                @csrf @method('delete')
                <button type="submit" class="btn btn-danger mx-1">{{ __('main.delete') }}</button>
            </form>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $posts->links() }}
    </div>

@endsection
