@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/novedades.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general section-novedades">
    <div class="section-1">
        <div class="row">
            <div class="col-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-div fondo-novedad-1 d-flex align-items-end" style="">
                                <div class="carousel-sub d-flex justify-content-between align-items-end w-100">
                                    <h1>Titular Novedad Destacada 01</h1>
                                    <a class="btn">LEER MÁS</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-div fondo-novedad-2 d-flex align-items-end" style="">
                                <div class="carousel-sub d-flex justify-content-between align-items-end w-100">
                                    <h1>Titular Novedad Destacada 01</h1>
                                    <a class="btn">LEER MÁS</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-div fondo-novedad-3 d-flex align-items-end" style="">
                                <div class="carousel-sub d-flex justify-content-between align-items-end w-100">
                                    <h1>Titular Novedad Destacada 01</h1>
                                    <a class="btn">LEER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex flex-column justify-content-center h-100">
                    <button class="btn btn-novedad-mini btn-novedad-mini-activa" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0">
                        <div class="novedad-mini d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="{{asset('img/novedades/destacado01-mini.jpg')}}" alt="">
                            <div class="d-flex flex-column justify-content-center">
                                <p>20 de Febrero, 2023</p>
                                <h3>Titular Novedad Destacada 01</h3>
                            </div>
                        </div>
                    </button>
                    <button class="btn btn-novedad-mini">
                        <div class="novedad-mini d-flex align-items-center justify-content-center" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                            <img class="img-fluid" src="{{asset('img/novedades/destacado02-mini.jpg')}}" alt="">
                            <div class="d-flex flex-column justify-content-center">
                                <p>20 de Febrero, 2023</p>
                                <h3>Titular Novedad Destacada 02</h3>
                            </div>
                        </div>
                    </button>
                    <button class="btn btn-novedad-mini">
                        <div class="novedad-mini d-flex align-items-center justify-content-center" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                            <img class="img-fluid" src="{{asset('img/novedades/destacado03-mini.jpg')}}" alt="">
                            <div class="d-flex flex-column justify-content-center">
                                <p>20 de Febrero, 2023</p>
                                <h3>Titular Novedad Destacada 03</h3>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="section-2">
        <div class="sec-2-cont d-flex justify-content-between align-items-center">
            <h2>Más Novedades</h2>
            <div class="d-flex align-items-center sec-2-div">
                <p>Ordenar por:</p>    
                <div class="dropdown">
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más recientes
                        <img class="img-drop-visible img-fluid" src="{{asset('img/novedades/ordenar-default.png')}}" alt="">
                        <img class="img-drop-hidden img-fluid" src="{{asset('img/novedades/ordenar-hover.png')}}" alt="">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Más recientes</a></li>
                        <li><a class="dropdown-item" href="#">Más antiguos</a></li>
                        <li><a class="dropdown-item" href="#">Más vistos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-novedad">
                    <div class="seccion-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad01.jpg')}})">
                        <div class="sec-novedad-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-novedad">
                    <div class="seccion-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad02.jpg')}})">
                        <div class="sec-novedad-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-novedad">
                    <div class="seccion-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad03.jpg')}})">
                        <div class="sec-novedad-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-novedad">
                    <div class="seccion-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad01.jpg')}})">
                        <div class="sec-novedad-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-novedad">
                    <div class="seccion-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad02.jpg')}})">
                        <div class="sec-novedad-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-novedad">
                    <div class="seccion-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad03.jpg')}})">
                        <div class="sec-novedad-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn num-pagina pagina-activa">01</button>
            <button class="btn num-pagina">02</button>
            <button class="btn num-pagina">03</button>
        </div>
    </div>
</div>
@endsection