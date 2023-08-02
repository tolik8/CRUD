@extends('layouts.app')

@section('title', __('pets.pets_list'))

@section('content')
    <a href="{{ route('pets.create') }}"><button type="button" class="btn btn-primary mb-3">{{ __('home.create') }}</button></a>
    @foreach($pets as $el)
        <div class="alert alert-info">
            <h3>{{ $el->name }} ({{ $el->category->name }})</h3>
            <p>{{ __('pets.age') }} {{ $el->age }}</p>
            <p><small>{{ __('home.created_at') }} {{ $el->created_at }}</small></p>
            @if($el->created_at != $el->updated_at)
                <p><small>{{ __('home.updated_at') }} {{ $el->updated_at }}</small></p>
            @endif
            <a href="{{ route('pets.show', $el->id) }}"><button class="btn btn-info mx-1">{{ __('home.show') }}</button></a>
            <a href="{{ route('pets.edit', $el->id) }}"><button class="btn btn-success mx-1">{{ __('home.edit') }}</button></a>
            <form action="{{ route('pets.destroy', $el->id) }}" method="post" style="display: inline;">
                @csrf @method('delete')
                <button type="submit" class="btn btn-danger mx-1">{{ __('home.delete') }}</button>
            </form>
        </div>
    @endforeach
@endsection
