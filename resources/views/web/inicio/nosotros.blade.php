@extends('web.layouts.layout')
@section('content')
<div class="container-fluid page-header py-5" 
style="background: url({{asset('web_template/img/fondo.jpg')}}); background-size: cover; 
background-position: center">
    <h1 class="text-center text-white display-6">NOSOTROS</h1>
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
                    <h1 class="fw-bold mb-3">Nuestra logia</h1>
                    <p class="mb-4">
                        {!!$nosotros->descripcion!!}
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="border rounded">
                        <a href="#">
                            <img src="{{ asset('admin_template/img/nosotros/' . $nosotros->images) }}" class="img-fluid rounded" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <hr>
<div class="container-fluid testimonial">
    <div class="container">
        <div class="testimonial-header text-center">
            <h5 class="display-6 mb-5 text-dark">Instituciones aliadas</h5>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                <img class="img-fluid rounded" src="{{asset('web_template/img/instituciones/mpt.jpg')}}" width="150" height="150" >
            </div> 
            <div class="col-md-2 text-center">
                <img class="img-fluid rounded" src="{{asset('web_template/img/instituciones/unt.jpg')}}" width="150" height="150" >
            </div> 
            <div class="col-md-2 text-center">
                <img class="img-fluid rounded" src="{{asset('web_template/img/instituciones/gobren.jpg')}}" width="150" height="150" >
            </div> 
            <div class="col-md-2 text-center">
                <img class="img-fluid rounded" src="{{asset('web_template/img/instituciones/grell.jpg')}}" width="150" height="150" >
            </div> 
            <div class="col-md-2 text-center">
                <img class="img-fluid rounded" src="{{asset('web_template/img/instituciones/cehum.jpg')}}" width="150" height="150" >
            </div>           
            <div class="col-md-2 text-center">
                <img class="img-fluid rounded" src="{{asset('web_template/img/instituciones/mincultura.png')}}" width="150" height="150" >
            </div>
        </div>
    </div>
</div> --}}
@endsection