@extends('layouts.app')

@section('title', 'Usuario por Compañía')

@section('content')
    <h1 class="mb-4">Contar Usuario por Compañía</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Compañia</th>
                <th>Número de Usuarios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->compañia }}</td>
                <td>{{ $usuario->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection