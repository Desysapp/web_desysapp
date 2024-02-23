<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
    <div class="offcanvas-header d-flex align-items-center mt-4">
        <a href="{{ route('home') }}" class="d-flex align-items-center mb-md-0 text-decoration-none">
            <img src="{{ asset('web/img/desysapp-logo.png') }}" alt="logo" class="img-fluid ps-2" />
        </a>
        <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="flaticon-cancel"></i>
        </button>
    </div>
    <div class="offcanvas-body">
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
        <div class="action-btns mt-4 ps-3">
            <a href="login.html" class="btn btn-outline-primary me-2">Iniciar Sesión</a>
            <a href="request-demo.html" class="btn btn-primary">Contáctanos</a>
        </div>
    </div>
</div>
