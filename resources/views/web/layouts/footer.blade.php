<style>
    body {
        display: grid;
        grid-template-rows: 1fr auto;
        min-height: 100vh;
        margin: 0;
    }
</style>

<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="row g-4">
                <div class="col-lg-9">
                    <a href="{{ route('/') }}">
                        <h1 class="text-primary mb-0">EL SOLITARIO DE SAYAN N° 81</h1>
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-end pt-3">
                        <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle"
                            href="tel:+51974372327"><i class="fa fa-phone"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                            href="https://www.facebook.com/solitariodesayan81" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                            href="mailto:elsolitariodesayan81@hotmail.com"><i class="fa fa-envelope"
                                target="_blank"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-primary mb-3 ">Acerca de Nosotros</h4>
                    <p class="mb-4">La A∴B∴L∴S∴ El Solitario de Sayán N° 81 se reúne el 2do y 4to sábado de cada mes a
                        las 5.00 p.m en el Templo de la Frat∴, P∴G∴ Jr. Zepita N° 368, Cercado de Trujillo, Or∴ del
                        Perú.</p>
                    <a href="{{ route('nosotros') }}"
                        class="btn border-secondary py-2 px-4 rounded-pill text-primary">Leer más</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-primary mb-3">INICIO</h4>
                    <a class="btn-link" href="{{ route('nosotros') }}">Nosotros</a>
                    <a class="btn-link" href="{{ route('francmasoneria') }}">La Francmasonería</a>
                    <a class="btn-link" href="{{ route('declaracion_principios') }}">Declaración de Principios</a>
                    <a class="btn-link" href="{{ route('templos') }}">Templos</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-primary mb-3">DOCENCIA MASÓNICA</h4>
                    <a class="btn-link" href="{{ route('trabajos_masonicos') }}">Trabajos Masónicos</a>
                    <a class="btn-link" href="{{ route('revistas_masonicas') }}">Revistas Masónicas</a>
                    <a class="btn-link" href="{{ route('libros_masonicos') }}">Libros Masónicos</a>
                    <a class="btn-link" href="{{ route('videos_masonicos') }}">Videos Masónicos</a>
                    <a class="btn-link" href="{{ route('conferencias_masonicas') }}">Conferencias Masónicas</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-primary mb-3">Contáctanos</h4>
                    <p><i class="fa fa-envelope"></i> elsolitariodesayan81@hotmail.com</p>
                    <p><i class="fa fa-phone"></i> +51974372327</p>
                    <p><i class="fab fa-facebook-f"></i> facebook.com/solitariodesayan81</p>
                    <p><i class="fa fa-map-marker"></i> Jr. Zepita Nº 368, Cercado de Trujillo</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-3 mb-md-0">
                <span class="text-light"><i class="fas fa-copyright text-light me-2"></i>El Solitario de Sayan N°
                    81.</a> Todo los Derechos Reservados.</span>
            </div>

        </div>
    </div>
</div>
