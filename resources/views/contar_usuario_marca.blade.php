@extends('layouts.app')

@section('title', 'Usuario por Marca')

@section('content')
    <h1 class="mb-4">Contar Usuario por Marca</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Total de Usuarios</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->marca }}</td>
                <td>{{ $usuario->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection