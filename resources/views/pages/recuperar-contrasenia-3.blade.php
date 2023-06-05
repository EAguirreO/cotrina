<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotrina</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    {{-- Fuente Baloo Chettan --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/recuperar-contrasenia-3.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/hover.css')}}">
</head>

<body>
    
    <header class="header d-flex justify-content-center">
        <a class="" href="{{url('home')}}">
            <img class="img-fluid img-logo" src="{{asset('img/inicio/logo.png')}}" alt="">
        </a>
    </header>

    <div class="d-flex justify-content-center div-container">
        <div class="contenedor">
            <h1 class="titulo">Restablecer contraseña</h1>
            <p class="texto">A continuación ingresa tu nueva contraseña.</p>
            <div class="mb-4">
                <label for="iptContrasenia" class="form-label">Nueva contraseña</label>
                <input type="password" class="form-control" id="iptContrasenia" placeholder="Escribe tu nueva contraseña">
            </div>
            <div class="mb-4">
                <label for="iptConfirmarContrasenia" class="form-label">Confirmar contraseña</label>
                <input type="password" class="form-control" id="iptConfirmarContrasenia" placeholder="Re-escribe tu nueva contraseña">
            </div>
            <p class="informacion">*Tu contraseña debe tener mínimo 6 caracteres, sin espacios y caracteres especiales</p>
            <button class="btn btn-enviar">ENVIAR</button>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    {{-- JQuery --}}
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

    @livewireScripts
    @stack('scripts')
</body>