@extends('layouts.app')

@section('title', 'Usuarios Sin Saldo')

@section('content')
    <h1 class="mb-4">Usuarios Sin Saldo</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Teléfono</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->usuario }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->saldo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection