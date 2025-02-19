<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CholloSevero</title>

    @vite('resources/sass/EstilosGlobales.scss')
</head>
<body>
    {{-- Incluimos el header --}}
    @include('partials.header')

    <main>
        <h1 class="mainEncabezado">Échale un vistazo a nuestros chollos:</h1>
        {{-- Seccion carrusel1 --}}
        <div class="chollos">
            @foreach ($chollos as $chollo)
                <div class="card" style="width: 26rem;">
                    {{-- "asset()" genera una url correcta hacia dicho elemento --}}
                    <img class="card-img-top" src="{{ asset('img/' . $chollo->id . '.png') }}" alt="Imagen del chollo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $chollo->titulo }}</h5>
                        <p class="card-text">{{ $chollo->descripcion }}</p>
                        <p><strong class="precioAcual">Precio: </strong><span class="precioActual">{{ $chollo->precio }} € /</span> <span class="descuento">{{$chollo->precio_descuento}}</span> €</p>
                        <a href="#" class="btn btn-primary">Ver oferta</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    {{-- Incluimos el footer --}}
    @include('partials.footer')
</body>
</html>