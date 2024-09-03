<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>

<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="{{ route('/') }}" class="navbar-brand">
                <h1 class="text-primary display-6"><img src="{{ asset('web_template/Logo-81.png') }}"
                        alt="Logo Solitario de Sayan" class="navbar-logo" /></h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <div class="nav-item dropdown">
                        <a href="{{ route('/') }}"
                            class="nav-link dropdown-toggle <?= request()->is('/') || request()->is('nosotros') || request()->is('francmasoneria') || request()->is('declaracion_principios') || request()->is('templos') ? 'active' : '' ?>"
                            data-bs-toggle="dropdown">Inicio</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            <a href="{{ route('nosotros') }}" class="dropdown-item">Nosotros</a>
                            <a href="{{ route('francmasoneria') }}" class="dropdown-item">La Francmasonería</a>
                            <a href="{{ route('declaracion_principios') }}" class="dropdown-item">Declaración de
                                Principios</a>
                            <a href="{{ route('templos') }}" class="dropdown-item">Templos</a>
                        </div>
                    </div>
                    <a href="{{ asset('masones_ilustres') }}"
                        class="nav-item nav-link <?= request()->is('masones_ilustres') ? 'active' : '' ?>">Masones
                        Ilustres</a>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle <?= request()->is('trabajos_masonicos') || request()->is('revistas_masonicas') || request()->is('libros_masonicos') || request()->is('videos_masonicos') || request()->is('conferencias_masonicas') ? 'active' : '' ?>"
                            data-bs-toggle="dropdown">Docencia
                            masónica</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            <a href="{{ route('trabajos_masonicos') }}" class="dropdown-item">Trabajos Masónicos</a>
                            <a href="{{ route('revistas_masonicas') }}" class="dropdown-item">Revistas Masónicas</a>
                            <a href="{{ route('libros_masonicos') }}" class="dropdown-item">Libros Masónicos</a>
                            <a href="{{ route('videos_masonicos') }}" class="dropdown-item">Videos Masónicos</a>
                            <a href="{{ route('conferencias_masonicas') }}" class="dropdown-item">Conferencias
                                Masónicas</a>
                        </div>
                    </div>
                    <a href="{{ route('red_logias') }}"
                        class="nav-item nav-link <?= request()->is('red_logias') ? 'active' : '' ?>">Red de Logias</a>
                    <a href="{{ route('eventos') }}"
                        class="nav-item nav-link <?= request()->is('eventos') ? 'active' : '' ?>">Eventos</a>
                    <a href="{{ route('contactanos') }}"
                        class="nav-item nav-link <?= request()->is('contactanos') ? 'active' : '' ?>">Contáctanos</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
