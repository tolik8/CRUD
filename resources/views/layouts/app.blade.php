<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - @yield('title')</title>
    <link href="/libs/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container my-2">
        @include('inc.languages')
        @include('inc.messages')

        @yield('content')
    </div>
    <script src="/libs/bootstrap/js/bootstrap.js"></script>
</body>
</html>
