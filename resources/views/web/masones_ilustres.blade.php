@extends('web.layouts.layout')
@section('styles')
    {{-- <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" rel="stylesheet"> --}}

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
        style="background: url({{ asset('web_template/img/fondo3.jpg') }}); background-size: cover; 
background-position: center">
        <h1 class="text-center text-white display-6">MASONES ILUSTRES</h1>
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
                            Masones Ilustres
                        </h1>
                        <p class="mb-4">
                            {!! $masones_ilustres->descripcion !!}
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <div class="border rounded">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                {{-- Mostrar las imágenes paginadas visibles --}}
                                                @foreach ($detalle_masones_ilustres as $image)
                                                    <div class="col-sm-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <a data-fancybox="gallery"
                                                                    href="{{ asset('admin_template/img/masones_ilustres/' . $image->archivo) }}">
                                                                    <img src="{{ asset('admin_template/img/masones_ilustres/' . $image->archivo) }}"
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

                        <!-- Cargar todas las imágenes únicas para Fancybox (excluyendo las paginadas visibles) -->
                        @php
                            $paginatedIds = $detalle_masones_ilustres->pluck('id')->toArray(); // IDs de las imágenes paginadas visibles
                        @endphp

                        <div style="display: none;">
                            @foreach ($todas_imagenes as $image)
                                {{-- Solo agregar si la imagen no está en las imágenes paginadas visibles --}}
                                @if (!in_array($image->id, $paginatedIds))
                                    <a data-fancybox="gallery"
                                        href="{{ asset('admin_template/img/masones_ilustres/' . $image->archivo) }}"></a>
                                @endif
                            @endforeach
                        </div>

                        <div class="mt-4">
                            {{ $detalle_masones_ilustres->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <!-- Fancybox CSS y JS -->
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <style>
        .fancybox__thumbs {
            display: none !important;
        }

        .fancybox__thumb {
            display: none !important;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Fancybox.bind('[data-fancybox="gallery"]', {
                loop: true, // Permitir el bucle infinito de las imágenes
                thumbs: {
                    autoStart: false // Desactiva las miniaturas
                },
                toolbar: true, // Mantén la barra de herramientas si deseas otros botones
                buttons: [
                    "zoom",
                    "slideShow",
                    "close" // No incluyas "thumbs" aquí para eliminar el botón de miniaturas
                ],
                Image: {
                    preload: false // Pre-cargar imágenes para mejorar el rendimiento
                }
            });
        });
    </script>
@endsection
