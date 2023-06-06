@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/pedidos-detalle.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-pedidos-detalle d-flex align-items-start">
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

    <div class="contenido">
        <div class="contenedor-header d-flex justify-content-between align-items-center">
            <h1 class="contenedor-header-titulo">Pedido #10987654321</h1>
            <div class="subcont-header d-flex">
                <div class="subcont-header-1 d-flex flex-column">
                    <p class="texto-item">Estado</p>
                    <p class="texto-info color-verde"><i class="bi bi-circle-fill circulo"></i>En camino</p>
                </div>
                <div class="subcont-header-2 d-flex flex-column">
                    <p class="texto-item">Llega el:</p>
                    <p class="texto-info color-gris">27 de Febrero, 2023</p>
                </div>
            </div>
        </div>
        <div class="linea-verde"></div>
        <div class="cuadro">
            <div class="cuadro-contenedor">
                <div class="cuadro-grupo">
                    <h2 class="cuadro-titulo">Detalles del Pedido</h2>
                    <div class="texto-item-flex d-flex">
                        <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                            <p>N° de Pedido</p>
                            <p>:</p>
                        </div>
                        {{-- <p class="cuadro-texto-item"><span>N° de Pedido</span>:</p> --}}
                        <p class="cuadro-texto-info color-gris">#10987654321</p>
                    </div>
                    <div class="texto-item-flex d-flex">
                        <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                            <p>Compra Realizada</p>
                            <p>:</p>
                        </div>
                        {{-- <p class="cuadro-texto-item"><span>Compra Realizada</span>:</p> --}}
                        <p class="cuadro-texto-info color-gris">12 de Febrero, 2023</p>
                    </div>
                    <div class="texto-item-flex d-flex">
                        <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                            <p>Llega (estimado)</p>
                            <p>:</p>
                        </div>
                        {{-- <p class="cuadro-texto-item"><span>Llegada (estimado)</span>:</p> --}}
                        <p class="cuadro-texto-info color-gris">27 de Febrero, 2023</p>
                    </div>
                    <div class="texto-item-flex d-flex">
                        <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                            <p>Dirección de Envío</p>
                            <p>:</p>
                        </div>
                        {{-- <p class="cuadro-texto-item"><span>Dirección de Envío</span>:</p> --}}
                        <p class="cuadro-texto-info color-gris">Calle Caminos del Inca 1920 - San Miguel, Lima - Lima</p>
                    </div>
                    <div class="texto-item-flex d-flex">
                        <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                            <p>Método de Pago</p>
                            <p>:</p>
                        </div>
                        {{-- <p class="cuadro-texto-item"><span>Método de Pago</span>:</p> --}}
                        <p class="cuadro-texto-info color-gris">VISA, terminada en 4321</p>
                    </div>
                </div>
                <h2 class="cuadro-titulo">Información del Comprador</h2>
                <div class="texto-item-flex d-flex">
                    <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                        <p>Nombre y Apellidos</p>
                        <p>:</p>
                    </div>
                    <p class="cuadro-texto-info color-gris">Miguel Angel Ramirez Gutierrez</p>
                </div>
                <div class="texto-item-flex d-flex">
                    <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                        <p>Correo Electrónico</p>
                        <p>:</p>
                    </div>
                    <p class="cuadro-texto-info color-gris">miguel.ramirez@gmail.com</p>
                </div>
                <div class="texto-item-flex d-flex">
                    <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                        <p>Celular</p>
                        <p>:</p>
                    </div>
                    <p class="cuadro-texto-info color-gris">+51 987 654 321</p>
                </div>
                <div class="texto-item-flex d-flex">
                    <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                        <p>Razon Social</p>
                        <p>:</p>
                    </div>
                    <p class="cuadro-texto-info color-gris">D&G Importación SAC</p>
                </div>
                <div class="texto-item-flex d-flex">
                    <div class="div-cuadro-texto-item d-flex justify-content-between nowrap">
                        <p>RUC</p>
                        <p>:</p>
                    </div>
                    <p class="cuadro-texto-info color-gris">10987654321</p>
                </div>
            </div>
        </div>
        <div class="cuadro">
            <div class="cuadro-contenedor">
                <h2 class="cuadro-titulo">Resumen del Pedido</h2>
                <div class="contenedor-tabla">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Precio Unitario</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="color-gris">Cúrcuma en polvo</td>
                                    <td class="color-gris">CU04587</td>
                                    <td class="color-gris">S/ 20.00</td>
                                    <td class="color-gris">01</td>
                                    <td class="color-gris">S/ 20.00</td>
                                </tr>
                                <tr>
                                    <td class="color-gris">Jengibre en polvo</td>
                                    <td class="color-gris">JE05619</td>
                                    <td class="color-gris">S/ 18.90</td>
                                    <td class="color-gris">02</td>
                                    <td class="color-gris">S/ 37.80</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="linea-verde-tabla"></div>
                    <div class="div-resumen-texto-item d-flex justify-content-end">
                        <p class="resumen-texto-1">Sub-total</p>
                        <p class="resumen-texto-2">:</p>
                        <p class="resumen-texto-3 color-gris">S/ 57.80</p>
                    </div>
                    <div class="div-resumen-texto-item d-flex justify-content-end">
                        <p class="resumen-texto-1">Envío</p>
                        <p class="resumen-texto-2">:</p>
                        <p class="resumen-texto-3 color-gris">S/ 15.90</p>
                    </div>
                    <div class="div-resumen-total d-flex justify-content-end">
                        <p class="resumen-total-1">Total</p>
                        <p class="resumen-total-2">:</p>
                        <p class="resumen-total-3">S/ 73.70</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-regresar">REGRESAR</button>
        </div>
    </div>
</div>
@endsection