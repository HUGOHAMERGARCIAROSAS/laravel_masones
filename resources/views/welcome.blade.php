@extends('web.layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('web_template/css/home.css') }}">
@endsection

@section('content')
    <div class="container-fluid py-5 hero-header"
        style="background-image: url({{ asset('web_template/img/bg_slider.jpg') }});">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary text-color-white">NUESTRA WEB OFICIAL</h4>
                    <h1 class="mb-5 display-3 text-primary text-color-white">Bienvenidos</h1>
                    <div class="position-relative mx-auto">
                        <p class="text-color-white">
                            Este espacio digital de La A∴B∴R∴L∴S∴ “El Solitario de Sayán” N° 81 del Vall∴ de Trujillo,
                            jurisdiccionada a la Gran Logia de los Antiguos,
                            Libres y Aceptados Masones de la República del Perú, y aprobada mediante Resolución N°
                            142-007-GLP del 31/05/2024, refleja nuestros Principios fundamentales de Libertad,
                            Igualdad y Fraternidad. A través de este medio, ofrecemos un punto de encuentro virtual para
                            aquellos interesados en conocer más sobre nuestra Hermandad y sus actividades.
                            Nuestra plataforma proporciona información detallada sobre nuestra historia, práctica de valores
                            y compromiso con el bienestar y progreso de la comunidad, invitando a quienes
                            compartan nuestros ideales a unirse a nuestra misión de construir un mundo más justo y
                            solidario.
                        </p>
                    </div>
                    <div class="position-relative mx-auto">
                        <a href="{{ route('nosotros') }}" class="btn btn-primary text-white"><i
                                class="fa fa-angle-right me-2"></i> Conocer más</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="{{ asset('web_template/img/slider/image_2.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded img-cover" alt="First slide">
                            </div>
                            <div class="carousel-item rounded">
                                <img src="{{ asset('web_template/img/slider/image_1.jpg') }}"
                                    class="img-fluid w-100 h-100 rounded img-cover" alt="Second slide">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid featurs">
        <div class="container py-5">
            <div class="row g-4 d-flex align-items-stretch">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div
                        class="featurs-item text-center rounded bg-light p-4 d-flex flex-column justify-content-between flex-fill">
                        <div class="featurs-content mb-3">
                            <h5>¿Qué es la Masonería?</h5>
                            <p align="start">La masonería es una fraternidad iniciática que promueve el crecimiento
                                personal, el altruismo y el progreso moral y espiritual a través de principios, simbólicos,
                                filosóficos y enseñanzas éticas.</p>
                        </div>
                        <div class="mt-auto">
                            <a class="btn btn-primary text-white" href="{{ route('nosotros') }}">
                                <i class="fa fa-angle-right me-2"></i>Conocer más
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div
                        class="featurs-item text-center rounded bg-light p-4 d-flex flex-column justify-content-between flex-fill">
                        <div class="featurs-content mb-3">
                            <h5>Masones destacados</h5>
                            <p align="start">Estos masones destacados no solo han dejado huella en la fraternidad masónica,
                                sino también en la historia y la sociedad en general cuyas contribuciones han dejado una
                                marca indeleble en diversos ámbitos.</p>
                        </div>
                        <div class="mt-auto">
                            <a class="btn btn-primary text-white" href="{{ route('masones_ilustres') }}">
                                <i class="fa fa-angle-right me-2"></i>Conocer más
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div
                        class="featurs-item text-center rounded bg-light p-4 d-flex flex-column justify-content-between flex-fill">
                        <div class="featurs-content mb-3">
                            <h5>Principios masónicos</h5>
                            <p align="start">Forman la base de la fraternidad masónica, arraigados en valores éticos y
                                filosóficos, han perdurado a lo largo del tiempo y continúan inspirando a los masones en su
                                búsqueda de la verdad y la mejora personal.</p>
                        </div>
                        <div class="mt-auto">
                            <a class="btn btn-primary text-white" href="{{ route('declaracion_principios') }}">
                                <i class="fa fa-angle-right me-2"></i>Conocer más
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div
                        class="featurs-item text-center rounded bg-light p-4 d-flex flex-column justify-content-between flex-fill">
                        <div class="featurs-content mb-3">
                            <h5 style="display: ">Gran Logia del Perú</h5>
                            <img src="{{ asset('web_template/img/gran_logia.png') }}" alt="Gran Logia del Perú">
                        </div>
                        <div class="mt-auto">
                            <a class="btn btn-primary text-white" href="https://glperu.org.pe/node" target="_blank">
                                <i class="fa fa-angle-right me-2"></i>Acceder
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid testimonial py-5"
        style="background: url({{ asset('web_template/img/fondo4.jpg') }}); background-size: cover; ">
        <div class="container py-5">
            <div class="container-fluid py-5 hero-section">
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-6 fondo-blanco mb-4">
                            <div id="contentCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner p-4">
                                    <div class="carousel-item active">
                                        <div class="content-box p-4">
                                            <h6 class="text-danger">Actividades institucionales</h6>
                                            <h2>CEHUM</h2>
                                            <h3 class="text-bold">Izamiento del pabellón nacional</h3>
                                            <p align="start">
                                                Participamos del desfile por el 2do. Aniversario de Fundación
                                                de nuestro
                                                Centro de Estudios Humanísticos José Faustino Sánchez Carrión - CEHUM, luego
                                                de lo cual asistimos a nuestro local institucional a fin de realizar una
                                                Asamblea General de Asociados y a disfrutar de un desayuno de Aniversario.
                                            </p>
                                            <button type="button" onclick="abrirEnNuevaVentana()"
                                                class="btn btn-primary text-white"><i class="fa fa-plus me-2"></i> Leer
                                                más</button>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="content-box p-4">
                                            <h6 class="text-danger">Actividades institucionales</h6>
                                            <h2>CEHUM</h2>
                                            <h3>Izamiento del pabellón nacional</h3>
                                            <p align="start">Organizado por el CEHUM y la Logia Masónica
                                                El Solitario de Sayán N° 81, cuya
                                                finalidad es la de contribuir al progreso y bienestar de la Humanidad, con
                                                inicio en el Territorio Vecinal 34 del distrito de Trujillo correspondiente
                                                a la Urb. La Rinconada. Luego de exponerles los alcances de este Proyecto,
                                                se procedió a la firma del Acta de Compromisos, con la Alcaldesa Vecinal,
                                                Prof. Delia Paredes y su Directiva.</p>
                                            <button type="button" class="btn btn-primary text-white"
                                                onclick="abrirEnNuevaVentana()"><i class="fa fa-plus me-2"></i>
                                                Leer
                                                más</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controles del carrusel -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#contentCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#contentCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Siguiente</span>
                                </button>
                            </div>
                        </div>

                        <!-- Contenedor de acordeones a la derecha -->
                        <div class="col-lg-6">
                            <div class="accordion custom-accordion-spacing" id="accordionExample">
                                <div class="accordion-item mb-3"> <!-- Añade márgenes inferiores entre acordeones -->
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Conferencia "Vida y Obra de José Faustino Sánchez Carrión"
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            El Ms. Luis Aliaga Loyola, Asociado Honorario del CEHUM dictó la Conferencia
                                            «Vida y Obra de José Faustino Sánchez Carrión», en el Auditorio de la GRELL,
                                            dirigida a los profesores de secundaria en el marco del Concurso de Disertación
                                            que viene organizando con la Gerencia Regional de Educación de La Libertad.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Conferencia "Masonería y Religión"
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Tal como se informara, dentro de las acciones conjuntas que el CEHUM viene
                                            desarrollando con la Logia Masónica «El Solitario de Sayán N° 81», se tiene un
                                            Ciclo de Conferencias mensuales (los 2dos. sábados de cada mes), en el Salón del
                                            1er. piso del Jr. Zepita 368, con asistencia de la ciudadanía en general.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Conferencia "Historia del Ejército del Perú"
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Tal como se informara, dentro de las acciones conjuntas que el CEHUM viene
                                            desarrollando con la Logia Masónica «El Solitario de Sayán N° 81», se tiene un
                                            Ciclo de Conferencias mensuales (los 2dos. sábados de cada mes), en el Salón del
                                            1er. piso del Jr. Zepita 368, con asistencia de la ciudadanía en general.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h2 class="display-4">Nuestros Recursos</h2>
                <p>Ponemos a su disposición una gran variedad de recursos.</p>
            </div>
            <div class="bg-light p-5 rounded">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-book text-secondary"></i>
                            <h4>Libros</h4>
                            <div class="mt-auto text-center">
                                <a class="btn btn-primary text-white custom-button"
                                    href="https://drive.google.com/drive/folders/1078rOz0ozgVkuG7IDTYnkFqOXi6-uKqZ"
                                    target="_blank">
                                    <i class="fa fa-angle-right me-2 iconos-recursos"></i>Acceder
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-edit text-secondary"></i>
                            <h4>Artículos</h4>
                            <div class="mt-auto text-center">
                                <a class="btn btn-primary text-white custom-button"
                                    href="https://drive.google.com/drive/folders/1cCjnf-RCruPc92mYqE5nGEOPOFzkyhq2"
                                    target="_blank">
                                    <i class="fa fa-angle-right me-2 iconos-recursos"></i>Acceder
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-video text-secondary"></i>
                            <h4>Documentales</h4>
                            <div class="mt-auto text-center">
                                <a class="btn btn-primary text-white custom-button"
                                    href="{{ route('videos_masonicos') }}">
                                    <i class="fa fa-angle-right me-2 iconos-recursos"></i>Acceder
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-user text-secondary"></i>
                            <h4>Conferencias</h4>
                            <div class="mt-auto text-center">
                                <a class="btn btn-primary text-white custom-button"
                                    href="{{ route('conferencias_masonicas') }}">
                                    <i class="fa fa-angle-right me-2 iconos-recursos"></i>Acceder
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid service">
        <div class="container py-5">
            <div class="row text-center mx-auto mb-5" style="max-width: 700px;">
                <h2 class="display-4">Secciones de interés</h2>
                <p>Manténgase al día con nuestras actividades institucionales relevantes. Aquí encontrarás una amplia gama
                    de eventos, talleres, conferencias y oportunidades para participar y conectar con otros miembros de
                    nuestra comunidad.</p>
            </div>
            <br>
            <div class="row g-4 justify-content-center" style="background:#f4f6f8 ">
                <div class="col-md-6 col-lg-4 pb-5">

                    <div class="service-item bg-secondary rounded border border-secondary" style="height: 280px">
                        <div class="rounded-bottom" style="box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);">
                            <div class="service-content bg-primary text-center p-4 rounded">
                                <i class="fa fa-info-circle text-white" style="font-size: 80px"></i>
                            </div>
                            <div class="boletin-texto secciones-cover px-4">
                                <h4 class="text-center text-primary">BOLETÍN DIGITAL</h4>
                                <span align="start" class="text-dark">Mantente al día con las últimas novedades,
                                    eventos y promociones especiales que tenemos para ti.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 pb-5">
                    <div class="service-item bg-secondary rounded border border-secondary" style="height: 280px">
                        <div class="rounded-bottom" style="box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);">
                            <div class="service-content bg-primary text-center p-4 rounded">
                                <i class="fa fa-calendar text-white" style="font-size: 80px"></i>
                            </div>
                            <div class="boletin-texto secciones-cover px-4">
                                <h4 class="text-center text-primary">CALENDARIO DE ACTIVIDADES</h4>
                                <span align="start" class="text-dark">Conozca nuestras actividades programadas de
                                    todos nuestros eventos y actividades.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 pb-5">
                    <div class="service-item bg-secondary rounded border border-secondary" style="height: 280px">
                        <div class="rounded-bottom" style="box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);">
                            <div class="service-content bg-primary text-center p-4 rounded">
                                <i class="fa fa-info-circle text-white" style="font-size: 80px"></i>
                            </div>
                            <div class="boletin-texto secciones-cover px-4">
                                <h4 class="text-center text-primary">CONTÁCTENOS</h4>
                                <span align="start" class="text-dark">Puede ponerse en contacto con nosotros a
                                    email@rlselsolitariodelsayan81.com.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid testimonial">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h2 class="display-5 mb-5 text-dark">Instituciones aliadas</h2>
            </div>
            <div class="row">
                <div class="col-md-2 text-center">
                    <img class="img-fluid rounded" src="{{ asset('web_template/img/instituciones/mpt.jpg') }}"
                        width="150" height="150">
                </div>
                <div class="col-md-2 text-center">
                    <img class="img-fluid rounded" src="{{ asset('web_template/img/instituciones/unt.jpg') }}"
                        width="150" height="150">
                </div>
                <div class="col-md-2 text-center">
                    <img class="img-fluid rounded" src="{{ asset('web_template/img/instituciones/gobren.jpg') }}"
                        width="150" height="150">
                </div>
                <div class="col-md-2 text-center">
                    <img class="img-fluid rounded" src="{{ asset('web_template/img/instituciones/grell.jpg') }}"
                        width="150" height="150">
                </div>
                <div class="col-md-2 text-center">
                    <img class="img-fluid rounded" src="{{ asset('web_template/img/instituciones/cehum.jpg') }}"
                        width="150" height="150">
                </div>
                <div class="col-md-2 text-center">
                    <img class="img-fluid rounded" src="{{ asset('web_template/img/instituciones/mincultura.png') }}"
                        width="150" height="150">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        abrirEnNuevaVentana = () => {
            window.open("https://www.facebook.com/cehumtrujillo/", '_blank');
        }
    </script>
@endsection
