<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <title>El Solitario de Sayan</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

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


<!-- Mirrored from themewagon.github.io/fruitables/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 17:10:37 GMT -->
</html>