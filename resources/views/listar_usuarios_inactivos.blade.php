@extends('layouts.app')

@section('title', 'Usuario Inactivos')

@section('content')
    <h1 class="mb-4">Usuarios Inactivos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Activo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->usuario }}</td>
                <td>{{ $usuario->activo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection