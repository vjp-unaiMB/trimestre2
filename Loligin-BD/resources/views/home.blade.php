@extends('layouts.app')

@section('content')
<div class="container">
    <table>
        <thead>
            <tr>
                <th>{{ ('Nombre') }}</th>
                <th>{{ ('Fuerza') }}</th>
                <th>{{ ('Destreza') }}</th>
                <th>{{ ('Vida') }}</th>
                <th>{{ ('ColorAsociado') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aux as $personaje)
                @if<tr>
                    <td>{{ $personaje->nombre }}</td>
                    <td>{{ $personaje->fuerza }}</td>
                    <td>{{ $personaje->destreza }}</td>
                    <td>{{ $personaje->vida }}</td>
                    <td>{{ $personaje->ColorAsociado }}</td>  
                </tr>      
            @endforeach
        </tbody>             
    </table>
</div>
@endsection
