@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/novedades-detalle.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general section-novedades-detalle">
    <div class="section-1">
        <img class="img-detalle img-fluid" src="{{asset('img/novedades-detalle/novedad-grande.jpg')}}" alt="">
        <div class="sec-1-div">
            <a class="enlace-regresar" href="{{url('novedades')}}">Regresar a Novedades</a>
            <h1 class="titulo-novedad">Titular Novedad 01 Simulación de texto</h1>
            <h4 class="fecha-novedad">20 de Febrero, 2023</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aperiam, repellat delectus dolore maxime eius, incidunt porro doloribus ut minima, libero illum? Architecto in nesciunt expedita deleniti repellendus nulla culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, asperiores eveniet reprehenderit dicta doloremque eos hic veritatis dolores temporibus fugit ad perspiciatis? Ad quo cupiditate magni qui labore ullam earum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem praesentium iste, corrupti nisi, mollitia adipisci placeat facere nobis reprehenderit vitae ab perspiciatis similique illo recusandae a, dicta dignissimos repellat ut? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti eligendi impedit minima doloremque laborum ab a, alias laboriosam reprehenderit asperiores quam! Doloremque repellendus dignissimos itaque eaque adipisci aut, eveniet perspiciatis. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ea saepe, voluptate repellat modi ullam cum laudantium iste! Nisi blanditiis aliquid repellendus esse magni voluptate asperiores earum laboriosam tempora voluptatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt repellendus quidem officia error sed nostrum nulla praesentium totam eveniet? Assumenda ipsum voluptatum omnis! Provident, atque unde iusto voluptatum exercitationem fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt ullam quis pariatur magnam, quasi laudantium aspernatur esse illum, commodi ut sed libero architecto, alias mollitia doloremque nostrum quod sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quam inventore ea fugiat earum?</p>
            <p class="texto-especial">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident aperiam, nihil rem quae voluptatum sequi architecto facere nulla ex vel accusantium repudiandae doloremque velit ut perspiciatis dicta. Neque, modi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed fuga incidunt eligendi, voluptatibus alias, soluta esse consectetur quas nobis quisquam ex perspiciatis ipsum debitis recusandae? Odit architecto repellat autem ea? Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quod impedit iure consequuntur, non harum facere.</p>
            <img class="img-sim-video img-fluid mx-auto d-block" src="{{asset('img/novedades-detalle/simulacion-video.jpg')}}" alt="">
        </div>
    </div>
    <div class="section-2">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Más Novedades</h2>
            <a href="" class="btn btn-ver-novedades">IR A NOVEDADES</a>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-2-novedad">
                    <div class="seccion-2-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad01.jpg')}})">
                        <div class="sec-2-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-2-novedad">
                    <div class="seccion-2-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad02.jpg')}})">
                        <div class="sec-2-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://www.google.com" class="seccion-2-novedad">
                    <div class="seccion-2-novedad-cont d-flex align-items-end" style="background-image: url({{asset('img/inicio/novedad03.jpg')}})">
                        <div class="sec-2-oculto d-flex justify-content-center">
                            <p>LEER MÁS</p>
                        </div>
                    </div>
                    <p class="novedad-fecha">20 de Febrero, 2023</p>
                    <h4>Titular Novedad 01 simulación de texto</h4>
                    <p class="novedad-texto">Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad. Pequeño texto acerca de la novedad.</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection