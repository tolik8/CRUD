@extends('layouts.app')

@section('title', 'Post View')

@section('content')
    <h3>{{ __('main.post') }}</h3>

    <a href="{{ route('posts.index') }}">
        <button type="button" class="btn btn-secondary mb-3">{{ __('main.back') }}</button>
    </a>

    <div class="alert alert-info">
        <h3>{{ $post->title }} ({{ $post->category()->first()->name }})</h3>
        <div>{{ __('main.content') }}
            <div class="form-control border border-primary">
                {{ $post->content }}
            </div>
        </div>
        <div class="mt-2">
            {{ __('main.tags') }}
            @foreach ($tags as $tag)
            #{{ $tag->name }}
            @endforeach
        </div>
        <div class="mt-2">
            <small>{{ __('main.created_at') }} {{ $post->created_at }}</small>
        </div>
        @if (isset($post->updated_at) && $post->created_at !== $post->updated_at)
        <div><small>{{ __('main.updated_at') }} {{ $post->updated_at }}</small></div>
        @endif
    </div>
@endsection
