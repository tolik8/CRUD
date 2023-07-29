@extends('layouts.app')

@section('title', __('home.home_page'))

@section('content')
    <a href="{{ route('pets.index') }}"><button type="button" class="btn btn-primary">@lang('pets.pets')</button></a>
@endsection
