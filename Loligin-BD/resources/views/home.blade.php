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
            
            <tr>
                <td>{{ $personaje->nombre }}</td>
                <td>{{ $personaje->fuerza }}</td>
                <td>{{ $personaje->destreza }}</td>
                <td>{{ $personaje->vida }}</td>
                <td>{{ $personaje->ColorAsociado }}</td>  
            </tr>      
          
        </tbody>             
    </table>
</div>
@endsection
