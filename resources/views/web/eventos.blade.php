@extends('web.layouts.layout')
@section('styles')
    <style>
        .linea-decorativa {
            border-left: 4px solid #007bff;
            padding-left: 10px;
            margin-bottom: 10px;
        }
    </style>
@endSection
@section('content')
    <div class="container-fluid page-header py-5"
        style="background: url({{ asset('web_template/img/docencia_masonica.jpg') }}); background-size: cover; 
background-position: center">
        <h1 class="text-center text-white display-6">Eventos</h1>
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
                        <h1 class="fw-bold mb-3">Eventos</h1>
                        <p class="mb-4 linea-decorativa">
                            Las publicaciones y noticias masónicas son una fuente vital de información, conocimiento y
                            conexión para los miembros de la fraternidad masónica en todo el mundo. Desde revistas y
                            boletines hasta sitios web y redes sociales, estas plataformas ofrecen una variedad de contenido
                            que informa, inspira y une a la comunidad masónica.
                        </p>
                    </div>
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
