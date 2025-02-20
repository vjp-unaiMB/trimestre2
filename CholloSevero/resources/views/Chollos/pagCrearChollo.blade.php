<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a01e1a52c3.js" crossorigin="anonymous"></script>
    <title>CholloSevero Crear</title>

    @vite('resources/sass/EstilosGlobales.scss')
    @vite('resources/sass/pagForms.scss')
</head>
<body>
    {{-- Incluimos el header --}}
    @include('partials.header')

    <main>
        <div class="cajaForm"> 
            <h1>Crear Chollo:</h1>

            <form action="{{ route('crearChollo') }}" method="post" enctype="multipart/form-data">
                {{-- Controlamos al seguridad del form con el siguiente elemento @csrf --}}
                {{-- Luego en  @error manejamos el mensaje de error --}}
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                    @error('nombre')
                        <div class="alert alert-danger">El nombre no puede tener más de 255 caracteres.</div>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                    @error('nombre')
                        <div class="alert alert-danger">la descripción no puede tener más de 255 caracteres.</div>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="url">URL:</label>
                    <input type="text" class="form-control" name="url" id="url" required>
                    @error('nombre')
                        <div class="alert alert-danger">la URL no puede tener más de 255 caracteres.</div>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="puntuacion">Puntuacion:</label>
                    <input type="number" class="form-control" name="puntuacion" id="puntuacion" required>
                </div>
            
                <div class="form-group">
                    <label for="precio">Precio final:</label>
                    <input type="number" class="form-control" name="precio" id="precio" required>
                </div>
            
                <div class="form-group">
                    <label for="precioDescuento">Precio inicial:</label>
                    <input type="number" class="form-control" name="precioDescuento" id="precioDescuento" required>
                </div>
            
                <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*" required>
                    @error('nombre')
                        <div class="alert alert-danger">El nombre no puede tener más de 255 caracteres.</div>
                    @enderror
                </div>
            
                <button type="submit" class="btn btn-primary">Publicar</button>
            </form>
        </div>
    </main>

    {{-- Incluimos el footer --}}
    @include('partials.footer')
</body>
</html>