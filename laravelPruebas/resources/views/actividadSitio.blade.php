<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos a laravel</h1>

    <span>Este es el sitio de la actividad 700.</span>
    <nav>
        <a href={{ route('Inicio') }}>Blog</a> | 
        <a href={{ route('Nosotros') }}>Fotos</a> |
        <a href={{ route('Proyecto') }}>Fotos</a>
    </nav>
</body>
</html>