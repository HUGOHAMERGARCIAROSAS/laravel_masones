<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('login_template/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('login_template/css/adminlte.css') }}">
</head>

<body class="hold-transition login-page"
    style="background-image: url({{ asset('web_template/img/bg_slider.jpg') }}); background-size: 100%">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('login') }}" class="h1"><b>Iniciar Sesión</b></a>
                <img src="{{ asset('web_template/img/logo.jpg') }}" alt="Logia El Solitario de Sayan"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
            </div>
            <div class="card-body">
                <p class="login-box-msg">Ingresa tu correo y contraseña</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" name="email" class="form-control"
                            placeholder="Ingrese su correo" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input d="password" type="password" name="password" class="form-control"
                            placeholder="Ingrese su contraseña" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('login_template/js/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('login_template/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('login_template/js/adminlte.js') }}"></script>
</body>

</html>
