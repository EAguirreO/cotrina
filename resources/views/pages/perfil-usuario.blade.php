@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/perfil-usuario.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-perfil-usuario d-flex align-items-start">
        
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
        <h2 class="contenido-titulo">Información Personal</h2>
        <div class="linea-verde"></div>
        <div class="row g-5 mb-5">
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Nombre</label>
                    <input type="text" class="form-control input-custom" value="Miguel Angel">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Apellidos</label>
                    <input type="text" class="form-control input-custom" value="Ramirez Gutierrez">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Tipo de Documento</label>
                    <div class="custom-div">
                        DNI 32165487
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Celular</label>
                    <div class="d-flex contenedor-inputs-celular">
                        <input style="width: 60px; margin-right: 20px;" type="text" class="form-control input-custom" value="+51">
                        <input type="text" class="form-control input-custom" value="987 654 321">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Correo Electrónico</label>
                    <input type="text" class="form-control input-custom" value="miguel.ramirez@gmail.com">
                </div>
            </div>
        </div>
        <h2 class="contenido-titulo">Cambiar contraseña</h2>
        <div class="linea-verde"></div>
        <div class="row g-5 mb-5">
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Contraseña actual</label>
                    <input type="password" class="form-control input-custom" placeholder="Ingresa tu contraseña actual">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Nueva contraseña</label>
                    <input type="password" class="form-control input-custom" placeholder="Ingresa tu nueva contraseña">
                </div>
            </div>
        </div>
        <h2 class="contenido-titulo">Empresa</h2>
        <div class="linea-verde"></div>
        <div class="row g-5 mb-5">
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Razón Social</label>
                    <input type="text" class="form-control input-custom" value="D&G Importación SAC">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">RUC</label>
                    <input type="text" class="form-control input-custom" value="10987654321">
                </div>
            </div>
        </div>
        <h2 class="contenido-titulo">Direcciones</h2>
        <div class="linea-verde"></div>
        <div class="rectangulo-verde-tipo-1">Dirección 01</div>
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
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Dirección</label>
                    <input type="text" class="form-control input-custom" value="Calle Caminos del Inca 1920">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label class="form-label label-custom">Referencia</label>
                    <input type="text" class="form-control input-custom" value="Edificio color verde.">
                    <p class="texto-adicional">*Ejemplo: Toque el timbre, al lado de la tienda, etc.</p>
                </div>
            </div>
        </div>
        <div class="rectangulo-verde-tipo-2 d-flex align-items-stretch">
            <button class="btn btn-agregar-direccion">+</button>
            <p>Agregar dirección 02</p>
        </div>
        <div class="cont-guardar-cambios d-flex justify-content-end">
            <button class="btn btn-guardar-cambios">GUARDAR CAMBIOS</button>
        </div>
    </div>

</div>
@endsection