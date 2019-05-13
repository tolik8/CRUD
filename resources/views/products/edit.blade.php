@extends('layouts.app')

@section('title', 'Update record')

@section('css')
@parent
    <link rel="stylesheet" href="/lib/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">
@endsection

@section('content')

<a href="{{ route('products.index') }}">Back</a>

<h3>Edit record</h3>

@include('layouts.errors')

<form method="POST" action="/products/{{ $product->id }}">
    @method('put')
    @csrf

    <div class="form-group row">
        <label for="inputCode" class="col-sm-2 col-form-label">Code</label>
        <div class="col-sm-10">
            <input type="text" name="code" class="form-control" id="inputCode" placeholder="Kod" value="{{ $product->code }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">NAME</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{ $product->name }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputD_begin" class="col-sm-2 col-form-label">D_BEGIN</label>
        <div class="col-sm-10 input-group">
            <input type="text" name="d_begin" class="form-control input-date" id="inputD_begin" placeholder="D_begin" value="{{ $product->d_begin }}" autocomplete="off">
            <div class="input-group-append">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputD_end" class="col-sm-2 col-form-label">D_END</label>
        <div class="col-sm-10 input-group">
            <input type="text" name="d_end" class="form-control input-date" id="inputD_end" placeholder="D_end" value="{{ $product->d_end }}" autocomplete="off">
            <div class="input-group-append">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection

@section('js')
@parent
<script type="text/javascript" src="/lib/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/lib/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.uk.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="{{ filetime('js/datepicker.js') }}"></script>
@endsection
