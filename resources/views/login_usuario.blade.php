@extends('layouts.app')

@section('title', 'Login Usuarios')

@section('content')
    <h1 class="mb-4">Login Usuarios Nivel 1, 2 y 3</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nivel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->nivel }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection