@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('admin_template/css/summernote-bs4.min.css') }}">
@endSection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Eventos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Eventos</li>
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
                                Crear Eventos
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('administracion.eventos.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="titulo">Título: </label>
                                            <input class="form-control" type="text" name="titulo" id="titulo"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="descripcion">Descripción: </label>
                                            <textarea id="summernote" name="descripcion" id="descripcion" required>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Imagen: </label>
                                            <input class="form-control" type="file" name="imagen" id="images"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fecha">Fecha: </label>
                                            <input class="form-control" type="date" name="fecha" id="fecha"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 ">
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary float-end"><i
                                                    class="fa fa-save"></i>
                                                Registrar Evento</button>
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
    <script src="{{ asset('admin_template/js/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            $('#summernote').summernote()
        })
    </script>
@endSection
