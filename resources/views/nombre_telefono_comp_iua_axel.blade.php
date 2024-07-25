@extends('layouts.app')

@section('title', 'Nombre, Telefono y Compañia')

@section('content')
    <h1 class="mb-4">Nombre, Telefono y Compañia Iusacell o Axel</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Compañia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->compañia }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection