@extends('layouts.app')

@section('title', 'Usuario con Hotmail')

@section('content')
    <h1 class="mb-4">Usuarios con Hotmail</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->usuario }}</td>
                <td>{{ $usuario->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection