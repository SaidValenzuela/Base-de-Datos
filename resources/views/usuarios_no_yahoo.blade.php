@extends('layouts.app')

@section('title', 'Usuario no Yahoo')

@section('content')
    <h1 class="mb-4">Usuarios que no Usan Yahoo</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection