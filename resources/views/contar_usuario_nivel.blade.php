@extends('layouts.app')

@section('title', 'Usuario por Nivel')

@section('content')
    <h1 class="mb-4">Contar Usuario por Nivel</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nivel</th>
                <th>Número de Usuarios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nivel }}</td>
                <td>{{ $usuario->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection