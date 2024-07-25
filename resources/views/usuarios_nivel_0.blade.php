@extends('layouts.app')

@section('title', 'Usuario Nivel 0')

@section('content')
    <h1 class="mb-4">Usuarios con Nivel 0</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Nivel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->usuario }}</td>
                <td>{{ $usuario->nivel }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection