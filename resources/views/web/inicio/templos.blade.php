@extends('web.layouts.layout')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" rel="stylesheet">

    <style>
        .img-cover {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid page-header py-5"
        style="background: url({{ asset('web_template/img/templos.jpeg') }}); background-size: cover; 
background-position: center">
        <h1 class="text-center text-white display-6">TEMPLO</h1>
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
                    <div class="col-lg-12">
                        <h1 class="fw-bold mb-3">
                            Templo masónico
                        </h1>
                        <p class="mb-4">
                            {!! $templos->descripcion !!}
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <div class="border rounded">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                @foreach ($detalle_templo as $image)
                                                    <div class="col-sm-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <a data-fancybox="gallery"
                                                                    href="{{ asset('admin_template/img/templos/' . $image->archivo) }}">
                                                                    <img src="{{ asset('admin_template/img/templos/' . $image->archivo) }}"
                                                                        alt="Image" class="img-fluid img-cover">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
@endsection
