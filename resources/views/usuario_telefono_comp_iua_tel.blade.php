@extends('layouts.app')

@section('title', 'Usuario y Teléfono')

@section('content')
    <h1 class="mb-4">Usuarios y Teléfono con Compañía Iusacell o Telcel</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Teléfono</th>
                <th>Compañia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->usuario }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->compañia }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection