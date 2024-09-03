@extends('web.layouts.layout')
@section('styles')
@endSection
@section('content')
    <div class="container-fluid page-header py-5"
        style="background: url({{ asset('web_template/img/contactanos.jpg') }}); background-size: cover; background-position: center">
        <h1 class="text-center text-white display-6">Contáctanos</h1>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">Página Web de la A∴B∴R∴L∴S∴</li>
        </ol>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">El Solitario de Sayán N° 81</li>
        </ol>
    </div>
    <div class="container-fluid contact py-5">
        <div class="container">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="text-primary">CÓNTACTANOS</h1>
                            <p class="mb-0">ENVIE SU MENSAJE POR ESTE MEDIO</p>
                            <p class="mb-0">LLENE LOS CAMPOS INDICADOS</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="h-100 rounded">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d830.366352744494!2d-79.03135231299447!3d-8.110615909126588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d9b59bbd605%3A0x4949b3fdf29d22af!2sJir%C3%B3n%20Zepita%20368%2C%20Trujillo%2013001!5e0!3m2!1ses-419!2spe!4v1725400916261!5m2!1ses-419!2spe"
                                class="rounded w-100" style="height: 400px;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="#" class="">
                            <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Nombres *"
                                required>
                            <input type="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Correo *"
                                required>
                            <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="N° de Celular">
                            <input type="text" class="w-100 form-control border-0 py-3 mb-4"
                                placeholder="Ingresa tu Asunto *" required>
                            <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Ingresa tu Mensaje"></textarea>
                            <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary "
                                type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Dirección</h4>
                                <p class="mb-2">Jr. Zepita Nº 368, Cercado de Trujillo</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Correo</h4>
                                <p class="mb-2">elsolitariodesayan81@hotmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Celular</h4>
                                <p class="mb-2">+51974372327</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
