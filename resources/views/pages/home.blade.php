@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet" />
<link href="{{ asset('css/library/slick.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-home">
    <div class="section-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-12 col-lg-6 px-0">
                            <div class="carousel-fondo" style="background-image: url({{asset('img/inicio/slider.jpg')}})"></div>
                            <img class="carousel-img img-fluid" src="{{asset('img/inicio/slider.jpg')}}" alt="">
                        </div>
                        <div class="col-12 col-lg-6 px-0">
                            <div class="slider-div d-flex flex-column justify-content-center align-items-start h-100">
                                <h1>Exportamos productos agroindustriales</h1>
                                <a class="btn" href="">VER CATÁLOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-12 col-lg-6 px-0">
                            <div class="carousel-fondo" style="background-image: url({{asset('img/inicio/slider.jpg')}})"></div>
                            <img class="carousel-img img-fluid" src="{{asset('img/inicio/slider.jpg')}}" alt="">
                        </div>
                        <div class="col-12 col-lg-6 px-0">
                            <div class="slider-div d-flex flex-column justify-content-center align-items-start h-100">
                                <h1>Exportamos productos agroindustriales</h1>
                                <a class="btn" href="">VER CATÁLOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-12 col-lg-6 px-0">
                            <div class="carousel-fondo" style="background-image: url({{asset('img/inicio/slider.jpg')}})"></div>
                            <img class="carousel-img img-fluid" src="{{asset('img/inicio/slider.jpg')}}" alt="">
                        </div>
                        <div class="col-12 col-lg-6 px-0">
                            <div class="slider-div d-flex flex-column justify-content-center align-items-start h-100">
                                <h1>Exportamos productos agroindustriales</h1>
                                <a class="btn" href="">VER CATÁLOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-2">
        <h2>Conoce nuestra variedad de productos</h2>
        <div class="autoplay">
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <h3>Aceitunas</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/frutas.jpg')}})">
                    <h3>Frutas</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/cacao.jpg')}})">
                    <h3>Cacao</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/granos.jpg')}})">
                    <h3>Granos</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/verduras.jpg')}})">
                    <h3>Verduras</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <h3>Aceitunas</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/frutas.jpg')}})">
                    <h3>Frutas</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/cacao.jpg')}})">
                    <h3>Cacao</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/granos.jpg')}})">
                    <h3>Granos</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
            <a href="https://www.google.com" class="seccion-prod">
                <div class="seccion-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/verduras.jpg')}})">
                    <h3>Verduras</h3>
                    <div class="sec-2-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="section-3">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Nuevos productos</h2>
            <a href="" class="btn btn-ver-catalogo">VER CATÁLOGO</a>
        </div>
        <div class="row">
            <div class="col">
                <a href="https://www.google.com" class="seccion-3-prod">
                    <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                        <div class="sec-3-oculto d-flex justify-content-center">
                            <p>VER PRODUCTO</p>
                        </div>
                    </div>
                    <h4>Cúrcuma en polvo</h4>
                    <p>S/20.00</p>
                </a>
            </div>
            <div class="col">
                <a href="https://www.google.com" class="seccion-3-prod">
                    <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                        <div class="sec-3-oculto d-flex justify-content-center">
                            <p>VER PRODUCTO</p>
                        </div>
                    </div>
                    <h4>Jengibre en polvo</h4>
                    <p>S/18.90</p>
                </a>
            </div>
            <div class="col">
                <a href="https://www.google.com" class="seccion-3-prod">
                    <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                        <div class="sec-3-oculto d-flex justify-content-center">
                            <p>VER PRODUCTO</p>
                        </div>
                    </div>
                    <h4>Palta en cubos conge...</h4>
                    <p>S/32.00</p>
                </a>
            </div>
            <div class="col">
                <a href="https://www.google.com" class="seccion-3-prod">
                    <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                        <div class="sec-3-oculto d-flex justify-content-center">
                            <p>VER PRODUCTO</p>
                        </div>
                    </div>
                    <h4>Papa amarilla entera...</h4>
                    <p>S/9.90</p>
                </a>
            </div>
            <div class="col">
                <a href="https://www.google.com" class="seccion-3-prod">
                    <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                        <div class="sec-3-oculto d-flex justify-content-center">
                            <p>VER PRODUCTO</p>
                        </div>
                    </div>
                    <h4>Banano entero</h4>
                    <p>S/12.50</p>
                </a>
            </div>
            
        </div>

    </div>

    <div class="section-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Últimas Novedades</h2>
            <a href="" class="btn btn-ver-novedades">IR A NOVEDADES</a>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-4-novedad">
                    <div class="seccion-4-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad01.jpg')}})">
                        <div class="sec-4-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-4-novedad">
                    <div class="seccion-4-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad02.jpg')}})">
                        <div class="sec-4-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-4-novedad">
                    <div class="seccion-4-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad03.jpg')}})">
                        <div class="sec-4-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/slick.min.js') }}"></script>
<script>
    $(function() {
        $('.autoplay').slick({
            dots: false,
            infinite: true,
            // autoplaySpeed: 2000,
            slidesToShow: 5,
            slidesToScroll: 1,
            // autoplay: true,
            // arrows: true,
            // dotsClass: 'slick-dots',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: false
                    }
                }
            ]
        });
    });
</script>
@endpush
