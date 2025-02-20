<header>
    <nav>
        <h1>Chollo ░▒▓ Severo</h1>

        <ul>
            <li> <a href="{{ route('index') }}" class="inicio">Inicio</a> </li>
            <li> | </li>
            <li> <a href="{{ route('nuevos') }}" class="nuevos">Nuevos</a> </li>
            <li> | </li>
            <li> <a href="{{ route('destacados') }}" class="destacados">Destacados</a> </li>
        </ul>
        <div class="espacio">

        </div>

        {{-- Si estamos autorizados y somos admins se nos muestra el siguiente enlace --}}
        @auth
            @if (Auth::user()->rol === "admin")
                <a href="{{ route('usuarios') }}" class="usuarios">Usuarios</a>
            @endif
        @endauth

        <div class="registro">
            
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                {{-- Si Estamos autorizados, se nos mostrará el siguiente enlace --}}
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                {{-- Si no se nso mostralán los enlaces para registrarse o crear cuenta --}}
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
