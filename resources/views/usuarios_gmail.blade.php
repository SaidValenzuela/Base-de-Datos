@extends('layouts.app')

@section('title', 'Usuario con Gmail')

@section('content')
    <h1 class="mb-4">Usuarios con Gmail</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
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