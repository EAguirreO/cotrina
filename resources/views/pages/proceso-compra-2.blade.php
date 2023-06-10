@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/proceso-compra-2.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-proceso-compra-2 d-flex align-items-start">
    <div class="contenido d-flex flex-column">
        <h2 class="contenido-titulo">Confirmación de datos</h2>
        <div class="linea-verde"></div>
        <div class="cuadro-verde d-flex flex-column">
            <h3 class="titulo-cuadro">Dirección de envío</h3>
            <div class="d-flex justify-content-between align-items-end">
                <div>
                    <p class="texto-cuadro">Calle Caminos del Inca 1920</p>
                    <p class="texto-cuadro">San Miguel - Lima - Lima</p>
                    <p class="texto-referencia">Referencia: Edificio color verde.</p>
                </div>
                <button class="btn-modificar">MODIFICAR</button>
            </div>
        </div>
        <div class="cuadro-verde">
            <h3 class="titulo-cuadro">Dirección de envío</h3>
            <div class="row">
                <div class="col-5">
                    <p class="texto-cuadro">Miguel Angel Ramirez Gutierrez</p>
                    <p class="texto-cuadro">+51 987 654 321</p>
                    <p class="texto-cuadro" style="word-wrap: break-word">miguel.ramirez@gmail.com</p>
                </div>
                <div class="col-5">
                    <p class="texto-cuadro">RUC: 10987654321</p>
                    <p class="texto-cuadro">Razón Social: D&G Importación SAC</p>
                </div>
            </div>
        </div>
        <div class="cuadro-azul">
            <p>*Tu pedido llegará entre 10 a 15 días hábiles. Si necesitas ayuda puedes comunicarte con nosotros directamente al +511 450 6380 o escríbenos al whatsapp +51 987 654 321.</p>
        </div>
    </div>
    <div class="div-resumen d-flex flex-column">
        <h2 class="resumen-titulo">Resumen de Pedido</h2>
        <div class="resumen-sub d-flex justify-content-between align-items-center">
            <p class="resumen-item">Sub-total:</p>
            <p class="resumen-texto">S/ 57.80</p>
        </div>
        <div class="resumen-sub d-flex justify-content-between align-items-center">
            <p class="resumen-item">Envío:</p>
            <p class="resumen-texto">S/ 15.90</p>
        </div>
        <div class="linea-azul"></div>
        <div class="resumen-sub-total d-flex justify-content-between align-items-center">
            <p class="resumen-texto-total">Total:</p>
            <p class="resumen-total">S/ 73.70</p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <button type="button" class="resumen-btnContinuar">CONTINUAR COMPRA</button>
            <a class="volver-cesta" href="">Volver a la Cesta</a>
        </div>
    </div>
</div>
@endsection