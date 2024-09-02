@extends('web.layouts.layout')


@section('content')
<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header" style="background-image: url({{asset('web_template/img/bg_slider.jpg')}});">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-secondary text-color-white">NUESTRA WEB OFICIAL</h4>
                <h1 class="mb-5 display-3 text-primary text-color-white">Bienvenidos</h1>
                <div class="position-relative mx-auto">
                    <p class="text-color-white">
                        Este espacio digital de La A∴B∴R∴L∴S∴ “El Solitario de Sayán” N° 81 del Vall∴ de Trujillo, jurisdiccionada a la Gran Logia de los Antiguos, 
                        Libres y Aceptados Masones de la República del Perú, y aprobada mediante Resolución N° 142-007-GLP del 31/05/2024, refleja nuestros Principios fundamentales de Libertad, 
                        Igualdad y Fraternidad. A través de este medio, ofrecemos un punto de encuentro virtual para aquellos interesados en conocer más sobre nuestra Hermandad y sus actividades. 
                        Nuestra plataforma proporciona información detallada sobre nuestra historia, práctica de valores y compromiso con el bienestar y progreso de la comunidad, invitando a quienes 
                        compartan nuestros ideales a unirse a nuestra misión de construir un mundo más justo y solidario.
                    </p>
                </div>
                <div class="position-relative mx-auto">
                    <a href="https://www.youtube.com/watch?v=E_v0MDl5MuM" target="_blank" class="btn btn-primary text-white"><i class="fa fa-angle-right me-2"></i> Conocer más</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active rounded">
                            <img src="{{asset('web_template/img/slider/image_2.jpg')}}" class="img-fluid w-100 h-100 bg-secondary rounded"  alt="First slide">
                        </div>
                        <div class="carousel-item rounded">
                            <img src="{{asset('web_template/img/slider/image_1.jpg')}}" class="img-fluid w-100 h-100 rounded"  alt="Second slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Featurs Section Start -->
<div class="container-fluid featurs py-5">
    <div class="container py-5">
        <div class="row g-4 d-flex align-items-stretch">
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="featurs-item text-center rounded bg-light p-4 d-flex flex-column justify-content-between flex-fill">
                    <div class="featurs-content mb-3">
                        <h5>¿Qué es la Masonería?</h5>
                        <p align="start">La masonería es una fraternidad iniciática que promueve el crecimiento personal, el altruismo y el progreso moral y espiritual a través de principios, simbólicos,  filosóficos y enseñanzas éticas.</p>
                    </div>
                    <div class="mt-auto">
                        <button class="btn btn-primary text-white">
                            <i class="fa fa-angle-right me-2"></i>Conocer más
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="featurs-item text-center rounded bg-light p-4 d-flex flex-column justify-content-between flex-fill">
                    <div class="featurs-content mb-3">
                        <h5>Masones destacados</h5>
                        <p align="start">Estos masones destacados no solo han dejado huella en la fraternidad masónica, sino también en la historia y la sociedad en general cuyas contribuciones han dejado una marca indeleble en diversos ámbitos.</p>
                    </div>
                    <div class="mt-auto">
                        <button class="btn btn-primary text-white">
                            <i class="fa fa-angle-right me-2"></i>Conocer más
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="featurs-item text-center rounded bg-light p-4 d-flex flex-column justify-content-between flex-fill">
                    <div class="featurs-content mb-3">
                        <h5>Principios masónicos</h5>
                        <p align="start">Forman la base de la fraternidad masónica, arraigados en valores éticos y filosóficos, han perdurado a lo largo del tiempo y continúan inspirando a los masones en su búsqueda de la verdad y la mejora personal.</p>
                    </div>
                    <div class="mt-auto">
                        <button class="btn btn-primary text-white">
                            <i class="fa fa-angle-right me-2"></i>Conocer más
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="featurs-item text-center rounded bg-light p-4 d-flex flex-column justify-content-between flex-fill">
                    <div class="featurs-content mb-3">
                        <h5 style="display: ">Gran Logia del Perú</h5>
                        <img src="{{asset('web_template/img/gran_logia.png')}}" alt="Gran Logia del Perú">
                    </div>
                    <div class="mt-auto">
                        <button class="btn btn-primary text-white">
                            <i class="fa fa-angle-right me-2"></i>Acceder
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-4">Nuestros Recursos</h1>
            <p>Ponemos a su disposición una gran variedad de recursos.</p>
        </div>
        <div class="bg-light p-5 rounded">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-book text-secondary"></i>
                        <h4>Libros</h4>
                        <div class="mt-auto text-center">
                            <button class="btn btn-primary text-white custom-button">
                                <i class="fa fa-angle-right me-2 iconos-recursos" ></i>Acceder
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-edit text-secondary"></i>
                        <h4>Artículos</h4>
                        <div class="mt-auto text-center">
                            <button class="btn btn-primary text-white custom-button">
                                <i class="fa fa-angle-right me-2 iconos-recursos" ></i>Acceder
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-video text-secondary"></i>
                        <h4>Documentales</h4>
                        <div class="mt-auto text-center">
                            <button class="btn btn-primary text-white custom-button">
                                <i class="fa fa-angle-right me-2 iconos-recursos" ></i>Acceder
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-user text-secondary"></i>
                        <h4>Conferencias</h4>
                        <div class="mt-auto text-center">
                            <button class="btn btn-primary text-white custom-button">
                                <i class="fa fa-angle-right me-2 iconos-recursos" ></i>Acceder
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Start -->

