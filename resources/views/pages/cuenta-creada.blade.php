@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/cuenta-creada.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-cuenta-creada">
    <div class="cuenta-creada-div">
        <img class="img-fluid mx-auto d-block mb-4" src="{{asset('img/cuenta-creada/verificar.png')}}" alt="">
        <h1>¡Bienvenido a Cotrina!</h1>
        <p>Tu cuenta ha sido validada correctamente, ya puedes <a href="">iniciar sesión</a></p>
    </div>
</div>
@endsection