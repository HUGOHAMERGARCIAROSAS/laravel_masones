<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El Solitario de Sayan</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('login_template/css/all.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('login_template/css/adminlte.css') }}">

    @yield('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layouts.navbar')

        @include('layouts.menu')

        @yield('content')

        @include('layouts.footer')

    </div>

    <script src="{{ asset('login_template/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin_template/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('admin_template/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('login_template/js/adminlte.js')}}"></script>


    @yield('scripts')
</body>

</html>
