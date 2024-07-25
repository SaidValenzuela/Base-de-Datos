@extends('layouts.app')

@section('title', 'Login Usuario Nivel 2')

@section('content')
    <h1 class="mb-4">Login Usuario Nivel 2</h1>
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