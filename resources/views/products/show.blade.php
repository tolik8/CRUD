@extends('products.template')

@section('title', 'Create record')

@section('content')
@parent

<h3>@lang('home.show')</h3>

@include('layouts.errors')

<div class="form-group row">
    <div class="col-sm-2">ID</div>
    <div class="col-sm-10">{{ $product->id }}</div>
</div>
<div class="form-group row">
    <div class="col-sm-2">CODE</div>
    <div class="col-sm-10">{{ $product->code }}</div>
</div>
<div class="form-group row">
    <div class="col-sm-2">NAME</div>
    <div class="col-sm-10">{{ $product->name }}</div>
</div>
<div class="form-group row">
    <div class="col-sm-2">D_BEGIN</div>
    <div class="col-sm-10">{{ $product->d_begin }}</div>
</div>
<div class="form-group row">
    <div class="col-sm-2">D_END</div>
    <div class="col-sm-10">{{ $product->d_end }}</div>
</div>
<div class="form-group row">
    <div class="col-sm-2">created_at</div>
    <div class="col-sm-10">{{ $product->created_at }}</div>
</div>
<div class="form-group row">
    <div class="col-sm-2">updated_at</div>
    <div class="col-sm-10">{{ $product->updated_at }}</div>
</div>

@endsection
