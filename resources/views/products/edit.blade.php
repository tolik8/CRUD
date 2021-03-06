@extends('products.template')

@section('title', 'Update record')

@section('css')
@parent
    <link rel="stylesheet" href="/lib/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">
@endsection

@section('content')
@parent

<h3>@lang('home.edit')</h3>

@include('layouts.errors')

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf @method('put')

    <div class="form-group row">
        <label for="inputCode" class="col-sm-2 col-form-label">CODE</label>
        <div class="col-sm-10">
            <input type="text" name="code" class="form-control" id="inputCode" placeholder="{{ $col['code'] }}" value="{{ $product->code }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">NAME</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputName" placeholder="{{ $col['name'] }}" value="{{ $product->name }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="input_d_begin" class="col-sm-2 col-form-label">D_BEGIN</label>
        <div class="col-sm-10 input-group">
            <input type="text" name="d_begin" class="form-control input-date" id="input_d_begin" placeholder="{{ $col['d_begin'] }}" value="{{ $product->d_begin }}" autocomplete="off">
            <div class="input-group-append">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="input_d_end" class="col-sm-2 col-form-label">D_END</label>
        <div class="col-sm-10 input-group">
            <input type="text" name="d_end" class="form-control input-date" id="input_d_end" placeholder="{{ $col['d_end'] }}" value="{{ $product->d_end }}" autocomplete="off">
            <div class="input-group-append">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">@lang('home.edit')</button>
</form>

@endsection

@section('js')
@parent
<script type="text/javascript" src="/lib/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/lib/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.{{ Lang::getLocale() }}.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="{{ filetime('/js/datepicker.js') }}"></script>
@endsection
