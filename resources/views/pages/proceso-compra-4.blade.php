@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/proceso-compra-4.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-proceso-compra-4 d-flex justify-content-center">
    <div class="contenido">
        <h1>¡COMPRA REALIZADA!</h1>
        <div class="linea-verde"></div>
        <p>Gracias por comprar en Cotrina Exports, tu compra se ha realizado con éxito y en breve te enviaremos la boleta de tu pedido <span>#324918</span> a tu correo <span>miguel.ramirez@gmail.com</span>.</p>
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
                <button type="button" class="resumen-btnCompras">IR A MIS COMPRAS</button>
            </div>
        </div>
    </div>
</div>
@endsection