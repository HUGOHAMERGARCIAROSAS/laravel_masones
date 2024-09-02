@extends('web.layouts.layout')
@section('content')
<div class="container-fluid page-header py-5" style="background: url({{asset('web_template/img/fondo2.jpg')}}); background-size: cover; 
background-position: center">
    <h1 class="text-center text-white display-6">DECLARACIÓN DE PRINCIPIOS</h1>
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
                <div class="col-lg-6">
                    <h1 class="fw-bold mb-3">Declaración de Principios</h1>
                    <p class="mb-4">
                        {!! $declaracion_principios->descripcion !!}
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="border rounded">
                        <a href="#">
                            <img src="{{ asset('admin_template/img/declaracion_principios/' . $declaracion_principios->images) }}" class="img-fluid rounded" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection