@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/registro.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-registro">
    <div>
        <h1>Regístrate</h1>
        <div class="div-linea"></div>
        <div>
            <p>Ingresa tus datos personales...</p>
            <div class="row">
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="iptNombre" placeholder="Ingresa tu nombre">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptApellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="iptApellidos" placeholder="Ingresa tus apellidos">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label class="form-label">Tipo y N° de Documento</label>
                        <div class="d-flex">
                            <select class="form-select me-3" style="width: 130px">
                                <option selected>DNI</option>
                            </select>
                            <input type="text" class="form-control" id="iptNumDocumento" placeholder="Ingresa tu DNI">        
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptCargo" class="form-label">Cargo</label>
                        <input type="text" class="form-control" id="iptCargo" placeholder="Ingresa el cargo que ejerces en tu empresa">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptRazonSocial" class="form-label">Razon Social</label>
                        <input type="text" class="form-control" id="iptRazonSocial" placeholder="Ingresa la razón social de tu empresa">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptRuc" class="form-label">RUC</label>
                        <input type="text" class="form-control" id="iptRuc" placeholder="Ingresa el RUC de tu empresa">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptRuc" class="form-label">Celular</label>
                        <div class="d-flex">
                            <input type="text" class="form-control me-3" id="iptCodigoCelular" placeholder="+51" style="width: 60px">
                            <input type="text" class="form-control" id="iptNumCelular" placeholder="Ingresa tu número de celular">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptCorreo" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="iptCorreo" placeholder="Ingresa tu correo electrónico">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="iptPassword" placeholder="Ingresa una contraseña">
                        <p class="msg-contrasena">*Tu contraseña debe tener mínimo 6 caracteres, sin espacios y caracteres especiales.</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-5">
                        <label for="iptConfirmPassword" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="iptConfirmPassword" placeholder="Ingresa nuevamente la contraseña">
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Acepto los <a href="">términos y condiciones</a> de contrinaexports.com.
                    </label>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center cont-registrar">
            <button class="btn btn-registrar">REGISTRARME</button>
            <p>¿Ya tienes cuenta? <a href="">Inicia Sesión</a></p>
        </div>
    </div>
</div>
@endsection