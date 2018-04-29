<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap-theme.min.css") }}">
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap-datetimepicker.min.css") }}">

    <style>
        .formStyle {
            background: #dcdcdc;
            border: 2px solid #cecece;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset("bootstrap/js/moment.min.js") }}"></script>
    <script src="{{ asset("bootstrap/js/jquery.min.js") }}"></script>
    <script src="{{ asset("bootstrap/js/bootstrap-datetimepicker.min.js") }}"></script>
    <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>

    @yield('scripts')
</body>

</html>