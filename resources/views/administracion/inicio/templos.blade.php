@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{asset('admin_template/css/summernote-bs4.min.css')}}" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" rel="stylesheet">

<style>
    .img-cover {
    width: 100%;
    height: 200px; 
    object-fit: cover; 
}
</style>

@endSection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Templos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Inicio</a></li>
                        <li class="breadcrumb-item active">Templos</li>
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
                        Templos 
                        @if(session('success'))
                            <div>
                                <strong class="text-success">{{ session('success') }}</strong>
                            </div>
                        @endif
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{route('administracion.templos.descripcion.actualizar')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <textarea id="summernote" name="descripcion" id="descripcion">
                                            {{$templos->descripcion}}
                                        </textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary float-end"><i class="fa fa-save"></i> Actualizar descripción</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <h4>Detalle Imagenes</h4>
                        <form action="{{ route('administracion.templos.imagenes.subir') }}" method="POST" class="dropzone" id="mi-dropzone" enctype="multipart/form-data">
                            @csrf
                              <div class="dz-message" data-dz-message><span>Arrastra y suelta una imagen aquí o haz clic para subir</span></div>
                          </form>
                    </div>
                  </form>

                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                        Imagenes Templos
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    @foreach ($detalle_templo as $image)
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <a data-fancybox="gallery" href="{{asset('admin_template/img/templos/'.$image->archivo)}}">
                                                    <img src="{{asset('admin_template/img/templos/'.$image->archivo)}}"  alt="Image" class="img-fluid img-cover">
                                                </a>
                                                <hr>
                                                <form class="text-center" action="{{route('administracion.templos.imagenes.eliminar', $image->id)}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm " ><i class="fa fa-trash"></i> Borrar</button>
                                                </form>
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
    </section>
</div>

@endsection

@section('scripts')
    <script src="{{asset('admin_template/js/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
        $('#summernote').summernote()
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script>
        Dropzone.options.miDropzone = {
        url: "{{ route('administracion.templos.imagenes.subir') }}", 
        maxFiles: 1,
        maxFilesize: 10,
        acceptedFiles: 'image/*',
        dictDefaultMessage: "Arrastra y suelta una imagen aquí para subirla",
        init: function() {
        this.on("complete", function(file) {
            location.reload();
        });    
        }
        };  
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

@endSection