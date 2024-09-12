@extends('web.layouts.layout')
@section('styles')
    <style>
        .img-cover {
            width: 100% !important;
            height: 300px !important;
            object-fit: cover !important;
        }
    </style>
@endSection
@section('content')
    <div class="container-fluid page-header py-5"
        style="background: url({{ asset('web_template/img/docencia_masonica.jpg') }}); background-size: cover; 
background-position: center">
        <h1 class="text-center text-white display-6">Red de Logias</h1>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">Página Web de la A∴B∴R∴L∴S∴</li>
        </ol>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">El Solitario de Sayán N° 81</li>
        </ol>
    </div>
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Listado de Logias</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4 justify-content-center">
                                @foreach ($red_logias as $logia)
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{ asset('admin_template/img/red_logias/' . $logia->imagen) }}"
                                                    class="img-fluid w-100 rounded-top img-cover"
                                                    alt="{{ $logia->titulo }}">
                                            </div>
                                            <div class="text-primary bg-secondary px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;">{{ $logia->fecha }}</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>{{ $logia->titulo }}</h4>
                                                <p>{{ strip_tags($logia->descripcion) }}</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0"></p>
                                                    <a href="{{ route('detalle.red_logias', $logia->id) }}"
                                                        class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                            class="fa fa-eye me-2 text-primary"></i> Ver más</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-4">
                            {{ $red_logias->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
