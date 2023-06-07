@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/libro-reclamaciones.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general content-libro-reclamaciones d-flex justify-content-center">
    <div class="contenedor">
        <h1>LIBRO DE RECLAMACIONES</h1>
        <div class="linea-verde"></div>
        <p>Gracias por su interés en comunicarse con nosotros. Le recordamos que este medio es exclusivo para Reclamos y Quejas. No serán atendidos otros requerimientos que no cumplan con esta naturaleza. Para consultas, sugerencias y solicitudes puede comunicarse mediante el enlace Soporte.</p>
        <h3>Para presentar tu reclamo o queja sigue los pasos a continuación:</h3>
        <p>1. Descarga el siguiente archivo <button class="btn btn-formato">FORMATO DE RECLAMACIÓN</button></p>
        <p>2. Completa los campos obligatorios que encontrarás en el formulario del <span class="color-verde">formato de reclamación</span>.</p>
        <p>3. Al finalizar el formulario guarda el archivo y envíalo al siguiente correo: <span class="color-verde">atención@cotrina.pe</span>. El correo debe cumplir con el siguiente formato, Asunto: "<span class="color-verde">Reclamo</span>" o "<span class="color-verde">Queja</span>" (según tu solicitud) - <span class="color-verde">Nombre y Apellidos</span>, Ej: <span class="color-verde">Reclamo - Luis Ramirez Gutierrez.</span></p>
        <p>4. De conformidad y en cumplimiento del <span class="color-verde">D.S. 011-2011 PCM</span>, el plazo de atención del reclamo es de 30 días calendario desde su presentación, el cual podrá extenderse excepcionalmente de acuerdo a la complejidad del requerimiento.</p>
        <p>5. Estaremos en coordinación con usted para confirmar la recepción de su solicitud.</p>
        <div class="cuadro-verde">
            <p>Cotrina Exports SAC, con RUC 12345678910, propietario de la marca Cotrina - Peruvian Export, con domicilio Calle 321, San Miguel, Lima 15084 - Perú.</p>
            <p>
                <span class="color-verde">TE RECORDAMOS QUE...</span><br>
                <span class="color-verde">RECLAMO:</span> Disconformidad relacionada a los productos o servicios.<br>
                <span class="color-verde">QUEJA:</span> Disconformidad respecto a la atención a los clientes por parte de un empleado, no relacionada a los productos o servicios.
            </p>
            <p>*La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.</p>
        </div>
    </div>
</div>
@endsection