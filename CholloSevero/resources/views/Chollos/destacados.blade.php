<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a01e1a52c3.js" crossorigin="anonymous"></script>
    <title>CholloSevero Destacados</title>

    @vite('resources/sass/EstilosGlobales.scss')
    @vite('resources/sass/Destacados.scss')
</head>
<body>
    {{-- Incluimos el header --}}
    @include('partials.header')

    <main>
        <h1 class="mainEncabezado">Chollos destacados:</h1>
        <div class="chollos">
            {{-- Iteramos sobre los chollos para generar las tarjetas --}}
            @foreach ($chollos as $chollo)
                    <div class="card" style="width: 26rem;">
                        {{-- "asset()" genera una url correcta hacia dicho elemento --}}
                        <img class="card-img-top" src="{{ asset('img/' . $chollo->id . '.png') }}" alt="Imagen del chollo">
                        <div class="card-body">
                            <div class="bloquecontador">
                                <div class="contador">
                                    <i class="fa-solid fa-arrow-up"></i>
                                    <div>{{$chollo->puntuacion}}</div>
                                    <i class="fa-solid fa-arrow-down"></i>
                                </div>
                            </div>
                            <h5 class="card-title">{{ $chollo->titulo }}</h5>
                            <p class="card-text">{{ $chollo->descripcion }}</p>
                            <p><strong class="precioAcual">Precio: </strong><span class="precioActual">{{ $chollo->precio }} € /</span> <span class="descuento">{{$chollo->precio_descuento}}</span> €</p>
                            <a href="{{ route('pagChollo', ['id' => $chollo->id]) }}" class="btn"> Ver Chollo <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            {{-- Si estamos autorizados mostramos: --}}
                            @auth
                                <a href="#" class="btn editar">Editar <i class="fa-solid fa-pen-nib"></i></a>
                                <form action="{{ route('indexEliminarChollo', ['id' => $chollo->id]) }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn eliminar" onclick="return confirm('¿Seguro que quieres eliminar este chollo?');"> 
                                        Eliminar <i class="fa-solid fa-eraser"></i>
                                    </button>    
                                </form> 
                            @endauth
                        </div>
                    </div>
            @endforeach
        </div>
    </main>

    {{-- Incluimos el footer --}}
    @include('partials.footer')
</body>
</html>