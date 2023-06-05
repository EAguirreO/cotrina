@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/mis-pedidos.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-mis-pedidos d-flex align-items-start">
        
    <div class="perfilMenu">
        <div class="perfilMenu-1 d-flex align-items-center">
            <img class="img-fluid img-perfilMenu-1" src="{{asset('img/perfil/usuario-grande.png')}}" alt="">
            <div>
                <p class="text-1-perfilMenu-1">Bienvenido</p>
                <h3 class="text-2-perfilMenu-1">Miguel Ramirez</h2>
            </div>
        </div>
        <div class="perfilMenu-2 d-flex flex-column">
            <div style="position: relative">
                <a class="perfilMenu-2-enlace {{ (request()->is('perfil-usuario')) ? 'perfilMenu-2-enlace-activo' : '' }}" href="{{url('perfil-usuario')}}"><img width="26" height="32" src="{{asset('img/perfil/info.png')}}" alt=""><span>Mi Información</span></a>
            </div>
            <div style="position: relative">
                <a class="perfilMenu-2-enlace {{ (request()->is('mis-pedidos')) ? 'perfilMenu-2-enlace-activo' : '' }}" href="{{url('mis-pedidos')}}"><img width="26" height="32" src="{{asset('img/perfil/pedidos.png')}}" alt=""><span>Mis Pedidos</span></a>
            </div>
            <div style="position: relative">
                <a class="perfilMenu-2-enlace" href=""><img width="26" height="32" src="{{asset('img/perfil/cerrar-sesion.png')}}" alt=""><span>Cerrar Sesión</span></a>
            </div>
        </div>
    </div>

    <div class="contenido d-flex flex-column">
        <h2 class="contenido-titulo">Mis Pedidos</h2>
        <div class="linea-verde"></div>
        <div class="div-pedido">
            <div class="contenedor-pedido d-flex justify-content-between align-items-center">
                <div class="subcontenedor-pedido d-flex">
                    <div class="subcont-1 d-flex flex-column">
                        <p class="texto-azul">Estado</p>
                        <p class="texto-info color-verde"><i class="bi bi-circle-fill circulo"></i>En camino</p>
                    </div>
                    <div class="subcont-2 d-flex flex-column">
                        <p class="texto-azul">N° de Pedido:</p>
                        <p class="texto-info color-gris">#10987654321</p>
                    </div>
                    <div class="subcont-3 d-flex flex-column">
                        <p class="texto-azul">Realizada el:</p>
                        <p class="texto-info color-gris">12 de Febrero, 2023</p>
                    </div>
                </div>
                <a class="enlace-ver-detalle" href="">VER DETALLES</a>
            </div>
        </div>

        <div class="div-pedido">
            <div class="contenedor-pedido d-flex justify-content-between align-items-center">
                <div class="subcontenedor-pedido d-flex">
                    <div class="subcont-1 d-flex flex-column">
                        <p class="texto-azul">Estado</p>
                        <p class="texto-info color-naranja"><i class="bi bi-circle-fill circulo"></i>Procesando</p>
                    </div>
                    <div class="subcont-2 d-flex flex-column">
                        <p class="texto-azul">N° de Pedido:</p>
                        <p class="texto-info color-gris">#10987654321</p>
                    </div>
                    <div class="subcont-3 d-flex flex-column">
                        <p class="texto-azul">Realizada el:</p>
                        <p class="texto-info color-gris">12 de Febrero, 2023</p>
                    </div>
                </div>
                <a class="enlace-ver-detalle" href="">VER DETALLES</a>
            </div>
        </div>

        <div class="div-pedido">
            <div class="contenedor-pedido d-flex justify-content-between align-items-center">
                <div class="subcontenedor-pedido d-flex">
                    <div class="subcont-1 d-flex flex-column">
                        <p class="texto-azul">Estado</p>
                        <p class="texto-info color-rojo"><i class="bi bi-circle-fill circulo"></i>Cancelado</p>
                    </div>
                    <div class="subcont-2 d-flex flex-column">
                        <p class="texto-azul">N° de Pedido:</p>
                        <p class="texto-info color-gris">#10987654321</p>
                    </div>
                    <div class="subcont-3 d-flex flex-column">
                        <p class="texto-azul">Realizada el:</p>
                        <p class="texto-info color-gris">12 de Febrero, 2023</p>
                    </div>
                </div>
                <a class="enlace-ver-detalle" href="">VER DETALLES</a>
            </div>
        </div>

        <div class="div-pedido">
            <div class="contenedor-pedido d-flex justify-content-between align-items-center">
                <div class="subcontenedor-pedido d-flex">
                    <div class="subcont-1 d-flex flex-column">
                        <p class="texto-azul">Estado</p>
                        <p class="texto-info color-azul"><i class="bi bi-circle-fill circulo"></i>Recibido</p>
                    </div>
                    <div class="subcont-2 d-flex flex-column">
                        <p class="texto-azul">N° de Pedido:</p>
                        <p class="texto-info color-gris">#10987654321</p>
                    </div>
                    <div class="subcont-3 d-flex flex-column">
                        <p class="texto-azul">Realizada el:</p>
                        <p class="texto-info color-gris">12 de Febrero, 2023</p>
                    </div>
                </div>
                <a class="enlace-ver-detalle" href="">VER DETALLES</a>
            </div>
        </div>
    </div>
</div>
@endsection