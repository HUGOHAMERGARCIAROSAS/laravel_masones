@extends('web.layouts.layout')
@section('styles')
@endSection
@section('content')
    <div class="container-fluid page-header py-5"
        style="background: url({{ asset('web_template/img/contactanos.jpg') }}); background-size: cover; background-position: center">
        <h1 class="text-center text-white display-6">DETALLE DE EVENTO</h1>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">Página Web de la A∴B∴R∴L∴S∴</li>
        </ol>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">El Solitario de Sayán N° 81</li>
        </ol>
    </div>
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                <img src="{{ asset('admin_template/img/eventos/'.$evento[0]->imagen) }}" class="img-fluid rounded" alt="Image" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="fw-bold mb-3 text-primary">{{$evento[0]->titulo}}</h1>
                            <p class="mb-3">Fecha: {{$evento[0]->fecha}}</p>
                            <p class="mb-4">
                                {!!$evento[0]->descripcion!!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4 fruite">
                        <div class="col-lg-12">
                            <h4 class="mb-4">Últimos Eventos</h4>
                            @foreach ($lastEventos as $item)
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded" style="width: 100px; height: 100px;">
                                        <a href="{{ route('detalle.eventos', $item->id) }}">
                                            <img src="{{ asset('admin_template/img/eventos/'.$item->imagen) }}" class=" rounded" alt="Image" width="80" height="80">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ route('detalle.eventos', $item->id) }}"><h6 class="mb-2 text-primary">{{$item->titulo}}</h6></a>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">{{$item->fecha}}</h5>
                                        </div>
                                    </div>
                                </div> 
                            @endforeach
                            <div class="d-flex justify-content-center my-4">
                                <a href="{{ route('eventos')}}" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Ver Todos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
