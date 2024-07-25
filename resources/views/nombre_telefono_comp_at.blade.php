@extends('layouts.app')

@section('title', 'Nombre, Telefono y Compañia')

@section('content')
    <h1 class="mb-4">Nombre, Telefono y Compañia AT&T</h1>
    <table class="table table-bordered">
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