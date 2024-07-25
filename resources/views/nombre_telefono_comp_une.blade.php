@extends('layouts.app')

@section('title', 'Nombre, Teléfono y Compañía Unefon')

@section('content')
    <h1 class="mb-4">Nombre, Teléfono y Compañía Unefon</h1>
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