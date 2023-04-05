<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            list-style: none;
        }

        /* .bg {
            display: inline-block;
            background: red;
            padding: 10px 20px;
            margin: 20px 0;
        } */
    </style>
    <title>@yield('yield')</title>
</head>

<body>
    @include('layouts.nav')
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
