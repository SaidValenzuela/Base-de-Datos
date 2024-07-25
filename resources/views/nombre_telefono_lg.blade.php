@extends('layouts.app')

@section('title', 'Nombre y Teléfono')

@section('content')
    <h1 class="mb-4">Nombre y Télefono</h1>
    <table class="table table-bordered">
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