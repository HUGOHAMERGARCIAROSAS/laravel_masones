<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">El Solitario de Sayan</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#"
                        class="nav-link <?= request()->is('dashboard') || request()->is('administracion/nosotros') || request()->is('administracion/francmasoneria') || request()->is('administracion/declaracion_principios') || request()->is('administracion/templos') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Inicio
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link <?= request()->is('dashboard') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('administracion.nosotros') }}"
                                class="nav-link <?= request()->is('administracion/nosotros') ? 'active' : '' ?> ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nosotros</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('administracion.francmasoneria') }}"
                                class="nav-link <?= request()->is('administracion/francmasoneria') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>La FRANCMASONERÍA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('administracion.declaracion_principios') }}"
                                class="nav-link <?= request()->is('administracion/declaracion_principios') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Declaración de Principios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('administracion.templos') }}"
                                class="nav-link <?= request()->is('administracion/templos') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Templo</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('administracion.masones_ilustres') }}"
                        class="nav-link  <?= request()->is('administracion/masones_ilustres') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Masones Ilustres
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a
                        class="nav-link   <?= request()->is('administracion/trabajos_masonicos') || request()->is('administracion/libros_masonicos') || request()->is('administracion/revistas_masonicas') || request()->is('administracion/videos_masonicos') || request()->is('administracion/conferencias_masonicas') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Docencia Masónica
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('administracion.trabajos_masonicos') }}"
                                class="nav-link <?= request()->is('administracion/trabajos_masonicos') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trabajos Masonicos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('administracion.libros_masonicos') }}"
                                class="nav-link  <?= request()->is('administracion/libros_masonicos') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Libros Masónicos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('administracion.revistas_masonicas') }}"
                                class="nav-link  <?= request()->is('administracion/revistas_masonicas') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Revistas Masónicas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('administracion.conferencias_masonicas') }}"
                                class="nav-link <?= request()->is('administracion/conferencias_masonicas') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Conferencias Masónicas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('administracion.videos_masonicos') }}"
                                class="nav-link  <?= request()->is('administracion/videos_masonicos') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Videos Masónicos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Red de Logias
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('administracion.eventos') }}"
                        class="nav-link <?= request()->is('administracion/eventos') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Eventos
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
