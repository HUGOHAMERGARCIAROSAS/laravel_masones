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
        <h1 class="text-center text-white display-6">Trabajos Masónicos</h1>
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
                        <h1 class="fw-bold mb-3">Trabajos Masónicos</h1>
                        <p class="mb-4 linea-decorativa">
                            Los trabajos masónicos son documentos que narran las experiencias transformadoras que despiertan
                            la mente, el corazón y el espíritu. A través de la participación en estos trabajos, los hermanos
                            se embarcan en un viaje de autodescubrimiento y crecimiento personal, encontrando significado y
                            propósito en la búsqueda de la luz y la verdad.
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <a class="btn btn-primary text-white custom-button"
                            href="https://drive.google.com/drive/folders/1cCjnf-RCruPc92mYqE5nGEOPOFzkyhq2" target="_blank">
                            <i class="fa fa-angle-right me-2"></i>Link de Acceso
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
