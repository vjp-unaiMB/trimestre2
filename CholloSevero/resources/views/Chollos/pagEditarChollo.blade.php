<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a01e1a52c3.js" crossorigin="anonymous"></script>
    <title>CholloSevero Editar</title>

    @vite('resources/sass/EstilosGlobales.scss')
    @vite('resources/sass/pagForms.scss')
</head>
<body>
    {{-- Incluimos el header --}}
    @include('partials.header')

    <main>
        <div class="cajaForm"> 
            <h1>Editar Chollo: {{$chollo->titulo}}</h1>

            <form action="{{ route('aplicarEdicion', ['id' => $chollo->id]) }}" method="post">
                {{-- Controlamos al seguridad del form con el siguiente elemento @csrf --}}
                {{-- Luego en  @error manejamos el mensaje de error --}}
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$chollo->titulo}}" required>
                    @error('nombre')
                        <div class="alert alert-danger">El nombre no puede tener más de 255 caracteres.</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$chollo->descripcion}}" required>
                    @error('descripcion')
                        <div class="alert alert-danger">la descripción no puede tener más de 255 caracteres.</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url">URL:</label>
                    <input type="text" class="form-control" name="url" id="url" value="{{$chollo->url}}" required>
                    @error('url')
                        <div class="alert alert-danger">La URL no puede tener más de 255 caracteres.</div>
                    @enderror
                </div>
                
                <div class="form-group input-group select">
                    <label for="categoria" class="input-group-text">Categoria:</label>
                    <select name="categoria"class="custom-select" id="categoria">
                            <option value="Nuevos">Nuevos</option>
                            <option value="destacados">Destacados</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="puntuacion">Puntuacion:</label>
                    <input type="number" class="form-control" name="puntuacion" id="puntuacion" value="{{$chollo->puntuacion}}" required>
                </div>

                <div class="form-group">
                    <label for="precio">Precio final:</label>
                    <input type="number" class="form-control" name="precio" id="precio" value="{{$chollo->precio}}" required>
                </div>

                <div class="form-group">
                    <label for="precioDescuento">Precio inicial:</label>
                    <input type="number" class="form-control" name="precioDescuento" id="precioDescuento" value="{{$chollo->precio_descuento}}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn eliminar"> 
                        Guardar <i class="fa-solid fa-save"></i>
                    </button>
                </div>
            </form> 
        </div>
    </main>

    {{-- Incluimos el footer --}}
    @include('partials.footer')
</body>
</html>