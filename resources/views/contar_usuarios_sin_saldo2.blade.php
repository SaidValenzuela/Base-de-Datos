@extends('layouts.app')

@section('title', 'Usuarios sin Saldo o Inactivos')

@section('content')
    <h1 class="mb-4">Usuarios sin Saldo o Inactivos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Saldo</th>
                <th>Activo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->usuario }}</td>
                <td>{{ $usuario->saldo }}</td>
                <td>{{ $usuario->activo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection