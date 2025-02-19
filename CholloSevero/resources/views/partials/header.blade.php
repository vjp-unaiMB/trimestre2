<header>
    <nav>
        <h1>Chollo ░▒▓ Severo</h1>

        <ul>
            <li> <a href="{{ url('/') }}" class="inicio">Inicio</a> </li>
            <li> | </li>
            <li> <a href="{{ url('/nuevos') }}" class="nuevos">Nuevos</a> </li>
            <li> | </li>
            <li> <a href="" class="destacados">Destacados</a> </li>
        </ul>
        <div class="espacio">

        </div>

        <div class="registro">
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar Sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Regístrate</a>
                    @endif
                @endauth
            </div>
        @endif
        </div>
        
    </nav>
</header>
