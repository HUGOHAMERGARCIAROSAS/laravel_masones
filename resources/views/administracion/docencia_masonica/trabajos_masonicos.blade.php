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
                        <h1 class="m-0">Trabajos Masonicos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Trabajos Masonicos</li>
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
                                Trabajos Masonicos
                                @if (session('success'))
                                    <div>
                                        <strong class="text-success">{{ session('success') }}</strong>
                                    </div>
                                @endif
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('administracion.trabajos_masonicos.actualizar') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <textarea id="summernote" name="descripcion" id="descripcion" required>
                                            {{ $trabajos_masonicos->descripcion }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="link">Link: (drive)</label>
                                            <input class="form-control" type="text" name="link" id="link"
                                                required value="{{ $trabajos_masonicos->link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary float-end"><i
                                                    class="fa fa-save"></i> Actualizar descripción</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
