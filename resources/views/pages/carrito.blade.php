@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/carrito.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general section-carrito d-flex align-items-start">
    <div class="cesta">
        <div class="cesta-header d-flex justify-content-between align-items-center">
            <h1 class="cesta-header-titulo">Cesta de Compras</h1>
            <p class="cesta-header-texto">2 Productos</p>
        </div>
        <div class="linea-verde"></div>
        <div class="producto d-flex">
            <img class="img-producto img-fluid" src="{{asset('img/carrito/01.jpg')}}" alt="">
            <div class="contenedor-producto d-flex flex-column justify-content-between">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="nombre-producto">Cúrcuma en polvo</p>
                        <p class="codigo-producto">Código: CU04587</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn-accion"><i class="bi bi-dash-lg"></i></button>
                        <span class="cantidad-producto">01</span>
                        <button class="btn-accion"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="precio-producto">S/20.00 <span>(01 ud.)</span></p>
                    <button class="btn-eliminar">Eliminar Producto</button>
                </div>
            </div>
        </div>
        <div class="producto d-flex">
            <img class="img-producto img-fluid" src="{{asset('img/carrito/02.jpg')}}" alt="">
            <div class="contenedor-producto d-flex flex-column justify-content-between">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="nombre-producto">Jengibre en polvo</p>
                        <p class="codigo-producto">Código: JE05619</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn-accion"><i class="bi bi-dash-lg"></i></button>
                        <span class="cantidad-producto">02</span>
                        <button class="btn-accion"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="precio-producto">S/37.80 <span>(02 uds.)</span></p>
                    <button class="btn-eliminar">Eliminar Producto</button>
                </div>
            </div>
        </div>
        <div class="producto cancelado d-flex">
            <img class="img-producto img-fluid" src="{{asset('img/carrito/03.jpg')}}" alt="">
            <div class="contenedor-producto d-flex flex-column justify-content-between">
                <div class="subcontenedor-producto d-flex justify-content-between">
                    <div>
                        <p class="nombre-producto">Palta en cubos congelados</p>
                        <p class="codigo-producto">Código: PC03295</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn-accion"><i class="bi bi-dash-lg"></i></button>
                        <span class="cantidad-producto">01</span>
                        <button class="btn-accion"><i class="bi bi-plus-lg"></i></button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="precio-producto">S/37.80 <span>(01 ud.)</span></p>
                    <button class="btn-recuperar">Recuperar Producto</button>
                </div>
            </div>
        </div>
    </div>
    <div class="cuadro-resumen d-flex flex-column align-items-center">
        <h3 class="cuadro-resumen-titulo">Resumen de Pedido</h3>
        <div class="cuadro-resumen-div d-flex justify-content-between">
            <p class="cuadro-resumen-subtotal">Sub-total:</p>
            <p class="cuadro-resumen-valor">S/ 57.80</p>
        </div>
        <p class="cuadro-resumen-texto">*El precio del envío se calcula al momento de comprar.</p>
        <button class="cuadro-resumen-btn">CONTINUAR COMPRA</button>
        <a class="cuadro-resumen-volver" href="">Volver al Catálogo</a>
    </div>
</div>
@endsection