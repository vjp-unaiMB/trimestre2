<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a01e1a52c3.js" crossorigin="anonymous"></script>
    <title>CholloSevero Nuevos</title>

    @vite('resources/sass/EstilosGlobales.scss')
    @vite('resources/sass/pagUsers.scss')
</head>
<body>
    {{-- Incluimos el header --}}
    @include('partials.header')

    <main>
       
        <div class="cajaUsuarios"> 
            <h1>Listado de Usuarios</h1>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Fecha de creación</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- Generamos la tabla con los usuarios que se nos devuelven --}}
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->rol}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    @endforeach              
                </tbody>
              </table>
        </div>
    </main>

    {{-- Incluimos el footer --}}
    @include('partials.footer')
</body>
</html>