<!-- Featurs Start -->
<div class="container-fluid service">
    <div class="container py-5">
        <div class="row text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-4">Secciones de interés</h1>
            <p>Manténgase al día con nuestras actividades institucionales relevantes. Aquí encontrarás una amplia gama de eventos, talleres, conferencias y oportunidades para participar y conectar con otros miembros de nuestra comunidad.</p>
        </div>
        <br>
        <div class="row g-4 justify-content-center" style="background:#f4f6f8 ">
            <div class="col-md-6 col-lg-4 pb-5">
                <a href="#">
                    <div class="service-item bg-secondary rounded border border-secondary">
                        <div class="px-4 rounded-bottom"  style="box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);">
                            <div class="service-content bg-primary text-center p-4 rounded">
                                <i class="fa fa-info-circle text-white" style="font-size: 80px"></i>
                            </div>
                            <div class="boletin-texto">
                                <h4 class="text-center text-primary">BOLETÍN DIGITAL</h4>
                                <span align="start" class="text-dark">Mantente al día con las últimas novedades, eventos y promociones especiales que tenemos para ti.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 pb-5">
                <a href="#">
                    <div class="service-item bg-secondary rounded border border-secondary">
                        <div class="px-4 rounded-bottom" style="box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);">
                            <div class="service-content bg-primary text-center p-4 rounded">
                                <i class="fa fa-calendar text-white" style="font-size: 80px"></i>
                            </div>
                            <div class="boletin-texto">
                                <h4 class="text-center text-primary">CALENDARIO DE ACTIVIDADES</h4>
                                <span align="start" class="text-dark">Conozca nuestras actividades programadas de todos nuestros eventos y actividades.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 pb-5">
                <a href="#">
                    <div class="service-item bg-secondary rounded border border-secondary">
                        <div class="px-4 rounded-bottom" style="box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);">
                            <div class="service-content bg-primary text-center p-4 rounded">
                                <i class="fa fa-info-circle text-white" style="font-size: 80px"></i>
                            </div>
                            <div class="boletin-texto">
                                <h4 class="text-center text-primary">CONTÁCTENOS</h4>
                                <span align="start" class="text-dark">Puede ponerse en contacto con nosotros a email@rlselsolitariodelsayan81.com.</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Featurs End -->


<!-- Tastimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="testimonial-header text-center">
            <h1 class="display-5 mb-5 text-dark">Instituciones aliadas</h1>
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
</div>
<!-- Tastimonial End -->
{{-- <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>  --}}

@endsection