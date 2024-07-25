@extends('layouts.app')

@section('title', 'Nombre y Teléfono no Telcel')

@section('content')
    <h1 class="mb-4">Nombre, Télefono y Compañia no Telcel</h1>
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