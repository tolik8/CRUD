@extends('layouts.app')

@section('title', 'Laravel CRUD')

@section('content')

<h3>Laravel CRUD</h3>

<a href="{{ route('products.index') }}">Products</a>

@endsection
