<nav class="navbar navbar-expand-xl navbar-light sticky-header">
    <div class="container d-flex align-items-center justify-content-lg-between position-relative">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
            <img src="{{ asset('web/img/desysapp-logo.png') }}" alt="logo" class="img-fluid logo-white" />
            <img src="{{ asset('web/img/desysapp-logo.png') }}" alt="logo" class="img-fluid logo-color" />
        </a>

        <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
            <i class="flaticon-menu"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasWithBackdrop"
            aria-controls="offcanvasWithBackdrop"></i>
        </a>
        <div class="clearfix"></div>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                <li><a href="{{ route('home') }}" class="nav-link">Inicio</a></li>
                <li><a href="services.html" class="nav-link">Servicios</a></li>
                <li><a href="pricing.html" class="nav-link">Precios</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Información</a>
                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                        <div class="dropdown-grid rounded-custom">
                            <div class="dropdown-grid-item bg-white radius-left-side radius-right-side">
                                <a href="about-us.html" class="dropdown-link px-0">
                                    <span class="me-2">
                                        <i class="flaticon-headset"></i>
                                    </span>
                                    <div class="drop-title">Atención al Cliente</div>
                                </a>
                                <a href="contact-us.html" class="dropdown-link px-0">
                                    <span class="me-2">
                                        <i class="flaticon-envelope"></i>
                                    </span>
                                    <div class="drop-title">Centro de Ayuda</div>
                                </a>
                                <a href="contact-us.html" class="dropdown-link px-0">
                                    <span class="me-2">
                                        <i class="flaticon-server-storage"></i>
                                    </span>
                                    <div class="drop-title">Preguntas Frecuentes</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
            <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle">
                <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light"><i class="flaticon-sun-1 fs-lg"></i></div>
                <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark"><i class="flaticon-moon-1 fs-lg"></i></div>
            </a>
            <a href="login.html" class="btn btn-link text-decoration-none me-2">Iniciar Sesión</a>
            <a href="request-demo.html" class="btn btn-success">Contáctanos</a>
        </div>
    </div>
</nav>
