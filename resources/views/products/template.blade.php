@extends('layouts.app')

@section('title', 'Products')

@section('css')
@parent
    <link rel="stylesheet" href="/css/products.css">
@endsection

@section('content')
@include('products.header')

@endsection
