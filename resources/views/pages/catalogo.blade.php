@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/catalogo.css') }}" rel="stylesheet" />
<link href="{{ asset('css/library/slick.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general section-catalogo">
    <h1 class="text-center">Nuestros Productos</h1>

    <div class="autoplay">
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/todos.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Todos</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/aceitunas.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Aceitunas</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/frutas.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Frutas</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/cacao.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Cacao</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/granos.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Granos</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/todos.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Todos</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/aceitunas.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Aceitunas</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/frutas.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Frutas</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/cacao.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Cacao</p>
                </div>
            </div>
        </a>
        <a href="https://www.google.com" class="categoria-div">
            <div class="categoria-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/catalogo/granos.jpg')}})">
                <div class="descripcion-categoria d-flex justify-content-center">
                    <p>Granos</p>
                </div>
            </div>
        </a>
    </div>

    <div class="row">
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
        <div class="col-custom">
            <a href="https://www.google.com" class="producto-div">
                <div class="producto-sub d-flex flex-column justify-content-end align-items-end" style="background-image: url({{asset('img/inicio/aceitunas.jpg')}})">
                    <div class="prod-oculto d-flex justify-content-center">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <h4>Cúrcuma en polvo</h4>
                <p>S/20.00</p>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button class="btn num-pagina pagina-activa">01</button>
        <button class="btn num-pagina">02</button>
        <button class="btn num-pagina">03</button>
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