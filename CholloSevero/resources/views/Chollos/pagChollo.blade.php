<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a01e1a52c3.js" crossorigin="anonymous"></script>
    <title>CholloSevero Nuevos</title>

    @vite('resources/sass/EstilosGlobales.scss')
    @vite('resources/sass/pagChollo.scss')
</head>
<body>
    {{-- Incluimos el header --}}
    @include('partials.header')

    <main>
        {{-- Generamos la tarjeta junto a la info del chollo que se nos pasa --}}
        <div class="cajaChollo"> 
            <div class="parteIZCaja">
                <div class="comp">
                    <div class="compIZ">
                        <h1>Chollo:</h1>
                        <h1 class="mainEncabezado"> {{ $chollo->titulo }}</h1>
                    </div>
                    <div class="compDER">
                        @if ($chollo->disponible)
                            <span class="disponible">Disponible <i class="fa-solid fa-check"></i></span>
                        @else
                            <span class="no-disponible"><span>No disponible <i class="fa-solid fa-xmark"></i></span>
                        @endif
                    </div>
                </div>

                <div class="bloquecontador">
                    <div class="contador">
                        <i class="fa-solid fa-arrow-up"></i>
                        <div>{{$chollo->puntuacion}}</div>
                        <i class="fa-solid fa-arrow-down"></i>
                    </div>
                </div>
                <p class="card-text">{{ $chollo->descripcion }}</p>
                <span>URL:<a href="google.com">{{$chollo->url}}</a></span>
                <p><strong class="precioAcual">Precio: </strong><span class="precioActual">{{ $chollo->precio }} € /</span> <span class="descuento">{{$chollo->precio_descuento}}</span> €</p>
                <div class="botones">
                    <a href="#" class="btn">Chatear <i class="fa-solid fa-comments-dollar"></i></a>   
                </div>
            </div>
            <div class="parteDERCaja">
                <img class="" src="{{ asset('img/' . $chollo->id . '.png') }}" alt="Imagen del chollo">
            </div>
        </div>
    </main>

    {{-- Incluimos el footer --}}
    @include('partials.footer')
</body>
</html>