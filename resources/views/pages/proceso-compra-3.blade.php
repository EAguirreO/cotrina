@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/proceso-compra-3.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-proceso-compra-3 d-flex align-items-start">
    <div class="contenido d-flex flex-column">
        <h2 class="contenido-titulo">Método de Pago</h2>
        <div class="linea-verde"></div>
        <div class="div-metodo d-flex justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="metodoPago" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Tarjeta de Crédito o Débito (Mastercard, Visa y Diners Club)
                </label>
            </div>
            <div class="d-flex align-items-center gap-2">
                <img src="{{asset('img/proceso-compra/mastercard.png')}}" alt="">
                <img src="{{asset('img/proceso-compra/visa.png')}}" alt="">
                <img src="{{asset('img/proceso-compra/diners.png')}}" alt="">
            </div>
        </div>
        <div class="div-metodo d-flex justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="metodoPago" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Pago por Banca móvil o banca por internet
                </label>
            </div>
            <div class="d-flex align-items-center gap-2">
                <img src="{{asset('img/proceso-compra/interbank.png')}}" alt="">
                <img src="{{asset('img/proceso-compra/bbva.png')}}" alt="">
                <img src="{{asset('img/proceso-compra/bcp.png')}}" alt="">
            </div>
        </div>
        <h3 class="subtitulo">Seleccionar comprobante de pago</h3>
        <div class="d-flex gap-5">
            <div class="div-comprobante">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="comprobante" id="flexRadioDefault3" checked>
                    <label class="form-check-label" for="flexRadioDefault3">
                        Boleta
                    </label>
                </div>
            </div>
            <div class="div-comprobante">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="comprobante" id="flexRadioDefault4">
                    <label class="form-check-label" for="flexRadioDefault4">
                        Factura
                    </label>
                </div>
            </div>
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
            <button type="button" class="resumen-btnComprar">COMPRAR</button>
            <a class="volver-cesta" href="">Volver a la Cesta</a>
        </div>
    </div>
</div>
@endsection