@extends('layouts.app')

@section('title', 'Laravel CRUD')

@section('content')

<h3>Laravel CRUD</h3>

<a href="{{ route('products.index') }}">@lang('home.products')</a>

@endsection
