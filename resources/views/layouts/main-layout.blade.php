<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotrina</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    {{-- Fuente Baloo Chettan --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/hover.css')}}">
    
    @yield('styles')
</head>

<body>

    <header class="animated fadeIn overflow-hidden header">
        <div class="d-flex align-items-center justify-content-between mx-auto">
            <div class="header-1 text-center">
                <a class="" href="{{url('home')}}">
                    <img class="img-fluid img-logo" src="{{asset('img/inicio/logo.png')}}" alt="">
                </a>
            </div>
            <div class="header-2 d-flex">
                <ul class="nav nav-fill justify-content-end align-items-center nav-menu">
                    
                    <a class="nav-link {{ (request()->is('home')) ? 'nav-link-activo' : '' }}" href="{{url('home')}}">Inicio</a>

                    <a class="nav-link {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">Conócenos</a>

                    <a class="nav-link {{ (request()->is('catalogo')) ? 'nav-link-activo' : '' }}" href="{{url('catalogo')}}">Catálogo</a>

                    <a class="nav-link {{ (request()->is('')) ? 'nav-link-activo' : '' }}" href="{{url('')}}">Agroindustrial</a>

                    <a class="nav-link {{ (request()->is('novedades')) ? 'nav-link-activo' : '' }}" href="{{url('novedades')}}">Novedades</a>
                    
                    <a class="nav-link {{ (request()->is('')) ? 'nav-link-activo' : '' }}" href="{{url('')}}">Ubícanos</a>

                    {{-- <div class="contenedor-rs-header">
                        <a class="header-fb d-inline-block me-3" href="#" target="_blank"><img class="header-img-fb" src="{{asset('img/inicio/facebook-header.png')}}"><img class="img-fb-hover" src="{{asset('img/inicio/facebook-hover.png')}}"></a>
                        <a class="header-inst d-inline-block" href="#" target="_blank"><img class="header-img-inst" src="{{asset('img/inicio/instagram-header.png')}}"><img class="img-inst-hover" src="{{asset('img/inicio/instagram-hover.png')}}"></a>
                    </div> --}}
                </ul>
                {{-- <button class="btn btn-light btn-abrir-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                    <i class="bi bi-list" style="font-size: 1.7rem; color: #ad17ba;"></i>
                </button> --}}
            </div>
            <div class="header-3 d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <button class="btn">
                        <img class="img-fluid" src="{{asset('img/inicio/user-icon.png')}}" alt="">
                    </button>
                    <div>
                        <p class="mensaje-header">Hola</p>
                        <p class="mensaje-header">Inicia sesión</p>
                    </div>
                </div>
                <div class="header-linea"></div>
                <div class="div-notificacion">
                    <button class="btn">
                        <img src="{{asset('img/inicio/shop-icon.png')}}" alt="">
                        <div class="num-notificacion">20</div>
                    </button>
                </div>
            </div>
        </div>          
    </header>

    <div class="offcanvas offcanvas-start header-offcanvas" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto nav-main">
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                
                            text-center 
                            offcanvas-enlace                                   
                            {{ (request()->is('home')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('home')}}"
                        >Inicio</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                    
                            text-center
                            offcanvas-enlace
                            {{ (request()->is('nosotros')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('nosotros')}}"
                        >Nosotros</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('ninios')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('ninios')}}"
                        >Niños</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('ninias')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('ninias')}}"
                        >Niñas</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('caballeros')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('caballeros')}}"
                        >Caballeros</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('damas')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('damas')}}"
                        >Damas</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('contactenos')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('contactenos')}}"
                        >Escríbenos</a
                    >
                </li>
                <div class="off-canvas-contenedor-rs d-flex justify-content-center mt-4">
                    <a href="#" target="_blank" class="nav-icono-rp me-3">
                        <img src="{{asset('img/inicio/facebook-header.png')}}" alt="">
                    </a>
                    <a href="#" target="_blank" class="nav-icono-rp">
                        <img src="{{asset('img/inicio/instagram-header.png')}}" alt="">
                    </a>
                </div>
            </ul>
        </div>
    </div>

    <main class="overflow-x-hidden main-web">
        @yield('content')
    </main>

    <footer class="container-fluid px-0">
        <div class="footer-content-1">
            <div class="d-flex justify-content-center align-items-center">
                <div class="footer-1 d-flex flex-column">
                    <p class="footer-text-1">Suscríbete a nuestro Boletín de Noticias</p>
                    <p class="footer-text-2">Así podrás estar al tanto de nuevos productos.</p>
                </div>
                <div class="input-correo input-group mb-3">
                    <input type="text" class="form-control" placeholder="Escribe tu correo aquí..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button class="input-group-text" id="basic-addon2"><img src="{{asset('img/inicio/send.png')}}"></button>
                </div>
            </div>
        </div>
        <div class="footer-content-2">
            <div class="footer-sub-content d-flex justify-content-between">
                <div class="footer-div-1 d-flex">
                    <div class="footer-sub-1 d-flex flex-column">
                        <h3 class="footer-titulo">Cotrina</h3>
                        <div class="d-flex flex-column align-items-start">
                            <a class="footer-enlace" href="">Nosotros</a>
                            <a class="footer-enlace" href="">Novedades</a>
                            <a class="footer-enlace" href="">Ubícanos</a>
                        </div>
                    </div>
                    <div class="footer-sub-2 d-flex flex-column">
                        <h3 class="footer-titulo">Servicio al Cliente</h3>
                        <div class="d-flex flex-column align-items-start">
                            <a class="footer-enlace" href="">Términos y Condiciones</a>
                            <a class="footer-enlace" href="">Libro de Reclamaciones</a>
                            <a class="footer-enlace" href="">Preguntas Frecuentes</a>
                        </div>
                    </div>
                </div>
                <div class="footer-div-2 d-flex">
                    <div class="footer-sub-3 d-flex flex-column">
                        <h3 class="footer-titulo">Métodos de Pago</h3>
                        <div>
                            <img class="img-fluid me-3" src="{{asset('img/inicio/visa.png')}}" alt="">
                            <img class="img-fluid me-3" src="{{asset('img/inicio/mastercard.png')}}" alt="">
                            <img class="img-fluid" src="{{asset('img/inicio/diners.png')}}" alt="">
                        </div>
                    </div>
                    <div class="footer-sub-4">
                        <img src="{{asset('img/inicio/libro-reclamaciones.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-div-3 d-flex justify-content-between">
                <p>Diseñado por Katana Studio.</p>
                <p>© Cotrina. Todos los derechos reservados.</p>
                <div class="d-flex">
                    <p class="me-3">Síguenos</p>
                    <div>
                        <a href="http://" class="me-3"><img src="{{asset('img/inicio/facebook.png')}}" alt=""></a>
                        <a href="http://" class="me-3"><img src="{{asset('img/inicio/instagram.png')}}" alt=""></a>
                        <a href="http://" class=""><img src="{{asset('img/inicio/linkedin.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
        Launch demo modal
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="login-titulo">Hola, inicia sesión aquí</h2>
                    <div class="mb-3">
                        <label for="iptEmail" class="form-label login-label">Correo electrónico</label>
                        <input type="email" class="form-control login-input" id="iptEmail" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="mb-3">
                        <label for="iptPassword" class="form-label login-label">Contraseña</label>
                        <input type="password" class="form-control login-input" id="iptPassword" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="d-flex flex-column">
                        <a class="login-link-forgot-pass" href="www.google.com">¿Olvidaste tu contraseña?</a>
                        <button class="btn btn-login-ingresar">INGRESAR</button>
                        <p class="login-link-register">¿No tienes una cuenta? <a href="">Regístrate</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    {{-- JQuery --}}
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    {{-- Scroll menu --}}
    <script>
        // $(document).on("scroll", function(){
        //     var desplazamientoActual = $(document).scrollTop();

        //     if(desplazamientoActual > 10){
        //         $('.header').css('background', '#fff');
        //         $('.nav-menu .nav-link').css('color', 'black');
        //     }

        //     if(desplazamientoActual < 10){
        //         $('.header').css('background', '');
        //     }
        // }); 
    </script>

    @livewireScripts
    @stack('scripts')
</body>

</html>