<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
@section('css')
    <link rel="stylesheet" href="/lib/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lib/font-awesome/5.4.2/css/all.min.css">
@show
</head>
<body>

<div class="container">
@include('layouts.lang')
@yield('content')
</div>

@section('js')
<script type="text/javascript" src="/lib/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="/lib/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
@show

</body>
</html>