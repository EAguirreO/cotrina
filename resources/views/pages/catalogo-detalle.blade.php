@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/catalogo-detalle.css') }}" rel="stylesheet" />
<link href="{{ asset('css/library/slick.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general section-catalogo-detalle">
    <div class="breadcrumb-custom d-flex">
        <a class="enlace-catalogo" href="">Catálogo</a>
        <p class="mx-1">/</p>
        <a class="enlace-categoria" href="">Especias</a>
        <p class="mx-1">/</p>
        <a class="enlace-producto" href="">Cúrcuma en polvo</a>
    </div>
    <div class="row section-1">
        <div class="col-12 col-md-6">
            <div class="cont-imgs-producto d-flex">
                <div class="div-imgs-1 d-flex flex-column">
                    <button class="btn active" aria-current="true" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0">
                        <img class="img-fluid" src="{{asset('img/catalogo-detalle/detalle01.jpg')}}" alt="">
                    </button>
                    <button class="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                        <img class="img-fluid" src="{{asset('img/catalogo-detalle/detalle03.jpg')}}" alt="">
                    </button>
                    <button class="btn" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                        <img class="img-fluid" src="{{asset('img/catalogo-detalle/detalle02.jpg')}}" alt="">
                    </button>
                </div>
                <div class="div-imgs-2">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="{{asset('img/catalogo-detalle/detalle01.jpg')}}" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('img/catalogo-detalle/detalle03.jpg')}}" alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('img/catalogo-detalle/detalle02.jpg')}}" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                            <img class="img-car" src="{{asset('img/inicio/arrow-left-disabled.png')}}" alt="">
                            <img class="img-car-hidden" src="{{asset('img/inicio/arrow-left.png')}}" alt="">
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                            <img class="img-car" src="{{asset('img/inicio/arrow-right-disabled.png')}}" alt="">
                            <img class="img-car-hidden" src="{{asset('img/inicio/arrow-right.png')}}" alt="">
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="prod-descripcion d-flex flex-column justify-content-center h-100">
                <h2>Especias</h2>
                <h1>Cúrcuma en polvo</h1>
                <p>Cúrcuma longa llamada comúnmente cúrcuma o palillo es un producto 100% orgánico. Característico por su aroma sabor y componente funcional (Curcumina). La cúrcuma es uno de los ingredientes del curry en la gastronomía de la India y aporta un color amarillo intenso característico, procedente de la raíz de la planta, este amarillo es igual de intenso independientemente de si la planta se emplea fresca o seca.</p>
                <div class="prod-precio d-flex align-items-center">
                    <p class="prod-precio-1">S/20.00</p>
                    <p class="prod-precio-2">Unidad de 01 Kg.</p>
                </div>
                <div class="prod-cantidad d-flex align-self-start">
                    <div class="d-flex align-items-center prod-cantidad-sub">
                        <button class="btn btn-menos"><img src="{{asset('img/catalogo-detalle/menos.png')}}" alt=""></button>
                        <span class="num-cantidad">01</span>
                        <button class="btn btn-mas"><img src="{{asset('img/catalogo-detalle/mas.png')}}" alt=""></button>
                    </div>
                    <button class="btn">AGREGAR</button>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 d-flex flex-column">
        <div class="detalles-prod-div nav d-flex justify-content-center" id="v-pills-tab" role="tablist">
            <button class="btn active" id="v-pills-detalles-tab" data-bs-toggle="pill" data-bs-target="#v-pills-detalles" type="button" role="tab" aria-controls="v-pills-detalles" aria-selected="true">Detalles</button>
            <button class="btn" id="v-pills-especificaciones-tab" data-bs-toggle="pill" data-bs-target="#v-pills-especificaciones" type="button" role="tab" aria-controls="v-pills-especificaciones" aria-selected="false">Especificaciones</button>
            <button class="btn" id="v-pills-pago-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pago" type="button" role="tab" aria-controls="v-pills-pago" aria-selected="false">Pago y Envío</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-detalles" role="tabpanel" aria-labelledby="v-pills-detalles-tab" tabindex="0">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3 class="titulo-detalle">Detalle</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Sector Productivo</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Agroindustria</p>
                            </div>

                            <div class="d-flex">
                                <p class="det-1">Tipo de Producto</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Cúrcuma molida</p>
                            </div>

                            <div class="d-flex">
                                <p class="det-1">Nombre del Producto</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Cúrcuma longa</p>
                            </div>

                            <div class="d-flex">
                                <p class="det-1">Lugar de Origen</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Junín - Selva Central</p>
                            </div>

                            <div class="d-flex">
                                <p class="det-1">Partida Arancelaria</p>
                                <p class="det-2">:</p>
                                <p class="det-3">0910300000</p>
                            </div>

                        </div>
                        <h3 class="titulo-detalle">Envasado</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Peso</p>
                                <p class="det-2">:</p>
                                <p class="det-3">10kg, 20kg.</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Embalaje</p>
                                <p class="det-2">:</p>
                                <p class="det-3">bolsa x kg x caja (granel)</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Empaque Primario</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Bolsa de polietileno de color azul, baja densidad.</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Empaque Secundario</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Caja de carton corrugado, sello con cinta de color azul.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="titulo-detalle">Características</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Color</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Amarillo pardo oscuro</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Olor</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Propio de la especia</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Sabor</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Suave e intenso</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Aspecto</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Polvo amarillento oscuro</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Textura</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Polvo fino, pulverizado</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-especificaciones" role="tabpanel" aria-labelledby="v-pills-especificaciones-tab" tabindex="0">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3 class="titulo-detalle">Características Fisicoquímicas</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Humedad</p>
                                <p class="det-2">:</p>
                                <p class="det-3">5 - 7%</p>
                            </div>

                            <div class="d-flex">
                                <p class="det-1">Extracto etéreo</p>
                                <p class="det-2">:</p>
                                <p class="det-3">3 - 5%</p>
                            </div>

                            <div class="d-flex">
                                <p class="det-1">Aceite esencial</p>
                                <p class="det-2">:</p>
                                <p class="det-3">7.54% - 0.29%</p>
                            </div>
                        </div>
                        <h3 class="titulo-detalle">Características de Calidad</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Cenizas totales</p>
                                <p class="det-2">:</p>
                                <p class="det-3">1.48 - 0.09%</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Porcentaje de curcumina</p>
                                <p class="det-2">:</p>
                                <p class="det-3">7.54 - 0.29%</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Insectos / huevos de insectos</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Ausente</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Lombrices / larvas</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Ausente</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Materiales extraños</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Ausente</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Residuos de pesticidas</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Dentro de los límites establecidos en la UEE.</p>
                            </div>
                        </div>
                        <h3 class="titulo-detalle">Características Microbiológicas</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Recuento de aerobios</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Menor a 1 x 10^5 ufc/g</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">E. Coli</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Menor a 3 NMP/g</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Coliformes totales</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Menor a 3 NMP/g</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Mohos</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Menor a 10,000 ufc/g</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Levaduras</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Menor a 1,000 ufc/g</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Salmonella</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Negativa/25g</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="titulo-detalle">Aporte Nutricional (porción 100gr)</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Valor Energético</p>
                                <p class="det-2">:</p>
                                <p class="det-3">1.412 kJ - 338 kcal</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Grasas</p>
                                <p class="det-2">:</p>
                                <p class="det-3">9.88 gr</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Grasas Saturadas</p>
                                <p class="det-2">:</p>
                                <p class="det-3">3.12 gr</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Carbohidratos</p>
                                <p class="det-2">:</p>
                                <p class="det-3">43.83 gr</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Azúcares</p>
                                <p class="det-2">:</p>
                                <p class="det-3">3.21 gr</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Proteína</p>
                                <p class="det-2">:</p>
                                <p class="det-3">7.83 gr</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Sal</p>
                                <p class="det-2">:</p>
                                <p class="det-3">0.38 gr</p>
                            </div>
                        </div>
                        <h3 class="titulo-detalle">Forma de Consumo / Consumidores Potenciales</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Consumo</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Apto para todos los consumidores, se añade a alimentos que se están cocinando o macerando ya que la calidad es 100% cúrcuma de cultivo orgánico.</p>
                            </div>
                        </div>
                        <h3 class="titulo-detalle">Tiempo de vida útil / Almacenamiento</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Vida útil</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Hasta 3 años a partir de la fecha de envasado.</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Almacenamiento</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Se debe conservar en un entorno fresco, seco y al abrigo de la luz</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-pago" role="tabpanel" aria-labelledby="v-pills-pago-tab" tabindex="0">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3 class="titulo-detalle">Condiciones de Pago y Envío</h3>
                        <div class="cont-detalle d-flex flex-column">
                            <div class="d-flex">
                                <p class="det-1">Puerto de embarque</p>
                                <p class="det-2">:</p>
                                <p class="det-3">Arica - Chile</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Incoterm</p>
                                <p class="det-2">:</p>
                                <p class="det-3">FOB, Arica</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Término de pago</p>
                                <p class="det-2">:</p>
                                <p class="det-3">L/C, 100% CAD Bancario</p>
                            </div>
                            <div class="d-flex">
                                <p class="det-1">Tiempo de despacho</p>
                                <p class="det-2">:</p>
                                <p class="det-3">30 días después de generada la orden de producción.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Productos Relacionados</h2>
            <a class="btn btn-ver-catalogo">VER CATÁLOGO</a>
        </div>
        <div class="autoplay">
            <a href="https://www.google.com" class="seccion-3-prod">
                <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="sec-3-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
            <a href="https://www.google.com" class="seccion-3-prod">
                <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="sec-3-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Jengibre en polvo</h4>
                <p>S/18.90</p>
            </a>
            <a href="https://www.google.com" class="seccion-3-prod">
                <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="sec-3-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Palta en cubos conge...</h4>
                <p>S/32.00</p>
            </a>
            <a href="https://www.google.com" class="seccion-3-prod">
                <div class="seccion-3-prod-cont d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="sec-3-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Papa amarilla entera...</h4>
                <p>S/9.90</p>
            </a>
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
        {{-- <div class="row">
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
        </div> --}}
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
            arrows: false,
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