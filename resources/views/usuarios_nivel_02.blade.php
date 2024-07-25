@extends('layouts.app')

@section('title', 'Usuario Nivel 0 o 2')

@section('content')
    <h1 class="mb-4">Usuarios con Nivel 0 o 2</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Login</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->usuario }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection