@extends('layouts.layout')

@section('styles')
@endSection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Sliders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Sliders</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">

                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Editar Sliders
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group text-center">
                                        <img src="{{ asset('admin_template/img/sliders/' . $slider['0']->imagen) }}"
                                            width="200" height="200" alt="Imagen">
                                    </div>
                                </div>
                                <form action="{{ route('administracion.sliders.update', $slider['0']->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="images">Imagen: </label>
                                                <input class="form-control" type="file" name="imagen" id="images" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 ">
                                        <div class="col-md-6">
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary float-end"><i
                                                        class="fa fa-save"></i>
                                                    Actualizar Slider</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-center">
                                                <a href="{{ route('administracion.sliders') }}" class="btn btn-danger float-end"><i
                                                        class="fa fa-times"></i>
                                                    Volver</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection

@section('scripts')
@endSection
