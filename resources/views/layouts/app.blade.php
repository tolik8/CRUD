<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - @yield('title')</title>
    <link href="{{ asset('build/assets/app-71455456.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container my-2">
        @include('inc.languages')
        @include('inc.messages')

        @yield('content')
    </div>
    <script src="{{ asset('build/assets/app-c1097373.js') }}"></script>
</body>
</html>
