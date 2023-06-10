@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/proceso-compra-1.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-proceso-compra-1 d-flex align-items-start">
    <div class="contenido d-flex flex-column">
        <h2 class="contenido-titulo">Información de Envío</h2>
        <div class="linea-verde"></div>
        <div class="row g-5 mb-5">
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Departamento</label>
                    <select class="form-select select-custom" aria-label="departamento">
                        <option selected>Lima</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Provincia</label>
                    <select class="form-select select-custom" aria-label="departamento">
                        <option selected>Lima</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Distrito</label>
                    <select class="form-select select-custom" aria-label="departamento">
                        <option selected>San Miguel</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label label-custom">Dirección</label>
                    <input type="text" class="form-control input-custom" placeholder="Ingresa tu dirección">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label class="form-label label-custom">Referencia</label>
                    <input type="text" class="form-control input-custom" placeholder="Ingresa la referencia de tu domicilio">
                    <p class="texto-adicional">*Ejemplo: Toque el timbre, al lado de la tienda, etc.</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn-crearDireccion" disabled>CREAR DIRECCIÓN</button>
        </div>
    </div>
    <div class="div-resumen">
        <h2 class="resumen-titulo">Resumen de Pedido</h2>
        <div class="resumen-sub d-flex justify-content-between align-items-center">
            <p class="resumen-texto-subtotal">Sub-total:</p>
            <p class="resumen-subtotal">S/ 89.80</p>
        </div>
        <p class="resumen-parrafo">*El precio del envío se calcula al momento de comprar.</p>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <button type="button" class="resumen-btnContinuar resumen-btnContinuar-disabled" disabled>CONTINUAR COMPRA</button>
            <a class="volver-cesta" href="">Volver a la Cesta</a>
        </div>
    </div>
</div>
@endsection