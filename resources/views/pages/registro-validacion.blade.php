@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/registro-validacion.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-registro-validacion">
    <div class="registro-validacion-div">
        <h1>Valida tu correo electrónico</h1>
        <div>
            <p>¡Tu cuenta ha sido creada con éxito!</p>
            <p>Como último paso hemos enviado un código a tu correo electrónico para así validar tu cuenta.</p>
            <input id="iptCodigo" type="text" class="form-control" placeholder="Ingresa el código aquí...">
            <button class="btn btn-validar">VALIDAR</button>
        </div>
    </div>
</div>
@endsection