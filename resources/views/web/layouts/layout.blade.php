<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Logia, El Solitario de Sayan 81, fraternidad, solidaridad, comunidad" name="keywords">
        <meta content="Bienvenidos, La A∴B∴R∴L∴S∴ “El Solitario de Sayán” N° 81 del Vall∴ de Trujillo, Or∴ del Perú, es una Logia Masónica integrada por Hombres Libres y de Buenas Costumbres, jurisdiccionada a la Gran Logia de los Antiguos, Libres y Aceptados Masones de la República del Perú - G∴L∴P∴, cuyo Gran Maestro es el M∴R∴H∴ Carlos Tejeda Rojas, e integrante de la Confederación Masónica Interamericana - C∴M∴I∴." name="description">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Logia el Solitario de Sayan 81">
        <meta property="og:description" content="Únete a nuestra comunidad dedicada a la fraternidad y solidaridad.">
        <meta property="og:image" content="https://www.logiaelsolitariodesayan81.com/web_template/Logo-81.png">
        <meta property="og:url" content="https://www.logiaelsolitariodesayan81.com/">
        <meta property="og:type" content="website">
        <link rel="canonical" href="https://www.logiaelsolitariodesayan81.com/">
        <meta name="author" content="Logia el Solitario de Sayan 81">
        <title>El Solitario de Sayan 81</title>

        <!-- Favicon -->
        <link href="{{asset('web_template/img/logo.jpg')}}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;family=Raleway:wght@600;800&amp;display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="{{asset('web_template/all.css')}}"/>
        <link href="{{asset('web_template/bootstrap-icons.css')}}" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('web_template/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('web_template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('web_template/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('web_template/css/style.css')}}" rel="stylesheet">

        @yield('styles')
        
    </head>

    <body>

        @include('web.layouts.header')

        

        @yield('content')

        <!-- Copyright Start -->
        @include('web.layouts.footer')
        <!-- Copyright End -->

    <!-- JavaScript Libraries -->
    <script src="{{asset('web_template/jquery.min.js')}}"></script>
    <script src="{{asset('web_template//bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('web_template/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('web_template/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('web_template/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('web_template/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('web_template/js/main.js')}}"></script>

    @yield('scripts')
</body>

</html>