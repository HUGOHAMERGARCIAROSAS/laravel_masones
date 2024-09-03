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
                        <h1 class="m-0">Videos Masonicos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Videos Masonicos</li>
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
                                Videos Masonicos
                                @if (session('success'))
                                    <div>
                                        <strong class="text-success">{{ session('success') }}</strong>
                                    </div>
                                @endif
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('administracion.videos_masonicos.actualizar') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="summernote" name="descripcion" id="descripcion" required>
                                            {{ $videos_masonicos->descripcion }}
                                            </textarea>
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
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Registrar Videos
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('administracion.videos_masonicos.storeLinks') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="link" class="form-label"> Link: </label>
                                            <input type="text" name="link" id="link" class="form-control" placeholder="Ingresa el link" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="detalle" class="form-label"> Referencia: </label>
                                            <input type="text" name="detalle" id="detalle" class="form-control" placeholder="Ingresa el detalle" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary float-end"><i
                                                    class="fa fa-save"></i> Agregar link</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Registrar Videos
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                   <div class="table-responsive">
                                       <table id="example1" class="table table-bordered table-striped">
                                           <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Link</th>
                                               <th>Referencia</th>
                                               <th class="text-center">Eliminar</th>
                                               <th class="text-center">Editar</th>
                                           </tr>
                                           </thead>
                                           <tbody>
                                           @foreach($detalle_videos_masonicos as $key => $link)
                                               <tr>
                                                   <td>{{ $key+1 }}</td>
                                                   <td>{{ $link->link }}</td>
                                                   <td>{{ $link->detalle }}</td>
                                                   <td class="text-center">
                                                       <form action="{{ route('administracion.videos_masonicos.destroyLinks', $link->id) }}" method="POST">
                                                           @csrf
                                                           <button type="submit" class="btn btn-danger btn-sm"><i
                                                                   class="fa fa-trash"></i> Eliminar</button>
                                                       </form>
                                                   </td>
                                                   <td class="text-center">
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                                data-target="#modal-default{{ $link->id }}">
                                                            <i class="fa fa-edit"></i> Editar
                                                        </button>
                                                   </td>
                                               </tr>
                                           @endforeach
                                           </tbody>
                                       </table>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @foreach($detalle_videos_masonicos as $key => $link)
            <div class="modal fade" id="modal-default{{ $link->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Editar Link</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('administracion.videos_masonicos.updateLinks', $link->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="link" class="form-label"> Link: </label>
                                            <input type="text" name="link" id="link" class="form-control" value="{{ $link->link }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="detalle" class="form-label"> Referencia: </label>
                                            <input type="text" name="detalle" id="detalle" class="form-control" value="{{ $link->detalle }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-danger float-end" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary float-end"><i
                                                    class="fa fa-save"></i> Editar link</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
@endsection

@section('scripts')
    <script src="{{ asset('admin_template/js/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            $('#summernote').summernote()
        })
    </script>
@endSection
