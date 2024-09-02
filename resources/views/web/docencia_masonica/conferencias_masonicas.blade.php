@extends('web.layouts.layout')

@section('scripts')
    <style>
        .responsive-video {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
        }

        .responsive-video iframe,
        .responsive-video video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .linea-decorativa {
            border-left: 4px solid #007bff;
            padding-left: 10px;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid page-header py-5"
        style="background: url({{ asset('web_template/img/docencia_masonica.jpg') }}); background-size: cover; 
background-position: center">
        <h1 class="text-center text-white display-6">Conferencias Masónicas</h1>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">Página Web de la A∴B∴R∴L∴S∴</li>
        </ol>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">El Solitario de Sayán N° 81</li>
        </ol>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <h1 class="fw-bold mb-3">Conferencias Masónicas</h1>
                        <p class="mb-4 linea-decorativa">
                            Muchos videos masónicos son documentales que ofrecen una visión profunda y perspicaz de la
                            historia, la filosofía y los principios de la masonería. Estas producciones audiovisuales
                            exploran los orígenes de la fraternidad, su evolución a lo largo de los siglos y su impacto en
                            la sociedad contemporánea.
                        </p>
                    </div>
                    <div class="col-lg-12 mb-5">
                        <div class="responsive-video">
                            <iframe width="800" height="500"
                                src="https://www.youtube.com/embed/OZUASZl7U-E?si=03a-pVkLH-KgYlwe" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-5">
                        <div class="responsive-video">
                            <iframe width="800" height="500"
                                src="https://www.youtube.com/embed/OZUASZl7U-E?si=03a-pVkLH-KgYlwe" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
