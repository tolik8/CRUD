@extends('products.template')

@section('title', 'Create record')

@section('css')
@parent
    <link rel="stylesheet" href="/lib/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">
@endsection

@section('content')
@parent

<h3>@lang('home.create')</h3>

@include('layouts.errors')

@if (old('d_begin') === null)
    @php $d_begin = '2019-05-05' @endphp
@else
    @php $d_begin = old('d_begin') @endphp
@endif

@if (old('d_end') === null)
    @php $d_end = '2999-12-31' @endphp
@else
    @php $d_end = old('d_end') @endphp
@endif

<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <div class="form-group row">
        <label for="inputCode" class="col-sm-2 col-form-label">CODE</label>
        <div class="col-sm-10">
            <input type="text" name="code" class="form-control" id="inputCode" placeholder="Code" value="{{ old('code') }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">NAME</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{ old('name') }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="input_d_begin" class="col-sm-2 col-form-label">D_BEGIN</label>
        <div class="col-sm-10 input-group">
            <input type="text" name="d_begin" class="form-control input-date" id="input_d_begin" placeholder="Date begin" value="{{ $d_begin }}" autocomplete="off">
            <div class="input-group-append">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="input_d_end" class="col-sm-2 col-form-label">D_END</label>
        <div class="col-sm-10 input-group">
            <input type="text" name="d_end" class="form-control input-date" id="input_d_end" placeholder="Date end" value="{{ $d_end }}" autocomplete="off">
            <div class="input-group-append">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">@lang('home.create')</button>
</form>

@endsection

@section('js')
@parent
<script type="text/javascript" src="/lib/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/lib/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.{{ Lang::getLocale() }}.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="{{ filetime('/js/datepicker.js') }}"></script>
@endsection
