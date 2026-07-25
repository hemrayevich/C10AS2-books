<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Ylym-Chyragy</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .bg-grandient {
            background: #2A7B9B;
            background: linear-gradient(82deg, rgba(42, 123, 155, 1) 0%, rgba(44, 156, 88, 1) 32%, rgba(87, 199, 133, 1) 61%, rgba(42, 123, 155, 1) 100%);
        }
    </style>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body class="bg-light">

    @include('app.navbar')

    <div class="container-xxl min-vh-100">
        @yield('content')
    </div>

    @include('app.footer')
</body>

</html>