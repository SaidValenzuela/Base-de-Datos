@extends('layouts.app')

@section('title', 'Usuario no Motorola')

@section('content')
    <h1 class="mb-4">Usuario no Motorola ni Nokia</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->marca }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection