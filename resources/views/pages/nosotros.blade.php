@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/nosotros.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general section-nosotros">
    <div class="section-1 d-flex align-items-center">
        <div class="sec-1-div-1 d-flex flex-column justify-content-center">
            <h2>Cotrina Exports</h2>
            <p>Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa. Simulación de texto sobre la historia de la empresa.
            </p>
        </div>
        <div class="sec-1-div-2 d-flex">
            <img style="width: 100%" class="img-fluid" src="{{asset('img/nosotros/01.jpg')}}" alt="">
        </div>
    </div>
    <div class="section-2 d-flex align-items-center">
        <div class="sec-2-div-1 d-flex">
            <img style="width: 100%" class="img-fluid" src="{{asset('img/nosotros/02.jpg')}}" alt="">
        </div>
        <div class="sec-2-div-2 d-flex flex-column justify-content-center">
            <h2>Misión</h2>
            <p>Ofrecer a nuestros clientes productos naturales, inocuos y diferenciados de la más alta calidad de exportación asimismo brindar asesorías de buenas prácticas agrícolas a nuestros proveedores por medio de profesionales altamente calificados lo que nos permite lograr un crecimiento sostenible, con la participación responsable de la empresa, las comunidades, agricultores, preservando el medioambiente creando bienestar y crecimiento socioeconómico con responsabilidad social.</p>
            <h2>Visión</h2>
            <p>Ser una empresa exportadora Líder y competitiva de la zona sur del Perú, con productos naturales con calidad de exportación, mediante la implementación de sistemas de calidad y con una innovación constante de productos que satisfagan al cliente.</p>
        </div>
    </div>
</div>
@endsection
